<?php 
/**
 * Header template
 * 
 * @package WebsiteTest
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="shortcut icon" href="/wp-content/themes/websiteOngNuoc/assets/images/logo.png">
    <?php
        wp_head();
    ?>

</head>

<body>

    <header class="header text-center">
        <a class="site-title pt-lg-4 mb-0" href="index.html"><?php echo get_bloginfo('name');?></a>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <?php
					if(function_exists('the_custom_logo')) {
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id);
					}
				?>
                <img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo">


                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location'=>'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav 
                            flex-column 
                            text-sm-center 
                            text-md-left">%3$s</ul>',
                        )
                    );
                ?>

                <!-- <ul class=" navbar-nav flex-column text-sm-center text-md-left">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post.html"><i class="fas fa-file-alt fa-fw mr-2"></i>Blog Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page.html"><i class="fas fa-file-image fa-fw mr-2"></i>Blog Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="archive.html"><i class="fas fa-archive fa-fw mr-2"></i>Blog
                            Archive</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="contact.html"><i
                                class="fas fa-envelope fa-fw mr-2"></i>Contact Us</a>
                    </li>
                </ul> -->
                <hr>
                <ul class="social-list list-inline py-3 mx-auto">
                    <?php 
                        dynamic_sidebar('sidebar-1');
                    ?>
                </ul>

            </div>

        </nav>
    </header>
    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <h1 class="heading"><?php the_title(); ?>
            </h1>
        </header>