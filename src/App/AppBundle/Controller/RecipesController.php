<?php

namespace App\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RecipesController extends Controller
{
    
    public function getbyidAction($id)
    {
    	return new Response($id);
    }
   
    public function getbynameAction($recipe_name)
    {
    	return new Response($recipe_name);
    }
}
