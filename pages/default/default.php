<?php

$this->title = '#BetterThanCourtside';

$this->css[] = 'http://fonts.googleapis.com/css?family=Oswald:700';

$this->template('html5', 'top');

?>

<div class="main">
	<h1><?=$this->title?></h1>
	<h2>Who wants courtside tickets when you've got this...</h2>

	<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=%23BetterThanCourtside" data-widget-id="332880047230828545">Tweets about "#BetterThanCourtside"</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>


<?


$this->template('html5', 'bottom');
