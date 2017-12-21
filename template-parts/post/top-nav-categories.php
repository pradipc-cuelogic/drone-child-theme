
<ul class="blog-category-nav list-inline pull-right">
	<li><a href="<?php echo get_permalink( 16 ); ?>">All</a></li>
	<!-- <li><a href="">Releases</a></li>
	<li><a href="">Partners</a></li>
	<li><a href="">Resources</a></li> -->
	<li><a href="<?php echo esc_url( get_category_link(195) ); ?>"><?php echo get_the_category_by_ID(195); ?></a></li>
	<li><a href="<?php echo esc_url( get_category_link(196) ); ?>"><?php echo get_the_category_by_ID(196); ?></a></li>
	<li><a href="<?php echo esc_url( get_category_link(197) ); ?>"><?php echo get_the_category_by_ID(197); ?></a></li>

	<?php  /*wp_list_categories( array(
		'number' => 116,115,114, 
		'orderby' => 'id',
		'order' => 'DESC',        
		'title_li' => '',  
	) );*/
	  ?> 
</ul>