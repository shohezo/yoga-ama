<?php get_header(); ?>
<?php
/* 
Template Name: レンタルページ
*/
?>
<section class="ly_section hp_ptLg" id="rental-page">
    <div class="ly_inner">
        <!-- キャンペーン -->
        <div id="lead" class="hp_pbMd">
            <h2 class="el_section_header">スタジオレンタル</h2>
            <div class="bl_section hp_ptSm hp_tac">
                <p class="bl_section_txt hp_centering">
                    YOGA AMAでは、スタジオのレンタルも行っています。
                    レギュラーレッスンやプライベートレッスン、ワークショップの開催時間以外の時間をご利用頂けます。
                </p>
            </div>
        </div>
        <!-- <h2 class="el_section_ttl">Why<br class="hp_br-sp" />YOGA AMA?</h2> -->
        <div class="bl_section hp_flex hp_ptSm hp_column_tb hp_aic">
            <figure class="bl_section_imgWrapper hp_pbSm">
                <img src="<?php bloginfo('template_url');?>/img/rental_studio.jpeg" alt="" />
            </figure>
            <div class="bl_section_body">
                <div class="bl_section_price hp_flex hp_aic hp_mb10" data-aos="fade-up">
                    <span>利用料金</span>
                    <p>1,800<small>円/時間</small></p>
                </div>
                <div class="bl_notice hp_ptSm">
                    <!-- <p class="bl_notice_title">ご注意事項</p> -->
                    <ul>
                        <li>※税込価格です。</li>
                        <li>※前後10分前後利用可能です。</li>
                        <li>※最低利用時間は2時間からとなります。</li>
                        <li>※12～3月、6～9月は、冷暖房費が追加660円(税込）となります。
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bl_section hp_ptMd">
            <div class="bl_section_header" data-aos="fade-right">ご利用について</div>
            <div class="bl_section_txt">
                <p>空き状況や詳細についてはメール、またはお電話にてお問い合わせください。</p>
                <p>事前に現地見学も承っております。</p>
            </div>
        </div>
        <div class="bl_section hp_ptMd">
            <div class="bl_section_header" data-aos="fade-right">備品について</div>
            <div class="bl_section_txt">
                <p class="hp_mbSm">以下の備品を無料でお貸し出し致します。</p>
                <ul>
                    <li>ヨガマット</li>
                    <li>ブランケット</li>
                    <li>ブロック</li>
                    <li>ヨガベルト</li>
                    <li>ホワイトボード</li>
                    <li>スピーカー（スマホ・iPod・CD対応）</li>
                </ul>
            </div>
        </div>
        <div class="bl_section hp_ptMd">
            <div class="bl_section_header" data-aos="fade-right">キャンセルについて</div>
            <div class="bl_section_txt">
                <p class="hp_mbSm">キャンセルされる場合はキャンセル日により下記のキャンセル料金を頂きます。 </p>
                <ul>
                    <li class="hp_listStyleNone">3日前迄：無料</li>
                    <li class="hp_listStyleNone">2日前迄：30％</li>
                    <li class="hp_listStyleNone">1日前迄：50％</li>
                    <li class="hp_listStyleNone">当日・無連絡：100％</li>
                </ul>
            </div>
        </div>
        <div class="bl_section hp_ptMd">
            <div class="bl_section_header" data-aos="fade-right">ご利用に際して注意事項</div>
            <div class="bl_section_txt">
                <p>ネットワークビジネスのように組織構築を行うような特定のビジネスへの勧誘につながるセミナーなどでのご利用はご遠慮願います。</p>
            </div>
        </div>
    </div>
</section>
<section class="ly_section hp_ptLg hp_pbLg" id="reserve">
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
<?php get_footer(); ?>