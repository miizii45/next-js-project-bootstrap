<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="page-wrapper">

    <!-- Main Header -->
    <header class="main-header header-style-one">

       <!--Header Top-->
       <div class="header-top">
            <div class="auto-container">
               <div class="clearfix">

                    <div class="top-left clearfix">
						<div class="text" style="color: white;font-size: 16px;font-weight: bold;">Bienvenue sur le site web de la mairie de Grand Dakar</div>
                    </div>

                    <div class="top-right pull-right">
					<ul class="login-info">
							<li><div class="search-box-outer">
                    <div class="search-box-btn" style="color: white;font-size: 16px;font-weight: bold;cursor: pointer;">Rechercher <span class="fa fa-search"></span></div>
               </div></li>
						</ul>

						<ul class="social-nav">
							<li class="facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
							<li class="linked"><a href="#"><span class="fa fa-linkedin"></span></a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Header Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-box">
                        <div class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="https://mairiegranddakar.com/public/images/logo.jpg" style="height:85px;" alt="Logo Mairie Grand Dakar"  ></a>
                        </div>
                    </div>
					<div class="pull-right upper-right clearfix info">

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-place"></span></div>
                            <ul>
                                <li><strong>Adresse</strong></li>
                                <li>Avenue Habib Bourguiba X Rue<br> Abébé Bikila Dakar-SENEGAL</li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-email-3"></span></div>
                            <ul>
                                <li>bdlgranddakar@gmail.com</li>
                                <li>+221 33 864 22 09<br>+221 30 105 27 42</li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-clock-3"></span></div>
                            <ul>
								<li>Lun - Ven 8.00 à 17.00 </li>
                                <li>Sam & Dim Fermé</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Header Lower-->
        <div class="header-lower">

            <div class="auto-container">
                <div class="nav-outer clearfix">
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
					<!-- Main Menu -->
					<nav class="main-menu show navbar-expand-md justify-content-md-center ">
						<div class="navbar-header">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="navbar-collapse collapse clearfix " id="navbarSupportedContent">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'primary',
								'menu_class' => 'navigation clearfix',
								'container' => false,
								'fallback_cb' => false,
							));
							?>
						</div>
					</nav>
					<!-- Main Menu End-->

                </div>
            </div>
        </div>
        <!-- End Header Lower -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				</div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->
</div>
</body>
</html>
