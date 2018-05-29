<?php
// use aoutoload (recommended)
require_once getcwd() . '/vendor/autoload.php';
// or include the required files
// require_once getcwd() . '/vendor/php-mvc-project/php-mvc/src/index.php';

use PhpMvc\AppBuilder;

// IMPORTANT: specify the root namespace of your application and check code
AppBuilder::useNamespace('RootNamespaceOfYourApp');

// you can change the root path of your application (usually not required)
// AppBuilder::useBasePath(getcwd());

// enable session usage
AppBuilder::useSession();

/*
// you can add any headers that will be sent in response to client requests:
AppBuilder::useHeaders(array(
    'X-Powerd-By' => 'PHP',
    'X-Author' => '%username%')
);
*/

/*
// by default all validators are included, you can disable unnecessary validators:
AppBuilder::useValidation(array(
    // checks the request parameters for dangerous combinations of characters, such as: <, # &
    // if you disable this validator, then requests will not be checked
    'crossSiteScripting' => false,

    // checks the name of the action so that it does not begin with the characters __
    // this check prohibits calling public constructors and other magic methods
    // for example: /home/__construct
    'actionName' => false,

    // checks the POST request token if the token was placed on the form
    // this allows to filter requests from stupid bots
    'antiForgeryToken' => false)
);
*/

// you can enable caching
// for example, FileCacheProvider
// you can use any cache provider or create your own with the interface PhpMvc\CacheProvider
// AppBuilder::useCache(new PhpMvc\FileCacheProvider());

// custom handlers
AppBuilder::useAppContext(function(PhpMvc\AppContext $appContext) {
    /*
    // pre-init application handler
    $appContext->addPreInit(function(PhpMvc\ActionContext $actionContext) {
        // $httpContext = $actionContext->getHttpContext();
    });
    */

    /*
    // init application handler
    $appContext->addInit(function(PhpMvc\ActionContext $actionContext) {
    });
    */

    /*
    // init handler of the action context of the current request
    $appContext->addActionContextInit(function(PhpMvc\ActionContext $actionContext) {
    });
    */

    /*
    // pre-send output handler
    $appContext->addPreSend(function(PhpMvc\ActionContext $actionContext) {
        // $httpContext = $actionContext->getHttpContext();
    });
    */

    /*
    // partial output handler
    $appContext->addFlush(function(PhpMvc\ActionContext $actionContext, $eventArgs) {
    });
    */

    /*
    // end output handler
    $appContext->addEnd(function(PhpMvc\ActionContext $actionContext) {
    });
    */

    /*
    // application error handler
    $appContext->addErrorHandler(function(PhpMvc\ErrorHandlerEventArgs $errorHandlerEventArgs) use ($appContext) {
        // $errorHandlerEventArgs->setHandled(true);
        // $httpContext = $appContext->getConfig('httpContext');
    });
    */
});

// routes
AppBuilder::routes(function(PhpMvc\RouteProvider $routes) {
    // the higher the rule in the list (the earlier the rule was added), the higher the priority in the search for a match

    // in templates you can use any valid characters in the URL

    // use curly braces to denote the elements of the route
    // each element must contain a name
    // for example:
    // {controller}/{action}
    // {action}/{controller}
    // {elementName_1}/{elementName_2}/{elementName_N}
    // get-{username=anonymous}/send-message/{text}

    // after the element name, you can specify a default value in the template:
    // {controller=home}

    // if the path element is optional, then the question (?) symbol is followed by the name:
    // {id?}

    // catch-to-all:
    // content/{*file}

    // ignore paths
    $routes->ignore('favicon.ico');
    $routes->ignore('content/{*file}');

    // default route
    $routes->add('default', '{controller=home}/{action=index}/{id?}');
});

// custom settings
// AppBuilder::set('key_1', 'value_1');
// AppBuilder::set('key_2', 'value_2');
// AppBuilder::set('key_N', 'value_N');
// to get the settings use:
// $value = AppBuilder::get('key_1');

// for experts: the default route provider is PhpMvc\DefaultRouteProvider
// you can make your own provider based on the PhpMvc\RouteProvider interface
// or use a solution from third parties
// AppBuilder::useRouter(new PhpMvc\DefaultRouteProvider());

// for experts: you can make and use your own PhpMvc\HttpContext implementation based on the PhpMvc\HttpContextBase class
// AppBuilder::useHttpContext(new PhpMvc\HttpContext());

// build app
AppBuilder::build();