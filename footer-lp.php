</main>

<footer>
  <div class="container">
    <div class="logo">
      <a href="<?php echo home_url();?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg" alt="売却プラス匠">
      </a>
    </div>

    <dl>
      <dt>運営会社</dt>
      <dd>株式会社　ＭＡＹＡ</dd>
      <dt>本　社</dt>
      <dd>東京都港区南青山2丁目2-15ウイン青山942</dd>
      <dt>支　社</dt>
      <dd>宮城県仙台市青葉区上愛子字蛇台原52-1<br>
        埼玉県深谷市大谷1457-1<br>
        千葉県松戸市松戸1307-1松戸ビル13F<br>
        静岡県静岡市葵区七間町7-8セブンセンタービル2F<br>
        大阪府大阪市淀川区西中島6-3-24-T411<br>
        京都府京都市下京区仏光寺通烏丸東入上柳町331.タカノハスクエア3F<br>
        福岡県福岡市中央区高砂2-12-8-810<br>
        鹿児島県鹿児島市東千石町2−13山王ビル3F</dd>
      <dt>フリーダイヤル</dt>
      <dd><a href="tel:0120693930">0120-693-930</a><br>年中無休 9:30 - 22:00</dd>
      <a href="<?php echo home_url();?>/policy/">プライバシーポリシー</a><br>
      <a href="<?php echo home_url();?>/company/">運営会社</a>
    </dl>

    <p class="copy">©Copyright 売却プラス匠, All Rights Reserved.</p>
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
        var target3 = $('#q3 input[type="text"]').val();
        if (!target3) {
          $("#step").addClass("error");
        } else {
          $("#step").removeClass("error");
          $("#step").removeClass("step3");
          $("#step").addClass("step4");
        }
      } else if ($("#step").hasClass("step4")) {
        var target4 = $('#q4 input[type="text"]').val();
        if (!target4) {
          $("#step").addClass("error");
        } else {
          $("#step").removeClass("error");
          $("#step").removeClass("step4");
          $("#step").addClass("step5");
        }
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
