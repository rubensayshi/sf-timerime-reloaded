<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php $view['slots']->output('title', 'TimeRime.com') ?></title>
        <style>
        	* {margin: 0px; padding: 0px; font-family: Verdana;}
        	ul {list-style: none;}
        	.header_container {font-size: 22px; font-color: gray; text-align: center;}
        	.content_container {width: 700px; margin: 0 auto; border: 1px solid black;}
        	.content_container .menu {height: 17px; padding: 3px; border-bottom: 2px solid red; font-size: 12px;}
        	.content_container .content {font-size: 12px;}
        </style>
    </head>
    <body>
    	<div class="header_container">
    		<div class="header"><?php $view['slots']->output('header_title', 'TimeRime.com') ?></div>
    	</div>
    	<div class="content_container">
    		<div class="menu"><?php $view['slots']->output('menu', '') ?></div>
    		<div class="content"><?php $view['slots']->output('_content', '') ?></div>
    	</div>
        
    </body>
</html>
