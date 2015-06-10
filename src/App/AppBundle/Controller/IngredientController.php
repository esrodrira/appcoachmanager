<?php

namespace App\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\AppBundle\Entity\Ingredient;
use App\AppBundle\Form\Type\IngredientType;

class IngredientController extends Controller
{
    public function getIngredientsAction()
    {

        $Ingredients = $this->getDoctrine()->getRepository('AppAppBundle:Ingredient')->findAll();
        return $this->render('AppAppBundle:Ingredient:ingredients_list.html.twig', array('ingredients' => $Ingredients));

    }

    public function creaIngredientAction(Request $request)
    {
        
        $Ingredient = new Ingredient();

        $form = $this->createForm(new IngredientType,$Ingredient);
        
        $form->handleRequest($request);

        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Ingredient);
            $em->flush();

            return $this->redirect($this->generateUrl('ingredients_list'));
        }

        return $this->render('AppAppBundle:Ingredient:ingredientCrea.html.twig', array('form' => $form->createView()));
    }
}
