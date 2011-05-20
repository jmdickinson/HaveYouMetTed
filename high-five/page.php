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

      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
      <div class="post" id="post-<?php the_ID(); ?>">
      <script type="text/javascript"><!--
				google_ad_client = "pub-1816843370094846";
				google_ad_width = 468;
				google_ad_height = 60;
				google_ad_format = "468x60_as";
				google_ad_type = "text_image";
				google_ad_channel = "";
				google_color_border = "FFFFFF";
				google_color_bg = "FFFFFF";
				google_color_link = "000000";
				google_color_text = "505050";
				google_color_url = "9fb5d0";
				google_ui_features = "rc:0";
				//-->
				</script>
				<script type="text/javascript"
				  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
      
         <br /><br />
         <h2><?php the_title(); ?></h2>
        

         <div class="post2">

      <?php the_content(''); ?>


           <!--
            <?php trackback_rdf(); ?>
         
            -->
            
            
				<div id="commentsblock">
		      	<?php comments_template(); ?>
				</div>

      </div><!-- closes class="post2" -->
      	
      </div><!-- closes class="post" -->

      <?php endwhile; ?>

      <?php include (TEMPLATEPATH . '/nav.php'); ?>

      <?php else : ?>

      <?php include (TEMPLATEPATH . '/404.php'); ?>

      <?php endif; ?>
      
    
   </div><!-- closes class="content" -->

      <?php include (TEMPLATEPATH . '/sidebar.php'); ?>


<?php get_footer(); ?>