<?php get_header(); ?>


<div class="ly_section hp_ptLg" id="instructor-archive">
    <div class="ly_inner">
        <div class="hp_mbMd">
            <h2 class="el_section_ttl hp_mbSm hp_jp">インストラクターの<br class="hp_br-sp">ご紹介</h2>
            <p class="bl_section_txt hp_tac">
                経験豊富で個性豊かなインストラクターたち。<br>
                あなたとの出会いを楽しみにしております。
            </p>
        </div>
        <div class="bl_card_wrapper hp_flex hp_ptSm hp_pbSm hp_column_sp">
            <!-- メインループ始まり -->
            <?php
            $args = [
                     'post_type' => 'instructor',//投稿タイプ名
                    'posts_per_page' => 20,//アーカイブの表示件数をここで変更
                    'paged' => $page//ページングがあるなら記述
                        ];
            $the_query = new WP_Query($args);
                        ?>
            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <article class="bl_card">
                <figure class="bl_card_imgWrapper" data-aos="zoom-in">
                    <?php the_post_thumbnail(); ?>
                </figure>
                <div class="bl_card_body">
                    <h2 class="bl_card_name"><?php the_title(); ?></h2>
                    <!-- typeここから -->
                    <?php
                    $values = CFS()->get( 'type' );
                    foreach ( $values as $key => $label ):
                    ?>
                    <span class="bl_card_type"><?php echo $label; ?></span>
                    <?php endforeach; ?>
                    <!-- typeここまで -->
                    <a href="<?php the_permalink(); ?>" class="el_btn el_btn__square hp_mb10">
                        PROFILE
                    </a>
                </div>
            </article>
            <?php endwhile; endif; ?>
        </div>
        <section class="ly_section hp_pbLg" id="reserve">
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
    </div>
</div>
<?php get_footer(); ?>