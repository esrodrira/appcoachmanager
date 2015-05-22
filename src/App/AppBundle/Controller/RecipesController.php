<?php

namespace App\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\AppBundle\Entity\Author;
use App\AppBundle\Entity\Ingredient;
use App\AppBundle\Entity\Recipes;

class RecipesController extends Controller
{
    
    public function getbyidAction($id)
    {
    	return new Response($id);
    }

    public function createAction()
    {
    	$author = new Author('Karlos', 'Arguiñano');
    	$ingredient = new Ingredient('chocolate');
    	$recipes = new Recipes($author,'CupCake','Medium','Dulce');
		$recipes->add($ingredient);
		
    	$em = $this->getDoctrine()->getEntityManager();
    	$em->persist($recipes);
    	

    	$em->flush();

        return $this->render('AppAppBundle:Recipes:recipe_show.html.twig', array('name_recipe' => $recipes->getName()));
    }
}
