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
 * App Welcome Class is extends from the Controller Class
 * Thus it can use the model and view methods database connection or redirect the page.
 * 
 * @param array $data - is an additional data that will send for redirect page.
 * Example: $this->view('page_name', $data);
 * Example: $this->view('Page_Folder/page_name', $data) use when the page inside the folder.
 * This statement will call the view method in Contoller and redirect page base on the page_name with the addtional data.
 * 
 * When the method recieve the data from response.
 * It need insert the data as parameter as array.
 * Example: public function User($params)
 * 
 * Then the $param will include in $data as pointer array.
 * Example: $data = ['id' => $params];
 */

class Welcome extends Controller
{
    public function __construct()
    {
    // $this->userModel = $this->model('Example'); //Method to call the models
    }

    public function index()
    {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }

}
?>