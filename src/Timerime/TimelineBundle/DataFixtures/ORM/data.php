<?php

namespace Timerime\TimelineBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\Loader;
use Doctrine\ORM\EntityManager,
	Doctrine\Common\DataFixtures\FixtureInterface;
use Timerime\TimelineBundle\Entity;


class LoadTimelineData implements FixtureInterface
{
	public function load($manager)
	{
		$timelines = array();
		 
		for($tl = 0; $tl < 10; $tl++)
		{
			$timelines[$tl] = new Entity\Timeline();
			$timelines[$tl]->setTitle("lorem tl #{$tl}");
			$timelines[$tl]->setContent("lorem tl ipsum #{$tl}");

			$manager->persist($timelines[$tl]);
		}

		foreach($timelines as $tl => $timeline)
		{
			for($tli = 0; $tli < 10; $tli++)
			{
				$timelineItem = new Entity\TimelineItem();
				$timelineItem->setTitle("lorem tli #{$tl}#{$tli}");
				$timelineItem->setContent("lorem tli ipsum #{$tl}#{$tli}");
				$timelineItem->setTimeline($timeline);

				$manager->persist($timelineItem);
			}
		}

		$manager->flush();
	}
}


$loader = new Loader();
$loader->addFixture(new LoadTimelineData);