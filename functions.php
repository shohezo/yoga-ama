<?php
/* グーテンベルグのCSSをテーマ側で読み込み */
function mytheme_setup(){
	//theme.min.cssの有効化
	add_theme_support('wp-block-styles');

	//縦横比を維持したレスポンシブを有効化
	add_theme_support('responsive-embeds');

	//editor-style.cssを有効化&読み込み
	add_theme_support('editor-styles');
	add_editor_style('editor-style.css');

	//ページタイトルを有効化
	add_theme_support('title-tag');

	//link,style,scriptのHTML5を有効化
	add_theme_support('html5',array(
		'style',
		'script'
	));
	//アイキャッチ画像の有効化
	add_theme_support('post-thumbnails');

	//カスタム投稿タイプ"インストラクター"で画像挿入機能追加（150×150でトリミング）
	add_theme_support( 'post-thumbnails', array( 'instructor' ) );
	// set_post_thumbnail_size( 150, 150, true );
}
add_action('after_setup_theme','mytheme_setup');




/* カスタム投稿タイプの追加（お知らせ） */
function cpt_register_schedule() { //add_actionの２つのパラメーターを定義
	$labels = [
		"singular_name" => "schedule",
		"edit_item" => "schedule",
		"menu_name" => "スケジュール",//管理画面のメニュータイトルに反映
	];
	$args = [
		"label" => "schedule", //アーカイブページのタイトル、パンクズの名前に反映される！
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "schedule", "with_front" => true ], //スラッグをscheduleに設定
		"query_var" => true,
		"menu_position" => 5,
		"supports" => [ "title", "editor", "thumbnail" ],
	];
	register_post_type( "schedule", $args );
}
add_action( 'init', 'cpt_register_schedule' );

/* カスタム投稿タイプの追加(インストラクター)*/
function cpt_register_instructor() { //add_actionの２つのパラメーターを定義
	$labels = [
		"singular_name" => "instructor",
		"edit_item" => "instructor",
		'add_new' => _x( '新規追加', 'instructor' ),
        'add_new_item' => _x( '新しいインストラクタープロフィールを追加', 'instructor' ),
        'edit_item' => _x( 'インストラクタープロフィールを編集', 'instructor' ),
        'new_item' => _x( '新しいインストラクター', 'instructor' ),
        'view_item' => _x( 'インストラクタープロフィールを見る', 'instructor' ),
        'search_items' => _x( 'インストラクター検索', 'instructor' ),
        'not_found' => _x( 'プロフィールが見つかりません', 'instructor' ),
        'not_found_in_trash' => _x( 'ゴミ箱にプロフィールはありません', 'instructor' ),
        'parent_item_colon' => _x( '親インストラクター:', 'instructor' ),
        'menu_name' => _x( 'インストラクター', 'instructor' ),//管理画面のメニュータイトルに反映
	];
	$args = [
		"label" => "instructor", //アーカイブページのタイトル、パンクズの名前に反映される！
		"labels" => $labels,
		"description" => "経歴紹介",
		"public" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "instructor", "with_front" => true ], //スラッグをinstructorに設定
		"query_var" => true,
		"menu_position" => 6,
		"supports" => [ "title", "editor", "thumbnail" ],
	];
	register_post_type( "instructor", $args );
}
add_action( 'init', 'cpt_register_instructor' );

//管理画面でカスタム投稿の項目にアイコンの追加
function add_menu_icons_styles(){
	echo '<style>
		 #adminmenu #menu-posts-instructor div.wp-menu-image:before {
			  content: "\f307";
		 }
	</style>';
	echo '<style>
		 #adminmenu #menu-posts-schedule div.wp-menu-image:before {
			  content: "\f489";
		 }
	</style>';
}
add_action( 'admin_head', 'add_menu_icons_styles' );

/* archive.phpの設定 */
function post_has_archive($args,$post_type){ //設定後に必ずパーマリンクを設定すること
    if('post' == $post_type){
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog';//アーカイブページのurlを定義
        $args['label'] = 'ブログ'; //管理画面の投稿ラベル名をブログに変換
    }
    return $args;
}
add_filter('register_post_type_args','post_has_archive',10,2);

//アーカイブページ 投稿表示件数の設定
function custom_posts_per_page($query) {
    if(is_admin() || ! $query->is_main_query()){
        return;
    }
    // 制作実績
    if($query->is_archive('blog')) {
        $query->set('posts_per_page', '10'); //ここで表示件数を変更
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');


// スケジュールアーカイブページ 投稿表示件数の設定
add_action( 'pre_get_posts', 'my_custom_query_vars' );
function my_custom_query_vars( $query ) {
	/* @var $query WP_Query */
	if ( !is_admin() && $query->is_main_query()) {
		if ( is_post_type_archive('schedule') ) {
			$query->set( 'posts_per_page' , 10 );//表示したい数
		}
	}
	return $query;
}



/* サイドバー */
//管理画面にウィジェットエリアを追加
function widgetarea_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'サイドバー1の説明を入れます。',
    'class'         => 's1',
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h2 class="widget_title">',
  'after_title' => '</h2>',
	) );

	 register_sidebar( array(
        'name'          => 'Sidebar2',
        'id'            => 'sidebar-2',
        'description'   => 'サイドバー2の説明を入れます。',
        'class'         => 's2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));
}
add_action( 'widgets_init', 'widgetarea_init' );

//Breadcrumb NavXTのパンくずで”投稿一覧”を追加（”ブログ”で表示）
function bcn_add($bcnObj) {
	// デフォルト投稿のアーカイブの場合、TOP＞投稿一覧という形で追加
	if (is_post_type_archive('post')) {
        	// 新規のtrailオブジェクトを末尾に追加する
		$bcnObj->add(new bcn_breadcrumb('blog', null, array('archive', 'post-clumn-archive', 'current-item')));
		// trailオブジェクト0とtrailオブジェクト1の中身を入れ替える
		$trail_tmp = clone $bcnObj->trail[1];
		$bcnObj->trail[1] = clone $bcnObj->trail[0];
        $bcnObj->trail[0] = $trail_tmp;
    // デフォルト投稿の詳細ページの場合、TOP > 投稿一覧 > カテゴリー1 >（投稿タイトル）で表示
	}elseif (is_singular('post')) {
        // 新規のtrailオブジェクトを追加する
        $bcnObj->add(new bcn_breadcrumb('blog', null, array('post-clumn-archive'), home_url('blog'), null, true));
		$trail_tmp = clone $bcnObj->trail[3];	//配列の最後（一番左）に追加
		$bcnObj->trail[3] = clone $bcnObj->trail[2]; //配列の最後から2番目に追加
		$bcnObj->trail[2] = $trail_tmp; //配列の最後から2番にあった値を最後（一番左に追加）
}
	return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add');

//アーカイブのタイトルから「アーカイブ：」を消すカスタマイズ
function custom_archive_title($title){
    $titleParts=explode(': ',$title);
    if($titleParts[1]){
        return $titleParts[1];
    }
    return $title;
}
add_filter('get_the_archive_title','custom_archive_title');

//「投稿一覧」の「クイック編集」で表示される「この投稿を先頭に固定表示」を非表示
function custom_hidden_quick_page_sticky() {
    ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(".inline-edit-col-right .inline-edit-group:eq(1) label:eq(1)").css("display", "none");
});
</script>
<?php
}
add_action( 'admin_head-edit.php', 'custom_hidden_quick_page_sticky' ); //ファイルを読み込む

//「投稿の編集」で表示される「ブログのトップに固定」を非表示
function custom_hidden_post_page_sticky() {
    ?>
<style type="text/css">
.edit-post-post-status .components-panel__row:nth-of-type(3) {
    display: none !important;
}
</style>
<?php
}
add_action( 'admin_print_styles-post.php', 'custom_hidden_post_page_sticky' ); //スタイルを直接書き込む

//「新規投稿の追加」で表示される「ブログのトップに固定」「レビュー待ち」を非表示
function custom_hidden_postnew_page_sticky() {
    ?>
<style type="text/css">
.edit-post-post-status .components-panel__row:nth-of-type(n+3) {
    display: none !important;
}
</style>
<?php
}
add_action( 'admin_print_styles-post-new.php', 'custom_hidden_postnew_page_sticky' ); //スタイルを直接書き込む