<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\D20RaceType;
use AppBundle\Entity\D20Race;

class D20RaceController extends D20Controller
{
    public function indexAction(Request $request)
    {
        $D20Races = $this->getDoctrine()
            ->getRepository('AppBundle:D20Race')
            ->findAll();
        $data = array(
            'format' => $request->getRequestFormat(),
            'template' => 'D20Race/list',
            'races' => $D20Races,
        );
        return $this->response($data);
    }

    public function createAction(Request $request)
    {
        $D20Race = new D20Race();
        $form = $this->createForm(D20RaceType::class, $D20Race);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persist($form);
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Race/created',
                'race' => $D20Race,
            );
        }
        else
        {
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Race/create',
                'form' => $form->createView(),
            );
        }
        return $this->response($data);
    }

    public function updateAction($D20RaceId, Request $request)
    {
        $D20Race = $this->getDoctrine()
            ->getRepository('AppBundle:D20Race')
            ->find($D20RaceId);

        if (!$D20Race) {
            throw $this->createNotFoundException(
                'No product found for id '.$D20RaceId
            );
        }

        $form = $this->createForm(D20RaceType::class, $D20Race);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persist($form);
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Race/created',
                'race' => $D20Race,
            );
        }
        else
        {
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Race/create',
                'form' => $form->createView(),
            );
        }
        return $this->response($data);
    }
}