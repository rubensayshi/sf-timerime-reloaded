<?php $view->extend('TimelineBundle::layout.html.php') ?>

<h3>Timeline item [<?= $timelineItem->getTitle() ?>]  <a href="<?= $view['router']->generate('timeline', array('id' => $timelineItem->getTimeline()->getId(), 'title' => $timelineItem->getTimeline()->getTitle())) ?>">[^]</a></h3>
<p><?= $timelineItem->getContent() ?></p>