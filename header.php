<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo wp_get_document_title();?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/reset.css" />
    <link rel="icon" type="image/-icon" href="./img/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/common.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/responsive.css" />
    <script src="https://kit.fontawesome.com/30c76fcb1e.js" crossorigin="anonymous"></script>
    <!-- Adobe fonts -->
    <script>
    (function(d) {
        var config = {
                kitId: 'xvg5lni',
                scriptTimeout: 3000,
                async: true
            },
            h = d.documentElement,
            t = setTimeout(function() {
                h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
            a = this.readyState;
            if (f || a && a != "complete" && a != "loaded") return;
            f = true;
            clearTimeout(t);
            try {
                Typekit.load(config)
            } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s)
    })(document);
    </script>
</head>
<!-- ドロワーメニュー -->
<div class="bl_drawer">
    <ul class="bl_drawer_list">
        <!-- 開いたときの中身 -->
        <li class="bl_drawer_item"><a href="<?php echo esc_url(home_url('/'));?>">ホーム</a></li>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/beginner">初めての方へ</a></li>
        <li class=" bl_drawer_item"><a href="<?php bloginfo('url');?>/price">料金</a></li>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/instructor">インストラクター</a></li>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/schedule">スケジュール</a></li>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/blog">ブログ</a></li>
        <div class="el_icon_wrapper hp_flex">
            <div class="el_icon">
                <a href="#"><img src="<?php bloginfo('template_url');?>/img/icon_insta.png" alt="インスタグラムのリンクアイコン" /></a>
            </div>
            <div class="el_icon">
                <a href="#"><img src="<?php bloginfo('template_url');?>/img/icon_fb.png" alt="フェイスブックのリンクアイコン" /></a>
            </div>
        </div>
    </ul>
    <div class="bl_drawerBtn">
        <!-- ハンバーガーボタン -->
        <span class="hambarg"></span>
        <span class="hambarg"></span>
        <span class="hambarg"></span>
    </div>
    <!--bl_drawerBtn-->
</div>
<!--bl_drawer-->
<!-- ページトップボタン -->
<!-- <a class="el_pageTop" href="#"><i class="fas fa-angle-double-up"></i></a> -->
<!-- スクロールダウン -->

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <header class="ly_header">
        <div class="ly_header_inner hp_flex hp_jcsb hp_aic">
            <a class="el_logo" href="<?php echo esc_url(home_url('/'));?>"><img
                    src="<?php bloginfo('template_url');?>/img/logo.png" alt="ロゴ画像" />
                <p>YOGA AMA</p>
            </a>
            <nav>
                <ul class="bl_headerNav">
                    <li class="bl_headerNav_item">
                        <a class="bl_headerNav_link" href="<?php echo esc_url(home_url('/'));?>">ホーム</a>
                    </li>
                    <li class="bl_headerNav_item">
                        <a class="bl_headerNav_link" href="<?php bloginfo('url');?>/beginner">初めての方へ</a>
                    </li>
                    <li class="bl_headerNav_item">
                        <a class="bl_headerNav_link" href="<?php bloginfo('url');?>/price">料金</a>
                    </li>
                    <li class="bl_headerNav_item">
                        <a class="bl_headerNav_link" href="<?php bloginfo('url');?>/instructor">インストラクター</a>
                    </li>
                    <li class="bl_headerNav_item">
                        <a class="bl_headerNav_link" href="<?php bloginfo('url');?>/schedule">スケジュール</a>
                    </li>
                    <li class="bl_headerNav_item">
                        <a class="bl_headerNav_link" href="<?php bloginfo('url');?>/blog">ブログ</a>
                    </li>
                </ul>
            </nav>
            <div class="bl_headerUtils">
                <a class="el_btn" href="<?php bloginfo('url');?>/reserve">ご予約はこちら</a>
            </div>
            <!-- /.bl_headerUtils -->
        </div>
        <!-- /.ly_header_inner -->
    </header>
    <!-- ヘッダー画像の条件分岐 -->
    <?php if(is_page('price')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/price.jpeg" alt="">
        <h2>PLAN&FEE</h2>
    </div>
    <?php }else if(is_post_type_archive('news')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/news.jpg" alt="">
        <h2>お知らせ</h2>
    </div>
    <?php }else if(is_post_type_archive('instructor')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/park.jpeg" alt="">
        <h2>INSTRUCTOR</h2>
    </div>
    <?php }else if(is_post_type_archive('schedule')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/schedule.jpg" alt="">
        <h2>SCHEDULE</h2>
    </div>
    <?php }else if(is_archive()){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/park.jpeg" alt="">
        <h2>BLOG</h2>
    </div>
    <?php }else if(is_page('contact')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/cta.jpg" alt="">
        <h2>お問い合わせ・資料請求</h2>
    </div>
    <?php }else if(is_page('beginner')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/beginner.jpg" alt="">
        <h2>BEGINNER</h2>
    </div>
    <?php }else if(is_page('reserve')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/reserve.jpg" alt="">
        <h2>RESERVE</h2>
    </div>
    <?php }else{}?>
    <!-- パンくずリスト -->
    <div class="ly_breadcrumbs<?php if ( is_single() ) { echo ' hp_mt100'; } ?>">
        <div class=" ly_inner">
            <div class="bl_breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
            </div>
        </div>
    </div>
    <?php wp_head();?>