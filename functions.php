<?php
function my_script_init()

{
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap', array(), null);

    // Font Awesome
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css", array(), "5.8.2", "all");

    // destyle.cssの読み込み
    wp_enqueue_style("destyle", "https://unpkg.com/destyle.css@3.0.2/destyle.min.css", array(), "3.0.2", "all");

    // Swiperのスタイルシートの読み込み
    wp_enqueue_style("swiper", get_template_directory_uri() . "/swiper/swiper-bundle.min.css", array(), filemtime(get_theme_file_path("swiper/swiper-bundle.min.css")), "all");

    // テーマのスタイルシートの読み込み
    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path("/css/style.css")), "all");

    // アニメーション専用のJavaScriptファイルの読み込み
    wp_enqueue_script("my-animation", get_template_directory_uri() . "/js/animation.js", array("gsap"), filemtime(get_theme_file_path('js/animation.js')), true);

    // GSAPの読み込み
    wp_enqueue_script("gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js", array(), "3.12.2", true);

    // SwiperのJavaScriptファイルの読み込み
    wp_enqueue_script("swiper", get_template_directory_uri() . "/swiper/swiper-bundle.min.js", array(), filemtime(get_theme_file_path("swiper/swiper-bundle.min.js")), true);

    // テーマのJavaScriptファイルの読み込み
    wp_enqueue_script("my-script", get_template_directory_uri() . "/js/script.js", array("gsap"), filemtime(get_theme_file_path('js/script.js')), true);
}


add_action("wp_enqueue_scripts", "my_script_init");


// テーマのセットアップ関数
function my_setup()
{
    // 投稿のアイキャッチ設定をする
    add_theme_support('post-thumbnails');

    // 自動フィードリンク（RSS)のサポートを追加
    add_theme_support('automatic-feed-links');

    // HTMLの<head>セクションでタイトルタグを表示する（タイトルをphpで作成)サポートを追加
    add_theme_support('title-tag');

    // HTML5の機能のサポートを追加
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}

// テーマのセットアップが完了した後に実行する
add_action("after_setup_theme", "my_setup");


//　カスタマイザーに背景画像の変更を追加する
function mytheme_customize_register($wp_customize)
{
    $wp_customize->add_section('background_image_section', array(
        'title' => __('Background Image', 'mytheme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('background_image', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_image', array(
        'label' => __('Upload Background Image', 'mytheme'),
        'section' => 'background_image_section',
        'settings' => 'background_image',
    )));
}
add_action('customize_register', 'mytheme_customize_register');

//コンタクトフォーム7のpタグをなくす
add_filter('wpcf7_autop_or_not', '__return_false');

//　フロントページのみヘッダーアクション
function my_custom_scripts()
{
    if (is_front_page()) { // フロントページであることを確認
?>
        <script>
            window.addEventListener('scroll', function() {
                const textElement = document.getElementById('reverse');
                const triggerPoint = 200; // 200pxスクロールしたら反転

                if (window.scrollY > triggerPoint) {
                    textElement.classList.add('reverse'); // クラスを追加して反転
                } else {
                    textElement.classList.remove('reverse'); // クラスを削除して元に戻す
                }
            });
        </script>
<?php
    }
}
add_action('wp_footer', 'my_custom_scripts'); // フッターにスクリプトを追加

add_action('wp_enqueue_scripts', function () {
    // reCAPTCHAを表示させたい固定ページの slug を指定します。複数OK
    $page_list = [
        'contact', // お問い合わせフォーム
    ];
    if (is_page($page_list)) return;
    wp_deregister_script('google-recaptcha');
}, 100);


function disable_recaptcha_on_multistep($classes)
{
    if (isset($_POST['_wpcf7_multistep'])) {
        remove_action('wpcf7_before_send_mail', 'your_recaptcha_function_name'); // reCAPTCHA 無効化
    }
}
add_action('wpcf7_validate', 'disable_recaptcha_on_multistep', 10, 2);
