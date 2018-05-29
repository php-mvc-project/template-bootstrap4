Create a fliters classes in this folder.

The filters must be part of the `Filters` namespace of the root namespace of your application.

The filters must be inherited from the `PhpMvc\ActionFilter` class.

For example:

```php
<?php
// make sure you add the Filters child name to the root namespace of your application
namespace RootNamespaceOfYourApp\Filters;

// import the base class of the action filter
use PhpMvc\ActionFilter;

class TestFilter extends ActionFilter {

  // action executed handler
  public function actionExecuted($actionExecutedContext) {
    $actionExecutedContext->setResult(new PhpMvc\ContentResult('executed'));
  }

}
```