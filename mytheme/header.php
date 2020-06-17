<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BlackOut Power Systems</title>
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <nav>
            <div class="topnav" id="myTopnav">
                <li class="logo"><a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_theme_file_uri('/images/B2.jpg'); ?>" 
                width="250px" height="90px"></a></li>

                <li class="nav-link-item">
                    <a href="<?php echo get_home_url(); ?>">
                    <i class="fas fa-home"></i> Home</a> 
                </li>
                  
                <li class="nav-link-item dropdown">
                    <a href="<?php echo get_post_type_archive_link('products'); ?>">
                    <i class="fab fa-product-hunt"></i> Products</a> 
                    <div class="dropdown-content">
                        <a href="<?php echo get_post_type_archive_link('series'); ?> "> 
                        <i class="fas fa-equals"></i> Series </a>
                    </div>
                </li>
                
                <li class="nav-link-item">
                    <a href="<?php echo get_post_type_archive_link('news'); ?>">
                    <i class="fas fa-pen-square"></i> News </a> 
                </li>
                <li class="nav-link-item">
                    <a href="<?php echo get_permalink(get_page_by_title('About Us')); ?>">
                    <i class="fas fa-id-card"></i> About Us</a> 
                </li>
                <li class="nav-link-item">
                    <a href="<?php echo get_permalink(get_page_by_title('Contact Us')); ?>">
                    <i class="fas fa-id-card"></i> Contact Us</a> 
                </li>

                </li class="nav-link-item">
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()"> &#9776; </a>
                </li>               
            </ul>
        </nav>
    </header>