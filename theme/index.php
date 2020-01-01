<?php get_header(); ?>
<body>
    <header>
        <a href="/">Ryun</a>
        <div class="progress-container">
            <div id="reading-scroll"></div>
        </div> 
    </header>

    <section>
		<ul class="posts">
			<?php
				if (have_posts()) :
					while (have_posts()) : 
						the_post()
			?>
			<li class="post"> 
				<a class="subject" href="<?php the_permalink();?>"><?php the_title();?></a> 
				<div class="categories">
					<?php the_category(", ");?>
				</div>
				<!-- <p class="date"><?php the_time('Y.m.d. (D)') ?></p> -->
<!-- 				<p class="date">{{ post.date | date: "%y.%m.%d" }}</p>  -->
			</li>
			<?php
				endwhile;
				endif;
			?>
		</ul>
	</section>
	<section>
		<?php
			// Protect against arbitrary paged values
			$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
				
			$args = array(
				'post_type' => 'post',
				'post_status'=>'publish',
				'posts_per_page' => 10,
				'paged' => $paged,
			);
			
			$the_query = new WP_Query($args);
			
			if ( $the_query->have_posts() ) : 
			while ( $the_query->have_posts() ) : $the_query->the_post();
			// Post content goes here...
			endwhile; 
		?>
	
		<div class="pagination">
			<?php
			echo paginate_links( array(
				'format'  => 'page/%#%',
				'current' => $paged,
				'total'   => $the_query->max_num_pages,
				'mid_size'        => 5,
				'prev_text'       => __('&laquo;'),
				'next_text'       => __('&raquo;')
			) );
			?>
		</div>
		
		<?php endif; ?>
		
	</section>

</body>
<?php wp_footer(); ?>