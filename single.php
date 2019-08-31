
<?php
	if (have_posts()) :
	while (have_posts()) : the_post(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Noto+Serif+KR:400&amp;subset=korean" rel="stylesheet">
    <meta charset="utf-8">
    <title><?php the_title();?></title>
</head>
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