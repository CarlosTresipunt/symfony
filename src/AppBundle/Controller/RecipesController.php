<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class RecipesController extends Controller {

    public function indexAction($slug) {

        // Render PHP
//        return $this->render(
//                ':recipes:index.html.php',
//                array('recipe' => $id)
//        );
        // Render Twing
        return $this->render(
                'recipes/index.html.twig',
                array('recipe' => $slug)
        );
    }
}
