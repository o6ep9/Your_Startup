<footer>
    <section class="container">
        <div class="footer-main">
            <div class="footer-main__logo"><img src="<?php the_field('logo'); ?>" class="footer-main__img"></div>
			
			
			<div class="footer-main__block">
				<div class="footer-main__title-text"><?php the_field('footer_block_title_1'); ?></div>
				<ul class="footer-main__items">	
				
				<?php

				if( have_rows('footer_block_ul_1') ):

					while ( have_rows('footer_block_ul_1') ) : the_row(); 

				?>

						<li class="footer-main__item"><a href="<?php the_sub_field('footer_block_link'); ?>" class="footer-main__link"><?php the_sub_field('footer_block_li'); ?></a></li>

				<?php

					endwhile;

				endif; 

				?>
				
				</ul>	
			</div>
			

			<div class="footer-main__block">
				<div class="footer-main__title-text"><?php the_field('footer_block_title_2'); ?></div>
				<ul class="footer-main__items">	
				
				<?php

				if( have_rows('footer_block_ul_2') ):

					while ( have_rows('footer_block_ul_2') ) : the_row(); 

				?>

						<li class="footer-main__item"><a href="<?php the_sub_field('footer_block_link'); ?>" class="footer-main__link"><?php the_sub_field('footer_block_li'); ?></a></li>

				<?php

					endwhile;

				endif; 

				?>
				
				</ul>	
			</div>
			
			
			<div class="footer-main__block">
				<div class="footer-main__title-text"><?php the_field('footer_block_title_3'); ?></div>
				<ul class="footer-main__items">	
				
				<?php

				if( have_rows('footer_block_ul_3') ):

					while ( have_rows('footer_block_ul_3') ) : the_row(); 

				?>

						<li class="footer-main__item"><a href="<?php the_sub_field('footer_block_link'); ?>" class="footer-main__link"><?php the_sub_field('footer_block_li'); ?></a></li>

				<?php

					endwhile;

				endif; 

				?>
				
				</ul>	
			</div>

        </div>

        <hr class="line header-line">
        <div class="footer-bottom">
            <div class="footer-bottom__left-side">
				
				<?php
		
				$block = get_field('footer_left');	

				if( $block ): ?>       
				
					<div class="footer-bottom__text"><?= $block['footer_left_name']; ?></div>
					<div class="footer-bottom__text"><?= $block['footer_left_year']; ?></div>
					<div class="footer-bottom__text"><?= $block['footer_left_phone']; ?></div>
					<div class="footer-bottom__text"><?= $block['footer_left_email']; ?></div>
					
				<?php endif; ?>
				

            </div>
            <div class="footer-bottom__right-side">
				
				
				<?php

				if( have_rows('footer_right') ):

					while ( have_rows('footer_right') ) : the_row(); 

				?>

						<div class="footer-bottom__pic"><a href="<?php the_sub_field('footer_right_link'); ?>"><img src="<?php the_sub_field('footer_right_icon'); ?>" class="footer-bottom__img"></a></div>

				<?php

					endwhile;

				endif; 

				?>
				
            </div>
        </div>
    </section>
</footer>

</html>