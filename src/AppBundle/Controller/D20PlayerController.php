<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\D20PlayerType;
use AppBundle\Entity\D20Player;

class D20PlayerController extends D20Controller
{
    public function indexAction(Request $request)
    {
        $D20players = $this->getDoctrine()
            ->getRepository('AppBundle:D20Player')
            ->findAll();

        $data = array(
            'format' => $request->getRequestFormat(),
            'template' => 'default/D20Player/list.html.twig',
            'D20Players' => $D20players,
        );
        return $this->response($data);
    }

    public function createAction(Request $request)
    {
        $D20player = new D20Player();
        $form = $this->createForm(D20PlayerType::class, $D20player);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->persist($form);
        }
            // replace this example code with whatever you need
        return $this->render('default/D20Player/create.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
        ]);
    }

    public function updateAction($D20PlayerId, Request $request)
    {
        $D20player = $this->getDoctrine()
            ->getRepository('AppBundle:D20Player')
            ->find($D20PlayerId);

        $form = $this->createForm(D20PlayerType::class, $D20player);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->persist($form);
        }

        if (!$D20player) {
            throw $this->createNotFoundException(
                'No product found for id '.$D20PlayerId
            );
        }

        return $this->render('default/D20Player/create.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
        ]);
    }

    private function persist($form)
    {
        $D20player = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($D20player);
        $em->flush();
        return $this->render('default/D20Player/created.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'D20Player' => $D20player,
        ]);
    }
}
