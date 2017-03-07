<?php

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class DefaultController extends D20Controller
{
    public function indexAction(Request $request)
    {
        $data = array(
            'format' => $request->getRequestFormat(),
            'template' => 'index',
        );
        return $this->response($data);
    }
}
