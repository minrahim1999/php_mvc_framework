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
 * Controller updates both models and views.
 * It accepts input and performs the corresponding update.
 * @param string $model - the function request the model name
 * @param string $view - the function request the view name
 * @param array $data - the function request data inform of array
 * @return object
 */


//Load the model and the view
class Controller
{
    public function model($model)
    {
        //Require model file
        require_once '../apps/models/' . $model . '.model.php';
        //Instantiate model
        return new $model();
    }

    //Load the view (checks for the file)
    public function view($view, $data = [])
    {
        if (file_exists('../apps/views/' . $view . '.view.php')) {
            require_once '../apps/views/' . $view . '.view.php';
        }
        else {
            die("View does not exists.");
        }
    }
}
?>