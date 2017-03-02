<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\D20RaceType;
use AppBundle\Entity\D20Race;

class D20RaceController extends Controller
{

    public function indexAction()
    {
        $D20Races = $this->getDoctrine()
            ->getRepository('AppBundle:D20Race')
            ->findAll();
        return $this->render('default/D20Race/list.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'races' => $D20Races,
        ]);
    }

    public function createAction(Request $request)
    {
        $D20Race = new D20Race();
        $form = $this->createForm(D20RaceType::class, $D20Race);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->persist($form);
        }

        return $this->render('default/D20Race/create.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
        ]);
    }

    public function updateAction($D20RaceId, Request $request)
    {
        $D20Race = $this->getDoctrine()
            ->getRepository('AppBundle:D20Race')
            ->find($D20RaceId);

        $form = $this->createForm(D20RaceType::class, $D20Race);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->persist($form);
        }

        if (!$D20Race) {
            throw $this->createNotFoundException(
                'No product found for id '.$D20RaceId
            );
        }

        return $this->render('default/D20Race/create.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
        ]);
    }

    private function persist($form)
    {
        $D20Race = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($D20Race);
        $em->flush();
        return $this->render('default/D20Race/created.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'race' => $D20Race,
        ]);
    }
}
