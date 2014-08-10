<?php
/*
 * Plugin Name: Advanced lazy load
 * Plugin URI: http://www.kasonz.com/developement/advanced-lazy-load/
 * Description: By using this pulgin, reduce the loading time while opening your wordpress website, accelerate page openning time. Loading image in the last and display base on user screen scrolling.
 * Author: kasonzhao
 * Version: 1.5.1
 * Author URI: http://www.kasonz.com/
 * License: GPLv2 or later.
 */
 
 
 
/*Call 'LZ_option_link' function to Add a submenu link under Profile tab.*/
add_action('admin_menu', 'LZ_option_link');



/**
 * Function Name: lz_install
 * Description: Save data to database at the time of plugin install.
 *
 */
register_activation_hook( __FILE__, 'lz_install' ); 
function lz_install() {
	$ifd_pixel 		= (get_option('ifd_pixel') != '') ? get_option('ifd_pixel') : '0' ;
	update_option('ifd_pixel', $ifd_pixel);
	
		$ifd_duration 		= (get_option('ifd_duration') != '') ? get_option('ifd_duration') : '1000' ;
	update_option('ifd_duration', $ifd_duration);
}



/**
 * Function Name: LZ_option_link
 * Description: Add a submenu under Settings tab.
 *
 */
function LZ_option_link()
  {
    add_options_page('Advanced lazy load', 'Advanced lazy load', 'manage_options', 'Advanced-lazy-load', 'Advancedlazyload_form');
  }
//the 'Advanced-lazy-load_form' content


function Advancedlazyload_form()
  {
  
  

    /**
     * Check whether the form submitted or not.
     */
    if (isset($_POST['option-save']))
      {
        echo "<p><strong>Options saved!</strong></p>";
        $ddsadsa = trim($_POST['ifd_pixel']);
        update_option('ifd_pixel', $ddsadsa);
		
		  $duration = trim($_POST['ifd_duration']);
        update_option('ifd_duration', $duration);
		
		
      }
?>
<div  style="float:left;width:99%;" >
	
	
	
	
	<div class="welcome-panel" id="welcome-panel">

			<div class="welcome-panel-content">
	<h3>Welcome to Advanced lazy load!</h3>
	<p class="about-description">We’ve assembled some links to get you started:</p>
	<p>By using ths plugin for wordpress, it will reduce the loading time while opening your wordpress website</p>
<p>This is initial edition of Advanced lazy load, many features will be added in future versions, compatible with all current browsers.</p>
	<div class="welcome-panel-column-container">

	<div class="welcome-panel-column">
		<h4>Next Steps</h4>
		<ul>
		<li><a class="welcome-icon welcome-learn-more" target="_blank" href="http://www.kasonz.com/developement/advanced-lazy-load/">Advanced lazy load help</a></li>
		
					<li><a class="welcome-icon dashicons-admin-page"  target="_blank"  href="https://wordpress.org/plugins/advanced-lazy-load/">WordPress Plugin Home</a></li>
		
					<li><a class="welcome-icon  dashicons-media-video"  target="_blank"  href="http://www.screenr.com/5R47">Live demo for Advanced lazy load</a></li>
		</ul>
	</div>
	<div class="welcome-panel-column welcome-panel-last">
		<h4>More Actions</h4>
		<ul>
		<li><a class="welcome-icon dashicons-admin-users""  target="_blank"  href="http://www.kasonz.com">Author website</a></li>

					<li><a class="welcome-icon welcome-write-blog" href="mailto:kasonzhao@qq.com">Feedback, suggestion, issue?</a></li>
		</ul>
	</div>
		<div class="welcome-panel-column">
		<br/>
<p>Like this plugin? Donate $0.99 to stimulate.</p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="kasonzhao@qq.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Advanced Lazy Load motivation">
<input type="hidden" name="amount" value="0.99">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/zh_XC/i/scr/pixel.gif" width="1" height="1">
</form>




			</div>
	
	</div>
	</div>
		</div>
	<form  id="option-form" method="post" name="option-form">

<div class="welcome-panel" id="welcome-panel">
<h3>Settings</h3>
		<table id="aws-option-table">
			<tr>
				<td>Pixel:</td>
				<td><input type="text"  maxlength="10" size="10" name="ifd_pixel" value="<?php
    echo get_option('ifd_pixel');
?>" /> px</td>
			</tr>
			
			
			<tr>
				<td>Fading in duration:</td>
				<td><input type="text"  maxlength="10" size="10" name="ifd_duration" value="<?php
    echo get_option('ifd_duration');
?>" /> millisecond</td>
			</tr>
			
			<tr>
			
				<td></td>
				<td></td>
			</tr>
		</table>
		<p><input id="option-save" class="button-primary" type="submit" name="option-save" value="Save options"/></p>
	</form>

	</div>

	<p >Message from developer, Kason:<br/></p>
	<p class="description">
	Version 1.5.1 update:<br/>
	Added new plugin website, three new demo pages in <a href="http://www.kasonz.com/" target="_blank">kasonz.com</a>.
	</p>
	<p class="description">
	Version 1.5 update:<br/>
	After a year and a half, I am back! Modified broken links, and change the setting page format, add donate button :)
	
	
	</p>
	

<div  style="float:right;border-left:1px solid #eee;">
<div style="clear:both;"></div>

</div>

<div id="wpfooter">

<div class="clear"></div>
</div>

	
 <?php
  }


  
if (!is_admin())
  {
  
  		//wp_deregister_script('jquery'); 
		wp_enqueue_script('jquery');
		
    wp_enqueue_script('Advancedlazyload', plugins_url('Advanced_lazyload.js', __FILE__), "", "advacned");
    $ifd_pixel = get_option('ifd_pixel');
	 $duration_advanced = get_option('ifd_duration');
	
  //wp_localize_script('Advancedlazyload', 'ifd_pixel', $ifd_pixel,'duration_advanced',$duration_advanced);
	
	wp_localize_script('Advancedlazyload', 'obj_lz', array(
	 
        'ifd_pixel' => get_option('ifd_pixel'),
        'ifd_duration' => get_option('ifd_duration')
   
));
	
	
	
	
	
    function Advaced_lazyload($buffer)
      {
        $plugin_dir_path = plugin_dir_url(__FILE__);
        $pattern         = '/((?:\<img).*)(src)/';
        $buffer          = preg_replace($pattern, "$1 src='" . $plugin_dir_path . "shade.gif' ImageHolder", $buffer);
        return $buffer;
      }
    function DOMReady()
      {
        ob_start("Advaced_lazyload");
      }
 
    add_action('wp_head', 'DOMReady');
 
  }
?>