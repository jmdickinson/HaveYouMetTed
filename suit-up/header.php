<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php
 if ( is_single() ) {
	wp_title('');
 } else if ( is_category() && is_paged() ) {
	echo 'How I Met Your Mother ' ;
	wp_title('');
	echo "&mdash;Page ".$paged ;
	//return wp_title as value, not echo and then check it for certain vaues (make an array), add "How I Met Your Mother" if it matches the array
	//add logic here to concat 'How I Met Your Mother' onto title for seasons, etc
 } else if (is_paged()  || is_author() ) {
	bloginfo('name');
	echo "&mdash;Page ".$paged ;
 } else if ( is_page()){
 	wp_title('');
 } else if ( is_category() ) {
	echo 'How I Met Your Mother ' ;
	wp_title('');
	//return wp_title as value, not echo and then check it for certain vaues (make an array), add "How I Met Your Mother" if it matches the array
	//add logic here to concat 'How I Met Your Mother' onto title for seasons, etc
 } else if ( is_archive() ) {
	echo 'How I Met Your Mother Archives&mdash;' ;
	wp_title('');
 } else if ( is_search() ) {
	echo 'Search Results' ;
	wp_title('');
 } else if ( is_404() ) {
	bloginfo('name');
    echo ' - Page Doesn&rsquo;t Exist' ;
 } else if ( is_home() ) {
    bloginfo('name');
 } else {
    bloginfo('name');
 }
 ?></title>

<meta name='description' content='The blog for all things How I Met Your Mother. Show news, episode discussion, and more.'>
<meta name="content_type" content="Blog"/>
<meta name="robots" content="index,follow"/>
<meta name="keywords" content="How I Met Your Mother, HIMYM, Have You Met Ted, Neil Patrick Harris, Josh Radnor, Jason Segel, Alyson Hannigan, Cobie Smulders">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/comments-style.css" type="text/css" media="screen" />
<?php if (is_single() and ('open' == $post-> comment_status) or ('comment' == $post-> comment_type) ) { ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/prototype.js.php"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/effects.js.php"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ajax_comments.js"></script>
<?php } ?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>