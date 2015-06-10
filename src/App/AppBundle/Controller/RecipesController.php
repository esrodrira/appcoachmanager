<?php

namespace App\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\AppBundle\Entity\Author;
use App\AppBundle\Entity\Ingredient;
use App\AppBundle\Entity\Recipes;

class RecipesController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppAppBundle:Recipes:index.html.twig', array(''));
    }

    public function getbyidAction($id)
    {
    	return new Response($id);
    }
   

    public function showAction($id)
    {

       $recipe = $this->getDoctrine()
        ->getRepository('AppAppBundle:Recipes')
        ->find($id);

        if (!$recipe) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $author = $recipe->getAuthor();

        $recipeData = array(
            'name' => $recipe->getName(),
            'difficulty' => $recipe->getDifficulty(),
            'description' => $recipe->getDescription()
            );
        return $this->render('AppAppBundle:Recipes:recipe_show.html.twig', array('recipe' => $recipeData, 'author' => $author));
    }
}
