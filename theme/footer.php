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