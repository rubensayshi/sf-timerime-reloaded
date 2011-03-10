<?php $view->extend('TimelineBundle::layout.html.php') ?>

<h3>Timelines</h3>
<ul>
<? foreach($timelines as $timeline): ?>
	<li>
		<a href="<?php echo $view['router']->generate('timeline', array('id' => $timeline['id'], 'title' => $timeline['title'])) ?>">
			<?= $timeline['title'] ?>
		</a>
	</li>
<? endforeach; ?>
</ul>