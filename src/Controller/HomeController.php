<?php

namespace Weblinks\Controller;

use Silex\Application;

 
class HomeController {

    public function indexAction(Application $app) {

        $links = $app['dao.link']->findAll();

        return $app['twig']->render('index.html.twig', ['links' => $links]);
    }

}
