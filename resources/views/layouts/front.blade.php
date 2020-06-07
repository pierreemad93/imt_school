
<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Porto - Responsive HTML5 Template 7.5.0</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/rs-plugin/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/circle-flip-slideshow/css/component.css')}}">

    <!-- Demo CSS -->
    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/css/skins/default.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/css/custom.css')}}">
    <!-- Head Libs -->
    <script src="{{asset('assets/front/vendor/modernizr/modernizr.min.js')}}"></script>

</head>
<body>
<div class="body">
    <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="25" src="img/logo.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row pt-3">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                        <a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
                                    </li>
                                    <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                        <a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
                                    </li>
                                    <li class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
                                        <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="img/blank.gif" class="flag flag-us" alt="English" /> English
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                            <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-us" alt="English" /> English</a>
                                            <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-es" alt="English" /> Español</a>
                                            <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-fr" alt="English" /> Française</a>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                        <span class="ws-nowrap"><i class="fas fa-phone"></i> (123) 456-789</span>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header-nav-features">
                                <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                    <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                    <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                        <form role="search" action="page-search-results.html" method="get">
                                            <div class="simple-search input-group">
                                                <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                <span class="input-group-append">
															<button class="btn" type="submit">
																<i class="fa fa-search header-nav-top-icon"></i>
															</button>
														</span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-nav-feature header-nav-features-cart d-inline-flex ml-2">
                                    <a href="#" class="header-nav-features-toggle">
                                        <img src="img/icons/icon-cart.svg" width="14" alt="" class="header-nav-top-icon-img">
                                        <span class="cart-info d-none">
													<span class="cart-qty">1</span>
												</span>
                                    </a>
                                    <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                                        <ol class="mini-products-list">
                                            <li class="item">
                                                <a href="#" title="Camera X1000" class="product-image"><img src="img/products/product-1.jpg" alt="Camera X1000"></a>
                                                <div class="product-details">
                                                    <p class="product-name">
                                                        <a href="#">Camera X1000 </a>
                                                    </p>
                                                    <p class="qty-price">
                                                        1X <span class="price">$890</span>
                                                    </p>
                                                    <a href="#" title="Remove This Item" class="btn-remove"><i class="fas fa-times"></i></a>
                                                </div>
                                            </li>
                                        </ol>
                                        <div class="totals">
                                            <span class="label">Total:</span>
                                            <span class="price-total"><span class="price">$890</span></span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-dark" href="#">View Cart</a>
                                            <a class="btn btn-primary" href="#">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-row">
                            <div class="header-nav pt-1">
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="index.html">
                                                    Home
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="index.html">
                                                            Landing Page
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Classic</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="index-classic.html" data-thumb-preview="img/previews/preview-classic.jpg">Classic - Original</a></li>
                                                            <li><a class="dropdown-item" href="index-classic-color.html" data-thumb-preview="img/previews/preview-classic-color.jpg">Classic - Color</a></li>
                                                            <li><a class="dropdown-item" href="index-classic-light.html" data-thumb-preview="img/previews/preview-classic-light.jpg">Classic - Light</a></li>
                                                            <li><a class="dropdown-item" href="index-classic-video.html" data-thumb-preview="img/previews/preview-classic-video.jpg">Classic - Video</a></li>
                                                            <li><a class="dropdown-item" href="index-classic-video-light.html" data-thumb-preview="img/previews/preview-classic-video-light.jpg">Classic - Video - Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Corporate <span class="tip tip-dark">hot</span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="index-corporate.html" data-thumb-preview="img/previews/preview-corporate.jpg">Corporate - Version 1</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-2.html" data-thumb-preview="img/previews/preview-corporate-2.jpg">Corporate - Version 2</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-3.html" data-thumb-preview="img/previews/preview-corporate-3.jpg">Corporate - Version 3</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-4.html" data-thumb-preview="img/previews/preview-corporate-4.jpg">Corporate - Version 4</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-5.html" data-thumb-preview="img/previews/preview-corporate-5.jpg">Corporate - Version 5</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-6.html" data-thumb-preview="img/previews/preview-corporate-6.jpg">Corporate - Version 6</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-7.html" data-thumb-preview="img/previews/preview-corporate-7.jpg">Corporate - Version 7</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-8.html" data-thumb-preview="img/previews/preview-corporate-8.jpg">Corporate - Version 8</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-9.html" data-thumb-preview="img/previews/preview-corporate-9.jpg">Corporate - Version 9</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-10.html" data-thumb-preview="img/previews/preview-corporate-10.jpg">Corporate - Version 10</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-11.html" data-thumb-preview="img/previews/preview-corporate-11.jpg">Corporate - Version 11</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-12.html" data-thumb-preview="img/previews/preview-corporate-12.jpg">Corporate - Version 12</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-13.html" data-thumb-preview="img/previews/preview-corporate-13.jpg">Corporate - Version 13</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-14.html" data-thumb-preview="img/previews/preview-corporate-14.jpg">Corporate - Version 14</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-15.html" data-thumb-preview="img/previews/preview-corporate-15.jpg">Corporate - Version 15</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-16.html" data-thumb-preview="img/previews/preview-corporate-16.jpg">Corporate - Version 16</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-17.html" data-thumb-preview="img/previews/preview-corporate-17.jpg">Corporate - Version 17</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-18.html" data-thumb-preview="img/previews/preview-corporate-18.jpg">Corporate - Version 18</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-19.html" data-thumb-preview="img/previews/preview-corporate-19.jpg">Corporate - Version 19</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-20.html" data-thumb-preview="img/previews/preview-corporate-20.jpg">Corporate - Version 20</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Portfolio</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="index-portfolio.html" data-thumb-preview="img/previews/preview-portfolio.jpg">Portfolio - Version 1</a></li>
                                                            <li><a class="dropdown-item" href="index-portfolio-2.html" data-thumb-preview="img/previews/preview-portfolio-2.jpg">Portfolio - Version 2</a></li>
                                                            <li><a class="dropdown-item" href="index-portfolio-3.html" data-thumb-preview="img/previews/preview-portfolio-3.jpg">Portfolio - Version 3</a></li>
                                                            <li><a class="dropdown-item" href="index-portfolio-4.html" data-thumb-preview="img/previews/preview-portfolio-4.jpg">Portfolio - Version 4</a></li>
                                                            <li><a class="dropdown-item" href="index-portfolio-5.html" data-thumb-preview="img/previews/preview-portfolio-5.jpg">Portfolio - Version 5</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Blog</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="index-blog.html" data-thumb-preview="img/previews/preview-blog.jpg">Blog - Version 1</a></li>
                                                            <li><a class="dropdown-item" href="index-blog-2.html" data-thumb-preview="img/previews/preview-blog-2.jpg">Blog - Version 2</a></li>
                                                            <li><a class="dropdown-item" href="index-blog-3.html" data-thumb-preview="img/previews/preview-blog-3.jpg">Blog - Version 3</a></li>
                                                            <li><a class="dropdown-item" href="index-blog-4.html" data-thumb-preview="img/previews/preview-blog-4.jpg">Blog - Version 4</a></li>
                                                            <li><a class="dropdown-item" href="index-blog-5.html" data-thumb-preview="img/previews/preview-blog-5.jpg">Blog - Version 5</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">One Page</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="index-one-page.html" data-thumb-preview="img/previews/preview-one-page.jpg">One Page Original</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-mega">
                                                <a class="dropdown-item dropdown-toggle" href="elements.html">
                                                    Elements
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="dropdown-mega-content">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <span class="dropdown-mega-sub-title">Elements 1</span>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a class="dropdown-item" href="elements-accordions.html">Accordions</a></li>
                                                                        <li><a class="dropdown-item" href="elements-toggles.html">Toggles</a></li>
                                                                        <li><a class="dropdown-item" href="elements-tabs.html">Tabs</a></li>
                                                                        <li><a class="dropdown-item" href="elements-icons.html">Icons</a></li>
                                                                        <li><a class="dropdown-item" href="elements-icon-boxes.html">Icon Boxes</a></li>
                                                                        <li><a class="dropdown-item" href="elements-carousels.html">Carousels</a></li>
                                                                        <li><a class="dropdown-item" href="elements-modals.html">Modals</a></li>
                                                                        <li><a class="dropdown-item" href="elements-lightboxes.html">Lightboxes</a></li>
                                                                        <li><a class="dropdown-item" href="elements-word-rotator.html">Word Rotator</a></li>
                                                                        <li><a class="dropdown-item" href="elements-before-after.html">Before / After</a></li>
                                                                        <li><a class="dropdown-item" href="elements-360-image-viewer.html">360º Image Viewer</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <span class="dropdown-mega-sub-title">Elements 2</span>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a class="dropdown-item" href="elements-buttons.html">Buttons</a></li>
                                                                        <li><a class="dropdown-item" href="elements-badges.html">Badges</a></li>
                                                                        <li><a class="dropdown-item" href="elements-lists.html">Lists</a></li>
                                                                        <li><a class="dropdown-item" href="elements-cards.html">Cards</a></li>
                                                                        <li><a class="dropdown-item" href="elements-image-gallery.html">Image Gallery</a></li>
                                                                        <li><a class="dropdown-item" href="elements-image-frames.html">Image Frames</a></li>
                                                                        <li><a class="dropdown-item" href="elements-image-hotspots.html">Image Hotspots</a></li>
                                                                        <li><a class="dropdown-item" href="elements-testimonials.html">Testimonials</a></li>
                                                                        <li><a class="dropdown-item" href="elements-blockquotes.html">Blockquotes</a></li>
                                                                        <li><a class="dropdown-item" href="elements-sticky-elements.html">Sticky Elements</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <span class="dropdown-mega-sub-title">Elements 3</span>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a class="dropdown-item" href="elements-typography.html">Typography</a></li>
                                                                        <li><a class="dropdown-item" href="elements-call-to-action.html">Call to Action</a></li>
                                                                        <li><a class="dropdown-item" href="elements-pricing-tables.html">Pricing Tables</a></li>
                                                                        <li><a class="dropdown-item" href="elements-tables.html">Tables</a></li>
                                                                        <li><a class="dropdown-item" href="elements-progressbars.html">Progress Bars</a></li>
                                                                        <li><a class="dropdown-item" href="elements-process.html">Process</a></li>
                                                                        <li><a class="dropdown-item" href="elements-counters.html">Counters</a></li>
                                                                        <li><a class="dropdown-item" href="elements-countdowns.html">Countdowns</a></li>
                                                                        <li><a class="dropdown-item" href="elements-sections-parallax.html">Sections &amp; Parallax</a></li>
                                                                        <li><a class="dropdown-item" href="elements-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <span class="dropdown-mega-sub-title">Elements 4</span>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a class="dropdown-item" href="elements-headings.html">Headings</a></li>
                                                                        <li><a class="dropdown-item" href="elements-dividers.html">Dividers</a></li>
                                                                        <li><a class="dropdown-item" href="elements-animations.html">Animations</a></li>
                                                                        <li><a class="dropdown-item" href="elements-medias.html">Medias</a></li>
                                                                        <li><a class="dropdown-item" href="elements-maps.html">Maps</a></li>
                                                                        <li><a class="dropdown-item" href="elements-arrows.html">Arrows</a></li>
                                                                        <li><a class="dropdown-item" href="elements-star-ratings.html">Star Ratings</a></li>
                                                                        <li><a class="dropdown-item" href="elements-alerts.html">Alerts</a></li>
                                                                        <li><a class="dropdown-item" href="elements-posts.html">Posts</a></li>
                                                                        <li><a class="dropdown-item" href="elements-forms-basic-contact.html">Forms</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle active" href="#">
                                                    Features
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Headers</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="feature-headers-overview.html">Overview</a></li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Classic</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-classic.html">Classic</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-classic-language-dropdown.html">Classic + Language Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-classic-big-logo.html">Classic + Big Logo</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Flat</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-flat.html">Flat</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-flat-top-bar.html">Flat + Top Bar</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-flat-top-bar-top-borders.html">Flat + Top Bar + Top Border</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-flat-colored-top-bar.html">Flat + Colored Top Bar</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-flat-borders.html">Flat + Borders</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Center</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-center.html">Center</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-center-double-navs.html">Center + Double Navs</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-center-nav-buttons.html">Center + Nav + Buttons</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-center-below-slider.html">Center Below Slider</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Floating</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-floating-bar.html">Floating Bar</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-floating-icons.html">Floating Icons</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a class="dropdown-item" href="feature-headers-below-slider.html">Below Slider</a></li>
                                                            <li><a class="dropdown-item" href="feature-headers-full-video.html">Full Video</a></li>
                                                            <li><a class="dropdown-item" href="feature-headers-narrow.html">Narrow</a></li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Sticky</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-sticky-shrink.html">Sticky Shrink</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-sticky-static.html">Sticky Static</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-sticky-change-logo.html">Sticky Change Logo</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-sticky-reveal.html">Sticky Reveal</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Transparent</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-transparent-light.html">Transparent Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-transparent-dark.html">Transparent Dark</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-transparent-light-bottom-border.html">Transparent Light + Bottom Border</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-transparent-dark-bottom-border.html">Transparent Dark + Bottom Border</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-transparent-bottom-slider.html">Transparent Bottom Slider</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-semi-transparent-light.html">Semi Transparent Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-semi-transparent-dark.html">Semi Transparent Dark</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-semi-transparent-bottom-slider.html">Semi Transparent Bottom Slider</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-semi-transparent-top-bar-borders.html">Semi Transparent + Top Bar + Borders</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Full Width</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width.html">Full Width</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width-borders.html">Full Width + Borders</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width-transparent-light.html">Full Width Transparent Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width-transparent-dark.html">Full Width Transparent Dark</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width-semi-transparent-light.html">Full Width Semi Transparent Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width-semi-transparent-dark.html">Full Width Semi Transparent Dark</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Navbar</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-navbar.html">Navbar</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-navbar-full.html">Navbar Full</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-navbar-pills.html">Navbar Pills</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-navbar-divisors.html">Navbar Divisors</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-navbar-icons-search.html">Nav Bar + Icons + Search</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Side Header</a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Side Header Left</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-left-dropdown.html">Dropdown</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-left-expand.html">Expand</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-left-columns.html">Columns</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-left-slide.html">Slide</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-left-semi-transparent.html">Semi Transparent</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-left-dark.html">Dark</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Side Header Right</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-right-dropdown.html">Dropdown</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-right-expand.html">Expand</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-right-columns.html">Columns</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-right-slide.html">Slide</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-right-semi-transparent.html">Semi Transparent</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-right-dark.html">Dark</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Side Header Offcanvas</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-offcanvas-push.html">Push</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-offcanvas-slide.html">Slide</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="feature-headers-side-header-narrow-bar.html">Side Header Narrow Bar</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a class="dropdown-item" href="feature-headers-sign-in-sign-up.html">Sign In / Sign Up</a></li>
                                                            <li><a class="dropdown-item" href="feature-headers-logged.html">Logged</a></li>
                                                            <li><a class="dropdown-item" href="feature-headers-mini-cart.html">Mini Cart</a></li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Search Styles</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-search-simple-input.html">Simple Input</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-search-simple-input-reveal.html">Simple Input Reveal</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-search-dropdown.html">Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-search-big-input-hidden.html">Big Input Hidden</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-search-full-screen.html">Full Screen</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Extra</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-extra-big-icon.html">Big Icon</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-extra-big-icons-top.html">Big Icons Top</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-extra-button.html">Button</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-extra-background-color.html">Background Color</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Navigations</a>
                                                        <ul class="dropdown-menu">
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Pills</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-pills.html">Pills</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-pills-arrows.html">Pills + Arrows</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-pills-dark-text.html">Pills Dark Text</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-pills-color-dropdown.html">Pills Color Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-pills-square.html">Pills Square</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-pills-rounded.html">Pills Rounded</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Stripes</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-stripe.html">Stripe</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-stripe-dark-text.html">Stripe Dark Text</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-stripe-color-dropdown.html">Stripe Color Dropdown</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Hover Effects</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-top-line.html">Top Line</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-top-line-animated.html">Top Line Animated</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-top-line-color-dropdown.html">Top Line Color Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-bottom-line.html">Bottom Line</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-bottom-line-animated.html">Bottom Line Animated</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-slide.html">Slide</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-sub-title.html">Sub Title</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-line-under-text.html">Line Under Text</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Vertical</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-vertical-dropdown.html">Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-vertical-expand.html">Expand</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-vertical-columns.html">Columns</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-vertical-slide.html">Slide</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Hamburguer</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-hamburguer-sidebar.html">Sidebar</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hamburguer-overlay.html">Overlay</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Dropdown Styles</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-dark.html">Dark</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-light.html">Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-colors.html">Colors</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-top-line.html">Top Line</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-square.html">Square</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow.html">Arrow Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow-center.html">Arrow Center Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-light.html">Modern Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-dark.html">Modern Dark</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Dropdown Effects</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-no-effect.html">No Effect</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-opacity.html">Opacity</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-top.html">Move To Top</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-bottom.html">Move To Bottom</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-right.html">Move To Right</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-left.html">Move To Left</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Font Styles</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-font-small.html">Small</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-font-medium.html">Medium</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-font-large.html">Large</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-font-alternative.html">Alternative</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Icons</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-icons.html">Icons</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-icons-float-icons.html">Float Icons</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a class="dropdown-item" href="feature-navigations-sub-title.html">Sub Title</a></li>
                                                            <li><a class="dropdown-item" href="feature-navigations-divisors.html">Divisors</a></li>
                                                            <li><a class="dropdown-item" href="feature-navigations-logo-between.html">Logo Between</a></li>
                                                            <li><a class="dropdown-item" href="feature-navigations-one-page.html">One Page Nav</a></li>
                                                            <li><a class="dropdown-item" href="feature-navigations-click-to-open.html">Click To Open</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Page Headers</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="feature-page-headers-overview.html">Overview</a></li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Classic</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-page-headers-classic-small.html">Small</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-classic-medium.html">Medium</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-classic-large.html">Large</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Modern</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-page-headers-modern-small.html">Small</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-modern-medium.html">Medium</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-modern-large.html">Large</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Colors</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-page-headers-colors-primary.html">Primary</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-colors-secondary.html">Secondary</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-colors-tertiary.html">Tertiary</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-colors-quaternary.html">Quaternary</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-colors-light.html">Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-colors-dark.html">Dark</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Title Position</a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Left</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-left-small.html">Small</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-left-medium.html">Medium</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-left-large.html">Large</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Right</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-right-small.html">Small</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-right-medium.html">Medium</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-right-large.html">Large</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Center</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-center-small.html">Small</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-center-medium.html">Medium</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-center-large.html">Large</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Background</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-fixed.html">Fixed</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-parallax.html">Parallax</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-video.html">Video</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-transparent-header.html">Transparent Header</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-pattern.html">Pattern</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-overlay.html">Overlay</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-clean.html">Clean (No Background)</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Extra</a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Breadcrumb</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-page-headers-extra-breadcrumb-outside.html">Outside</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-extra-breadcrumb-dark.html">Dark</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-extra-scroll-to-content.html">Scroll to Content</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-extra-full-width.html">Full Width</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Footers</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="feature-footers-overview.html">Overview</a></li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Classic</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-footers-classic.html#footer">Classic</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-classic-advanced.html#footer">Advanced</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-classic-compact.html#footer">Compact</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-classic-simple.html#footer">Simple</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-classic-locations.html#footer">Locations</a></li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Copyright</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-copyright-light.html#footer">Light</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-copyright-dark.html#footer">Dark</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-copyright-social-icons.html#footer">Social Icons</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Colors</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-colors-primary.html#footer">Primary</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-colors-secondary.html#footer">Secondary</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-colors-tertiary.html#footer">Tertiary</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-colors-quaternary.html#footer			">Quaternary</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-colors-light.html#footer">Light</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-colors-light-simple.html#footer">Light Simple</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Modern</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-footers-modern.html#footer">Modern</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-modern-font-style-alternative.html#footer">Font Style Alternative</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-modern-clean.html#footer">Clean</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-modern-useful-links.html#footer">Useful Links</a></li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Background</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-footers-modern-background-image-simple.html#footer">Image Simple</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-modern-background-image-advanced.html#footer">Image Advanced</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-modern-background-video-simple.html#footer">Video Simple</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Call to Action</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-footers-modern-call-to-action-button.html#footer">Button</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-modern-call-to-action-simple.html#footer">Simple</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Blog</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-footers-blog-classic.html#footer">Blog Classic</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">eCommerce</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-footers-ecommerce-classic.html#footer">eCommerce Classic</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Contact Form</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-footers-contact-form-classic.html#footer">Classic</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-contact-form-above-the-map.html#footer">Above the Map</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-contact-form-center.html#footer">Center</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-contact-form-columns.html#footer">Columns</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Map</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-footers-map-hidden.html#footer">Hidden Map</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-map-full-width.html#footer">Full Width</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Extra</a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Simple</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-footers-extra-top-social-icons.html#footer">Top Social Icons</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-extra-big-icons.html#footer">Big Icons</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="feature-footers-extra-recent-work.html#footer">Recent Work</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-extra-reveal.html#footer">Reveal</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-extra-instagram.html#footer">Instagram</a></li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Full Width</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-footers-extra-full-width-light.html#footer">Simple Light</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-extra-full-width-dark.html#footer">Simple Dark</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Admin Extension <span class="tip tip-dark">hot</span><em class="not-included">(Not Included)</em></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="feature-admin-forms-basic.html">Forms Basic</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-forms-advanced.html">Forms Advanced</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-forms-wizard.html">Forms Wizard</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-forms-code-editor.html">Code Editor</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-tables-advanced.html">Tables Advanced</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-tables-responsive.html">Tables Responsive</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-tables-editable.html">Tables Editable</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-tables-ajax.html">Tables Ajax</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-charts.html">Charts</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Sliders</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="index-classic.html">Revolution Slider</a></li>
                                                            <li><a class="dropdown-item" href="index-slider-nivo.html">Nivo Slider</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Layout Options</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="feature-layout-boxed.html">Boxed</a></li>
                                                            <li><a class="dropdown-item" href="feature-layout-dark.html">Dark</a></li>
                                                            <li><a class="dropdown-item" href="feature-layout-rtl.html">RTL</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Extra</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="feature-grid-system.html">Grid System</a></li>
                                                            <li><a class="dropdown-item" href="feature-page-loading.html">Page Loading</a></li>
                                                            <li><a class="dropdown-item" href="feature-page-transition.html">Page Transition</a></li>
                                                            <li><a class="dropdown-item" href="feature-lazy-load.html">Lazy Load</a></li>
                                                            <li><a class="dropdown-item" href="feature-side-panel.html">Side Panel</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                    Pages
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Contact Us</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="contact-us-advanced.php">Contact Us - Advanced</a></li>
                                                            <li><a class="dropdown-item" href="contact-us.html">Contact Us - Basic</a></li>
                                                            <li><a class="dropdown-item" href="contact-us-recaptcha.html">Contact Us - Recaptcha</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">About Us</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="about-us-advanced.html">About Us - Advanced</a></li>
                                                            <li><a class="dropdown-item" href="about-us.html">About Us - Basic</a></li>
                                                            <li><a class="dropdown-item" href="about-me.html">About Me</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Layouts</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="page-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="page-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="page-right-sidebar.html">Right Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
                                                            <li><a class="dropdown-item" href="page-sticky-sidebar.html">Sticky Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="page-secondary-navbar.html">Secondary Navbar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Extra</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="page-404.html">404 Error</a></li>
                                                            <li><a class="dropdown-item" href="page-500.html">500 Error</a></li>
                                                            <li><a class="dropdown-item" href="page-coming-soon.html">Coming Soon</a></li>
                                                            <li><a class="dropdown-item" href="page-maintenance-mode.html">Maintenance Mode</a></li>
                                                            <li><a class="dropdown-item" href="page-search-results.html">Search Results</a></li>
                                                            <li><a class="dropdown-item" href="sitemap.html">Sitemap</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Team</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="page-team-advanced.html">Team - Advanced</a></li>
                                                            <li><a class="dropdown-item" href="page-team.html">Team - Basic</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Services</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="page-services.html">Services - Version 1</a></li>
                                                            <li><a class="dropdown-item" href="page-services-2.html">Services - Version 2</a></li>
                                                            <li><a class="dropdown-item" href="page-services-3.html">Services - Version 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item" href="page-custom-header.html">Custom Header</a></li>
                                                    <li><a class="dropdown-item" href="page-careers.html">Careers</a></li>
                                                    <li><a class="dropdown-item" href="page-faq.html">FAQ</a></li>
                                                    <li><a class="dropdown-item" href="page-login.html">Login / Register</a></li>
                                                    <li><a class="dropdown-item" href="page-user-profile.html">User Profile</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                    Portfolio
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Single Project</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="portfolio-single-wide-slider.html">Wide Slider</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-small-slider.html">Small Slider</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-full-width-slider.html">Full Width Slider</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-gallery.html">Gallery</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-carousel.html">Carousel</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-medias.html">Medias</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-full-width-video.html">Full Width Video</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-masonry-images.html">Masonry Images</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-right-sidebar.html">Right Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-sticky-sidebar.html">Sticky Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-extended.html">Extended</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Grid Layouts</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="portfolio-grid-1-column.html">1 Column</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-2-columns.html">2 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-3-columns.html">3 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-4-columns.html">4 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-5-columns.html">5 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-6-columns.html">6 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-no-margins.html">No Margins</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-full-width-no-margins.html">Full Width No Margins</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-1-column-title-and-description.html">Title and Description</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Masonry Layouts</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="portfolio-masonry-2-columns.html">2 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-masonry-3-columns.html">3 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-masonry-4-columns.html">4 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-masonry-5-columns.html">5 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-masonry-6-columns.html">6 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-masonry-no-margins.html">No Margins</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-masonry-full-width.html">Full Width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Sidebar Layouts</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="portfolio-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-sidebar-left-and-right.html">Left and Right Sidebars</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-sidebar-sticky.html">Sticky Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Ajax</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="portfolio-ajax-page.html">Ajax on Page</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-ajax-modal.html">Ajax on Modal</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Extra</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="portfolio-extra-timeline.html">Timeline</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-extra-lightbox.html">Lightbox</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-extra-load-more.html">Load More</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-extra-infinite-scroll.html">Infinite Scroll</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-extra-pagination.html">Pagination</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-extra-combination-filters.html">Combination Filters</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                    Blog
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Large Image</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-large-image-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-large-image-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-large-image-sidebar-right.html">Right Sidebar </a></li>
                                                            <li><a class="dropdown-item" href="blog-large-image-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Medium Image</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-medium-image-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-medium-image-sidebar-right.html">Right Sidebar </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Grid</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-grid-4-columns.html">4 Columns</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-3-columns.html">3 Columns</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-no-margins.html">No Margins</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-no-margins-full-width.html">No Margins Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-sidebar-right.html">Right Sidebar </a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Masonry</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-masonry-4-columns.html">4 Columns</a></li>
                                                            <li><a class="dropdown-item" href="blog-masonry-3-columns.html">3 Columns</a></li>
                                                            <li><a class="dropdown-item" href="blog-masonry-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-masonry-no-margins.html">No Margins</a></li>
                                                            <li><a class="dropdown-item" href="blog-masonry-no-margins-full-width.html">No Margins Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-masonry-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-masonry-sidebar-right.html">Right Sidebar </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Timeline</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-timeline.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-timeline-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-timeline-sidebar-right.html">Right Sidebar </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Single Post</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-post.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-slider-gallery.html">Slider Gallery</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-image-gallery.html">Image Gallery</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-embedded-video.html">Embedded Video</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-html5-video.html">HTML5 Video</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-blockquote.html">Blockquote</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-link.html">Link</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-embedded-audio.html">Embedded Audio</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-small-image.html">Small Image</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-sidebar-right.html">Right Sidebar </a></li>
                                                            <li><a class="dropdown-item" href="blog-post-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Post Comments</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-post.html#comments">Default</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-comments-facebook.html#comments">Facebook Comments</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-comments-disqus.html#comments">Disqus Comments</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                    Shop
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Single Product</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="shop-product-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="shop-product-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="shop-product-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="shop-product-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item" href="shop-4-columns.html">4 Columns</a></li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">3 Columns</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="shop-3-columns-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="shop-3-columns-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="shop-3-columns-sidebar-right.html">Right Sidebar </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">2 Columns</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="shop-2-columns-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="shop-2-columns-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="shop-2-columns-sidebar-right.html">Right Sidebar </a></li>
                                                            <li><a class="dropdown-item" href="shop-2-columns-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">1 Column</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="shop-1-column-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="shop-1-column-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="shop-1-column-sidebar-right.html">Right Sidebar </a></li>
                                                            <li><a class="dropdown-item" href="shop-1-column-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
                                                    <li><a class="dropdown-item" href="shop-login.html">Login</a></li>
                                                    <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <ul class="header-social-icons social-icons d-none d-sm-block">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">
        <div class="slider-container rev_slider_wrapper" style="height: 670px;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    <li data-transition="fade">
                        <img src="img/slides/slide-bg.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <div class="tp-caption tp-resizeme"
                             data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-type="image"
                             data-x="right"
                             data-y="top"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-basealign="slide"><img src="img/slides/slide-devices.jpg" alt=""></div>

                        <div class="tp-caption tp-resizeme"
                             data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-type="image"
                             data-x="left"
                             data-y="center"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-basealign="slide"><img src="img/slides/slide-laptop.jpg" alt=""></div>

                        <div class="tp-caption tp-resizeme rs-parallaxlevel-7"
                             data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-type="image"
                             data-x="-500"
                             data-y="-700"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-basealign="slide"><img src="img/slides/slide-parallax-porto-symbol.png" alt=""></div>

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['-150','-150','-150','-240']"
                             data-y="center" data-voffset="['-50','-50','-50','-75']"
                             data-start="1000"
                             data-transform_in="x:[-300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                             data-x="center"
                             data-y="center" data-voffset="['-50','-50','-50','-75']"
                             data-start="700"
                             data-fontsize="['22','22','22','40']"
                             data-lineheight="['25','25','25','45']"
                             data-transform_in="y:[-50%];opacity:0;s:500;">DO YOU NEED A NEW</div>

                        <div class="tp-caption d-none d-md-block"
                             data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['80','80','80','135']"
                             data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="img/slides/slide-blue-line.png" alt=""></div>

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['150','150','150','240']"
                             data-y="center" data-voffset="['-50','-50','-50','-75']"
                             data-start="1000"
                             data-transform_in="x:[300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                             data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center"
                             data-y="center"
                             data-fontsize="['50','50','50','90']"
                             data-lineheight="['55','55','55','95']">WEB DESIGN?</div>

                        <div class="tp-caption font-weight-light"
                             data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-x="center"
                             data-y="center" data-voffset="['40','40','40','80']"
                             data-fontsize="['18','18','18','50']"
                             data-lineheight="['20','20','20','55']"
                             style="color: #b5b5b5;">Check out our options and features</div>

                    </li>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="img/slides/slide-bg-2.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['-170','-170','-170','-350']"
                             data-y="center" data-voffset="['-50','-50','-50','-75']"
                             data-start="1000"
                             data-transform_in="x:[-300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                             data-x="center"
                             data-y="center" data-voffset="['-50','-50','-50','-75']"
                             data-start="700"
                             data-fontsize="['16','16','16','40']"
                             data-lineheight="['25','25','25','45']"
                             data-transform_in="y:[-50%];opacity:0;s:500;">WE WORK HARD AND PORTO HAS</div>

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['170','170','170','350']"
                             data-y="center" data-voffset="['-50','-50','-50','-75']"
                             data-start="1000"
                             data-transform_in="x:[300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                             data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center"
                             data-y="center"
                             data-fontsize="['50','50','50','90']"
                             data-lineheight="['55','55','55','95']">THE BEST DESIGN</div>

                        <div class="tp-caption font-weight-light ws-normal text-center"
                             data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-x="center"
                             data-y="center" data-voffset="['60','60','60','105']"
                             data-width="['530','530','530','1100']"
                             data-fontsize="['18','18','18','40']"
                             data-lineheight="['26','26','26','45']"
                             style="color: #b5b5b5;">Trusted by over <strong class="text-color-light">30,000</strong> satisfied users, Porto is a huge success in the one of largest world's MarketPlace.</div>

                    </li>
                    <li class="slide-overlay slide-overlay-primary" data-transition="fade">
                        <img src="img/slides/slide-bg-6.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['-145','-145','-145','-320']"
                             data-y="center" data-voffset="['-80','-80','-80','-130']"
                             data-start="1000"
                             data-transform_in="x:[-300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                             data-x="center"
                             data-y="center" data-voffset="['-80','-80','-80','-130']"
                             data-start="700"
                             data-fontsize="['16','16','16','40']"
                             data-lineheight="['25','25','25','45']"
                             data-transform_in="y:[-50%];opacity:0;s:500;">WE CREATE DESIGNS, WE ARE</div>

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['145','145','145','320']"
                             data-y="center" data-voffset="['-80','-80','-80','-130']"
                             data-start="1000"
                             data-transform_in="x:[300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['-155','-155','-155','-255']"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['150','150','150','260']">P</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['-80','-80','-80','-130']"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['150','150','150','260']">O</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['150','150','150','260']">R</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['65','65','65','115']"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['150','150','150','260']">T</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['139','139','139','240']"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['150','150','150','260']">O</div>

                        <div class="tp-caption font-weight-light text-color-light"
                             data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-x="center"
                             data-y="center" data-voffset="['85','85','85','140']"
                             data-fontsize="['18','18','18','40']"
                             data-lineheight="['26','26','26','45']">The best choice for your new website</div>

                    </li>
                </ul>
            </div>
        </div>

        <div class="home-intro bg-primary" id="home-intro">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p>
                            The fastest way to grow your business with the leader in <span class="highlighted-word">Technology</span>
                            <span>Check out our options and features included.</span>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="get-started text-left text-lg-right">
                            <a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a>
                            <div class="learn-more">or <a href="index.html">learn more.</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">

            <div class="row text-center pt-3">
                <div class="col-md-10 mx-md-auto">
                    <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                        <span>Porto is </span>
                        <span class="word-rotator-words bg-dark">
									<b class="is-visible">incredibly</b>
									<b>especially</b>
									<b>extremely</b>
								</span>
                        <span> beautiful and fully responsive.</span>
                    </h1>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
                    </p>
                </div>
            </div>

        </div>

        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="home-concept mt-5">
                <div class="container">

                    <div class="row text-center">
                        <span class="sun"></span>
                        <span class="cloud"></span>
                        <div class="col-lg-2 ml-lg-auto">
                            <div class="process-image">
                                <img src="img/home/home-concept-item-1.png" alt="" />
                                <strong>Strategy</strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="process-image process-image-on-middle">
                                <img src="img/home/home-concept-item-2.png" alt="" />
                                <strong>Planning</strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="process-image">
                                <img src="img/home/home-concept-item-3.png" alt="" />
                                <strong>Build</strong>
                            </div>
                        </div>
                        <div class="col-lg-4 ml-lg-auto">
                            <div class="project-image">
                                <div id="fcSlideshow" class="fc-slideshow">
                                    <ul class="fc-slides">
                                        <li><a href="portfolio-single-wide-slider.html"><img class="img-responsive" src="img/projects/project-home-1.jpg" alt="" /></a></li>
                                        <li><a href="portfolio-single-wide-slider.html"><img class="img-responsive" src="img/projects/project-home-2.jpg" alt="" /></a></li>
                                        <li><a href="portfolio-single-wide-slider.html"><img class="img-responsive" src="img/projects/project-home-3.jpg" alt="" /></a></li>
                                    </ul>
                                </div>
                                <strong class="our-work">Our Work</strong>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container mb-5 pb-4">

            <div class="row">
                <div class="col mb-4">
                    <hr class="my-5">
                </div>
            </div>

            <div class="row pb-3">
                <div class="col-lg-8">
                    <h2 class="font-weight-normal text-7">Our <strong class="font-weight-extra-bold">Features</strong></h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-support text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">Customer Support</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-doc text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">HTML5 / CSS3 / JS</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-social-google text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">500+ Google Fonts</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-pencil text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">Colors</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-layers text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">Sliders</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-user text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">Icons</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-menu text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">Buttons</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-screen-desktop text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">Lightbox</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2 class="font-weight-normal text-6">and more...</h2>

                    <div class="accordion accordion-modern" id="accordion">
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <i class="icons icon-diamond text-color-primary"></i>
                                        Creative Websites
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse show">
                                <div class="card-body text-2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blanorem ipsum dolor sit amet, consecte.</p>
                                    <p class="mb-0">Adipiscing elit phasellus blanit ma... <a href="#" class="d-block text-color-dark font-weight-semibold pt-4">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        <i class="icons icon-bubble text-color-primary"></i>
                                        Contact Forms
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse">
                                <div class="card-body text-2">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        <i class="icons icon-grid text-color-primary"></i>
                                        Portfolio Pages
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="collapse">
                                <div class="card-body text-2">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="solid my-5">

            <div class="row text-center pt-4">
                <div class="col">
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                        <span>We're not the only ones </span>
                        <span class="word-rotator-words bg-primary">
									<b class="is-visible">excited</b>
									<b>happy</b>
								</span>
                        <span> about Porto Template...</span>
                    </h2>
                    <h4 class="text-primary lead tall text-4">30,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</h4>
                </div>
            </div>

            <div class="row text-center mt-5">
                <div class="owl-carousel owl-theme carousel-center-active-item" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                    <div>
                        <img class="img-fluid" src="img/logos/logo-1.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="img/logos/logo-3.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="img/logos/logo-5.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="img/logos/logo-6.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                    </div>
                </div>
            </div>

        </div>

        <section class="section section-custom-map appear-animation" data-appear-animation="fadeInUpShorter">
            <section class="section section-default section-footer">
                <div class="container">
                    <div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
                        <div class="col-lg-6">
                            <div class="recent-posts mb-5">
                                <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Latest</strong> Posts</h2>
                                <div class="owl-carousel owl-theme dots-title mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'autoplay': true, 'autoplayTimeout': 8000}">
                                    <div class="row">
                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                            <article>
                                                <div class="row">
                                                    <div class="col-auto pr-0">
                                                        <div class="date">
                                                            <span class="day font-weight-extra-bold">15</span>
                                                            <span class="month text-1">JAN</span>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-1">
                                                        <h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        <p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-lg-6">
                                            <article>
                                                <div class="row">
                                                    <div class="col-auto pr-0">
                                                        <div class="date">
                                                            <span class="day font-weight-extra-bold">14</span>
                                                            <span class="month text-1">JAN</span>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-1">
                                                        <h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        <p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                            <article>
                                                <div class="row">
                                                    <div class="col-auto pr-0">
                                                        <div class="date">
                                                            <span class="day font-weight-extra-bold">13</span>
                                                            <span class="month text-1">JAN</span>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-1">
                                                        <h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        <p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-lg-6">
                                            <article>
                                                <div class="row">
                                                    <div class="col-auto pr-0">
                                                        <div class="date">
                                                            <span class="day font-weight-extra-bold">12</span>
                                                            <span class="month text-1">JAN</span>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-1">
                                                        <h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        <p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                            <article>
                                                <div class="row">
                                                    <div class="col-auto pr-0">
                                                        <div class="date">
                                                            <span class="day font-weight-extra-bold">11</span>
                                                            <span class="month text-1">JAN</span>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-1">
                                                        <h4 class="text-primary text-4"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        <p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-lg-6">
                                            <article>
                                                <div class="row">
                                                    <div class="col-auto pr-0">
                                                        <div class="date">
                                                            <span class="day font-weight-extra-bold">10</span>
                                                            <span class="month text-1">JAN</span>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-1">
                                                        <h4 class="text-primary text-4"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        <p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        <a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">What</strong> Client’s Say</h2>
                            <div class="row">
                                <div class="owl-carousel owl-theme dots-title dots-title-pos-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true}">
                                    <div>
                                        <div class="col">
                                            <div class="testimonial testimonial-primary">
                                                <blockquote>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down"></div>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumbnail">
                                                        <img src="img/clients/client-1.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <p><strong>John Doe</strong><span>Okler</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col">
                                            <div class="testimonial testimonial-primary">
                                                <blockquote>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down"></div>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumbnail">
                                                        <img src="img/clients/client-1.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <p><strong>John Doe</strong><span>Okler</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>

    <footer id="footer">
        <div class="container">
            <div class="footer-ribbon">
                <span>Get in Touch</span>
            </div>
            <div class="row py-5 my-4">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-3 mb-3">NEWSLETTER</h5>
                    <p class="pr-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mr-4 mb-3 mb-md-0">
                        <div class="input-group input-group-rounded">
                            <input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                            <span class="input-group-append">
										<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
									</span>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="text-3 mb-3">LATEST TWEETS</h5>
                    <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
                        <p>Please wait...</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="contact-details">
                        <h5 class="text-3 mb-3">CONTACT US</h5>
                        <ul class="list list-icons list-icons-lg">
                            <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
                            <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
                            <li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <h5 class="text-3 mb-3">FOLLOW US</h5>
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                        <a href="index.html" class="logo pr-0 pr-lg-3">
                            <img alt="Porto Website Template" src="img/logo-footer.png" class="opacity-5" height="33">
                        </a>
                    </div>
                    <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                        <p>© Copyright 2019. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                        <nav id="sub-menu">
                            <ul>
                                <li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ml-1 text-decoration-none"> FAQ's</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ml-1 text-decoration-none"> Sitemap</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ml-1 text-decoration-none"> Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Vendor -->
<script src="{{asset('assets/front/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/common/common.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/vide/jquery.vide.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/vivus/vivus.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('assets/front/js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('assets/front/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/front/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js')}}"></script>
<script src="{{asset('assets/front/js/views/view.home.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('assets/front/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('assets/front/js/theme.init.js')}}"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12345678-1', 'auto');
    ga('send', 'pageview');
</script>
 -->

</body>
</html>
