<div id="sidebar">
	
	<p><img src="/wp-content/themes/suit-up/images/sidebar_hero.jpg" class="hero" width="170" height="355" alt="How I Met Your Mother cast photo" />8:30pm Mondays on CBS.</p>
	
	<h3>Sections</h3>
	<ul>
		<li class="episodes"><a href="<?php echo get_option('home'); ?>/forum/">Forum</a></li>
		<li class="archives"><a href="<?php echo get_option('home'); ?>/archives/">Archives</a></li>
		<li class="music"><a href="<?php echo get_option('home'); ?>/music/">Music</a></li>
		<!-- <li class="quotes"><a href="<?php echo get_option('home'); ?>/quotes">Quotes</a></li> -->
		<li class="episodes"><a href="http://howimetyourmother.wetpaint.com/">Wiki</a></li>
		<li class="quotes"><a href="<?php echo get_option('home'); ?>/contact/">Contact</a></li>
		<li class="photos"><a href="<?php echo get_option('home'); ?>/photos/">Photos</a></li>
		<li class="firstime"><a href="http://www.have-you-met-ted.com/2007/welcome/">First time here?</a></li>
	</ul>
	
	<h3>Search Site</h3>	
	
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	
	<ul><li><a href="http://www.qksrv.net/click-2773507-10463747?URL=http://www.cafepress.com/detourdesign" target="_blank"><img src="http://have-you-met-ted.com/wp-content/uploads/120x90d2.gif" alt="Detour Designables - Take a detour from the ordinary shirts" width="120" height="90" border="0"></a></li></ul>
						
	<h3>Subscribe</h3>
	<ul class="subscribe">
		<li><a href="http://feeds.feedburner.com/HaveYouMetTed"><img src="http://feeds.feedburner.com/~fc/HaveYouMetTed?bg=fb8c02&amp;fg=444444&amp;anim=0" height="26" width="88" alt="Subscriptions" /></a></li>
		<li class="rss-subscribe"><a href="http://feeds.feedburner.com/HaveYouMetTed" title="Subscribe to my feed" rel="alternate" type="application/rss+xml"><img src="http://www.feedburner.com/fb/images/pub/feed-icon32x32.png" alt="feed icon" align="middle" />Subscribe via RSS</a></li>
		<li><form action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Or enter your email:</p><p><input type="text" class="email" name="email"/></p><input type="hidden" value="http://feeds.feedburner.com/~e?ffid=1172643" name="url"/><input type="hidden" value="Have You Met Ted? - The Blog for All Things How I Met Your Mother" name="title"/><input type="hidden" name="loc" value="en_US"/><input type="submit" class="submit" value="Subscribe" /><p>Delivered by <a href="http://www.feedburner.com" target="_blank">FeedBurner</a></p></form></li>
		<li class="chicklits">
			<a href="http://technorati.com/faves?sub=addfavbtn&amp;add=http://www.have-you-met-ted.com"><img src="http://static.technorati.com/pix/fave/tech-fav-1.png" alt="Add to Technorati Favorites" /></a>
		</li>
	</ul>
	
	<h3>Categories</h3>
	
	<ul class="archvs">
	<?php wp_list_categories('orderby=name&title_li='); ?>
	</ul>
	
	<h3>Support</h3>
	<ul>
		<li><iframe src="http://rcm.amazon.com/e/cm?t=hayomete-20&o=1&p=8&l=as1&asins=B001CMHUZ8&md=10FE9736YVPPT7A0FBG2&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=FFFFFF&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></li>
	</ul>
	
	<h3>outside links</h3>
	
	<ul class="sdcats">
	<?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'name', TRUE, 
	
	FALSE, -1, TRUE); ?>
	</ul>
	
	<!-- <div style="border: 1px solid #cccccc; background-color: white; width: 115px; text-align: center; padding: 0 0 10px 0;"><p style="margin: 0"><a href="http://www.business-opportunities.biz/"><img src="http://images.business-opportunities.biz/blogworth/gw.jpg" style="border:0;"></a><br /> 		<span style="font-size: 11px;">My <a href="http://have-you-met-ted.com">blog</a> is worth <b>$10,161.72</b>.</span><br /><span style="font-size: 10px;"><a href="http://www.business-opportunities.biz/projects/how-much-is-your-blog-worth/">How much is your blog worth?</a></span></p><p><a href="http://www.technorati.com/" style="border: 0px;"><img src="http://technorati.com/pix/tech-logo-embed.gif" style="border: 0px;"></a></p></div> -->

<ul class="subscribe">
		<li class="chicklits">
			<a href="http://www.feedburner.com"><img src="http://www.feedburner.com/fb/images/pub/powered_by_fb.gif" alt="Powered by FeedBurner" /></a>
			<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="/wp-content/uploads/vcss.png" alt="Valid CSS!" width="88" height="31" /></a>
		</li>
	</ul>
	
</div><!-- closes id="sidebar" -->