<?php 
  $wpObj = new stdClass();
  $wpObj->colour_text = get_option('text_color');
  $wpObj->colour_theme = get_option('theme_color');
  $wpObj->colour_background = get_option('background_color');
  $wpObj->colour_headings = get_option('headings_color');
  $wpObj->keywords = 'one, two three, four';
  $wpObj->geo_region = null;
  $wpObj->geo_placename = null;
  $wpObj->geo_position = null;
  $wpObj->geo_ICBM = null;
  $wpObj->bloginfo = new stdClass();
  $wpObj->bloginfo->name = get_bloginfo('name');
  $wpObj->bloginfo->description = get_bloginfo('description');
  $wpObj->bloginfo->wpurl = get_bloginfo('wpurl');
  $wpObj->bloginfo->url = get_bloginfo('url');
  $wpObj->bloginfo->admin_email = get_bloginfo('admin_email');
  $wpObj->bloginfo->charset = get_bloginfo('charset');
  $wpObj->bloginfo->version = get_bloginfo('version');
  $wpObj->bloginfo->html_type = get_bloginfo('html_type');
  $wpObj->bloginfo->text_direction = get_bloginfo('text_direction');
  $wpObj->bloginfo->language = get_bloginfo('language');
  $wpObj->bloginfo->stylesheet_url = get_bloginfo('stylesheet_url');
  $wpObj->bloginfo->template_url = get_bloginfo('template_url');
  $wpObj->bloginfo->stylesheet_directory = get_bloginfo('stylesheet_directory');
  $wpObj->bloginfo->pingback_url = get_bloginfo('pingback_url');
  $wpObj->bloginfo->atom_url = get_bloginfo('atom_url');
  $wpObj->bloginfo->rdf_url = get_bloginfo('rdf_url');
  $wpObj->bloginfo->rss_url = get_bloginfo('rss_url');
  $wpObj->bloginfo->rss2_url = get_bloginfo('rss2_url');
  $wpObj->bloginfo->comments_atom_url = get_bloginfo('comments_atom_url');
  $wpObj->bloginfo->comments_rss2_url = get_bloginfo('comments_rss2_url');
  $wpObj->icon = $wpObj->bloginfo->stylesheet_directory . '/png/icon.png';
  $post_thumbnail = get_the_post_thumbnail_url();
  if ($post_thumbnail == NULL){
    $wpObj->featuredImage = $wpObj->bloginfo->stylesheet_directory . "/jpg/default.jpg";
  } else {
    $wpObj->featuredImage = $post_thumbnail;
  }
  $wpObj->nav = wp_get_nav_menus();
  $wpObj->queriedObj = get_queried_object();
