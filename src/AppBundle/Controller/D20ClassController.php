<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\D20ClassType;
use AppBundle\Entity\D20Class;

class D20ClassController extends Controller
{

    public function indexAction()
    {
        $D20Class = $this->getDoctrine()
            ->getRepository('AppBundle:D20Class')
            ->findAll();
        return $this->render('default/D20Class/list.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'D20Classes' => $D20Class,
        ]);
    }

    public function createAction(Request $request)
    {
        $D20Class = new D20Class();
        $form = $this->createForm(D20ClassType::class, $D20Class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->persist($form);
        }

        return $this->render('default/D20Class/create.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
        ]);
    }

    public function updateAction($D20ClassId, Request $request)
    {
        $D20Class = $this->getDoctrine()
            ->getRepository('AppBundle:D20Class')
            ->find($D20ClassId);

        $form = $this->createForm(D20ClassType::class, $D20Class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->persist($form);
        }

        if (!$D20Class) {
            throw $this->createNotFoundException(
                'No product found for id '.$D20ClassId
            );
        }

        return $this->render('default/D20Class/create.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
        ]);
    }

    private function persist($form)
    {
        $D20Class = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($D20Class);
        $em->flush();
        return $this->render('default/D20Class/created.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'D20Class' => $D20Class,
        ]);
    }
}
