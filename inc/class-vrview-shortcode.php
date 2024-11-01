<?php
/**
 * Thanks to Jérémy Heleine for his Tutorial on "Adding a Media Button to the WordPress Content Editor"
 * https://www.sitepoint.com/adding-a-media-button-to-the-content-editor/
 */
class VRView_Shortcode{
  const SUPPORTED_VIDEO_EXTENSIONS=array("mp4");
  const SUPPORTED_IMAGE_EXTENSIONS=array("png","jpg","jpeg");

  static function init(){
    add_shortcode('vrview', array( __CLASS__ , 'render_shortcode' ));
    
    //Add Media Button
    add_action('media_buttons', array(__CLASS__, 'add_media_button' ));
    add_action('wp_enqueue_media', array(__CLASS__,'include_media_button_js_file'));
  }
   
  static function render_shortcode($atts_arg, $content){
    ob_start();
    $atts = shortcode_atts( array(
        'width'           => '100%',
        'height'          => '300px',
        'allowfullscreen' => 'allowfullscreen',
        'frameborder'     => '0',
        'is_stereo'       => 'false',
        'start_yaw'       => '0',
        'is_yaw_only'     => 'false'
    ), $atts_arg );
    
    $pathinfo=pathinfo($content);
    $extension=$pathinfo['extension'];
    $playerUrl=VR_VIEW_PLUGIN_URL.'/vrview/index.html';
    
    if(in_array($extension, self::SUPPORTED_IMAGE_EXTENSIONS)){
      $playerUrl.="?image=".$content;
    }elseif(in_array($extension, self::SUPPORTED_VIDEO_EXTENSIONS)){
      $playerUrl.="?video=".$content;      
    }else{
      //Media Format is not supported
      echo "<p>Media Format $extension is not supported by vrview yet.</p>";
      return ob_get_clean();
    }
    //Add options
    $playerUrl.="&is_stereo=".$atts['is_stereo'];
    $playerUrl.="&start_yaw=".$atts['start_yaw'];
    $playerUrl.="&is_yaw_only=".$atts['is_yaw_only'];
    ?>
    <iframe src="<?php echo $playerUrl?>" width="<?php echo $atts["width"]?>" height="<?php echo $atts["height"]?>" frameborder="<?php echo $atts["frameborder"]?>" <?php echo $atts["allowfullscreen"]?>></iframe>
    <?php
    return ob_get_clean();
  }
  
  static function add_media_button(){
     echo '<a href="#" id="insert-vr-media" class="button">Add VR Media</a>';
  }
  
  function include_media_button_js_file() {
    wp_enqueue_script('media_button', VR_VIEW_PLUGIN_URL.'/js/media-button.js', array('jquery'), '1.0', true);
  }
  
}
VRView_Shortcode::init();