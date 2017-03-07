<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class D20Controller extends Controller
{
    protected function response($data)
    {
        if($data['format']=='json')
        {
            $template = 'default/json.twig';
            $data = array(
                'Data' => $data,
            );
        }
        else
        {
            $template = 'default/'.$data['template'].'.'.$data['format'].'.twig';
            $data['base_dir'] = realpath($this->getParameter('kernel.root_dir').'/..');
        }
        return $this->render($template, $data);
    }

    protected function persist($form)
    {
        $D20Item = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($D20Item);
        $em->flush();
    }

}
