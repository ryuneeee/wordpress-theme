
<?php
	if (have_posts()) :
	while (have_posts()) : the_post(); 
?>
<?php get_header(); ?>
<body>
    <header>
        <a href="/">Ryun</a>
        <div class="progress-container">
            <div id="reading-scroll"></div>
        </div> 
    </header>

    <section>
      <article>
        <h1 class="subject"><?php the_title();?></h1>
		<p class="date"><?php the_time('Y.m.d. l') ?></p>
		  
		<br>
        <?php the_content();?>
     	<br>
      </article>
      <?php
        endwhile;
        endif;
      ?>
      <p class="to-main"><a href="/">메인으로 돌아가기</a></p>
    </section>
</body>
<?php get_footer(); ?>