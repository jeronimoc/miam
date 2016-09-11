<?php

namespace MiamApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * Class IngredientController
 * @package MiamApiBundle\Controller
 *
 * 
 */
class IngredientController extends FOSRestController
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * @param $id
     * @return null|object
     *
     * @Route("/ingredients/{$id}", name="get_ingredient")
     */
    public function getIngredientAction($id)
    {
        return $this->container->get('doctrine.orm.entity_manager')->getRepository('Ingredient')->find($id);
    }
}
