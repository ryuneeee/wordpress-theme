<script>
window.onscroll = function() {updateScroll()};

function updateScroll() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("reading-scroll").style.width = scrolled + "%";
}


window.addEventListener('DOMContentLoaded', () => {

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const id = entry.target.getAttribute('id');
            if (entry.intersectionRatio > 0) {
                document.querySelectorAll(`.toc_active`).forEach(e => e.classList.remove('toc_active'))
                document.querySelector(`.toc_list li a[href="#${id}"]`).parentElement.classList.add('toc_active');
            }
        });
    }, {
        rootMargin: `0px 0px -50% 0px`,
    });

    // Track all sections that have an `id` applied
    document.querySelectorAll('span[id]').forEach((section) => {
        observer.observe(section);
    });

});

</script>
<!--<script type="text/javascript" href="--><?php //bloginfo("template_url"); ?><!--/js/main.js"></script>-->
</html>