</main>

<footer>
	<div class="text-center" style="background-color:#FFDFC4;">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/image/footer.png" class="my-5 w-50 mx-auto" alt="">
	</div>
</footer>

<script>
  $(function() {
	  $("button.btn").on("click", function() {
      if ($("#step").hasClass("step1")) {
        $("#step").removeClass("step1");
        $("#step").addClass("step2");
        $("#box").remove();
      } else if ($("#step").hasClass("step2")) {
        $("#step").removeClass("step2");
        $("#step").addClass("step3");
      } else if ($("#step").hasClass("step3")) {
          $("#step").removeClass("step3");
          $("#step").addClass("step4");
      } else if ($("#step").hasClass("step4")) {
          $("#step").removeClass("step4");
          $("#step").addClass("step5");
      }
    });
  });

  if (window.performance) {
    if (window.performance.navigation.type === 1) {
      window.location.replace('/estimate');
    }
  }

</script>

<?php wp_footer();?>
</body>

</html>
