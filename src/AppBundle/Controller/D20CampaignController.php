<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\D20CampaignType;
use AppBundle\Entity\D20Campaign;

class D20CampaignController extends D20Controller
{
    public function indexAction(Request $request)
    {
        $D20Campaigns = $this->getDoctrine()
            ->getRepository('AppBundle:D20Campaign')
            ->findAll();

        $data = array(
            'format' => $request->getRequestFormat(),
            'template' => 'D20Campaign/list',
            'D20Campaigns' => $D20Campaigns,
        );
        return $this->response($data);
    }

    public function createAction(Request $request)
    {
        $D20Campaign = new D20Campaign();

        $form = $this->createForm(D20CampaignType::class, $D20Campaign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persist($form);
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Campaign/created',
                'D20Campaign' => $D20Campaign,
            );
        }
        else
        {
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Campaign/create',
                'form' => $form->createView(),
            );
        }
        return $this->response($data);
    }

    public function updateAction($D20CampaignId, Request $request)
    {
        $D20Campaign = $this->getDoctrine()
            ->getRepository('AppBundle:D20Campaign')
            ->find($D20CampaignId);

        if (!$D20Campaign) {
            throw $this->createNotFoundException(
                'No product found for id '.$D20CampaignId
            );
        }

        $form = $this->createForm(D20CampaignType::class, $D20Campaign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persist($form);
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Campaign/created',
                'D20Campaign' => $D20Campaign,
            );
        }
        else
        {
            $data = array(
                'format' => $request->getRequestFormat(),
                'template' => 'D20Campaign/create',
                'form' => $form->createView(),
            );
        }
        return $this->response($data);
    }
}