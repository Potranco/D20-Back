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
            'template' => 'D20Player/list',
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
            $this->persist($form);
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Player/created',
                'D20Player' => $D20player,
            );
        }
        else
        {
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Player/create',
                'form' => $form->createView(),
            );
        }
        return $this->response($data);
    }

    public function updateAction($D20PlayerId, Request $request)
    {
        $D20player = $this->getDoctrine()
            ->getRepository('AppBundle:D20Player')
            ->find($D20PlayerId);

        if (!$D20player) {
            throw $this->createNotFoundException(
                'No product found for id '.$D20PlayerId
            );
        }


        $form = $this->createForm(D20PlayerType::class, $D20player);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persist($form);
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Player/created',
                'D20Player' => $D20player,
            );
        }
        else
        {
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Player/create',
                'form' => $form->createView(),
            );
        }
        return $this->response($data);
    }
}