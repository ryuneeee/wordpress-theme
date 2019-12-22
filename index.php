<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Noto+Serif+KR:400&amp;subset=korean" rel="stylesheet">
    <meta charset="utf-8">
    <title>Ryun</title>
</head>
<body>
    <header>
        <a href="/">Ryun2aa</a>
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

<script>
window.onscroll = function() {updateScroll()};

function updateScroll() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("reading-scroll").style.width = scrolled + "%";
}
</script>
</html>
