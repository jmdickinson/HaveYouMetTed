<div id="sidebar">
	
	<img src="/wp-content/themes/suit-up/images/sidebar_hero.jpg" class="hero" width="170" height="355" alt="How I Met Your Mother cast photo" />
	
<!-- 	<div class="generic-sidebar-widget watchepisode">
		<h3>Watch</h3>
		<p>Newest episode: <br /><strong class="epname">As Fast as She Can</strong></p>
		<p><a href="http://have-you-met-ted.com/2009/watch-season-4-episode-23-as-fast-as-she-can/" style="font-size:14px; color:#B85B5A;line-height:14px;">Watch episode</a></p>
	</div>
	below comment goes here
	 -->
	 
	 <!-- <p>Or purchase from <a href="http://click.linksynergy.com/fs-bin/stat?id=eWlNotrd5Ic&offerid=146261&type=3&subid=0&tmpid=1826&RD_PARM1=http%253A%252F%252Fitunes.apple.com%252FWebObjects%252FMZStore.woa%252Fwa%252FviewTVSeason%253Fi%253D315287626%2526id%253D290510751%2526s%253D143441%2526uo%253D6%2526partnerId%253D30"><img height="15" width="61" alt="How I Met Your Mother - How I Met Your Mother, Season 4 - Right Place Right Time" src="http://ax.itunes.apple.com/images/badgeitunes61x15dark.gif" /></a></p> -->
	
	<div id="main-nav">
		<ul>
			<li class="firstime"><a href="http://www.have-you-met-ted.com/2007/welcome/">First time here?</a></li>
		</ul>
	</div><!-- /#main-nav -->
	
	<div id="search-site">
	<h3>Search Site</h3>	
	
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	
	</div><!-- /#search-site -->
	
	<div class="generic-sidebar-widget donate">
		<h3>Donate</h3>
		<br />
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="2737815">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
	</div>
	
	<div class="generic-sidebar-widget">
	  <ul><li><a href="http://www.qksrv.net/click-2773507-10463747?URL=http://www.cafepress.com/detourdesign" target="_blank"><img src="http://have-you-met-ted.com/wp-content/uploads/120x90d2.gif" alt="Detour Designables - Take a detour from the ordinary shirts" width="120" height="90" border="0"></a></li></ul>
	</div>
	
	<div id="outside-links">
		<h3>outside links</h3>
		
		<ul class="sdcats">
		<?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'name', TRUE, 
		
		FALSE, -1, TRUE); ?>
		<?php if ( is_home() && !is_paged() ): ?>
			<? /* promote personal projects here */ ?>
		<?php endif; ?>
		<?php if ( (is_home() && !is_paged()) && (time() < strtotime('3/17/2011')) ): ?>
			<li>Catch every episode on <a href="http://timewarnercable.usdirect.com/timewarner/new-york-time-warner.html">Time Warner Cable TV</a></li>
		<?php endif; ?>
		</ul>
	</div><!-- /#outside-links -->
	
	<div class="ad160x600">
		<div>
		<script type="text/javascript"><!--
		google_ad_client = "pub-1816843370094846";
		/* 160x600, sidebar skyscraper */
		google_ad_slot = "4835181296";
		google_ad_width = 160;
		google_ad_height = 600;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
		</div>
	</div><!-- /.ad160x600 -->
	
</div><!-- closes id="sidebar" -->

<div id="adbar">

	<div class="ad300x250">
		<div>
		<script type="text/javascript"><!--
		google_ad_client = "pub-1816843370094846";
		/* leader ad (top right) */
		google_ad_slot = "9235609635";
		google_ad_width = 300;
		google_ad_height = 250;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
		</div>
	</div>
	
	<div class="generic-sidebar-widget clearfix" id="meta-info">
		<p>Mondays at 8:00pm on CBS</p>
		<ul class="subscribe">
			<li><a href="http://feeds.feedburner.com/HaveYouMetTed"><img src="http://feeds.feedburner.com/~fc/HaveYouMetTed?bg=fb8c02&amp;fg=444444&amp;anim=0" height="26" width="88" alt="Subscriptions" /></a></li>
		</ul>
	</div>
	
	<div id="subscribe-module" class="generic-sidebar-widget">
		<h3>stay informed</h3>
		<ul class="subscribe">
		  <div class="fr p_w2">
			<li class="rss-subscribe"><a href="http://feeds.feedburner.com/HaveYouMetTed" title="Subscribe to my feed" rel="alternate" type="application/rss+xml"><img src="http://www.feedburner.com/fb/images/pub/feed-icon32x32.png" alt="feed icon" align="middle" />Subscribe to RSS</a></li>
		 	<li class="rss-subscribe"><a href="http://www.facebook.com/pages/Have-You-Met-Ted-The-How-I-Met-Your-Mother-Blog/12777812878" title="Become a Fan"><img src="http://have-you-met-ted.com/wp-content/themes/high-five/images/Facebook-32x32.png" alt="facebook icon" align="middle" />Become a Fan</a></li>
		</div>
			<li class="fl p_w2"><form action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Enter your email:</p><p><input type="text" class="email" name="email"/></p><input type="hidden" value="http://feeds.feedburner.com/~e?ffid=1172643" name="url"/><input type="hidden" value="Have You Met Ted? - The Blog for All Things How I Met Your Mother" name="title"/><input type="hidden" name="loc" value="en_US"/><input type="submit" class="submit" value="Subscribe" /></form>
			<p class="footnote">Only new posts will arrive in your inbox. No spam, promise.</p>
			</li>
			<div class="clear"></div>
		</ul>
	</div><!-- /#subscribe-module -->

	<div id="post-categories" class="clearfix">
		<h3>Categories</h3>
		
		<ul class="archvs">
		<?php wp_list_categories('orderby=name&title_li='); ?>
		</ul>
	</div><!-- /#post-categories -->
	
	<div class="generic-sidebar-widget"><div style="margin: 0 auto; background:url('http://web.buddytv.com/images/premier-blogger.png');height:20px;width:180px;text-align:center;padding-top:30px;"><a href="http://www.buddytv.com/how-i-met-your-mother.aspx"style="background:url('http://www.buddytv.com/premier-blogger/images/600000039.aspx') bottom right no-repeat; padding-bottom:5px; display:block;font-family:Arial; font-size:10px; color:#ed923a; text-decoration:none;">How I Met Your Mother</a></div></div>
	
	<div id="amazon-affiliate" class="clearfix">
		<h3>buy some stuff from the show</h3>
		<ul>
			<li><iframe src="http://rcm.amazon.com/e/cm?t=hayomete-20&o=1&p=8&l=as1&asins=B001M5UDGS&md=10FE9736YVPPT7A0FBG2&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=FFFFFF&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</li>
			<li><iframe src="http://rcm.amazon.com/e/cm?t=hayomete-20&o=1&p=8&l=as1&asins=B0001EQHXO&md=10FE9736YVPPT7A0FBG2&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=FFFFFF&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</li>
			<li><iframe src="http://rcm.amazon.com/e/cm?t=hayomete-20&o=1&p=8&l=as1&asins=143911000X&md=10FE9736YVPPT7A0FBG2&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=FFFFFF&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</li>
			<li><iframe src="http://rcm.amazon.com/e/cm?t=hayomete-20&o=1&p=8&l=as1&asins=B0019CSXAM&md=10FE9736YVPPT7A0FBG2&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=FFFFFF&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</li>
			<li><iframe src="http://rcm.amazon.com/e/cm?t=hayomete-20&o=1&p=8&l=as1&asins=B000TM1CKQ&md=10FE9736YVPPT7A0FBG2&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=FFFFFF&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</li>
			<li><iframe src="http://rcm.amazon.com/e/cm?t=hayomete-20&o=1&p=8&l=as1&asins=B000HT3P7E&md=10FE9736YVPPT7A0FBG2&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=FFFFFF&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</li>
			<li>
				<br /><a href="http://www.amazon.com/gp/product/B00092ZM7U?ie=UTF8&tag=hayomete-20&linkCode=as2&camp=1789&creative=390957&creativeASIN=B00092ZM7U">Undeclared - The Complete Series DVD</a><img src="http://www.assoc-amazon.com/e/ir?t=hayomete-20&l=as2&o=1&a=B00092ZM7U" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" /><br /><br />
				<a href="http://www.amazon.com/gp/product/B0000648X1?ie=UTF8&tag=hayomete-20&linkCode=as2&camp=1789&creative=390957&creativeASIN=B0000648X1">Slackers DVD</a><img src="http://www.assoc-amazon.com/e/ir?t=hayomete-20&l=as2&o=1&a=B0000648X1" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />

			</li>
			<li>
				<br /><a href="http://www.amazon.com/gp/product/B001CCIRLO?ie=UTF8&tag=hayomete-20&linkCode=as2&camp=1789&creative=390957&creativeASIN=B001CCIRLO">Forgetting Sarah Marshall (Three-Disc Unrated Collector's Edition) DVD</a><img src="http://www.assoc-amazon.com/e/ir?t=hayomete-20&l=as2&o=1&a=B001CCIRLO" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" /><br /><br />
 				<a href="http://www.amazon.com/gp/product/B001C0JCBK?ie=UTF8&tag=hayomete-20&linkCode=as2&camp=1789&creative=390957&creativeASIN=B001C0JCBK">Forgetting Sarah Marshall [Blu-ray]</a><img src="http://www.assoc-amazon.com/e/ir?t=hayomete-20&l=as2&o=1&a=B001C0JCBK" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
			</li>
		</ul>
	</div><!-- /#amazon-affiliate -->

</div><!-- closes id="adbar" -->