<?php // Do not delete these lines
   if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
      die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
            ?>

            <p class="nocomments">This post is password protected. Enter the password to view comments.<p>

            <?php
            return;
            }
        }

      /* This variable is for alternating comment background */
      $oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<br />
 <h2 class="commentstitle"><?php comments_number('0 Comments', '1 Comment', '% Comments' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

   <ol class="commentlist" id="commentlist">
   <?php if ($comments) : ?>

   <?php foreach ($comments as $comment) : ?>
      <li class="<?php if($comment->user_id > 1) echo 'user'; else if($comment->user_id == 1) echo 'author'; else echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">

         <p><strong><?php if (function_exists("gravatar")) { ?><img src="<?php gravatar("R", 20, "http://img163.imageshack.us/img163/496/gravataror3bk9.gif"); ?>" alt="" class="gravatar" /><?php } ?>&nbsp;</strong><?php comment_author_link() ?>&nbsp;|&nbsp;<?php comment_time('F j, Y'); ?> @ <?php comment_time() ?> <?php if ($user_ID) { edit_comment_link(__("(e)"), ' | '); } ?></p>

   <?php if ($comment->comment_approved == '0') : ?>
   <em>Your comment is awaiting moderation</em>
   <?php endif; ?>

         <?php comment_text() ?>

 </li>

   <?php /* Changes every other comment to a different class */
      if ('alt' == $oddcomment) $oddcomment = '';
      else $oddcomment = 'alt';
   ?>

   <?php endforeach; /* end for each comment */ ?>

   </ol>
 

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?>
      <!-- If comments are open, but there are no comments. -->
      <li id="hidelist" style="display:none"></li>
      </ol>
      <p id="nocomment">No Comments. Send your comment.<br /><br /></p>

    <?php else : // comments are closed ?>
      <!-- If comments are closed. -->
      <li style="display:none"></li>
      </ol>
      <p>Comments are closed.</p>

   <?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<h2 class="commentstitle">Leave a Reply</h2>
<div id="loading" style="display: none;"><img src="<?php bloginfo('template_directory'); ?>/images/loading.gif" alt="Cargando..." />&nbsp;Wait for it&hellip;</div>
<div id="errors"></div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" onsubmit="new Ajax.Updater({success: 'commentlist'}, '<?php bloginfo('stylesheet_directory') ?>/comments-ajax.php', {asynchronous: true, evalScripts: true, insertion: Insertion.Bottom, onComplete: function(request){complete(request)}, onFailure: function(request){failure(request)}, onLoading: function(request){loading()}, parameters: Form.serialize(this)}); return false;">

<?php if ( $user_ID ) : ?>

<p>Hello, <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>E-Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit your comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>
<br />
<h2 class="commentstitle">or you can&hellip;</h2>
<?php show_manual_subscription_form(); ?>
<?php endif; // if registration required and not logged in ?>
<?php endif; ?>
