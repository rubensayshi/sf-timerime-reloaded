<?php

namespace Timerime\TimelineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TimelineController extends Controller
{
    public function indexAction()
    {
        return $this->render('TimelineBundle:Default:index.html.twig');
    }
}
 