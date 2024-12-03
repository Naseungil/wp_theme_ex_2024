<?php get_header()?>

  <?php if ( is_user_logged_in() ) :?>
    <a href="<?php echo wp_logout_url()?>">로그아웃</a>
  <?php	else :?>
    <a href="<?php bloginfo('url') ?>/login/">로그인</a>
    <a href="<?php bloginfo('url') ?>/wp-login.php?action=register">회원가입</a>
  <?php	endif;?>


<?php get_footer()?>