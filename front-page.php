<?php get_header(); ?>
<?php
/* 
Template Name: フロントページ
*/
?>

<div class="ly_fv">
    <img class="el_fv_img" src="<?php bloginfo('template_url');?>/img/fv.jpg" alt="海岸でヨガをする女性" />
    <div class="el_icon_wrapper">
        <div class="el_icon">
            <a href="https://www.instagram.com/yoga_ama/" target="_blank" rel="noopener noreferrer"><img
                    src="<?php bloginfo('template_url');?>/img/icon_insta.png" alt="インスタグラムのリンクアイコン" /></a>
        </div>
        <div class="el_icon">
            <a href="#" target="_blank" rel="noopener noreferrer"><img
                    src="<?php bloginfo('template_url');?>/img/icon_fb.png" alt="フェイスブックのリンクアイコン" /></a>
        </div>
    </div>
    <div class="bl_fv_copy">
        <div class="bl_fv_copy_sub">サブコピー</div>
        <div class="bl_fv_copy_main">メインコピー</div>
        <div class="bl_fv_copy_text">テキストテキストテキスト</div>
        <div class="bl_fv_copy_text">テキストテキストテキスト</div>
        <div class="bl_fv_copy_text">テキストテキストテキスト</div>
    </div>
</div>
<section class="ly_section hp_ptLg" id="concept">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Concept</h2>
        <span class="el_section_ttl_sub hp_mbSm">私たちの想い</span>
        <div class="bl_section hp_flex hp_ptSm hp_column_tb">
            <figure class="bl_section_imgWrapper">
                <img src="<?php bloginfo('template_url');?>/img/fv.jpeg" alt="振り返る女性" />
            </figure>
            <div class="bl_section_body">
                <h3 class="bl_section_header hp_mb30">
                    セクションヘッダーが入ります。<br />セクションヘッダーが入ります。
                </h3>
                <p class="bl_section_txt">
                    「どこにいっても満足いく結果が出ない…」<br />
                    「結果が出なくていくつものお店を利用した」<br />
                    「今までの経験上、脱毛は終わらない」<br />
                    そう思われているあなたに贈る<br class="hp_br-sp" />最後の脱毛サロン。<br />
                    ”あなたのキレイを永久に”をコンセプトに、<br />
                    お客様の美に寄り添うサロン。<br />
                    それがENDLESSです。
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ly_section hp_ptLg" id="beginner">
    <div class="ly_inner">
        <h2 class="el_section_ttl">For Beginner</h2>
        <span class="el_section_ttl_sub hp_mbSm">初めての方へ</span>
        <div class="bl_section hp_flex hp_ptSm hp_reverse hp_column_tb">
            <figure class="bl_section_imgWrapper">
                <img src="<?php bloginfo('template_url');?>/img/fv.jpeg" alt="振り返る女性" />
            </figure>
            <div class="bl_section_body">
                <h3 class="bl_section_header hp_mb30">
                    セクションヘッダーが入ります。<br />セクションヘッダーが入ります。
                </h3>
                <p class="bl_section_txt">
                    「どこにいっても満足いく結果が出ない…」<br />
                    「結果が出なくていくつものお店を利用した」<br />
                    「今までの経験上、脱毛は終わらない」<br />
                    そう思われているあなたに贈る<br class="hp_br-sp" />最後の脱毛サロン。<br />
                    ”あなたのキレイを永久に”をコンセプトに、<br />
                    お客様の美に寄り添うサロン。<br />
                    それがENDLESSです。
                </p>
                <a href="#" class="el_btn"><span>VIEW MORE</span></a>
            </div>
        </div>
    </div>
</section>
<section class="ly_section hp_ptLg" id="schedule">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Schedule</h2>
        <span class="el_section_ttl_sub hp_mbSm">スケジュール</span>
        <div class="bl_section hp_ptSm hp_tac">
            <p class="hp_centering hp_mtSm hp_mbLg">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
            <a href="#" class="el_btn"><span>VIEW MORE</span></a>
        </div>
    </div>
</section>
<section class="ly_section hp_ptLg" id="blog">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Blog</h2>
        <span class="el_section_ttl_sub hp_mbSm">ブログ</span>
        <div class="bl_blog_list hp_ptSm">
            <!-- メインループ始まり -->
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <a class="bl_blog_card" href="<?php the_permalink();?>">
                <div class="bl_blog_thumbnail">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="bl_blog_body">
                    <p class="bl_blog_date"><?php echo get_the_date('Y.m.d'); ?></p>
                    <p class="bl_blog_ttl"><?php
                                if(mb_strlen($post->post_title)>20) {$title= mb_substr($post->post_title,0,20) ;
                                echo $title . '...';} else {
                                echo $post->post_title;}
                            ?></p>
                </div>
            </a>
            <?php endwhile;endif; ?>
        </div>
    </div>
    <a href="#" class="el_btn hp_centering hp_mtSm"><span>VIEW MORE</span></a>
    </div>
</section>
<section class="ly_section hp_ptLg" id="reserve">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Reserve</h2>
        <span class="el_section_ttl_sub hp_mbSm">ご予約</span>
        <div class="bl_section hp_ptSm hp_tac">
            <div class="bl_section_body">
                <h3 class="bl_section_header hp_mb30">
                    セクションヘッダーが入ります。<br />セクションヘッダーが入ります。
                </h3>
                <p class="bl_section_txt hp_centering">
                    テキストテキストテキストテキスト
                    テキストテキストテキストテキスト
                    テキストテキストテキストテキスト
                    テキストテキストテキストテキスト
                </p>
            </div>
            <div class="ly_contaier hp_flex hp_mtMd hp_column_tb">
                <a class="bl_banner_wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/reserveBanner.png" alt="予約バナー画像" />
                </a>
                <a class="bl_banner_wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/resson_price.png" alt="れ" />
            </div>
        </div>
    </div>
    </div>
</section>
<section class="ly_section hp_ptLg" id="photo">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Photo</h2>
        <span class="el_section_ttl_sub hp_mbSm">フォトギャラリー</span>
        <?php if( function_exists('photo_gallery') ) { photo_gallery(1); } ?>
        <!-- <img src="<?php bloginfo('template_url');?>/img/gallery.jpg" alt="">
        <a href="#" class="el_btn hp_centering hp_mtSm"><span>VIEW MORE</span></a> -->
    </div>
</section>
<section class="ly_section hp_ptLg hp_pbMd" id="access">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Access</h2>
        <span class="el_section_ttl_sub hp_mbSm">アクセス</span>
        <div class="bl_section hp_flex hp_column_sp hp_ptSm hp_pbMd">
            <figure class="bl_section_imgWrapper">
                <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="ロゴ" />
            </figure>

            <div class="bl_section_body">
                <p class="bl_section_txt">
                    〒465-0024<br />
                    愛知県名古屋市名東区本郷二丁目１６３番地<br />
                    (地下鉄東山線本郷駅2番出口南側徒歩30秒)<br />
                    営業時間 9:00~21:00<br />
                <div class="el_tel hp_mtSm hp_mbSm">
                    tel:<a href="tel:+81-092-726-6591">
                        <span>052-726-6591</span>
                    </a>
                </div>
                <div class="el_notice">
                    ※駐車場はございません。近隣のコインパーキングをご利用くださいませ
                </div>
                </p>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.254636380229!2d137.01196875019727!3d35.175205465068984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60036570b6ed8cd1%3A0x31b2e4098c0c9ce2!2z44CSNDY1LTAwMjQg5oSb55-l55yM5ZCN5Y-k5bGL5biC5ZCN5p2x5Yy65pys6YO377yS5LiB55uu77yR77yW77yT!5e0!3m2!1sja!2sjp!4v1657249687368!5m2!1sja!2sjp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- <img src="<?php bloginfo('template_url');?>/img/map.jpg" alt=""> -->
    </div>
</section>
<section class="ly_section" id="banner">
    <div class="ly_inner">
        <div class="bl_section hp_tac hp_flex hp_jcsb hp_column_sp">
            <div class="bl_section_imgWrapper">
                <img src="<?php bloginfo('template_url');?>/img/seitai.jpeg" alt="">
            </div>
            <div class="bl_section_imgWrapper">
                <img src="<?php bloginfo('template_url');?>/img/yg-banner-150-150.jpeg" alt="">
            </div>
            <div class="bl_section_imgWrapper">
                <img src="<?php bloginfo('template_url');?>/img/acro-yoga-japan.jpeg" alt="">
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>