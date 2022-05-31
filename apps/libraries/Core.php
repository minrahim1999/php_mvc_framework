<?php
/**
 * @author MinRahim <minrahim1999@gmail.com>
 * 
 * Please be aware this is for learn how MVC work.
 * Please dont use this for production because of the security reasons.
 * Please learn other framework that been maintenance by developer.
 * You can edit this file and add more security for your own comfort.
 */

/**
 * App Core Class
 * Create URL & Loads core controller
 * URL FORMAT - /controller/method/params
 * example: /Welcome/index/2
 */
class Core
{
    protected $currentController = 'Welcome';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        //print_r($this->getUrl());

        $url = $this->getUrl();

        // Look in BLL for first value
        if (file_exists('../apps/controllers/' . ucwords($url[0]) . '.controller.php')) {
            // If exists, set as controller
            $this->currentController = ucwords($url[0]);
            // Unset 0 Index
            unset($url[0]);
        }

        // Require the controller
        require_once '../apps/controllers/' . $this->currentController . '.controller.php';

        // Instantiate controller class
        $this->currentController = new $this->currentController;

        // Check for second part of url
        if (isset($url[1])) {
            // Check to see if method exists in controller
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                // Unset 1 index
                unset($url[1]);
            }
        }

        // Get params
        $this->params = $url ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
?>