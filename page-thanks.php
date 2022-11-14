<?php get_header('lp'); ?>

<section class="form_wrap">
  <div class="container">
    <div class="sp catch">
      <img class="copy" src="<?php echo get_template_directory_uri(); ?>/image/copy_sp.png" alt="不動産会社300社から無料比較">
      <!-- <img class="balloon" src="<?php echo get_template_directory_uri(); ?>/img/top/balloon.png" alt="30分に一人が依頼"> -->
    </div>

    <div class="box">
      <p class="appeal">ただの戸建て売却比較サイトではありません。<br>売却後お金がもらえる可能性が…！</p>

      <p class="check">
        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/image/check_sp.png" alt="300件見積比較＆保険申請で売却価格をチェック！">
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/image/check_pc.png" alt="300件見積比較＆保険申請で売却価格をチェック！">
      </p>

      <div class="step6">
        <div class="progressbar">
          <div class="gauge"><span class="bar"></span></div>
          <p class="percentage orange"><span class="num_paercenteage">100</span>%</p>
        </div>

        <?php if(have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer('lp'); ?>
