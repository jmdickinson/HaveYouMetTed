<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<p style="text-align:left;">
<input type="text" class="inse" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s"></input>
<input type="submit" id="searchsubmit" value="Search"></input>
</p>
</form>