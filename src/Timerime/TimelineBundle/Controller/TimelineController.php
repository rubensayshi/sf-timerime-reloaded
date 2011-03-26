<?php

namespace Timerime\TimelineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TimelineController extends Controller
{		
	/**
	 * @return Doctrine\ORM\EntityManager
	 */
	public function getEntityManager()
	{
		return $this->get('doctrine.orm.entity_manager');
	}
	
	/**
	 * @return Symfony\Component\HttpFoundation\Request
	 */
	public function getRequest()
	{
		return $this->get('request');
	}
	
    public function indexAction()
    {    	
    	$timelines = 		$this->getEntityManager()
    							->getRepository('Timerime\TimelineBundle\Entity\Timeline')
    							->getTimelines();
    	    	
        return $this->render('TimelineBundle:Default:index.html.php', array(
        	'timelines'			=> $timelines,
        ));
    }
    
    public function viewTimelineAction()
    {
    	$timeline = 		$this->getEntityManager()
    							->getRepository('Timerime\TimelineBundle\Entity\Timeline')
    							->find($this->getRequest()->get('id'));
    	
        return $this->render('TimelineBundle:Default:view_timeline.html.php', array(
        	'timeline'			=> $timeline,
        ));
    }
    
    public function viewTimelineItemAction()
    {    	
    	$timelineItem = 		$this->getEntityManager()
    							->getRepository('Timerime\TimelineBundle\Entity\TimelineItem')
    							->find($this->getRequest()->get('id'));
    	
        return $this->render('TimelineBundle:Default:view_timeline_item.html.php', array(
        	'timelineItem'		=> $timelineItem,
        ));
    }
}
 