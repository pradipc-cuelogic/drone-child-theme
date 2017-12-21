<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container post-wrapper">
	<div class="container-fluid padding-none">
	<div class="col-sm-3 padding-none">
	<?php 
		echo '<a class="backLink" href="'. get_permalink( 16 ).'"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</a>';
		the_post_navigation( array(
			'prev_text' => '',
			'next_text' => '',
		) );
	?>
</div>
	<?php require ( get_theme_file_path().'/template-parts/post/top-nav-categories.php' ); ?>
</div>
<?php
	if(	get_the_post_thumbnail_url() )	{
		echo "<div class='custom-img-single-post'>
		<img src=".get_the_post_thumbnail_url().">
	</div>";
	}
?>
	<div id="primary" class="content-area ">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/post/content', get_post_format() );
			echo '<a class="backLink" href="'. get_permalink( 16 ).'"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</a>';
			the_post_navigation( array(
				'prev_text' => '',
				'next_text' => '',
			) );
			
			// echo "<div class='recommended-Post'>";
			// echo do_shortcode("[rp4wp]");
			// //Display the list of comments
			// echo "</div>";

			//code to display recommended post starts here
				$tags = wp_get_post_tags($post->ID);
				//if ($tags) {
				echo '<div class="recommendedTitle"><h2 class="text-center ">Recommended Post</h2></div>';

				$counter  = 0;
				$firstPosts = array( $post->ID);
				$first_tag = array();
				for($i = 0;$i<count($tags);$i++)	{
					array_push($first_tag, $tags[$i]->term_id);
				}

				$args=array(
				'tag__in' => $first_tag,
				'post__not_in' => $firstPosts,
				'posts_per_page'=>3,
				'caller_get_posts'=>1
				);
				$my_query = new WP_Query($args);//fetch post by tags
				if( $my_query->have_posts() ) {
			?>

				<div class="row recommendedPostWrap">
				<?php
				while ($my_query->have_posts()) : $my_query->the_post();
					$counter++;
					$firstPosts[] = $post->ID; // add post id to array
					echo "<div class='col-sm-4'> <div class='recommendedInner'>";
						if(	get_the_post_thumbnail_url() )	{
							echo get_the_post_thumbnail( get_the_ID(), $size = 'post-thumbnail', $attr = '' );
						}
						?>
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php echo the_title() ?>
							</a></h3>
						<span><?php echo get_the_date("F j, Y"); ?></span>
					</div>
					</div>
				<?php
				endwhile;
				}
				if($counter < 3)		{
					$remainingPostCount = 3 - $counter;
					$args_other=array(
						'post__not_in' =>$firstPosts,
						'author' => get_the_author_meta($post->ID) ,
						'posts_per_page'=>$remainingPostCount,
						'caller_get_posts'=>1
					);
				$my_query_other = new WP_Query($args_other);
				if( $my_query_other->have_posts() ) {
				?>
					<div class="row recommendedPostWrap">
						<?php
						while ($my_query_other->have_posts()) : $my_query_other->the_post();
							$counter++;
							$firstPosts[] = $post->ID; // add post id to array
							?>
							<div class="col-sm-4">
								<div class="recommendedInner">
								<a href="<?php the_permalink() ?>">
								<?php
								if(	get_the_post_thumbnail_url() )	{
									echo get_the_post_thumbnail( get_the_ID(), $size = 'post-thumbnail', $attr = '' );
								}
								?>
								</a>
								<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<?php echo the_title() ?>
									</a></h3>
								<span><?php echo get_the_date("F j, Y"); ?></span>
							</div>
						</div>
							<?php
						endwhile;
						}

					}
					if($counter < 3)		{
					$remainingPostCount = 3 - $counter;
					$args = array(
						'posts_per_page'=>$remainingPostCount,
						'post__not_in' =>$firstPosts,
						'orderby' => 'post_date',
						'order' => 'DESC',
						'post_type' => 'post',
						'post_status' => ' publish',
						'suppress_filters' => true
					);

					$my_query = new WP_Query( $args );
					if( $my_query->have_posts() ) {
					?>

					<div class="row recommendedPostWrap">
						<?php
						while ($my_query->have_posts()) : $my_query->the_post();
							$counter++;
							?>
							<div class="col-sm-4">
								<div class="recommendedInner">
								<a href="<?php the_permalink() ?>">
								<?php
								if(	get_the_post_thumbnail_url() )	{
									echo get_the_post_thumbnail( get_the_ID(), $size = 'post-thumbnail', $attr = '' );
								}
								?>
								</a>
								<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<?php echo the_title() ?>
									</a></h3>
								<span><?php echo get_the_date("F j, Y"); ?></span>
							</div>
						</div>
							<?php
						endwhile;
						}

					}
			?>
			</div>
			<?php
			wp_reset_query();
			//}



			echo '<ul class="comment-list">';
			wp_list_comments(array(
				'per_page' => 10, //Allow comment pagination
				'reverse_top_level' => false //Show the oldest comments at the top of the list
			), $comments);
			echo '</ul>';

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					//comments_template();
					 $comments_args = array(
        // change the title of send button 
        'label_submit'=>'Submit comment',
        // change the title of the reply section
        'title_reply'=>'<div class="comment-form-head"><h6>Reply your comment</h6><span>Your email address will not be published. Required fields are marked*</span></div>',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_form_top' => 'ds',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<div class="comment-form-comment form-group "><span class="placeholder">Write your comment here...</span><textarea id="comment" class="focused" name="comment" aria-required="true"></textarea></div>',
        'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' =>
      '<div class="comment-form-author form-group"><span class="placeholder">Your Name *</span>'  .
      '<input id="author" class="blog-form-input focused" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"' . $aria_req . ' /></div>',    

    'url' =>
      '<div class="comment-form-url form-group"> <span class="placeholder">Your Website</span>'.
      '<input id="url" class="blog-form-input focused" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30" /></div>',

      'email' =>
      '<div class="comment-form-email form-group"><span class="placeholder">Your Email*</span>'.
      '<input id="email" class="blog-form-input focused" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' /></div>'
    )
  ),
);

comment_form($comments_args, get_the_ID());
				endif;
			endwhile; // End of the loop.


?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->
<?php get_footer();
