<?php get_header(); ?>

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

<body id="home">

<div id="wrap">

  <div class="content">

	<div id="header">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	</div>

		<div class="post">
        	<h2>Search results for <strong>&ldquo;<?php the_search_query() ?>&rdquo;</strong></h2>
      
      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         <div id="post-<?php the_ID(); ?>">
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

      </div>

      <?php include (TEMPLATEPATH . '/nav.php'); ?>

      <?php else : ?>

      <?php include (TEMPLATEPATH . '/404.php'); ?>

      <?php endif; ?>
    
   </div><!-- closes class="content" -->

      <?php include (TEMPLATEPATH . '/sidebar.php'); ?>


<?php get_footer(); ?>