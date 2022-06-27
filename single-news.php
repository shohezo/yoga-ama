<?php get_header(); ?>
<!-- ループ始まり -->
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="ly_section" id="single-news">
    <div class="ly_inner">
        <h2 class="el_section_ttl"><?php the_title(); ?></h2>
        <p class="bl_news_date"><?php echo get_the_date('Y.m.d'); ?></p>
        <div class="bl_news_cont">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php endwhile;endif; ?>
<!-- ループ終わり -->
<?php get_footer(); ?>