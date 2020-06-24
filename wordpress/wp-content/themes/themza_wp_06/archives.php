<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<div id="content" class="widecolumn">

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<h2>Archives by Month:</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h2>Archives by Subject:</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

</div>
<div id="sidebars">
<?php include ('left_side.php'); ?>
<?php include ('right_side.php'); ?>
</div></div>
<br clear="all">
<?php get_footer(); ?>
