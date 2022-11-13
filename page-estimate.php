<?php get_header('lp'); ?>

<section class="form_wrap">
  <div class="container">
    <div class="sp catch">
      <img class="copy" src="<?php echo get_template_directory_uri(); ?>/img/lp/copy_sp.png" alt="不動産会社300社から無料比較">
      <!-- <img class="balloon" src="<?php echo get_template_directory_uri(); ?>/img/top/balloon.png" alt="30分に一人が依頼"> -->
    </div>

    <div class="box">
      <p class="appeal">ただの戸建て売却比較サイトではありません。<br>売却後お金がもらえる可能性が…！</p>

      <p class="check">
        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/lp/check_sp.png" alt="300件見積比較＆保険申請で売却価格をチェック！">
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/lp/check_pc.png" alt="300件見積比較＆保険申請で売却価格をチェック！">
      </p>

      <div id="step" class="step1">
        <div class="progress">
          <div class="gauge"><span class="bar"></span></div>
          <p class="percentage orange">
            <span class="num_paercenteage num1">0</span><span class="num_paercenteage num2">20</span><span class="num_paercenteage num3">40</span><span class="num_paercenteage num4">60</span><span class="num_paercenteage num5">80</span>%
          </p>
        </div>
        
        <p class="estimate_alert">入力漏れもしくは誤りがあります。もう一度ご入力ください。</p>

        <?php if(have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endif; ?>
        
        <button class="btn" onclick="location.href='#'"><p>次へ進む</p></button>
      </div>
    </div>

    <div id="box" class="box">
      <h3><img class="balloon" src="<?php echo get_template_directory_uri(); ?>/img/lp/why.png" alt="なんでお金がもらえるの？"></h3>

      <p class="yellow_line"><span>年間3000件以上のお家を調査している当社スタッフが、地震保険・火災保険に対応する箇所をくまなく調査。<br>被害箇所がある場合、保険申請をすることで、給付金をリフォーム資金・補修費用に充てることができます。</span></p>

      <p class="note">※火災保険・地震保険加入・持ち家の場合に限ります</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
