<?php

namespace Nora\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($count,$firstName)
    {
    	$em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('EventBundle:Event');

        $event = (array(
                'name' => '123456'
                // 'location' =>'456'
            ));

        return $this->render('EventBundle:Default:index.html.twig', array('name' => $firstName,'count' => $count, 'event' =>$event));
    }
}
