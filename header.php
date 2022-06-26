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
                kitId: "xvg5lni",
                scriptTimeout: 3000,
                async: true,
            },
            h = d.documentElement,
            t = setTimeout(function() {
                h.className =
                    h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = "https://use.typekit.net/" + config.kitId + ".js";
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
            a = this.readyState;
            if (f || (a && a != "complete" && a != "loaded")) return;
            f = true;
            clearTimeout(t);
            try {
                Typekit.load(config);
            } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s);
    })(document);
    </script>
</head>
<!-- ドロワーメニュー -->
<div class="bl_drawer">
    <ul class="bl_drawer_list">
        <!-- 開いたときの中身 -->
        <li class="bl_drawer_item"><a href="#">ホーム</a></li>
        <li class="bl_drawer_item"><a href="#about">初めての方へ</a></li>
        <li class="bl_drawer_item"><a href="#system">料金</a></li>
        <li class="bl_drawer_item"><a href="#question">インストラクター</a></li>
        <li class="bl_drawer_item"><a href="#gallery">スケジュール</a></li>
        <li class="bl_drawer_item"><a href="#contact">ブログ</a></li>
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
        <div class="ly_header_inner hp_flex hp_jcfe hp_aic">
            <nav>
                <ul class="bl_headerNav">
                    <li class="bl_headerNav_item">
                        <a class="bl_headerNav_link" href="<?php echo esc_url(home_url('/'));?>">ホーム</a>
                    </li>
                    <li class="bl_headerNav_item">
                        <a class="bl_headerNav_link" href="#">初めての方へ</a>
                    </li>
                    <li class="bl_headerNav_item">
                        <a class="bl_headerNav_link" href="#">料金</a>
                    </li>
                    <li class="bl_headerNav_item">
                        <a class="bl_headerNav_link" href="#">インストラクター</a>
                    </li>
                    <li class="bl_headerNav_item">
                        <a class="bl_headerNav_link" href="#">スケジュール</a>
                    </li>
                    <li class="bl_headerNav_item">
                        <a class="bl_headerNav_link" href="#">ブログ</a>
                    </li>
                </ul>
            </nav>
            <div class="bl_headerUtils">
                <a class="el_btn" href="#">ご予約はこちら</a>
            </div>
            <!-- /.bl_headerUtils -->
        </div>
        <!-- /.ly_header_inner -->
        <a class="el_logo" href="#"><img src="<?php bloginfo('template_url');?>/img/logo.png" alt="ロゴ画像" /></a>
    </header>
    <?php wp_head();?>