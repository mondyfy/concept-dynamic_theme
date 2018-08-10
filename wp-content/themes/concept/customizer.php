<?php 
function concept_customizer_register( $wp_customize ){
//creating the header customizer pannel
 $wp_customize->add_panel( 'theme_option', array(
   'priority'       => 1,
   'capability'     => 'edit_theme_options',
   'title'          => __('Theme Option', 'concept'),
   'description'    => __('Several settings pertaining top header', 'concept'),
   ) );
//creating the add section for header title
 $wp_customize->add_section('header_title_text', array(
   'title'           => __('Header Section', 'concept'),
   'description'     => __('','concept'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));
//creating the setting for header title text
 $wp_customize->add_setting( 'header_text1', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'header_text1', array(
   'type' => 'text',
   'section' => 'header_title_text',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input your Header Title', 'concept' ),
   ) );

 //Banner Section
 //creating the add section for Banner
 $wp_customize->add_section('banner_section', array(
   'title'           => __('Banner Section', 'concept'),
   'description'     => __('','concept'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));
//creating the setting for Banner title text
 $wp_customize->add_setting( 'banner_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'banner_title', array(
   'type' => 'text',
   'section' => 'banner_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input your Banner Title', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'banner_call_on_site', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'banner_call_on_site', array(
   'type' => 'text',
   'section' => 'banner_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input call on title for site', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'banner_call_on_site_link', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'banner_call_on_site_link', array(
   'type' => 'text',
   'section' => 'banner_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input Link for call on title for site', 'concept' ),
   ) );


 //creating the setting for Banner title text
 $wp_customize->add_setting( 'banner_call_on_video', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'banner_call_on_video', array(
   'type' => 'text',
   'section' => 'banner_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  title for the  video', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'banner_call_on_video_link', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'banner_call_on_video_link', array(
   'type' => 'text',
   'section' => 'banner_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input video link', 'concept' ),
   ) );


  $wp_customize->add_setting( 'pre_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'pre_title', array(
   'type' => 'text',
   'section' => 'new_products',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input CPT Pre Title', 'concept' ),
   ) );


 //creating the add section for Recent Product CPT
 $wp_customize->add_section('new_products', array(
   'title'           => __('Recent Products', 'concept'),
   'description'     => __('','concept'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));

//creating the setting for Banner title text
 $wp_customize->add_setting( 'rp_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'rp_title', array(
   'type' => 'text',
   'section' => 'new_products',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input CPT Title', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'rp_des', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'rp_des', array(
   'type' => 'textarea',
   'section' => 'new_products',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input CPT description', 'concept' ),
   ) );


   // function made for the control of fetching post id,title,content
   /*$fetch_product_list = array();
$args = array('post_type' => 'page');
$posts_u = get_posts( $args ); 
foreach($posts_u as $rp) {
   $fetch_product_list[$rp->ID] = $rp->post_title;
}

//creating the setting for post title text
 $wp_customize->add_setting( 'product_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for post display
 $wp_customize->add_control( 'product_title', array(
   'type' => 'select',
   'section' => 'new_products',
   'choices' => $fetch_product_list,
   'label' => __( 'Product Title', 'concept' ),
   'description' => __( 'Select your product post Title.', 'concept' ),
   ) );*/
 //choices is used to make dropdown the variables where variables contains the list of the posts


   $wp_customize->add_section('what_we', array(
   'title'           => __('What We Do', 'concept'),
   'description'     => __('','concept'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));




   $wp_customize->add_setting( 'wd_pre_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'wd_pre_title', array(
   'type' => 'text',
   'section' => 'what_we',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input Pre Title', 'concept' ),
   ) );




//creating the setting for Banner title text
 $wp_customize->add_setting( 'wd_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'wd_title', array(
   'type' => 'text',
   'section' => 'what_we',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  Title', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'wd_des', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'wd_des', array(
   'type' => 'textarea',
   'section' => 'what_we',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter description', 'concept' ),
   ) );
 //creating the setting for Banner title text
 $wp_customize->add_setting( 'wd_excerpt', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'wd_excerpt', array(
   'type' => 'text',
   'section' => 'what_we',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter the excerpt text', 'concept' ),
   ) );


//happy clients
 
   $wp_customize->add_section('happy_client', array(
   'title'           => __('Happy Clients', 'concept'),
   'description'     => __('','concept'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));




   $wp_customize->add_setting( 'hc_pre_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'hc_pre_title', array(
   'type' => 'text',
   'section' => 'happy_client',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input Pre Title', 'concept' ),
   ) );




//creating the setting for Banner title text
 $wp_customize->add_setting( 'hc_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'hc_title', array(
   'type' => 'text',
   'section' => 'happy_client',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  Title', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'hc_des', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'hc_des', array(
   'type' => 'textarea',
   'section' => 'happy_client',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter description', 'concept' ),
   ) );

   $wp_customize->add_section('fun_facts', array(
   'title'           => __('Fun Facts', 'concept'),
   'description'     => __('','concept'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));




   $wp_customize->add_setting( 'ff_pre_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'ff_pre_title', array(
   'type' => 'text',
   'section' => 'fun_facts',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input Pre Title', 'concept' ),
   ) );




//creating the setting for Banner title text
 $wp_customize->add_setting( 'ff_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'ff_title', array(
   'type' => 'text',
   'section' => 'fun_facts',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  Title', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'ff_des', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'ff_des', array(
   'type' => 'textarea',
   'section' => 'fun_facts',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter description', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'ff_download', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'ff_download', array(
   'type' => 'text',
   'section' => 'fun_facts',
   'label' => __( '', 'concept' ),
   'description' => __( 'Set Topics for download Counter', 'concept' ),
   ) );
 //creating the setting for Banner title text
 $wp_customize->add_setting( 'ff_download_number', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'ff_download_number', array(
   'type' => 'text',
   'section' => 'fun_facts',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter the number of downloads', 'concept' ),
   ) );
  //creating the setting for Banner title text
 $wp_customize->add_setting( 'ff_happyclient', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'ff_happyclient', array(
   'type' => 'text',
   'section' => 'fun_facts',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter Topics for happy client counter', 'concept' ),
   ) );

 $wp_customize->add_setting( 'ff_happyclient_number', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'ff_happyclient_number', array(
   'type' => 'text',
   'section' => 'fun_facts',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter the number of Happy Clients', 'concept' ),
   ) );

$wp_customize->add_setting( 'ff_projects', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'ff_projects', array(
   'type' => 'text',
   'section' => 'fun_facts',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter Topics for No of projects Counter', 'concept' ),
   ) );
$wp_customize->add_setting( 'ff_project_number', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'ff_project_number', array(
   'type' => 'text',
   'section' => 'fun_facts',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter the number of Projects Done', 'concept' ),
   ) );

 $wp_customize->add_setting( 'ff_hourspent', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'ff_hourspent', array(
   'type' => 'text',
   'section' => 'fun_facts',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter Topics for hour spent counter', 'concept' ),
   ) );
$wp_customize->add_setting( 'ff_hourspent_number', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'ff_hourspent_number', array(
   'type' => 'text',
   'section' => 'fun_facts',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter the number of Hourspent', 'concept' ),
   ) );

   $wp_customize->add_section('blogs', array(
   'title'           => __('Blogs', 'concept'),
   'description'     => __('','concept'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));




   $wp_customize->add_setting( 'blog_pre_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'blog_pre_title', array(
   'type' => 'text',
   'section' => 'blogs',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input Pre Title', 'concept' ),
   ) );




//creating the setting for Banner title text
 $wp_customize->add_setting( 'blog_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'blog_title', array(
   'type' => 'text',
   'section' => 'blogs',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  Title', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'blog_des', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'blog_des', array(
   'type' => 'textarea',
   'section' => 'blogs',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter description', 'concept' ),
   ) );


   $wp_customize->add_section('call_on_action', array(
   'title'           => __('Call On Action', 'concept'),
   'description'     => __('','concept'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));




   $wp_customize->add_setting( 'call_on_pretitle', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'call_on_pretitle', array(
   'type' => 'text',
   'section' => 'call_on_action',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input Pre Title', 'concept' ),
   ) );




//creating the setting for Banner title text
 $wp_customize->add_setting( 'call_on_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'call_on_title', array(
   'type' => 'text',
   'section' => 'call_on_action',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  Title', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'call_on_des', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'call_on_des', array(
   'type' => 'textarea',
   'section' => 'call_on_action',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter description', 'concept' ),
   ) );
 //creating the setting for Banner title text
 $wp_customize->add_setting( 'call_on_link_text', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'call_on_link_text', array(
   'type' => 'text',
   'section' => 'call_on_action',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  the Button Text', 'concept' ),
   ) );
 //creating the setting for Banner title text
 $wp_customize->add_setting( 'call_on_button_link', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'call_on_button_link', array(
   'type' => 'text',
   'section' => 'call_on_action',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  The link for Button', 'concept' ),
   ) );



$wp_customize->add_section( 'footer_section', array(
      'title'       => __( 'Footer', 'concept' ),
      'priority'    => 25,
      'panel'           => 'theme_option',
      'description' => __( '', 'concept' )
   ) );


//creating the setting for Banner title text
 $wp_customize->add_setting( 'footer_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'footer_title', array(
   'type' => 'text',
   'section' => 'footer_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  The Footer Title', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'footer_des', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'footer_des', array(
   'type' => 'textarea',
   'section' => 'footer_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter description for footer', 'concept' ),
   ) );
 //creating the setting for Banner title text
 $wp_customize->add_setting( 'footer_excerpt_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'footer_excerpt_title', array(
   'type' => 'text',
   'section' => 'footer_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  The Footer Excerpt Title', 'concept' ),
   ) );

//creating the setting for Banner title text
 $wp_customize->add_setting( 'footer_excerpt', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'footer_excerpt', array(
   'type' => 'text',
   'section' => 'footer_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  The Footer Excerpt(read more ) Link', 'concept' ),
   ) );


//creating the setting for Banner title text
 $wp_customize->add_setting( 'site_name', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'site_name', array(
   'type' => 'text',
   'section' => 'footer_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Write The name of Your Site To display of footer', 'concept' ),
   ) );

//creating the setting for Banner title text
 $wp_customize->add_setting( 'designer_name', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'designer_name', array(
   'type' => 'text',
   'section' => 'footer_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  the Name of Designer of this site', 'concept' ),
   ) );


//creating the setting for Banner title text
 $wp_customize->add_setting( 'designer_link', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'designer_link', array(
   'type' => 'text',
   'section' => 'footer_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  The Link of Designer ', 'concept' ),
   ) );

 $wp_customize->add_section( 'contact_section', array(
      'title'       => __( 'Contact', 'concept' ),
      'priority'    => 25,
      'panel'           => 'theme_option',
      'description' => __( '', 'concept' )
   ) );


//creating the setting for Banner title text
 $wp_customize->add_setting( 'contact_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'contact_title', array(
   'type' => 'text',
   'section' => 'contact_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  The Contact Page Title', 'concept' ),
   ) );

//creating the setting for Banner title text
 $wp_customize->add_setting( 'form_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'form_title', array(
   'type' => 'text',
   'section' => 'contact_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  The Contact Form Title', 'concept' ),
   ) );

//creating the setting for Banner title text
 $wp_customize->add_setting( 'contact_infotitle', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'contact_infotitle', array(
   'type' => 'text',
   'section' => 'contact_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Input  The Contact Infomation Title Title', 'concept' ),
   ) );

//creating the setting for Banner title text
 $wp_customize->add_setting( 'contact_localadd', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'contact_localadd', array(
   'type' => 'text',
   'section' => 'contact_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter Your Local Address', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'contact_countryadd', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'contact_countryadd', array(
   'type' => 'text',
   'section' => 'contact_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter The Countery Address', 'concept' ),
   ) );

 //creating the setting for Banner title text
 $wp_customize->add_setting( 'contact_number', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'contact_number', array(
   'type' => 'text',
   'section' => 'contact_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter Your Contact Number', 'concept' ),
   ) );

//creating the setting for Banner title text
 $wp_customize->add_setting( 'contact_email', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'contact_email', array(
   'type' => 'text',
   'section' => 'contact_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter You Conatct Email', 'concept' ),
   ) );
 //creating the setting for Banner title text
 $wp_customize->add_setting( 'contact_website_text', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'contact_website_text', array(
   'type' => 'link',
   'section' => 'contact_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter The Title of  Your Website', 'concept' ),
   ) );

$wp_customize->add_setting( 'contact_website', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   'sanitize_callback'  => 'esc_attr',
   ) );

//creating the control for header title text
 $wp_customize->add_control( 'contact_website', array(
   'type' => 'link',
   'section' => 'contact_section',
   'label' => __( '', 'concept' ),
   'description' => __( 'Enter The URL Of Your Website', 'concept' ),
   ) );




//adding the customizer for social icon menus

$social_sites = concept_tribes_social_array();

   // set a priority used to order the social sites
   $priority = 5;

   // section
   $wp_customize->add_section( 'concept_tribes_social_media_icons', array(
      'title'       => __( 'Social Media Icons', 'concept' ),
      'priority'    => 25,
      'panel'           => 'theme_option',
      'description' => __( 'Add the URL for each of your social profiles.', 'concept' )
   ) );

   // create a setting and control for each social site
   foreach ( $social_sites as $social_site => $value ) {

      $label = ucfirst( $social_site );

      if ( $social_site == 'google-plus' ) {
         $label = 'Google Plus';
      } elseif ( $social_site == 'rss' ) {
         $label = 'RSS';
      } elseif ( $social_site == 'soundcloud' ) {
         $label = 'SoundCloud';
      } elseif ( $social_site == 'slideshare' ) {
         $label = 'SlideShare';
      } elseif ( $social_site == 'codepen' ) {
         $label = 'CodePen';
      } elseif ( $social_site == 'stumbleupon' ) {
         $label = 'StumbleUpon';
      } elseif ( $social_site == 'deviantart' ) {
         $label = 'DeviantArt';
      } elseif ( $social_site == 'hacker-news' ) {
         $label = 'Hacker News';
      } elseif ( $social_site == 'whatsapp' ) {
         $label = 'WhatsApp';
      } elseif ( $social_site == 'qq' ) {
         $label = 'QQ';
      } elseif ( $social_site == 'vk' ) {
         $label = 'VK';
      } elseif ( $social_site == 'wechat' ) {
            $label = 'WeChat';
      } elseif ( $social_site == 'tencent-weibo' ) {
         $label = 'Tencent Weibo';
      } elseif ( $social_site == 'paypal' ) {
         $label = 'PayPal';
      } elseif ( $social_site == 'email-form' ) {
         $label = 'Contact Form';
      }
      // setting
      $wp_customize->add_setting( $social_site, array(
         'sanitize_callback' => 'esc_url_raw'
      ) );
      // control
      $wp_customize->add_control( $social_site, array(
         'type'     => 'url',
         'label'    => $label,
         'section'  => 'concept_tribes_social_media_icons',
         'priority' => $priority
      ) );
      // increment the priority for next site
      $priority = $priority + 5;
   }

}
 add_action('customize_register', 'concept_customizer_register');






