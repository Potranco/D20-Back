<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\D20CharacterType;
use AppBundle\Entity\D20Character;

class D20CharacterController extends Controller
{

    public function indexAction()
    {
        $d20Character = $this->getDoctrine()
            ->getRepository('AppBundle:D20Character')
            ->findAll();
        return $this->render('default/D20Character/list.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'd20characters' => $d20Character,
        ]);
    }

    public function createAction(Request $request)
    {
        $d20Character = new D20Character();
        $form = $this->createForm(D20CharacterType::class, $d20Character);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->persist($form);
        }

        return $this->render('default/D20Character/create.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
        ]);
    }

    public function updateAction($D20CharacterId, Request $request)
    {
        $d20Character = $this->getDoctrine()
            ->getRepository('AppBundle:D20Character')
            ->find($D20CharacterId);

        $form = $this->createForm(D20CharacterType::class, $d20Character);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->persist($form);
        }

        if (!$d20Character) {
            throw $this->createNotFoundException(
                'No product found for id '.$D20CharacterId
            );
        }

        return $this->render('default/D20Character/create.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
        ]);
    }


    private function persist($form)
    {
        $d20Character = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($d20Character);
        $em->flush();
        return $this->render('default/D20Character/created.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'd20character' => $d20Character,
        ]);
    }
}
