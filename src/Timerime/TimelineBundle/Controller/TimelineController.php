<?php

namespace Timerime\TimelineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TimelineController extends Controller
{
    public function indexAction()
    {
    	$timelines = array(
    		array('id' => 1, 'title' => 'timeline #1'),
    		array('id' => 2, 'title' => 'timeline #2'),
    	);
    	
        return $this->render('TimelineBundle:Default:index.html.php', array(
        	'timelines'			=> $timelines,
        ));
    }
    
    public function viewTimelineAction()
    {
    	$timeline = array('id' => 1, 'title' => 'timeline #1');
    	
    	$timelineItems = array(
    		array('id' => 1, 'title' => 'item #1'),
    		array('id' => 2, 'title' => 'item #2'),
    	);
    	
        return $this->render('TimelineBundle:Default:view_timeline.html.php', array(
        	'timeline'			=> $timeline,
        	'timelineItems'		=> $timelineItems,
        ));
    }
    
    public function viewTimelineItemAction()
    {    	
    	$timelineItem = array('id' => 1, 'title' => 'item #1');
    	
        return $this->render('TimelineBundle:Default:view_timeline_item.html.php', array(
        	'timelineItem'		=> $timelineItem,
        ));
    }
}
 