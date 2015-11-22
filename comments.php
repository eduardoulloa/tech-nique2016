<div id="comments">
	<?php if ( post_password_required()) { ?>
			<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.' ); ?></p>
	<?php } else { ?>
		<?php if (have_comments()) { ?>
			<?php if (get_comment_pages_count() > 1 && get_option( 'page_comments' )) { //Are there comments to navigate through? ?>
				<div class="navigation">
					<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>' ) ); ?></div>
				</div> <!-- .navigation -->
			<?php } //check for comment navigation ?>
			<ol class="commentlist">
				<?php
					/* Loop through and list the comments. Tell wp_list_comments()
					 * to use twentyten_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define twentyten_comment() and that will be used instead.
					 * See twentyten_comment() in twentyten/functions.php for more.
					 */
					wp_list_comments(array('callback' => 'twentyten_comment'));
				?>
			</ol>
			<?php if (get_comment_pages_count() > 1 && get_option( 'page_comments' )) { // Are there comments to navigate through? ?>
				<div class="navigation">
					<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>' ) ); ?></div>
				</div><!-- .navigation -->
			<?php } else if (!comments_open()) { // check for comment navigation or, if we don't have comments: ?>
				<p class="nocomments"><?php _e( 'Comments are closed.' ); ?></p>
			<?php } //end !comments_open() ?>
		<?php } //end have_comments() ?>
		<?php
			//the comment form
			$fields =  array(
				'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>'. '</label> ' : '' ) .
							'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
				'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
							'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
				'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website' ) . '</label>' .
							'<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
			);
			$args = array(
				'fields' => apply_filters('comment_form_default_fields', $fields ),
				'comment_notes_after' => ''
			);
			comment_form($args);
		?>
	<?php } //end if password required ?>
</div><!-- #comments -->