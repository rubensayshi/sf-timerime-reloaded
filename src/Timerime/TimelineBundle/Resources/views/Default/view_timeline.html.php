<?php $view->extend('TimelineBundle::layout.html.php') ?>

<h3>Timeline [<?= $timeline['title'] ?>]</h3>
<ul>
<? foreach($timelineItems as $timelineItem): ?>


	<li>
		<a href="<?php echo $view['router']->generate('timeline_item', array('id' => $timelineItem['id'], 'title' => $timelineItem['title'])) ?>">
			<?= $timelineItem['title'] ?>
		</a>
		</li>
<? endforeach; ?>
</ul>