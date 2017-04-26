<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\D20ItemType;
use AppBundle\Entity\D20Item;

class D20ItemController extends D20Controller
{
    public function indexAction(Request $request)
    {
        $D20Items = $this->getDoctrine()
            ->getRepository('AppBundle:D20Item')
            ->findAll();
        $data = array(
            'format' => $request->getRequestFormat(),
            'template' => 'D20Item/list',
            'Items' => $D20Items,
        );
        return $this->response($data);
    }

    public function createAction(Request $request)
    {
        $D20Item = new D20Item();
        $form = $this->createForm(D20ItemType::class, $D20Item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persist($form);
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Item/created',
                'Item' => $D20Item,
            );
        }
        else
        {
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Item/create',
                'form' => $form->createView(),
            );
        }
        return $this->response($data);
    }

    public function updateAction($D20ItemId, Request $request)
    {
        $D20Item = $this->getDoctrine()
            ->getRepository('AppBundle:D20Item')
            ->find($D20ItemId);

        if (!$D20Item) {
            throw $this->createNotFoundException(
                'No product found for id '.$D20ItemId
            );
        }

        $form = $this->createForm(D20ItemType::class, $D20Item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persist($form);
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Item/created',
                'Item' => $D20Item,
            );
        }
        else
        {
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Item/create',
                'form' => $form->createView(),
            );
        }
        return $this->response($data);
    }
}