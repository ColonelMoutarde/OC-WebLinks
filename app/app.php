<?php
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Request;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

$app->register(new Silex\Provider\MonologServiceProvider(), ['monolog.logfile' => __DIR__ . '/../var/logs/npacms.log',
    'monolog.name'    => 'WebLinks',
    'monolog.level'   => $app['monolog.level'],
]);
$app->register(new Silex\Provider\ServiceControllerServiceProvider());

// Register service providers
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'    => __DIR__ . '/../views',
    'twig.options' => [
        'cache' => __DIR__ . '/../var/cache/twig',
        'debug' => $app['debug'],
    ]
));

// Register services
$app['dao.link'] =  function ($app) {
    $linkDAO = new WebLinks\DAO\LinkDAO($app['db']);
    return $linkDAO;
};


// Register error handler
$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    switch ($code) {
        case 403:
            $message = 'Error 403! Access denied.';
            break;
        case 404:
            $message = 'Error 404! The requested resource could not be found.';
            break;
        case 500:
            $message = 'Error 500! internal server error.';
            break;
        default:
            $message = 'Error ' . $code . '! Something went wrong.';
    }
    return $app['twig']->render('error.html.twig', [
                'message'         => $message,
                'title'           => $message,
                'metaDescription' => $message
    ]);
});