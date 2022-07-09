<?php get_header(); ?>

<div class="ly_section hp_ptLg hp_pbLg" id="schedule-archive">
    <div class="ly_inner">
        <div class="hp_mbMd">
            <h2 class="el_section_ttl hp_mbSm">毎月のスケジュールはこちら</h2>
            <p class="bl_section_txt hp_centering">
                ヨガアマでは、お客様のライフスタイルに合わせた<br>
                様々なプランをご用意しております。
            </p>
        </div>
        <div class="bl_schedule_wrapper">
            <!-- メインループ始まり -->
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <a href="<?php the_permalink();?>">
                <ul class="bl_schedule_list">
                    <li class="bl_schedule_item hp_flex hp_column">
                        <p class="bl_schedule_date"><?php echo get_the_date('Y.m.d'); ?></p>
                        <p class="bl_schedule_ttl"><?php the_title(); ?></p>
                    </li>
                </ul>
            </a>
            <?php endwhile;endif; ?>
        </div>
        <!-- ページネーションの実装 -->
        <?php the_posts_pagination(
        array(
            'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
            'prev_next'     => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
            'prev_text' => '<i class="fa fa-caret-left"></i>', // 「前へ」リンクのテキスト
            'next_text' => '<i class="fa fa-caret-right"></i>', // 「次へ」リンクのテキスト
            'type'          => 'list', // 戻り値の指定 (plain/list)
            )
        ); ?>
        <!-- ページネーションの実装 ここまで -->
    </div>
</div>
<?php get_footer(); ?>