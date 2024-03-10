<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <!-- <script src="JavaScript/script.js"></script> -->
	<!--<link href="CSS/styles.css" rel="stylesheet"> -->
    <link rel="icon" type="images.ico" href="images/Group 35.ico">
	
	
	
    <?php wp_head(); ?>

    <?php wp_footer(); ?>

    <title>Твой стартап</title>
</head>

<body>
    <section class="container" style="padding: 0;">
            <header>

                <div class="logo">
                    <a href="../project1/main.html"><img src="<?php the_field('header_logo'); ?>" alt="Логотип компании" class="logo__img"></a>
                </div>

                <nav>
                    <ul>
						
					<?php

					$block = get_field('header_nav_block_ul');	

					if( $block ): ?>

						<li><a href="#"><?= $block['header_nav_block_li_1']; ?></a></li>
						<li><a href="#"><?= $block['header_nav_block_li_2']; ?></a></li>
						<li><a href="#"><?= $block['header_nav_block_li_3']; ?><span class="nav__arrow"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/arrow.svg"></span></a>  
							<div class="nav__subnav-wrapper">
								<ul class="nav__subnav">
									
									<?php

									$subblock = get_field('header_subnav_block');	

									if( $subblock ): ?>
									
										<li><a href="#" class="nav__subnav-link"><?= $subblock['header_subnav_block_li_1']; ?></a></li>
										<li><a href="#" class="nav__subnav-link"><?= $subblock['header_subnav_block_li_2']; ?></a></li>
										<li><a href="#" class="nav__subnav-link"><?= $subblock['header_subnav_block_li_3']; ?></a></li>
										<li><a href="#" class="nav__subnav-link"><?= $subblock['header_subnav_block_li_4']; ?></a></li>
									
									<?php endif; ?>
									
								</ul>
							</div>
						</li>
						<li><a href="#"><?= $block['header_nav_block_li_4']; ?></a></li>	

					<?php endif; ?>	
					
                    </ul>
                </nav>

                <div class="right-nav">
                    <p href="tel:#" class="right-nav__phone-number"><span class="nav__phone-number-color-text"><?php the_field('header_phone_code'); ?></span><?php the_field('header_phone'); ?></p>
                    <button type="button" class="button right-nav__button" onclick="openPopUp()"><?php the_field('small_button_content'); ?></button>
                </div>

                <div class="burger-menu" onclick="burgerCall()">
                    <span></span>
                </div>
                
            </header>
    </section>