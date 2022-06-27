<?php get_header(); ?>
<div class="ly_section" id="single-blog">
    <div class="ly_inner hp_flex hp_column_tb">
        <main>
            <!-- ループ始まり -->
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <div class="bl_blog_category">
                <?php
                $category = get_the_category(); 
                    echo $category[0]->cat_name;
                ?>
            </div>
            <h2 class="el_section_ttl"><?php the_title(); ?></h2>
            <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
            <p class="bl_blog_date">
                <time datetime="<?php echo esc_attr(get_the_date( DATE_W3C ));?>">
                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                </time>
            </p>
            <div class="bl_blog_thumbnail">
                <?php the_post_thumbnail();?>
            </div>
            <div class="bl_blog_cont">
                <?php the_content(); ?>
            </div>
            <?php endwhile;endif; ?>
            <!-- ループ終わり -->
            <!-- サイドバー・おすすめの記事 -->
            <div class="bl_myrecommended">
                <h4>おすすめの記事</h4>
                <?php $myposts = get_posts(array(
                'posts_per_page' => 3, //記事の表示件数
                'post__not_in' => array(get_the_ID()), //表示中のページ記事のIDを指定して除外
                'tag'    => 'pickup', // タグをスラッグで指定
                'orderby'=> 'rand'//表示する投稿を記事と同じカテゴリー全てからランダムで表示する

            ));
             ?>
                <?php if($myposts):
                foreach($myposts as $post):
                    setup_postdata($post);?>
                <article>
                    <a href="<?php the_permalink();?>">
                        <?php if( has_post_thumbnail()): ?>
                        <figure>
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <?php else: ?>
                        <figure>
                            <img src="<?php bloginfo('template_url');?>/img/dummy.jpg" alt=”ダミー画像”>
                        </figure>
                        <?php endif; ?>
                        <div class="bl_myrecommended_body">
                            <p><?php echo get_the_date('Y.m.d'); ?></p>
                            <p><?php
                                if(mb_strlen($post->post_title)>50) {
                                $title= mb_substr($post->post_title,0,50) ;
                                    echo $title . '...';
                                } else {
                                    echo $post->post_title;
                                }
                                ?>
                            </p>
                        </div>
                    </a>
                </article>
                <?php endforeach;
                wp_reset_postdata();
                endif;?>
                <!-- サイドバー・おすすめの記事ここまで -->
        </main>
        <div class="ly_sidebar">
            <!-- サイドバー・関連記事 -->
            <div class="bl_myrelated">
                <h4>関連記事</h4>
                <?php $myposts = get_posts(array(
                    'posts_per_page' => 3, //記事の表示件数
                    'post__not_in' => array(get_the_ID()), //表示中のページ記事のIDを指定して除外
                    'category__in'=> wp_get_post_categories(get_the_ID()), //表示中の記事と同じカテゴリーの投稿を表示
                    'orderby'=> 'rand'//表示する投稿を記事と同じカテゴリー全てからランダムで表示する
    
                ));
                 ?>
                <?php if($myposts):
                    foreach($myposts as $post):
                        setup_postdata($post);?>
                <article>
                    <a href="<?php the_permalink();?>">
                        <?php if( has_post_thumbnail()): ?>
                        <figure>
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <?php else: ?>
                        <figure>
                            <img src="<?php bloginfo('template_url');?>/img/dummy.jpg" alt=”ダミー画像”>
                        </figure>
                        <?php endif; ?>
                        <p>
                            <?php
                                if(mb_strlen($post->post_title)>20) {
                                $title= mb_substr($post->post_title,0,20) ;
                                    echo $title . '...';
                                } else {
                                    echo $post->post_title;
                                }
                                ?></p>
                    </a>
                </article>
                <?php endforeach;
                    wp_reset_postdata();
                    endif;?>
            </div>
            <!-- サイドバー・カテゴリーウィジェット -->
            <div class="el_widget_category">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>