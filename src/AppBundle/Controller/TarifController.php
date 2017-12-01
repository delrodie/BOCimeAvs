<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tarif;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tarif controller.
 *
 * @Route("admin/tarif")
 */
class TarifController extends Controller
{
    /**
     * Lists all tarif entities.
     *
     * @Route("/", name="admin_tarif_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tarifs = $em->getRepository('AppBundle:Tarif')->findAll();

        return $this->render('tarif/index.html.twig', array(
            'tarifs' => $tarifs,
        ));
    }

    /**
     * Creates a new tarif entity.
     *
     * @Route("/new", name="admin_tarif_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tarif = new Tarif();
        $form = $this->createForm('AppBundle\Form\TarifType', $tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tarif);
            $em->flush();

            return $this->redirectToRoute('admin_tarif_index');
        }

        return $this->render('tarif/new.html.twig', array(
            'tarif' => $tarif,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tarif entity.
     *
     * @Route("/{slug}", name="admin_tarif_show")
     * @Method("GET")
     */
    public function showAction(Tarif $tarif)
    {
        $deleteForm = $this->createDeleteForm($tarif);

        return $this->render('tarif/show.html.twig', array(
            'tarif' => $tarif,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tarif entity.
     *
     * @Route("/{slug}/edit", name="admin_tarif_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tarif $tarif)
    {
        $deleteForm = $this->createDeleteForm($tarif);
        $editForm = $this->createForm('AppBundle\Form\TarifType', $tarif);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_tarif_index');
        }

        return $this->render('tarif/edit.html.twig', array(
            'tarif' => $tarif,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tarif entity.
     *
     * @Route("/{id}", name="admin_tarif_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tarif $tarif)
    {
        $form = $this->createDeleteForm($tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tarif);
            $em->flush();
        }

        return $this->redirectToRoute('admin_tarif_index');
    }

    /**
     * Creates a form to delete a tarif entity.
     *
     * @param Tarif $tarif The tarif entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tarif $tarif)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_tarif_delete', array('id' => $tarif->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
