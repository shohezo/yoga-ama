<?php get_header(); ?>
<!-- ループ始まり -->
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="ly_section hp_ptLg hp_pbLg" id="single-schedule">
    <div class="ly_inner">
        <h2 class="el_single_ttl"><?php the_title(); ?></h2>
        <p class="bl_schedule_public">公開日：<?php echo get_the_date('Y.m.d'); ?></p>
        <p class="bl_schedule_update">
            最終更新日:<?php the_modified_date('Y.m.d') ?>
        </p>
        <div class="bl_schedule_cont">
            <?php the_content(); ?>
        </div>
        <!-- <a href="#" class="el_btn el_btn__wide"><span>ご予約はこちら</span></a> -->
        <p class="el_backBtn"><a href="#" onclick="history.back(); return false;">
                < 一覧へ戻る</a>
        </p>
    </div>
</div>
<?php endwhile;endif; ?>
<!-- ループ終わり -->
<?php get_footer(); ?>