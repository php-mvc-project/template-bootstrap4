<?php
// make sure you add the Controllers child name to the root namespace of your application
namespace RootNamespaceOfYourApp\Controllers;

// import the base class of the controller
use PhpMvc\Controller;

// expand your class with the base controller class
class HomeController extends Controller {

    // create here action methods for the views of this controller
    // the action methods must have a modifier public

    public function index() {
        return $this->view();
    }

    public function about() {
        return $this->view();
    }

    public function contact() {
        return $this->view();
    }

    // methods of action can return not only views, but also any other data
    // use the addresses below to look at the result of the following action:
    // /home/example/content
    // /home/example/json
    // /home/example/file
    // /home/example/view
    public function example($id = null) {
        switch ($id) {
            case 'content':
                return $this->content('Text plain');

            case 'json':
                return $this->json(array('message' => 'This is the JSON data. You can use an array or pass an instance of the object.'));

            case 'file':
            return $this->file('~/content/images/php-mvc-logo.png');

            default:
                return $this->view('index');
        }
    }

}