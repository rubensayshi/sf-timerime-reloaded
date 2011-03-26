<?php $view->extend('TimelineBundle::layout.html.php') ?>

<h3>Timelines</h3>
<ul>
<? foreach($timelines as $timeline): ?>
	<li>
		<a href="<?php echo $view['router']->generate('timeline', array('id' => $timeline->getId(), 'title' => $timeline->getTitle())) ?>">
			<?= $timeline->getTitle() ?>
		</a>
	</li>
<? endforeach; ?>
</ul>