<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
			if ( is_single() ) {
				twentyseventeen_posted_on();
			} else {
				echo twentyseventeen_time_link();
				twentyseventeen_edit_link();
			};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
		the_content(
			sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

    <h1>THIS IS A TEST</h1>
    <?php

        //$result = mail("alexblavat@gmail.com", "Sent using wordpress mail function", "This is a test from localhost", null, null);
        echo FALSE;
        /**
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Set who the message is to be sent from
        $mail->setFrom('atlantic@coastal.com', 'Atlantic Coastal');
        //Set an alternative reply-to address
        $mail->addReplyTo('atlantic@coastal.com', 'Atlantic Coastal');
        //Set who the message is to be sent to
        $mail->addAddress('alexblavat@gmail.com', 'Oleksiy');
        //Set the subject line
        $mail->Subject = 'Let\'s talk.';
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML('<h1>Hi Chip,</h1><br><h3>I know you\'ve been talking shit about me with your little fartcopter friends. Why don\'t you sober up and fix BADS, for the last friggin time. Pay a lobbage, clean up your garbage. Also, for the record, I wanted to lay you off years ago, but Ben Jackson wouldn\'t budge.</h3><br><h4>Josh</h4>');
        $mail->AltBody = 'Sometimes I wish life was a little more plain text.';
        //Attach an image file

        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
        **/
    ?>

</article><!-- #post-## -->
