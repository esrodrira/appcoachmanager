<?php

namespace App\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\AppBundle\Entity\Author;
use App\AppBundle\Form\Type\AuthorType;

class AuthorController extends Controller
{
    public function getAuthorsAction()
    {

        $authors = $this->getDoctrine()->getRepository('AppAppBundle:Author')->findAll();
        return $this->render('AppAppBundle:Author:authors_list.html.twig', array('authors' => $authors));

    }

    public function creaAuthorAction(Request $request)
    {
        
        $author = new Author();

        $form = $this->createForm(new AuthorType,$author);

        $validator = $this->get('validator');
        $errors = $validator->validate($author);
        
        $form->handleRequest($request);

        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($author);
            $em->flush();

            return $this->redirect($this->generateUrl('author_list'));
        }

        return $this->render('AppAppBundle:Author:authorCrea.html.twig', array('form' => $form->createView()));
    }
}
