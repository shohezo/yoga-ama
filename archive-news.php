<?php get_header(); ?>

<div class="ly_section" id="news-archive">
    <div class="ly_inner">
        <div class="bl_news_wrapper">
            <h2 class="el_section_ttl"><?php echo get_the_archive_title(); ?>一覧</h2>
            <!-- メインループ始まり -->
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <a href="<?php the_permalink();?>">
                <ul class="bl_news_list">
                    <li class="bl_news_item hp_flex hp_column">
                        <p class="bl_news_date"><?php echo get_the_date('Y.m.d'); ?></p>
                        <p class="bl_news_ttl"><?php the_title(); ?></p>
                    </li>
                </ul>
            </a>
            <?php endwhile;endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>