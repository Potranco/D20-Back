<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\D20ClassType;
use AppBundle\Entity\D20Class;

class D20ClassController extends D20Controller
{

    public function indexAction(Request $request)
    {
        $D20Class = $this->getDoctrine()
            ->getRepository('AppBundle:D20Class')
            ->findAll();
        $data = array(
            'format' => $request->getRequestFormat(),
            'template' => 'D20Class/list',
            'D20Classes' => $D20Class,
        );
        return $this->response($data);
    }

    public function createAction(Request $request)
    {
        $D20Class = new D20Class();
        $form = $this->createForm(D20ClassType::class, $D20Class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persist($form);
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Class/created',
                'D20Class' => $D20Class,
            );
        }
        else
        {
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Class/create',
                'form' => $form->createView(),
            );
        }
        return $this->response($data);
    }

    public function updateAction($D20ClassId, Request $request)
    {
        $D20Class = $this->getDoctrine()
            ->getRepository('AppBundle:D20Class')
            ->find($D20ClassId);

        if (!$D20Class) {
            throw $this->createNotFoundException(
                'No product found for id '.$D20ClassId
            );
        }

        $form = $this->createForm(D20ClassType::class, $D20Class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persist($form);
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Class/created',
                'D20Class' => $D20Class,
            );
        }
        else
        {
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Class/create',
                'form' => $form->createView(),
            );
        }
        return $this->response($data);
    }
}