<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <!-- <link rel="shortcut icon" href="<?php echo home_url('asset/img/common/favicon.svg'); ?>" type="image/x-icon"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="stage">
        <header class="header">
            <div class="header_inner flx jfc_sb">
                <h1 class="logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <div class="header_logo">
                            <img src="<?php echo home_url('asset/img/common/logo.svg'); ?>" alt="">
                        </div>
                    </a>
                </h1>
                <div class="menuBtn trigger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <nav class="nav">
                    <div class="nav__mainnav">
                        <ul class="flx aic">
                            <li>
                                <div class="pc"><a href="<?php echo home_url('philosophy/'); ?>" class="parent_list">企業理念</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('philosophy/'); ?>">企業理念</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('service/'); ?>" class="parent_list">事業紹介</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('service/'); ?>">事業紹介</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('project/'); ?>" class="parent_list">施工事例</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('project/'); ?>">施工事例</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('message/'); ?>" class="parent_list">代表挨拶</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('message/'); ?>">代表挨拶</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('company/'); ?>" class="parent_list">会社情報</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('company/'); ?>">会社情報</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('recruit/'); ?>" class="parent_list">採用情報</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('ricruit/'); ?>">採用情報</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('contact/'); ?>" class="parent_list">お問い合わせ</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('contact/'); ?>">お問い合わせ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="menu">
                    <div class="base_menu_box">
                        <div class="menu_nav flx jfc_sb">
                            <div class="box left flx jfc_sb clm">
                                <a href="<?php echo home_url('/'); ?>" class="parent_link">トップページ</a>
                                <a href="<?php echo home_url('special/'); ?>" class="parent_link">建物に電気が通るまで</a>
                                <a href="<?php echo home_url('philosophy/'); ?>" class="parent_link">企業理念</a>
                                <a href="<?php echo home_url('message/'); ?>" class="parent_link">代表挨拶</a>
                                <a href="<?php echo home_url('talk/'); ?>" class="parent_link flag">対談一覧</a>
                                <a href="<?php echo home_url('service/'); ?>" class="parent_link">事業案内</a>
                            </div>
                            <div class="box right flx jfc_sb clm">
                                <a href="<?php echo home_url('project/'); ?>" class="parent_link">施工事例</a>
                                <a href="<?php echo home_url('company/'); ?>" class="parent_link">会社情報</a>
                                <a href="<?php echo home_url('blog/'); ?>" class="parent_link">ブログ</a>
                                <a href="<?php echo home_url('recruit/'); ?>" class="parent_link">採用情報</a>
                                <a href="<?php echo home_url('contact/'); ?>" class="contact_link pc">お問い合わせ</a>
                            </div>
                            <a href="<?php echo home_url('contact/'); ?>" class="contact_link sp">お問い合わせ</a>
                        </div>
                        <div class="menu_foot flx jfc_sb aic">
                            <ul class="sns_list flx aic jfc_sb">
                                <li><a href="<?php echo home_url('privacypolicy/'); ?>">プライバシーポリシー</a></li>
                                <!-- <li><a href="https://www.instagram.com/mekikinin/?hl=ja" target="_blank" class="hvrop">
                                        <img src="<?php echo home_url('asset/img/common/icon_youtube.png'); ?>" alt="">
                                    </a></li>
                                <li><a href="https://twitter.com/youki_ide" target="_blank" class="hvrop">
                                        <img src="<?php echo home_url('asset/img/common/icon_tw.png'); ?>" alt="">
                                    </a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
