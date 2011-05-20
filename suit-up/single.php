<?php get_header(); ?>

<body id="home">

<div id="wrap">

	<div id="header">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	</div>

   <div class="content">
   	
   	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
      <div class="post" id="post-<?php the_ID(); ?>">
         <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        

         <div class="post2">

      		<?php the_content('Continue reading...'); ?>

				<div class="postinfo">In <?php the_category(', ') ?> @ <?php the_time('d/m/Y'); ?> | By <?php the_author(''); ?> <?php edit_post_link('[Edit]','',''); ?> </div>
				
				<script src="http://feeds.feedburner.com/~s/HaveYouMetTed?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>
				
				<?php include (TEMPLATEPATH . '/nav.php'); ?>
				
            <!--
            <?php trackback_rdf(); ?>
         
            -->
            
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
            
				<div id="commentsblock">
		      	<?php comments_template(); ?>
				</div>

      </div><!-- closes class="post2" -->
      	
      </div><!-- closes class="post" -->

      <?php endwhile; ?>

      <?php else : ?>

      <?php include (TEMPLATEPATH . '/404.php'); ?>

      <?php endif; ?>
    
   </div><!-- closes class="content" -->

      <?php include (TEMPLATEPATH . '/sidebar.php'); ?>


<?php get_footer(); ?>