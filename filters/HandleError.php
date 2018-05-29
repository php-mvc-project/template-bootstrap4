<?php
namespace RootNamespaceOfYourApp\Filters;

use PhpMvc\ActionFilter;
use PhpMvc\ViewResult;

class HandleError extends ActionFilter {

    /**
     * Called when an exception occurs.
     * 
     * @param ExceptionContext $exceptionContext The context of action exception.
     * 
     * @return void
     */
    public function exception($exceptionContext) {
        $exceptionContext->setResult(new ViewResult('error'));
    }

}