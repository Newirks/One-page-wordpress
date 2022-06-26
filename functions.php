
<?php 

// css and scripts

function mytemplate(){

    wp_register_style('font1','https://fonts.googleapis.com/css?family=Varela+Round',array(),false,'all');
    wp_enqueue_style('font1');

    wp_register_style('font2','https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',array(),false,'all');
    wp_enqueue_style('font2');

    wp_register_style('style1',get_template_directory_uri().'/css/styles.css',array(),false,'all');
    wp_enqueue_style('style1');

}

add_action('wp_enqueue_scripts','mytemplate');

function myscripts(){

    wp_register_script('script1','https://use.fontawesome.com/releases/v6.1.0/js/all.js',array(),false,'all');
    wp_enqueue_script('script1');

    wp_register_script('script2','https://cdn.startbootstrap.com/sb-forms-latest.js',array(),false,'all');
    wp_enqueue_script('script2');

    wp_register_script('script3',get_template_directory_uri().'/js/scripts.js',array(),false,'all');
    wp_enqueue_script('script3');

    wp_register_script('script4','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',array(),false,'all');
    wp_enqueue_script('script4');

}

add_action('wp_enqueue_scripts','myscripts');

//

function remove_menus() {
  remove_menu_page( 'index.php' );                  //Dashboard
//  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  remove_menu_page( 'plugins.php' );                //Plugins
  remove_menu_page( 'users.php' );                  //Users
//  remove_menu_page( 'tools.php' );                  //Tools
//  remove_menu_page( 'options-general.php' );        //Settings
}
add_action( 'admin_menu', 'remove_menus' );



add_theme_support('post-thumbnails');
add_image_size('content',1200,800, true);


//

function one_page_menu()
{
    add_menu_page('OnePage','Theme Options','manage_options','one_page_menu','one_page_menu_main','dashicons-admin-page',1);

    add_submenu_page('one_page_menu','Head Settings','Head Settings','manage_options','one_page_menu','one_page_menu_main');
//    add_submenu_page('one_page_menu','Footer Settings','Footer Settings','manage_options','footer_main','one_page_footer_main');

    add_action('admin_init','onepage_custom_settings');

}
add_action('admin_menu','one_page_menu');

function onepage_custom_settings(){ 
  register_setting('onepage-settings-group','first_name');
  register_setting('onepage-settings-group','menu_one');
  register_setting('onepage-settings-group','menu_two');
  register_setting('onepage-settings-group','menu_three');
  register_setting('onepage-settings-group','get_started_text');
  register_setting('onepage-settings-group','get_started_btn');
  register_setting('onepage-settings-group','about_title');
  register_setting('onepage-settings-group','about_content');
  register_setting('onepage-settings-group','footer_adress');
  register_setting('onepage-settings-group','footer_mail');
  register_setting('onepage-settings-group','footer_phone');
  register_setting('onepage-settings-group','footer_twitter');
  register_setting('onepage-settings-group','footer_facebook');
  register_setting('onepage-settings-group','footer_instagram');
  register_setting('onepage-settings-group','footer_linkedn');
  register_setting('onepage-settings-group','footer_github');
  register_setting('onepage-settings-group','footer_youtube');

  add_settings_section('onepage-menu-options','One Page Options','onepage_menu_options','one_page_menu');
 

  add_settings_field('title-name','Title','onepage_head_name','one_page_menu','onepage-menu-options');
  add_settings_field('menu-name','Menu','onepage_menu_name','one_page_menu','onepage-menu-options'); 
  add_settings_field('get-started-btn','Get Started Button Text','onepage_get_started_btn','one_page_menu','onepage-menu-options');
  add_settings_field('get-started-txt','Get Started Text','onepage_get_started_txt','one_page_menu','onepage-menu-options');
  add_settings_field('about-title','About Title','onepage_about_title','one_page_menu','onepage-menu-options');
  add_settings_field('about-content','About Content','onepage_about_content','one_page_menu','onepage-menu-options');
  add_settings_field('footer-adress','Footer Adress','onepage_footer_adress','one_page_menu','onepage-menu-options');
  add_settings_field('footer-mail','Footer E-mail','onepage_footer_mail','one_page_menu','onepage-menu-options');
  add_settings_field('footer-phone','Footer Phone','onepage_footer_phone','one_page_menu','onepage-menu-options');

  add_settings_field('twitter-icon','Twitter Link','twitter','one_page_menu','onepage-menu-options');
  add_settings_field('facebook-icon','Facebook Link','facebook','one_page_menu','onepage-menu-options');
  add_settings_field('instagram-icon','Instagram Link','instagram','one_page_menu','onepage-menu-options');
  add_settings_field('linkedn-icon','Linkedn Link','linkedn','one_page_menu','onepage-menu-options');
  add_settings_field('github-icon','Github Link','github','one_page_menu','onepage-menu-options');
  add_settings_field('youtube-icon','Youtube Link','youtube','one_page_menu','onepage-menu-options');  
}

function onepage_menu_options(){ echo ''; }


function onepage_head_name(){
  $titlename = esc_attr(get_option('first_name'));
  echo '<input size="30" type="text" name="first_name" value="'.$titlename.'" placeholder="Title Name" />';
}

function onepage_menu_name(){
  $menu1 = esc_attr(get_option('menu_one'));
  $menu2 = esc_attr(get_option('menu_two'));
  $menu3 = esc_attr(get_option('menu_three'));  
  echo '<input size="30" type="text" name="menu_one" value="'.$menu1.'" /> <input size="30" type="text" name="menu_two" value="'.$menu2.'" /> <input size="30" type="text" name="menu_three" value="'.$menu3.'" />';
}
function onepage_get_started_btn(){
  $startedBtn = esc_attr(get_option('get_started_btn'));
  echo '<input size="30" type="text" name="get_started_btn" value="'.$startedBtn.'" />';
}
function onepage_get_started_txt(){
  $startedText = esc_attr(get_option('get_started_text'));
  echo '<textarea rows="4" cols="100" style="height:200px;" name="get_started_text" >'.$startedText.'</textarea>';
}
function onepage_about_title(){
  $aboutTitle = esc_attr(get_option('about_title'));
  echo '<input size="97" type="text" name="about_title" value="'.$aboutTitle.'" />';
}
function onepage_about_content(){
  $aboutContent = esc_attr(get_option('about_content'));
  echo '<textarea rows="4" cols="100" style="height:200px;" name="about_content" >'.$aboutContent.'</textarea>';
}


function onepage_footer_adress(){
  $footerAdress = esc_attr(get_option('footer_adress'));
  echo '<input size="97" type="text" name="footer_adress" value="'.$footerAdress.'" />';
}
function onepage_footer_mail(){
  $footerMail = esc_attr(get_option('footer_mail'));
  echo '<input size="97" type="text" name="footer_mail" value="'.$footerMail.'" />';
}
function onepage_footer_phone(){
  $footerPhone = esc_attr(get_option('footer_phone'));
  echo '<input size="97" type="text" name="footer_phone" value="'.$footerPhone.'" />';
}

// social

function twitter(){
  $twitter = esc_attr(get_option('footer_twitter'));
  echo '<input size="30" type="text" name="footer_twitter" value="'.$twitter.'" />';
}
function facebook(){
  $facebook = esc_attr(get_option('footer_facebook'));
  echo '<input size="30" type="text" name="footer_facebook" value="'.$facebook.'" />';
}
function instagram(){
  $instagram = esc_attr(get_option('footer_instagram'));
  echo '<input size="30" type="text" name="footer_instagram" value="'.$instagram.'" />';
}
function linkedn(){
  $linkedn = esc_attr(get_option('footer_linkedn'));
  echo '<input size="30" type="text" name="footer_linkedn" value="'.$linkedn.'" />';
}
function github(){
  $github = esc_attr(get_option('footer_github'));
  echo '<input size="30" type="text" name="footer_github" value="'.$github.'" />';
}
function youtube(){
  $youtube = esc_attr(get_option('footer_youtube'));
  echo '<input size="30" type="text" name="footer_youtube" value="'.$youtube.'" />';
}
// include pages

function one_page_menu_main(){ include "theme.php"; }

//

add_filter('show_admin_bar', '__return_false');