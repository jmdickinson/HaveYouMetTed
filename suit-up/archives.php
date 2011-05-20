<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<?
	$id = str_replace("/","",$_SERVER["REQUEST_URI"]) ;
?>

<body id="<?= $id ?>">

<div id="wrap">

	<div id="header">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	</div>

   <div class="content">

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

	</div><!-- closes class="content" -->

      <?php include (TEMPLATEPATH . '/sidebar.php'); ?>


<?php get_footer(); ?>