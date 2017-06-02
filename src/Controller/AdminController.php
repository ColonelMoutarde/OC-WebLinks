<?php

namespace Weblinks\Controller;
use Silex\Application;
 
class AdminController {
    
    public function indexAction(Application $app) {

        $links = $app['dao.user']->findAll();

        return $app['twig']->render('index.html.twig', ['links' => $links]);
    }
}
