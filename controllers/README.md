Create a controllers classes in this folder.

Remember that the controller name must end with the **Controller** suffix.

The controllers classes must be part of the `Controllers` namespace of the root namespace of your application.

The controllers classes must be inherited from the `PhpMvc\Controller` class.

For example:

```php
<?php
// make sure you add the Controllers child name to the root namespace of your application
namespace RootNamespaceOfYourApp\Controllers;

// import the base class of the controller
use PhpMvc\Controller;

// expand your class with the base controller class
class HomeController extends Controller {

    public function index() {
        // use the content function to return text content:
        return $this->content('Hello, world!');

        // create to the ./view/home/index.php
        // and use view function to return this view:
        // return $this->view();
    }

}
```