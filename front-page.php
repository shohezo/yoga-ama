<?php get_header(); ?>
<?php
/* 
Template Name: フロントページ
*/
?>

<div class="ly_fv">
    <img class="el_fv_img" src="<?php bloginfo('template_url');?>/img/fv01.jpg" alt="ヨガをする女性" />
    <div class="el_icon_wrapper">
        <div class="el_icon">
            <a href="https://www.instagram.com/yoga_ama/" target="_blank" rel="noopener noreferrer"><img
                    src="<?php bloginfo('template_url');?>/img/icon_insta.png" alt="インスタグラムのリンクアイコン" /></a>
        </div>
        <div class="el_icon">
            <a href="https://www.facebook.com/yogastudioama" target="_blank" rel="noopener noreferrer"><img
                    src="<?php bloginfo('template_url');?>/img/icon_fb.png" alt="フェイスブックのリンクアイコン" /></a>
        </div>
        <div class="el_icon">
            <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=800mbsre" target="_blank"
                rel="noopener noreferrer"><img src="<?php bloginfo('template_url');?>/img/line.png"
                    alt="LINEのリンクアイコン" /></a>
        </div>
    </div>
    <div class="bl_fv_copy">
        <div class="bl_fv_copy_main" data-aos="fade-right" data-aos-duration="3000">人生<span>に</span>ヨガ<span>を! </span>
        </div>
        <div class="bl_fv_copy_txt">YOGA AMAはヨガと通じて</div>
        <div class="bl_fv_copy_txt">あなたの生活をサポートする</div>
        <div class="bl_fv_copy_txt">本郷初のヨガスタジオです。</div>
    </div>
    <div class="bl_fv_campaign hp_flex hp_aic">
        <div>
            <div class="bl_fv_campaign_main">体験・入会<br>キャンペーン</div>
        </div>
        <a href="<?php bloginfo('url');?>/beginner"><img src="<?php bloginfo('template_url');?>/img/fv_campaign.png"
                alt="ファーストビューのキャンペーンバナー"></a>
    </div>
</div>
<section class="ly_section hp_ptLg" id="concept">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Concept</h2>
        <span class="el_section_ttl_sub hp_mbSm">私たちの想い</span>
        <div class="bl_section hp_flex hp_ptSm hp_column_tb">
            <figure class="bl_section_imgWrapper">
                <img src="<?php bloginfo('template_url');?>/img/concept.jpg" alt="ヨガのレッスン風景" />
            </figure>
            <div class="bl_section_body">
                <h3 class="bl_section_header hp_mb30" data-aos="fade-up">
                    頑張りすぎた<br />ココロとカラダへ。
                </h3>
                <p class="bl_section_txt">
                    運動不足の解消、ダイエット、スタイルアップ、健康になりたい、瞑想したい…目的や動機は人それぞれ。同時にカラダにエネルギーを巡らせ、日々のしがらみやストレスから一時的に自らを開放してみてはいかがでしょうか。
                    そんな想いから私達は、ヨガを充実した生活を送る為の一つのツールとして日常生活に取り入れて頂ける空間を目指しています。 </p>
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
                <img src="<?php bloginfo('template_url');?>/img/front_page_beginner.jpg" alt="ヨガをする親子" />
            </figure>
            <div class="bl_section_body">
                <h3 class="bl_section_header hp_mb30" data-aos="fade-up">
                    YOGA AMAでヨガデビュー
                </h3>
                <p class="bl_section_txt">
                    ヨガの基本は「ポーズ」と「呼吸」。これを正しく行うことで体の歪みが矯正され、丈夫でしなやかな身体に変化することはもちろん、穏やか揺るぎない活力に満ちた気持ちを手に入れることができます。<br>
                    仕事前後、休みの日、家事や育児の間にでも構いません。
                    慌ただしい日常の中にほんの少し自分を見つめ直す時間とリラックスできる空間を体感してみてください。
                    当スタジオでは体験レッスンもご用意しています。
                </p>
            </div>
        </div>
        <a href="<?php bloginfo('url');?>/beginner" class="el_btn hp_mtSm"><span>VIEW MORE</span></a>
    </div>
</section>
<section class="ly_section hp_ptLg" id="schedule">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Schedule</h2>
        <span class="el_section_ttl_sub hp_mbSm">スケジュール</span>
        <div class="bl_section hp_ptSm hp_tac">
            <p class="hp_centering hp_mbMd" data-aos="fade-up">
                YOGA AMAではバラエティに富んだクラスを毎月更新しています！<br>
                こちらからぜひご覧ください。<br>
            </p>
            <a href="<?php bloginfo('url');?>/schedule" class="el_btn"><span>VIEW MORE</span></a>
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
            <a class="bl_blog_card" data-aos="fade-up" href="<?php the_permalink();?>">
                <div class="bl_blog_thumbnail">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="bl_blog_body hp_flex hp_jcsb">
                    <p class="bl_blog_date"><?php echo get_the_date('Y.m.d'); ?></p>
                    <p class="bl_blog_ttl"><?php
                                if(mb_strlen($post->post_title)>20) {$title= mb_substr($post->post_title,0,20) ;
                                echo $title . '...';} else {
                                echo $post->post_title;}
                            ?></p>
                    <p class="bl_blog_excerpt">
                        <?php
                            $p = get_post(get_the_ID());
                            $content = strip_shortcodes( $p->post_content );
                            echo '<p>' .wp_html_excerpt($content, 20, '[...]'). '</p>'; 
                            ?>
                    </p>
                </div>
            </a>
            <?php endwhile;endif; ?>
        </div>
    </div>
    <a href="#" class="el_btn hp_mtSm"><span>VIEW MORE</span></a>
</section>
<section class="ly_section hp_ptLg" id="reserve">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Reserve</h2>
        <span class="el_section_ttl_sub">ご予約</span>
        <div class="bl_section hp_tac">
            <div class="ly_container hp_flex hp_mtMd hp_column_tb">
                <a href="<?php bloginfo('url');?>/reserve" class="bl_banner_wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/reserveBanner.png" alt="ネット予約バナー画像" />
                </a>
                <a href="<?php bloginfo('url');?>/price" class="bl_banner_wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/resson_price.png" alt="レッスン・料金についてのバナー画像" />
                </a>
            </div>
        </div>
    </div>
</section>
<section class="ly_section hp_ptLg" id="photo">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Photo</h2>
        <span class="el_section_ttl_sub hp_mbSm">フォトギャラリー</span>
        <?php if( function_exists('photo_gallery') ) { photo_gallery(1); } ?>
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
            <div class="bl_section_imgWrapper" data-aos="fade-up" data-aos-duration="2000">
                <a href="https://seitai-ama.com/" target="_blank" rel="noopener noreferrer"><img
                        src="<?php bloginfo('template_url');?>/img/seitai.jpeg" alt="本郷駅前整体 アマのリンク画像"></a>
            </div>
            <div class="bl_section_imgWrapper" data-aos="fade-up" data-aos-duration="2500">
                <a href="https://shop.yoga-gene.com/?gclid=CjwKCAjwrNmWBhA4EiwAHbjEQKPinnblm_TWTuxv21rFAppjoC0uJsq98XoETxR7mP1os5flfAcokBoCOzQQAvD_BwE"
                    target="_blank" rel="noopener noreferrer"><img
                        src="<?php bloginfo('template_url');?>/img/yg-banner-150-150.jpeg" alt="ヨガジェネレーションのリンク画像"></a>
            </div>
            <div class="bl_section_imgWrapper" data-aos="fade-up" data-aos-duration="3000">
                <a href="https://acroyogajapan.tokyo/" target="_blank" rel="noopener noreferrer"><img
                        src="<?php bloginfo('template_url');?>/img/acro-yoga-japan.jpeg" alt=""></a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>