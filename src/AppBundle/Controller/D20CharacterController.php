<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\D20CharacterType;
use AppBundle\Entity\D20Character;

class D20CharacterController extends D20Controller
{

    public function indexAction(Request $request)
    {
        $D20Character = $this->getDoctrine()
            ->getRepository('AppBundle:D20Character')
            ->findAll();
        $data = array(
            'format' => $request->getRequestFormat(),
            'template' => 'D20Character/list',
            'D20characters' => $D20Character,
        );
        return $this->response($data);
    }

    public function createAction(Request $request)
    {
        $D20Character = new D20Character();
        $form = $this->createForm(D20CharacterType::class, $D20Character);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persist($form);
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Character/created',
                'D20character' => $D20Character,
            );
        }
        else
        {
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Character/create',
                'form' => $form->createView(),
            );
        }
        return $this->response($data);
    }

    public function updateAction($D20CharacterId, Request $request)
    {
        $D20Character = $this->getDoctrine()
            ->getRepository('AppBundle:D20Character')
            ->find($D20CharacterId);

        if (!$D20Character) {
            throw $this->createNotFoundException(
                'No product found for id '.$D20CharacterId
            );
        }

        $form = $this->createForm(D20CharacterType::class, $D20Character);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persist($form);
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Character/created',
                'D20character' => $D20Character,
            );
        }
        else
        {
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Character/create',
                'form' => $form->createView(),
            );
        }
        return $this->response($data);
    }
}