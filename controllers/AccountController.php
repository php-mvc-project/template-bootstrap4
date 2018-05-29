<?php
// this controller shows an example of using models

// make sure you add the Controllers child name to the root namespace of your application
namespace RootNamespaceOfYourApp\Controllers;

// import the base class of the controller
use PhpMvc\Controller;
// import class for model annotation
use PhpMvc\Model;

// expand your class with the base controller class
class AccountController extends Controller {

    // create here action methods for the views of this controller
    // the action methods must have a modifier public

    public function __construct() {
        // set model type for actions
        Model::use(array('index', 'login'), 'Login');

        // required fields
        Model::required('Login', 'username');
        Model::required('Login', 'password');

        // display name (for <label />) and text
        Model::display('Login', 'username', 'Username or Email', 'Enter any username.');
        Model::display('Login', 'password', 'Password', 'Enter 123.');

        // custom validation
        Model::validation('Login', 'password', function($value, &$errorMessage) {
            if ($value != '123') {
                $errorMessage = 'Expected value is 123';
                return false;
            }
            
            return true;
        });
    }

    // default action
    // url: /account or /account/index
    public function index() {
        if (isset($this->getSession()['user'])) {
            // is user, redirect to home
            return $this->redirectToAction('index', 'home');
        }

        return $this->view();
    }

    // login action, only for POST requests
    // because the $model is required and object
    // url: /account/login
    public function login(\RootNamespaceOfYourApp\Models\Login $model) {
        if (!$this->getModelState()->isValid()) {
            // model is not valid, return login form
            return $this->view('index', $model);
        }

        // model is valid, create session
        $session = $this->getSession();

        $session['user'] = $model->username;

        // redirect to home
        return $this->redirectToAction('index', 'home');
    }

    // logout action
    // url: /account/logout
    public function logout() {
        $this->getSession()->clear();
        return $this->redirectToAction('index', 'home');
    }

}