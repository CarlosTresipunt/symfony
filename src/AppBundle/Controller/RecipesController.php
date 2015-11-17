<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class RecipesController extends Controller {

    /**
     * @Route("/recipes/{id}")
     */
    public function indexAction($id) {

        return $this->render(
                ':recipes:index.html.php',
                array('recipe' => $id)
        );
    }
}
