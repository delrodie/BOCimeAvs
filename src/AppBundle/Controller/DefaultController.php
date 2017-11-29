<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $actualites = $em->getRepository('AppBundle:Post')
                          ->findBy(
                                  array('statut' => 1),
                                  array('publieLe'  => 'DESC'),
                                  $limit = 3,
                                  $offset = 0
                        );
        //$locale = $request->getLocale(); dump($locale);die();

        return $this->render('frontoffice/index.html.twig', [
            'actualites' => $actualites,
        ]);
    }

    /**
     * @Route("/actualites/{slug}", name="actualite_page")
     */
    public function actualiteAction(Request $request, $slug)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('AppBundle:Post')->findOneBy(array('slug' => $slug));
        //dump($post);die();

        return $this->render('frontoffice/page.html.twig', [
            'post'  => $post,
        ]);
    }

    /**
     * @Route("/actualites/", name="avs_actualites")
     */
     public function listeactualiteAction(Request $request)
     {
         $em = $this->getDoctrine()->getManager();

         $actualites = $em->getRepository('AppBundle:Post')
                           ->findBy(
                                   array('statut' => 1),
                                   array('publieLe'  => 'DESC')
                         );
         //$locale = $request->getLocale(); dump($locale);die();

         return $this->render('frontoffice/actualites.html.twig', [
             'actualites' => $actualites,
         ]);
     }
}
