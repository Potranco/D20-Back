<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\D20CampaignType;
use AppBundle\Entity\D20Campaign;

class D20CampaignController extends D20Controller
{

    public function indexAction(Request $request)
    {
        $Campaigns = $this->getDoctrine()
            ->getRepository('AppBundle:D20Campaign')
            ->findAll();

        $data = array(
            'format' => $request->getRequestFormat(),
            'template' => 'default/D20Campaign/list.html.twig',
            'Campaigns' => $Campaigns,
        );
        return $this->response($data);
    }

    public function createAction(Request $request)
    {
        $D20Campaign = new D20Campaign();

        $form = $this->createForm(D20CampaignType::class, $D20Campaign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->persist($form);
        }

        return $this->render('default/D20Campaign/create.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
        ]);
    }

    public function updateAction($D20CampaignId, Request $request)
    {
        $D20Campaign = $this->getDoctrine()
            ->getRepository('AppBundle:D20Campaign')
            ->find($D20CampaignId);


        $form = $this->createForm(D20CampaignType::class, $D20Campaign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->persist($form);
        }

        if (!$D20Campaign) {
            throw $this->createNotFoundException(
                'No product found for id '.$D20CampaignId
            );
        }

        return $this->render('default/D20Campaign/create.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
            'D20Campaign' => $D20Campaign,
          //  'D20Characters' => $D20Characters,
        ]);
    }

    private function persist($form)
    {
        $D20Campaign = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($D20Campaign);
        $em->flush();
        return $this->render('default/D20Campaign/created.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'D20Campaign' => $D20Campaign,
        ]);
    }
}
