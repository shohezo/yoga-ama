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
                <p class="bl_section_header">Message</p>
<<<<<<< HEAD
                <div class="bl_section_txt">
                    <?php echo CFS()->get("message"); ?>
                </div>
            </div>
            <div class="hp_mbMd">
                <p class="bl_section_header">Profile</p>
                <div class="bl_section_txt">
                    <?php echo CFS()->get("career"); ?>
                </div>
            </div>
            <p class="bl_section_header">Lesson</p>
            <div class="bl_section_txt">
                <p><?php echo CFS()->get("lesson01"); ?></p>
                <p><?php echo CFS()->get("lesson02"); ?></p>
                <p><?php echo CFS()->get("lesson03"); ?></p>
                <p><?php echo CFS()->get("lesson04"); ?></p>
                <p><?php echo CFS()->get("lesson05"); ?></p>
                <p><?php echo CFS()->get("lesson06"); ?></p>
=======
                <div class="bl_section_txt">
                    <?php echo CFS()->get("message"); ?>
                </div>
            </div>
            <p class="bl_section_header">Profile</p>
            <div class="bl_section_txt">
                <?php echo CFS()->get("career"); ?>
>>>>>>> f0740e124189947df60e43aca35da0688bad0b74
            </div>
        </div>
    </div>
    <div class="ly_inner">
        <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
        <p><?php the_content(); ?></p>
        <?php
        endwhile; ?>
        <?php endif; ?>

        <!-- <div class="el_icon">
            <a href="<?php echo CFS()->get(
                "Instagram"
            ); ?>" target="_blank" rel="noopener noreferrer"><img
                    src="<?php bloginfo(
                        "template_url"
                    ); ?>/img/icon_insta.png" alt="インスタグラムのリンクアイコン" /></a>
        </div> -->
    </div>
</div>
<?php get_footer(); ?>
