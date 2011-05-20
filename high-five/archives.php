<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<?
	$id = str_replace("/","",$_SERVER["REQUEST_URI"]) ;
?>

<?php
	$bg = rand(1,6) ;
	
	switch($bg){
		case 1:
			$bg = '800000.gif' ;
			$color = '#800000' ;
			break ;
		case 2:
			$bg = 'happysnowflakes.jpg' ;
			$color = '#EBEBEB' ;
			break ;
		case 3:
			$bg = 'holidays.jpg' ;
			$color = '#EBEBEB' ;
			break ;
		case 4:
			$bg = 'new_snowflakes2.gif' ;
			$color = '#EBEBEB' ;
			break ;
		default:
			$bg = 'blue-french-horn.png' ;
			$color = '#EBEBEB' ;
	}
?>

<body id="<?= $id ?>">

<div id="wrap">

   <div class="content">

	<div id="header">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	</div>
	
	<div id="main-nav-alt" class="clearfix">
		<ul>
			<li class="episodes"><a href="<?php echo get_option('home'); ?>/forum/">Forum</a></li>
			<li class="archives"><a href="<?php echo get_option('home'); ?>/archives/">Archive</a></li>
			<li class="music"><a href="<?php echo get_option('home'); ?>/music/">Music</a></li>
			<!-- <li class="quotes"><a href="<?php echo get_option('home'); ?>/quotes">Quotes</a></li> -->
			<li class="episodes"><a href="http://howimetyourmother.wetpaint.com/">Wiki</a></li>
			<li class="quotes"><a href="<?php echo get_option('home'); ?>/contact/">Contact</a></li>
			<!-- <li class="photos"><a href="<?php echo get_option('home'); ?>/photos/">Photos</a></li> -->
			<!-- <li class="firstime"><a href="http://www.have-you-met-ted.com/2007/welcome/">First time here?</a></li> -->
		</ul>
	</div><!-- /#main-nav-alt -->

	<div class="post">
		<h2>search site</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		
		<h2>Archives by Month:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Subject:</h2>
		<ul>
			 <?php wp_list_categories('orderby=name&show_count=1&title_li='); ?>
		</ul>
	</div>

	</div><!-- closes class="content" -->

      <?php include (TEMPLATEPATH . '/sidebar.php'); ?>


<?php get_footer(); ?>