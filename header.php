<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dsinz_template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

<style>body{
					font-family:Open Sans;
					font-size:14px;
					color:#6e6e6e;
					font-weight:400;
					font-style:normal;
				}h1{
					font-family:Montserrat;
					font-size:32px;
					color:#333333;
					font-style:normal;
					font-weight:700;
				}h2{
					font-family:Montserrat;
					font-size:24px;
					color:#333333;
					font-style:normal;
					font-weight:700;
				}h3{
					font-family:Montserrat;
					font-size:20px;
					color:#333333;
					font-style:normal;
					font-weight:700;
				}h4{
					font-family:Montserrat;
					font-size:18px;
					color:#333333;
					font-style:normal;
					font-weight:700;
				}h5{
					font-family:Montserrat;
					font-size:16px;
					color:#333333;
					font-style:normal;
					font-weight:700;
				}h6{
					font-family:Montserrat;
					font-size:12px;
					color:#333333;
					font-style:normal;
					font-weight:700;
				}.logo h1{
					font-family:Montserrat;
					font-size:24px;
					font-style:normal;
					font-weight:700;
					color:#f49c14;
				}.tagline, .logo p{
					font-family:Karla;
					font-size:14px;
					color:#acacac;
					font-style:normal;
					font-weight:400;
				}.sitenav ul{
					font-family:Montserrat;
					font-size:14px;
					font-style:normal;
					font-weight:700;
				}.sitenav ul li a, .sitenav ul li.current_page_item ul li a{
					color:#ffffff;
				}.nivo-caption h5{
					font-family:Montserrat;
					font-size:20px;
					color:#ffffff;
					font-style:normal;
					font-weight:700;
				}.nivo-caption h2{
					font-family:Montserrat;
					font-size:63px;
					color:#f49c14;
					font-style:normal;
					font-weight:700;
				}.nivo-caption p{
					font-family:Karla;
					font-size:15px;
					color:#ffffff;
					font-style:normal;
					font-weight:400;
				}h2.section_title{
					font-family:Montserrat;
					font-size:25px;
					color:#515151;
					font-style:normal;
					font-weight:700;
				}.testimonials-item .tmttl h4{
					font-family:Montserrat;
					font-size:20px;
					font-style:normal;
					font-weight:700;
				}.testimonials-item .tmttl h4 a{
					color:#f49c14;
				}.testimonials-item .tmttl span{
					font-family:Karla;
					font-size:16px;
					font-style:normal;
					font-weight:400;
					color:#ffffff;
				}.team-name h4{
					font-family:Montserrat;
					font-size:18px;
					font-style:normal;
					font-weight:700;
				}.team-name h4 a, .teammember-list:hover span{
					color:#282828;
				}.news-content h3, h3.post-title{
					font-family:Montserrat;
					font-size:17px;
					font-style:normal;
					font-weight:600;
				}.news-content h3 a, h3.post-title a{
					color:#17181d;
				}.foo-cols h5.footer-widget-title{
					font-family:Montserrat;
					font-size:20px;
					color:#ffffff;
					font-style:normal;
					font-weight:700;
				}h1.innerpage-title{
					font-family:Bree Serif;
					font-size:34px;
					color:#ffffff;
					font-style:normal;
					font-weight:400;
				}h3.widget-title{
					font-family:Oswald;
					font-size:20px;
					color:#131313;
					font-style:normal;
					font-weight:400;
				}.woocommerce ul.products li.product h2.woocommerce-loop-product__title{
					font-family:Aclonica;
					font-size:18px !important;
					color:#2d2d2d;
					font-style:normal;
					font-weight:700;
				}.woocommerce h1.product_title{
					font-family:Abel;
					font-size:26px;
					color:#282828;
					font-style:normal;
					font-weight:700;
				}body{background-color:#ffffff}.top-header{ background-color:#ffffff; color:#282828; }.top-header{ border-top-color:#f49c14 !important; }.header-style-two .header-main .top-header{ background-color:#f49c14}.header-style-three .header-main .top-header{ background-color:#f49c14}.top-header-right .social-icons a, .header-style-two .header-main .top-header .top-header-right .social-icons a, .header-style-three .header-main .top-header .top-header-right .social-icons a{ color:#f49c14; }.top-header-right .social-icons a:hover, .header-style-two .header-main .top-header .top-header-right .social-icons a:hover, .header-style-three .header-main .top-header .top-header-right .social-icons a:hover{ color:#282828; }.header{ background-color:rgba(0,0,0,0.3); }.sticky-header{ background-color:#131313; }.header-style-one .header-main .header{ background-color:#ffffff; }.header-style-one .header-main .header .sitenav ul li a, .header-style-one .header-main .header .sitenav ul li.current_page_item ul li a, .header-style-two .header-main .header .sitenav ul li a, .header-style-two .header-main .header .sitenav ul li.current_page_item ul li a, .header-style-three .header-main .header .sitenav ul li a, .header-style-three .header-main .header .sitenav ul li.current_page_item ul li a{ color:#444444; }.header-style-one .header-main .header .sitenav ul li.current_page_item a, .header-style-one .header-main .header .sitenav ul li a:hover, .header-style-one .header-main .header .sitenav ul li.current_page_item ul li a:hover, .header-style-two .header-main .header .sitenav ul li.current_page_item a, .header-style-two .header-main .header .sitenav ul li a:hover, .header-style-two .header-main .header .sitenav ul li.current_page_item ul li a:hover, .header-style-three .header-main .header .sitenav ul li.current_page_item a, .header-style-three .header-main .header .sitenav ul li a:hover, .header-style-three .header-main .header .sitenav ul li.current_page_item ul li a:hover{ color:#f49c14; }.sitenav ul li:hover > ul{background-color:rgba(0,0,0,0.8);}.sitenav ul li.current_page_item a, .sitenav ul li a:hover, .sitenav ul li.current_page_item ul li a:hover{ color:#f49c14;}.nivo-controlNav a{background-color:#ffffff}.nivo-controlNav a.active, .nivo-controlNav a:hover{background-color:#f49c14}.slider-main{ background-image:url(http://flythemesdemo.net/photolite/wp-content/themes/photolite-pro/images/loading.gif); }a, .slide_toggle a, .postby a, .nav-previous h5, .nav-next h5{color:#282828;}a:hover, .slide_toggle a:hover, .postby a:hover, .nav-previous:hover h5, .nav-next:hover h5{color:#f49c14;}.social-icons a{ color:#282828; }.social-icons a:hover{ color:#f49c14; }.sec-overlay h2.section_title{ color:#ffffff; }.teammember-list:hover h4 a, .team-name span{ color:#f49c14; }.testimonials-item .tmttl h4 a:hover{ color:#282828; }.news-box:hover h3 a{ color:#f49c14; }h3.post-title a:hover, .news-box:hover .news-desc h4 a, ul.entry-meta li a:hover{ color:#f49c14; }#footer-wrapper{ background-color:#212121; color:#ffffff; }.foo-cols ul.menu li a, #footer-wrapper a{color:#ffffff; }.foo-cols ul.menu li a:hover, #footer-wrapper a:hover{color:#f49c14; }.foo-cols ul.menu li.current_page_item a{color:#f49c14 !important; }.copyright-wrapper{ background-color:#131313; color:#ffffff; }.copyright-wrapper a{ color: #f49c14; }.copyright-wrapper a:hover{ color: #ffffff; }a.main-button, .woocommerce div.product .woocommerce-tabs ul.tabs li a.selected:after, .woocommerce #respond input#submit, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce a.button, .woocommerce button.button, .woocommerce button.button.alt, .woocommerce input.button, .woocommerce a.added_to_cart, .woocommerce a.button.alt, .woocommerce input.button.alt, .woocommerce ul.products li.product .onsale, .single-product .product .onsale, .woocommerce ul.products li.product .sale-perc, .woocommerce nav.woocommerce-pagination ul li span.current, .quantity-wrap input.plus:hover, .quantity-wrap input.minus:hover, .woocommerce-MyAccount-navigation ul li a, .pagination ul li .current, .pagination ul li a:hover, .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span, #sidebar .search-form input.search-submit, #sidebar .woocommerce-product-search button, #sidebar #wp-calendar tbody td a, #sidebar #wp-calendar tfoot td a, #sidebar .widget_tag_cloud a, #sidebar .member-info ul li::before, .widget-newsletter .wpcf7-submit, #commentform input#submit, input.search-submit, .post-password-form input[type=submit], .single-blog-post .post_tags ul li a, .author-box, #commentform input#submit, input.search-submit, .post-password-form input[type=submit], .wpcf7 form input[type='submit'], #nav-below.post-navigation .meta-nav-icon, ul.portfoliofilter li.active, ul.portfoliofilter li:hover, .gal-icon a, .news-box .post-date, .post-meta span a, .ln-read-more:hover, .post-thumb .post-date, .portfolio-main .portfolio-meta span a, .member-single-social a, .member-social-icon a:hover, .package-name, .pricing-col.highlighted-col .package-btn a.main-button:hover, .pop-icon a, .download-brochure a, .sep-border, .intro-social-icons a:hover, .image-link, .foo-cols h5.footer-widget-title:after, .info-card h3:after, .icon-box-icon i, .service-icon, .c-info-icon, .c-info-icon:before{ background-color:#f49c14;}.owl-carousel .owl-nav button.owl-prev:before, .owl-carousel .owl-nav button.owl-next:before, ul.list-1 li:before, ul.list-2 li:before, ul.list-3 li:before, ul.list-4 li:before, ul.list-5 li:before, ul.list-6 li:before, ul.list-7 li:before, ul.list-8 li:before, ul.list-9 li:before, ul.list-10 li:before, .widget-about-conte h2.wid-abt-hd, .product_meta > span:before, .single-team-info span, .single-testi-info span, .woocommerce .star-rating span:before, .accordion-box h2:before, .featbox:hover h3 a, h2.section_title span:before, h2.section_title span:after, .info-card .info-card-icon, .contact-opening-hrs .single-contact-opening-hrs h4, .info-card a.info-card-btn:hover{ color:#f49c14; }.single-team-thumb img, .single-testi-thumb img, .sitenav ul li ul, .about_fig:before, .about_fig:after, .image-box .readmore-btn:before, .image-box .readmore-btn:after, .testi-thumb:before, .testi-thumb:after{ border-color:#f49c14; }.owl-carousel .owl-nav button{ border-color:#f49c14 !important; }blockquote.align-left, blockquote.align-right, .contact-content .form-group input[type='text']:focus, .contact-content .form-group input[type='email']:focus, .contact-content .form-group input[type='tel']:focus, .contact-content .form-group textarea:focus, .feat-icon, input[type='text']:focus, input[type='email']:focus, input[type='url']:focus, input[type='password']:focus, input[type='search']:focus, input[type='number']:focus, input[type='tel']:focus, select:focus, input[type='range']:focus, input[type='date']:focus, input[type='month']:focus, input[type='week']:focus, input[type='time']:focus, input[type='datetime']:focus, input[type='datetime-local']:focus, input[type='color']:focus, textarea:focus{ border-color:#f49c14 !important; }a.main-button, .p-cate a, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce button.button.alt, .woocommerce input.button, .woocommerce a.added_to_cart, .woocommerce a.button.alt, .woocommerce input.button.alt, .woocommerce ul.products li.product .onsale, .woocommerce ul.products li.product .sale-perc, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, #sidebar .widget_tag_cloud a, #commentform input#submit, input.search-submit, .post-password-form input[type=submit], .pagination ul li span, .pagination ul li a, .wpcf7 form input[type='submit'], .ln-read-more:hover{ color:#ffffff; }a.main-button:hover, .owl-theme .owl-dots .owl-dot span, .p-cate a:hover, .pricing-col.highlighted-col .package-name, .pricing-col.highlighted-col .package-btn a.main-button, #sidebar .widget_tag_cloud a:hover, #commentform input#submit:hover, input.search-submit:hover, .post-password-form input[type=submit]:hover, #sidebar #wp-calendar tbody td a:hover, #sidebar #wp-calendar tfoot td a:hover, #sidebar .search-form input.search-submit:hover, .wpcf7 form input[type='submit']:hover, .pagination ul li span, .pagination ul li a, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce button.button.alt:hover, .woocommerce input.button:hover, .woocommerce a.added_to_cart:hover, .woocommerce a.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce .woo-entry-new-badge, .woocommerce .soldout, .woocommerce-MyAccount-navigation ul li a:hover, .single-blog-post .post_tags ul li a:hover, .ln-read-more, .post-meta span a:hover, .portfolio-main .portfolio-meta span a:hover, ul.portfoliofilter li, .member-single-social a:hover, .gal-icon a:hover, .member-social-icon a, .download-brochure a:before, .intro-social-icons a, .service-box{ background-color:#282828; }.widget-about-conte .sub-wid-abt-hd, .featbox h3 a, .info-card a.info-card-btn{ color:#282828; }.owl-carousel .owl-nav button:hover:before{ color:#282828 !important; }.owl-carousel .owl-nav button:hover{ border-color:#282828 !important; }a.main-button:hover, .p-cate a:hover, #sidebar .widget_tag_cloud a:hover, #commentform input#submit:hover, input.search-submit:hover, .post-password-form input[type=submit]:hover, .pagination ul li span, .pagination ul li a, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce button.button.alt:hover, .woocommerce input.button:hover, .woocommerce a.added_to_cart:hover, .woocommerce a.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content, .woocommerce .woo-entry-new-badge, .woocommerce .soldout, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover{ color:#ffffff;}a.buttonstyle1{color:#ffffff; background-color:#282828; }a.buttonstyle1:hover{color:#ffffff; background-color:#f49c14; }a.sliderbtn{ background-color:#f49c14; color:#ffffff; }a.sliderbtn:hover{ background-color:#282828; color:#ffffff; }.sec-overlay::before, .innerbanner::before{background-color:rgba(0,0,0,0.6);}#sidebar ul li, #sidebar ul li a{color:#131313; }#sidebar ul li a:hover{color:#f49c14; }.tabs-wrapper ul.tabs li a, h3.slide_toggle a{ color:#282828; }.tabs-wrapper ul.tabs li a.selected, h3.slide_toggle.clicked a{ color:#f49c14; border-color:#f49c14; }.tabs-wrapper ul.tabs li a:hover{ color:#f49c14; }.tabs-wrapper .tab-content{ color:#000000; }.accordion-box h2{ color:#282828; }.accordion-box h2.active{ color:#ffffff; background-color:#f49c14; border-color:#f49c14; }.accordion-box h2.active:before{ color:#ffffff; }.acc-content, .acc-content p{ color:#6e6d6d; }.skill-bg, .barfiller{ background-color:#000000; }.skillbar-bar, .barfiller .fill, .barfiller .tip{ background-color:#f49c14 !important; }#back-top a{ color:#f49c14; }#back-top a:hover{ color:#131313; }@media screen and (max-width: 990px){
					.header-responsive{ background-color:#ffffff; }
					.sitenav ul{ background-color:#000000; }
					.sitenav ul ul{ background-color:transparent; }
				}.woocommerce ul.products li.product .product-item-inner:hover img.attachment-woocommerce_thumbnail{ opacity:0; }</style>	<style type="text/css">
		
	</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="pagewrap" class="site">
<header class="header-responsive">
   <div class="container">
      <div class="logo">
         <a href="http://flythemesdemo.net/photolite/"><img src="http://flythemesdemo.net/photolite/wp-content/themes/photolite-pro/images/logo.png"></a>
      </div>
      <!-- Logo -->
      <div class="toggle">
         <a class="toggleMenu" href="#" style="display: none;"></a>
      </div>
      <!-- toggle -->
      <div class="clear"></div>
      <div class="sitenav">
         <div class="container">
            <?php 
            $args_repsonsive = array(
                  'theme_location' => 'main-meu',
                  'container' => 'div',
                  'container_class' => 'menu-main-menu-container',
                  'link_before' => '<span>',
                  'link_after' => '</span>',
                  'depth' => 3,
               );

               wp_nav_menu($args_repsonsive )
               ?>
         </div>
      </div>
      <!--.sitenav -->
   </div>
   <!-- container -->
</header>
<div class="header-main">
   <header class="header">
      <div class="container">
         <div class="flex-element">
            <div class="header-left">
               <div class="logo">
                  <a href="http://flythemesdemo.net/photolite/"><img src="http://flythemesdemo.net/photolite/wp-content/themes/photolite-pro/images/logo.png"></a>
               </div>
               <!-- .logo -->
            </div>
            <!-- header left -->
            <div class="header-right">
               <div class="toggle">
                  <a class="toggleMenu" href="#" style="display: none;"></a>
               </div>
               <!-- toggle -->
               <div class="sitenav">
               <?php 
               $args = array(
                  'theme_location' => 'main-meu',
                  'container' => 'div',
                  'container_class' => 'menu-main-menu-container',
                  'link_before' => '<span>',
                  'link_after' => '</span>',
                  'depth' => 3,
               );

               wp_nav_menu($args)

               ?>
               </div>
               <!--.sitenav -->
            </div>
            <!-- header right -->
         </div>
         <!-- flex elements -->
      </div>
      <!-- container -->
   </header>
   <!-- header -->
</div>
