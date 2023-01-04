<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo wp_get_document_title();?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <!-- OGP -->
    <meta property="og:url" content="https://endless-fukuoka.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ENDLESS" />
    <meta property="og:description" content="福岡・博多の脱毛サロンENDLESS（エンドレス）" />
    <meta property="og:site_name" content="ENDLESS" />
    <meta property="og:image"
        content="https://endless-fukuoka.com/wp-content/themes/ENDLESS%20theme/img/concept01.jpeg" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/reset.css" />
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/img/favicon.ico" />
    <link rel="stylesheet" href="./css/slick.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/common.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/responsive.css" />
    <script src="https://kit.fontawesome.com/30c76fcb1e.js" crossorigin="anonymous"></script>
    <!-- Adobe fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/gvf3taa.css">
</head>
<!-- ドロワーメニュー -->
<div class="bl_drawer">
    <ul class="bl_drawer_list">
        <!-- 開いたときの中身 -->
        <li class="bl_drawer_item">
            <a href=" <?php bloginfo('url');?>/concept">CONCEPT</a><span>コンセプト</span>
        </li>
        <li class="bl_drawer_item">
            <a href="<?php bloginfo('url');?>/beginner">BEGINNER</a><span>初めての方へ</span>
        </li>
        <li class="bl_drawer_item">
            <a href="<?php bloginfo('url');?>/menu">MENU</a><span>メニュー</span>
        </li>
        <li class="bl_drawer_item">
            <a href="<?php bloginfo('url');?>/whitening">WHITENING</a><span>ホワイトニング</span>
        </li>
        <li class="bl_drawer_item">
            <a href="<?php bloginfo('url');?>/mens">MENS</a><span>メンズ脱毛</span>
        </li>
        <li class="bl_drawer_item">
            <a href="<?php bloginfo('url');?>/faq">FAQ</a><span>よくある質問</span>
        </li>
        <li class="bl_drawer_item">
            <a href="<?php bloginfo('url');?>/recruit">RECRUIT</a><span>求人情報</span>
        </li>
        <li class="bl_drawer_item">
            <a href="<?php bloginfo('url');?>/contact">CONTACT</a><span>お問い合わせ</span>
        </li>
        <!-- <li class="bl_drawer_item">
            <a href="#company">COMPANY</a><span>企業情報</span>
        </li> -->
        <li class="bl_drawer_item">
            <a href="<?php bloginfo('url');?>/news-archive">NEWS</a><span>お知らせ</span>
        </li>
        <div class="bl_drawerBtn">
            <!-- ハンバーガーボタン -->
            <span class="hambarg"></span>
            <span class="hambarg"></span>
            <span class="hambarg"></span>
        </div>
    </ul>
    <div class="el_logo">
        <a href="<?php echo esc_url(home_url('/'));?>"><img
                src="<?php bloginfo('template_url');?>/img/ENDLESS_logo__white.png" alt="店舗ロゴ(白)" /></a>
    </div>
    <!--bl_drawerBtn-->
</div>
<!--bl_drawer-->

<body>
    <?php wp_body_open();?>
    <!-- header -->
    <header>
        <div class="ly_header_inner hp_flex hp_jcsa">
            <div class="el_logo">
                <a href="<?php echo esc_url(home_url('/'));?>"><img
                        src="<?php bloginfo('template_url');?>/img/ENDLESS_logo.png" alt="店舗ロゴ" /></a>
            </div>
            <div class="el_info">
                <a href="tel:+81-092-710-5907" class="el_tel">092-710-5907</a><br>
                <small>受付時間 11：00〜20：00</small>
            </div>
        </div>
    </header>
    <!-- パンくずリスト -->
    <div class="ly_breadcrumbs <?php if ( is_single() ) { echo ''; } ?> ">
        <div class="ly_inner">
            <div class="bl_breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
            </div>
        </div>
    </div>
    <?php wp_head();?>