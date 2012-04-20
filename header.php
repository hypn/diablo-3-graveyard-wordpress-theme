<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name');?><?php wp_title(" - ",true); ?></title>
<link href="<?php echo get_stylesheet_uri();?>" rel="stylesheet" type="text/css" />
<?php
if (is_singular()) wp_enqueue_script( 'comment-reply' );
wp_head();
?>
</head>

<body <?php body_class();?>>
<div class="container">

	<div class="header">
    	
        <div class="subtitle"><div><?php bloginfo('description');?></div></div>
    	<img src="<?php echo bloginfo('template_directory');?>/images/logo.png" height="364" width="600" alt="diablo 3 wordpress theme logo" />
    
    </div>
    
    <div class="content">
    
    	<img src="<?php echo bloginfo('template_directory');?>/images/figures.png" height="195" width="966" style="margin:0 0 3px 0;" alt="gothic statues" />
        
        <div class="main">
        
                <div class="menu">
                    <?php 
					$args = array(
						'menu_class'  => '',
						'include'     => '',
						'exclude'     => '',
						'echo'        => true,
						'show_home'   => true,
						'link_before' => '',
						'link_after'  => '' );
					wp_page_menu($args); ?>
                    <div class="search"><?php get_search_form( $echo ); ?></div>
                </div>
