<?php $view->extend('TimelineBundle::layout.html.php') ?>

<h3>Timeline [<?= $timeline->getTitle() ?>] <a href="<?php echo $view['router']->generate('homepage') ?>">[^]</a></h3>
<ul>
<? foreach($timeline->getTimelineItems() as $timelineItem): ?>
	<li>
		<a href="<?php echo $view['router']->generate('timeline_item', array('id' => $timelineItem->getId(), 'title' => $timelineItem->getTitle())) ?>">
			<?= $timelineItem->getTitle() ?>
		</a>
		</li>
<? endforeach; ?>
</ul>
<p><?= $timeline->getContent() ?></p>