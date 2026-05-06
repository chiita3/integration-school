<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header>
    <div class="logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_footer.png" alt="アイユニティ" class="logo-img"></a></div>
    <div class="hamburger" id="hamburger" aria-label="メニュー">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav id="nav-menu">
      <div class="nav-inner">
        <ul class="main-menu">
          <li><a href="<?php echo home_url('/'); ?>">トップ</a></li>
          <li class="has-dropdown">
            <a href="<?php echo home_url('/#program'); ?>">受講コース</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo home_url('/basic/'); ?>">ベーシックコース</a></li>
              <li><a href="<?php echo home_url('/advance/'); ?>">アドバンスコース</a></li>
              <li><a href="<?php echo home_url('/event/'); ?>">ワークショップ＆イベント</a></li>
              <li><a href="<?php echo home_url('/summary/'); ?>">講座一覧</a></li>
            </ul>
          </li>
          <li><a href="<?php echo home_url('/#news'); ?>">News</a></li>
          <li><a href="<?php echo home_url('/#faq'); ?>">よくある質問</a></li>
        </ul>
        <div class="nav-divider"></div>
        <div class="sub-menu-group">
          <a href="https://x.com/yuripon0723" target="_blank" rel="noopener">X（旧：Twitter）</a>
          <a href="https://www.instagram.com/supi_kasan_yuriko/" target="_blank" rel="noopener">Instagram</a>
          <a href="https://www.facebook.com/iunityYurikoOhno/" target="_blank" rel="noopener">Facebook</a>
          <a href="https://m.youtube.com/channel/UCiFX6drdropEMd6ipW5f64Q" target="_blank" rel="noopener">YouTube</a>
          <a href="https://ameblo.jp/iunityyuri/" target="_blank" rel="noopener">Abemaブログ</a>
          <a href="https://creators.spotify.com/pod/profile/ohno-yuriko/" target="_blank" rel="noopener">Spotify</a>
        </div>
        <div class="sub-menu-group legal-links">
          <a href="https://www.ohnoyuriko.com/contact" target="_blank" rel="noopener">お問い合わせ</a>
          <a href="https://www.ohnoyuriko.com/privacypolicy" target="_blank" rel="noopener">プライバシーポリシー</a>
          <a href="https://www.ohnoyuriko.com/legal" target="_blank" rel="noopener">特定商取引に関する法律に基づく表示</a>
        </div>
      </div>
    </nav>
  </header>

  <?php if (is_front_page()) : ?>
  <!-- FV Hero -->
  <section class="hero-wrapper">
    <div class="hero-slider">
      <div class="overlay"></div>
      <div class="slide-item active"></div>
      <div class="slide-item"></div>
      <div class="slide-item"></div>
    </div>
    <div class="hero-content"></div>
  </section>
  <?php endif; ?>
