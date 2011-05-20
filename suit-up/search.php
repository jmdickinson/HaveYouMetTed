<?php get_header(); ?>

<body id="home">

<div id="wrap">

	<div id="header">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	</div>

   <div class="content">

		<div class="post">
			<h2>Search results for <strong>&ldquo;<?php the_search_query() ?>&rdquo;</strong></h2>
		</div>

      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
      <div class="post" id="post-<?php the_ID(); ?>">
         <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        

        <div class="post2">

      <?php the_content('Continue reading...'); ?>

			<div class="postinfo">On <?php the_category(', ') ?> @ <?php the_time('d/m/Y'); ?> | <?php comments_popup_link('0 Comments', '1 Comment',
'% Comments', 'comments-link', 'Comments closed'); ?></div>

            <!--
            <?php trackback_rdf(); ?>
            -->

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