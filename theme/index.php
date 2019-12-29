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
			<li>
				<a class="post" href="<?php the_permalink();?>"><?php the_title();?></a>
<!-- 				<p class="date">{{ post.date | date: "%y.%m.%d" }}</p>  -->
			</li>
			<?php
				endwhile;
				endif;
			?>
		</ul>
    </section>
</body>
<?php wp_footer(); ?>