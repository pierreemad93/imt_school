<header id="header"
        data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html">
                                <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40"
                                     data-sticky-top="25" src="img/logo.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        {{--Start Top nav bar--}}
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                    <a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i>
                                        About Us</a>
                                </li>
                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                    <a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i>
                                        Contact Us</a>
                                </li>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li class=" nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show ">
                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach

{{--                                <li class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">--}}
{{--                                    <a class="nav-link" href="#" role="button" id="dropdownLanguage"--}}
{{--                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <img src="{{asset('assets/front/img/blank.gif')}}" class="flag flag-us"--}}
{{--                                             alt="English"/>ِEnglish--}}
{{--                                        <i class="fas fa-angle-down"></i>--}}
{{--                                    </a>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownLanguage">--}}
{{--                                        <a class="dropdown-item" href="#">--}}
{{--                                            <img src="{{asset('assets/front/img/blank.gif')}}" class="flag flag-us"--}}
{{--                                                 alt="English"/> English</a>--}}
{{--                                        <a class="dropdown-item" href="#"><img--}}
{{--                                                src="{{asset('assets/front/img/blank.gif')}}" class="flag flag-eg"--}}
{{--                                                alt="Arabic"/> Arabic</a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                                <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                    <span class="ws-nowrap"><i class="fas fa-phone"></i> (123) 456-789</span>
                                </li>
                            </ul>
                        </nav>
                        {{--End Top nav bar--}}

                        {{--Start nav-features--}}
                        <div class="header-nav-features">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i
                                        class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search"
                                                   value="" placeholder="Search...">
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
                                    <img src="img/icons/icon-cart.svg" width="14" alt=""
                                         class="header-nav-top-icon-img">
                                    <span class="cart-info d-none">
													<span class="cart-qty">1</span>
												</span>
                                </a>
                                <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                                    <ol class="mini-products-list">
                                        <li class="item">
                                            <a href="#" title="Camera X1000" class="product-image"><img
                                                    src="img/products/product-1.jpg" alt="Camera X1000"></a>
                                            <div class="product-details">
                                                <p class="product-name">
                                                    <a href="#">Camera X1000 </a>
                                                </p>
                                                <p class="qty-price">
                                                    1X <span class="price">$890</span>
                                                </p>
                                                <a href="#" title="Remove This Item" class="btn-remove"><i
                                                        class="fas fa-times"></i></a>
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
                        {{--Start nav-features--}}
                    </div>
                    <div class="header-row">
                        <div class="header-nav pt-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="index.html">Home</a>
                                        </li>
                                        {{--                                        <li class="dropdown dropdown-mega">--}}
                                        {{--                                            <a class="dropdown-item dropdown-toggle" href="elements.html">--}}
                                        {{--                                                Elements--}}
                                        {{--                                            </a>--}}
                                        {{--                                            <ul class="dropdown-menu">--}}
                                        {{--                                                <li>--}}
                                        {{--                                                    <div class="dropdown-mega-content">--}}
                                        {{--                                                        <div class="row">--}}
                                        {{--                                                            <div class="col-lg-3">--}}
                                        {{--                                                                <span class="dropdown-mega-sub-title">Elements 1</span>--}}
                                        {{--                                                                <ul class="dropdown-mega-sub-nav">--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-accordions.html">Accordions</a>--}}
                                        {{--                                                                    </li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-toggles.html">Toggles</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-tabs.html">Tabs</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-icons.html">Icons</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-icon-boxes.html">Icon--}}
                                        {{--                                                                            Boxes</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-carousels.html">Carousels</a>--}}
                                        {{--                                                                    </li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-modals.html">Modals</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-lightboxes.html">Lightboxes</a>--}}
                                        {{--                                                                    </li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-word-rotator.html">Word--}}
                                        {{--                                                                            Rotator</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-before-after.html">Before /--}}
                                        {{--                                                                            After</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-360-image-viewer.html">360º--}}
                                        {{--                                                                            Image Viewer</a></li>--}}
                                        {{--                                                                </ul>--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                            <div class="col-lg-3">--}}
                                        {{--                                                                <span class="dropdown-mega-sub-title">Elements 2</span>--}}
                                        {{--                                                                <ul class="dropdown-mega-sub-nav">--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-buttons.html">Buttons</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-badges.html">Badges</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-lists.html">Lists</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-cards.html">Cards</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-image-gallery.html">Image--}}
                                        {{--                                                                            Gallery</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-image-frames.html">Image--}}
                                        {{--                                                                            Frames</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-image-hotspots.html">Image--}}
                                        {{--                                                                            Hotspots</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-testimonials.html">Testimonials</a>--}}
                                        {{--                                                                    </li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-blockquotes.html">Blockquotes</a>--}}
                                        {{--                                                                    </li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-sticky-elements.html">Sticky--}}
                                        {{--                                                                            Elements</a></li>--}}
                                        {{--                                                                </ul>--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                            <div class="col-lg-3">--}}
                                        {{--                                                                <span class="dropdown-mega-sub-title">Elements 3</span>--}}
                                        {{--                                                                <ul class="dropdown-mega-sub-nav">--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-typography.html">Typography</a>--}}
                                        {{--                                                                    </li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-call-to-action.html">Call to--}}
                                        {{--                                                                            Action</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-pricing-tables.html">Pricing--}}
                                        {{--                                                                            Tables</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-tables.html">Tables</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-progressbars.html">Progress--}}
                                        {{--                                                                            Bars</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-process.html">Process</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-counters.html">Counters</a>--}}
                                        {{--                                                                    </li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-countdowns.html">Countdowns</a>--}}
                                        {{--                                                                    </li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-sections-parallax.html">Sections--}}
                                        {{--                                                                            &amp; Parallax</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-tooltips-popovers.html">Tooltips--}}
                                        {{--                                                                            &amp; Popovers</a></li>--}}
                                        {{--                                                                </ul>--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                            <div class="col-lg-3">--}}
                                        {{--                                                                <span class="dropdown-mega-sub-title">Elements 4</span>--}}
                                        {{--                                                                <ul class="dropdown-mega-sub-nav">--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-headings.html">Headings</a>--}}
                                        {{--                                                                    </li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-dividers.html">Dividers</a>--}}
                                        {{--                                                                    </li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-animations.html">Animations</a>--}}
                                        {{--                                                                    </li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-medias.html">Medias</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-maps.html">Maps</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-arrows.html">Arrows</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-star-ratings.html">Star--}}
                                        {{--                                                                            Ratings</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-alerts.html">Alerts</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-posts.html">Posts</a></li>--}}
                                        {{--                                                                    <li><a class="dropdown-item"--}}
                                        {{--                                                                           href="elements-forms-basic-contact.html">Forms</a>--}}
                                        {{--                                                                    </li>--}}
                                        {{--                                                                </ul>--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </li>--}}
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Courses
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Embeded System</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="shop-product-full-width.html">ARM</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item" href="shop-4-columns.html">4 Columns</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">About</a>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle"
                                                                href="#">Contact</a></li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Training
                                                Portal</a></li>
                                        @if (Route::has('login'))
                                            @auth
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#">
                                                        {{Auth::user()->name}}
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        {{-- Start if condition--}}
                                                        {{-- check permission if you are admin | auther --}}
                                                        @if( Auth::user()->permission == '1' || Auth::user()->permission == '2')
                                                            <li>
                                                                <a class="dropdown-item" href="{{route('user.profile')}}">Dashboard</a>
                                                            </li>
                                                        @endif
                                                        {{-- End if condition--}}
                                                        <li>
                                                            <a class="dropdown-item" href="{{route('user.profile')}}">Profile</a>
                                                        </li>
                                                        <li class="">
                                                            <a class="dropdown-item" href="{{route('logout')}}"
                                                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
                                                            <form id="logout-form" action="{{route('logout')}}"
                                                                  method="POST" style="display:none">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                            @else
                                                <li class="dropdown">
                                                    <a href="{{route('login')}}">Login</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li class="dropdown">
                                                        <a href="{{route('register')}}">Register</a>
                                                    </li>
                                                @endif
                                            @endauth
                                        @endif
                                    </ul>
                                </nav>
                                {{--Start social-media icon--}}
                                <ul class="header-social-icons social-icons d-none d-sm-block">
                                    <li class="social-icons-facebook">
                                        <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook-f "></i>
                                        </a>
                                    </li>
                                </ul>
                                {{--End social-media icon--}}
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
