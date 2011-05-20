<?php get_header(); ?>

<body id="home">

<div id="wrap">

	<div id="header">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	</div>

   <div class="content">
<? $counter = 0 ; ?>
      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<?
			$counter++ ;
?>
      <div class="post clearfix" id="post-<?php the_ID(); ?>">
         <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

         <div class="post2">

      <?php the_content('Continue reading...'); ?>

				<div class="postinfo">In <?php the_category(', ') ?> @ <?php the_time('d/m/Y'); ?> | <?php comments_popup_link('0 Comments', '1 Comment',
'% Comments', 'comments-link', 'Comments closed'); ?></div>

            <!--
            <?php trackback_rdf(); ?>
            -->
            
<?
				$mod = $counter % 3 ;
				if($mod == 0){
?>
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
<?
			}
?>

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