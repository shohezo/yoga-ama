<?php get_header(); ?>
<div class="ly_section hp_ptLg hp_pbMd" id="single-instructor">
    <div class="ly_inner hp_flex hp_jcsb hp_column_sp">
        <div class="ly_section_left">
            <figure class="bl_section_imgWrapper">
                <?php the_post_thumbnail(); ?>
            </figure>
            <h2 class="bl_section_name"><?php the_title(); ?></h2>
        </div>
        <div class="ly_section_right">
            <div class="hp_mbMd">
                <p class="bl_section_header">Profile</p>
                <div class="bl_section_txt">
                    <?php echo CFS()->get('career'); ?>
                </div>
            </div>
            <p class="bl_section_header">Message</p>
            <div class="bl_section_txt">
                <?php echo CFS()->get('message'); ?>
            </div>
        </div>
    </div>
    <div class="ly_inner">
        <div class="el_icon">
            <a href="#" target="_blank" rel="noopener noreferrer"><img
                    src="<?php bloginfo('template_url');?>/img/icon_insta.png" alt="インスタグラムのリンクアイコン" /></a>
        </div>
    </div>
</div>
<?php get_footer(); ?>