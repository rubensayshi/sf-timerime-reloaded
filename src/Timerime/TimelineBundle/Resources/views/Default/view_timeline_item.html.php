<?php $view->extend('TimelineBundle::layout.html.php') ?>

<h3>Timeline item [<?= $timelineItem->getTitle() ?>]</h3>
<p><?= $timelineItem->getContent() ?></p>