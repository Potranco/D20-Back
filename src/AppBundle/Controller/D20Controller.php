<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class D20Controller extends Controller
{
    public function response($data)
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
            $template = $data['template'];
            $data['base_dir'] = realpath($this->getParameter('kernel.root_dir').'/..');
        }
        return $this->render($template, $data);
    }
}
