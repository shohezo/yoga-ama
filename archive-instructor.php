<?php get_header(); ?>


<div class="ly_section" id="instructor-archive">
    <div class="ly_inner">
        <!-- <h2 class="el_section_ttl"><?php echo get_the_archive_title(); ?>紹介</h2> -->
        <div class="bl_card_wrapper hp_flex hp_ptMd hp_pbSm hp_column_sp">
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
                <figure class="bl_card_imgWrapper">
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
    </div>
</div>
<?php get_footer(); ?>