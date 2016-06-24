<?php

namespace Donation\DonationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Donation\DonationBundle\Entity\Dons;
use Donation\DonationBundle\Form\DonsType;

/**
 * Dons controller.
 *
 */
class DonsController extends Controller
{
    /**
     * Lists all Dons entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $dons = $em->getRepository('DonationBundle:Dons')->findAll();

        $utilisateur = $this->getUser();
    if(in_array('ROLE_ASSOCIATION', $utilisateur->getRoles())){
      return $this->render('dons/indexAssociation.html.twig', array(
        'dons' => $dons,
      ));
    }else if(in_array('ROLE_PARTICULIER', $utilisateur->getRoles())){
      return $this->render('dons/indexParticulier.html.twig', array(
        'dons' => $dons,
      ));
    }
    }

    /**
     * Creates a new Dons entity.
     *
     */
    public function newAction(Request $request)
    {
        $don = new Dons();
        $form = $this->createForm('Donation\DonationBundle\Form\DonsType', $don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($don);
            $em->flush();

            return $this->redirectToRoute('dons_show', array('id' => $don->getId()));
        }

        return $this->render('dons/new.html.twig', array(
            'don' => $don,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Dons entity.
     *
     */
    public function showAction(Dons $don)
    {
        $deleteForm = $this->createDeleteForm($don);

        return $this->render('dons/show.html.twig', array(
            'don' => $don,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Dons entity.
     *
     */
    public function editAction(Request $request, Dons $don)
    {
        $deleteForm = $this->createDeleteForm($don);
        $editForm = $this->createForm('Donation\DonationBundle\Form\DonsType', $don);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($don);
            $em->flush();

            return $this->redirectToRoute('dons_edit', array('id' => $don->getId()));
        }

        return $this->render('dons/edit.html.twig', array(
            'don' => $don,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Dons entity.
     *
     */
    public function deleteAction(Request $request, Dons $don)
    {
        $form = $this->createDeleteForm($don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($don);
            $em->flush();
        }

        return $this->redirectToRoute('dons_index');
    }

    /**
     * Creates a form to delete a Dons entity.
     *
     * @param Dons $don The Dons entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Dons $don)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dons_delete', array('id' => $don->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
