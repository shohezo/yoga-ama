<?php get_header(); ?>


<div class="ly_section" id="instructor-archive">
    <div class="ly_inner">
        <!-- <h2 class="el_section_ttl"><?php echo get_the_archive_title(); ?>紹介</h2> -->
        <div class="bl_card_wrapper hp_flex hp_ptMd hp_pbSm hp_column_sp">
            <!-- メインループ始まり -->
            <?php
            $loop = new WP_Query(array("post_type" => "instructor"));
            if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
            ?>
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