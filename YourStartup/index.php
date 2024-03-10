<?php get_header(); ?>

<section class="container">
        <div class="application">
            <div class="application__text">
                <h1 class="application__title">Оставьте заявку на поддержку сайта</h1>
                <div class="application__information">Наши менеджеры свяжутся с Вами в течении 10 минут, после отправки заявки. В телефонном разговоре зададут уточняющие вопросы для формирования коммерческого предложения, которое Вы получите в день обращения.</div>
            </div>

            <div class="application__input-block">
                <div class="application__static-input">
                    <div class="application__input">
                        <input type="text" id="application__name-input" class="application__input-entry" placeholder="Имя">
                        <span id="application__error-name" class="application__error-name"></span>
                    </div>
                    <div class="application__input">
                        <p><input type="tel" id="application__phone-number-input" class="application__input-entry" placeholder="Телефон"></p>
                        <span id="application__error-phone" class="application__error-phone"></span>
                    </div>
                    <div class="application__input">
                        <input type="text" name="application__company-input" class="application__input-entry" placeholder="Компания">
                    </div>
                    <div class="application__input">
                        <input type="email" id="application__email-input" class="application__input-entry" placeholder="Почта">
                        <span id="application__error-email" class="application__error-bottom"></span>
                    </div>
                </div>
                <div class="application__rate-block">
                    <div class="application__select-rate">
                        <p id="application__select-rate-text" class="application__select-rate-text">Тариф</p>
                        <div class="application__select-arrow">
                            <span class="application__select-arrow-left"></span>
                            <span class="application__select-arrow-right"></span>
                        </div>
                    </div>
                    <div class="application__error-call-wrapper">
                        <span id="application__error-rate" class="application__error-call"></span>
                    </div>
                    <div class="application__submenu-rate-wrapper" style="visibility: hidden; opacity: 0;">
                        <div class="application__submenu-rate">
                            <div id="application__submenu-option1" class="application__submenu-option application__submenu-option1" onclick = "changeRate('application__submenu-option1')">лайт</div>
                            <div id="application__submenu-option2" class="application__submenu-option application__submenu-option2" onclick = "changeRate('application__submenu-option2')">мидл</div>
                            <div id="application__submenu-option3" class="application__submenu-option application__submenu-option3" onclick = "changeRate('application__submenu-option3')">хард</div>
                        </div>
                    </div>
                </div>
                <div class="application__call">
                    <div class="application__input-call">
                        <textarea type="text" name="application__call-input" class="application__call-input application__input-entry" placeholder="Сообщение"></textarea>
                    </div>
                    <div class="application__call-bottom">
                        <p class="application__explanation">Опишите задачу, что необходимо<br/>будет делать.</p>
                        <div class="application__call-button">
                            <button type="file" class="application__button-upload-file">прикрепить файл</button>
                            <input type="file" class="application__upload-file">
                        </div>
                    </div>
                </div>
                <div class="application__bottom">
                    <div class="application--bottom__button">
                        <button type="button" class="application__bottom-send" onclick="openThxPopUp()">отправить</button>
                    </div>
                    <span class="application__bottom-text">Нажимая на кнопку, вы соглашаетесь с <a href="#" class="application__bottom-link">Политикой персональных данных</a></span>
                </div>
            </div>

            <div class="application__cross">
                <img src="images/cross.svg" class="application__cross-img" onclick="closePopUp()">
            </div>

        </div>
    </section>

    <section class="container">
        <div class="application-end">
            <h1 class="application-end__title">Спасибо<br>за обращение !</h1>
            <div class="application-end__left">
                <p class="application-end__left-text">Мы получили вашу заявку.<br>В ближайшее время наш аккаунт-менеджер свяжется<br>с вами. Удачного дня!</p>
                <button class="application-end__left-button" onclick = applicationEnd()>отправить повторно</button>
            </div>
            <div class="application-end__cross">
                <img src="images/Group 1205.svg" class="application-end__cross-img">
            </div>
        </div>
    </section>

    <main>
    <section class="container">
            <div class="support">
                <div class="support__block">
                    <p class="support__title-text"><?php the_field('supp_title'); ?></p>
                    <p class="support__main-text"><?php the_field('supp_subtitle'); ?></p>
                    <div class="support__button-wrapper">
                        <button type="button" class="button support__button" onclick="openPopUp()"><?php the_field('small_button_content'); ?></button>
                    </div>
                </div>
                <div class="support__pic">
                    <img src="<?php the_field('supp_img'); ?>" class="support__img">
                </div>
            </div>
    </section>

    <section class="container">
        <div class="info">
            <div class="info__block">
				
				<?php
		
				$info_block_1 = get_field('info_block_1');	

				if( $info_block_1 ): ?>
					<div class="info__pic">
						<img src="<?php echo $info_block_1['info_icon']; ?>" class="info__img">
					</div>
					<div class="info__text-block">
						<p class="info__title-text"><?php echo $info_block_1['info_title']; ?></p>
						<p class="info__main-text"><?php echo $info_block_1['info_content']; ?></p>
					</div>	
				
				<?php endif; ?>
				
            </div>
			
            <div class="info__block">
				
                <?php
		
				$info_block_2 = get_field('info_block_2');	

				if( $info_block_2 ): ?>
					<div class="info__pic">
						<img src="<?php echo $info_block_2['info_icon']; ?>" class="info__img">
					</div>
					<div class="info__text-block">
						<p class="info__title-text"><?php echo $info_block_2['info_title']; ?></p>
						<p class="info__main-text"><?php echo $info_block_2['info_content']; ?></p>
					</div>	
				
				<?php endif; ?>
				
            </div>
			
            <div class="info__block">
                
				<?php
		
				$info_block_3 = get_field('info_block_3');	

				if( $info_block_3 ): ?>
					<div class="info__pic">
						<img src="<?php echo $info_block_3['info_icon']; ?>" class="info__img">
					</div>
					<div class="info__text-block">
						<p class="info__title-text"><?php echo $info_block_3['info_title']; ?></p>
						<p class="info__main-text"><?php echo $info_block_3['info_content']; ?></p>
					</div>	
				
				<?php endif; ?>
				
            </div>
        </div>
    </section>

    <section class="container">
        <div class="title-text"><?php the_field('tech_title'); ?></div>
        <div class="tech">
			
			<?php

			if( have_rows('tech_block') ):

				while ( have_rows('tech_block') ) : the_row(); 

			?>
					<div class="tech__block">
						<div class="tech__pic"><img src="<?php the_sub_field('tech_block_icon'); ?>" alt="Иконка технологии" class="tech__img"></div>
						<div class="tech__info">
							<div class="tech__name-text"><?php the_sub_field('tech_block_title'); ?></div>
							<div class="tech__desc-text"><?php the_sub_field('tech_block_content'); ?></div>
						</div>
					</div>

			<?php

				endwhile;

			endif; 

			?>
            
        </div>
    </section>

    <section class="container">
        <div class="title-text"><?php the_field('ability_title'); ?></div>
        <div class="ability">
			
			<?php

			if( have_rows('ability_block') ):

				while ( have_rows('ability_block') ) : the_row(); 

			?>
			
			        <div class="ability__block">
						<div class="ability__top-side-block">
							<div class="ability__number"><?php the_sub_field('ability_block_num'); ?></div>
							<hr class="ability__line">
						</div>
						<div class="ability__text-block">
							<div class="ability__title-text"><?php the_sub_field('ability_block_title'); ?></div>
							<div class="possibilites__block-box possibilites__block-box1" onclick="openInformation(1)">
								<div class="ability__info-text"><?php the_sub_field('ability_block_content'); ?></div>
								<div class="possibilites__bottom-shadow possibilites__bottom-shadow1"></div>
								<img src="images/Arrow 6.svg" alt="" class="possibilites__img-arrow possibilites__img-arrow1">
							</div>
						</div>
					</div>

			<?php

				endwhile;

			endif; 

			?>
			
        </div>
    </section>

    <section class="container">
        <div class="subs-top-block">
            <div class="title subs-top-block__title-text"><?php the_field('subs_title'); ?></div>
            <div class="subs-top-block__left-side-text"><?php the_field('subs_subtitle'); ?></div>
        </div>
        <div class="subs">
        	<div class="subs__version">
				
				<div class="subs__margin">
					
				<?php

				$block = get_field('subs_block_1');	

				if( $block ): ?>	
					
					
					<div class="subs__name-text"><?= $block['subs_block_title']; ?></div>
					<div class="subs__time-text"><?= $block['subs_block_subtitle']; ?></div>
						
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_1']; ?></div>	
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_2']; ?></div>	
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_3']; ?></div>	
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_4']; ?></div>	
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_5']; ?></div>
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_6']; ?></div>
					
					
					<div class="subs__minus">
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/minus-cirlce.svg" class="subs__tick-img"><?= $block['subs_block_con_content_1']; ?></div>
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/minus-cirlce.svg" class="subs__tick-img"><?= $block['subs_block_con_content_2']; ?></div>
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/minus-cirlce.svg" class="subs__tick-img"><?= $block['subs_block_con_content_3']; ?></div>
					</div>
						
					<div class="subs__price-block">
						<hr class="subs__line">
						<div class="subs__price-text"><?= $block['subs_block_price']; ?></div>
					</div>
               		

				<?php endif; ?>
					
					
				</div>	
                    	
            </div>
			
			
            <div class="subs__version">
                <div class="subs__margin">
					
				<?php

				$block = get_field('subs_block_2');	

				if( $block ): ?>
					
					
					<div class="subs__name-text"><?= $block['subs_block_title']; ?></div>
					<div class="subs__time-text"><?= $block['subs_block_subtitle']; ?></div>
						
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_1']; ?></div>	
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_2']; ?></div>	
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_3']; ?></div>	
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_4']; ?></div>	
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_5']; ?></div>
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_6']; ?></div>
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_7']; ?></div>
					
					
					<div class="subs__minus">
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/minus-cirlce.svg" class="subs__tick-img"><?= $block['subs_block_con_content_1']; ?></div>
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/minus-cirlce.svg" class="subs__tick-img"><?= $block['subs_block_con_content_2']; ?></div>
					</div>
						
					<div class="subs__price-block">
						<hr class="subs__line">
						<div class="subs__price-text"><?= $block['subs_block_price']; ?></div>
					</div>
					
					
				<?php endif; ?>
					
					
                </div>
				
            </div>
			
			
            <div class="subs__version">
                <div class="subs__margin">
					
				<?php

				$block = get_field('subs_block_3_HARD');	

				if( $block ): ?>
					
					
					<div class="subs__name-text"><?= $block['subs_block_title_HARD']; ?></div>
					<div class="subs__time-text"><?= $block['subs_block_subtitle_HARD']; ?></div>
						
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_1_HARD']; ?></div>	
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_2_HARD']; ?></div>	
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_3_HARD']; ?></div>	
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_4_HARD']; ?></div>	
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_5_HARD']; ?></div>
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_6_HARD']; ?></div>
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_7_HARD']; ?></div>
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_8_HARD']; ?></div>
					<div class="subs__item-text"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/tick-circle.svg" class="subs__tick-img"><?= $block['subs_block_pro_content_9_HARD']; ?></div>
					
					
					<hr class="subs__line">
					
                    <div class="subs__item-plus-block">
                        <img src="http://yourstartup.sl/wp-content/uploads/2024/03/add-circle.svg" class="subs__tick-img">
                        <div class="subs__text-plus-text"><?= $block['subs_block_bonus_content_1_HARD']; ?></div>
                    </div>
					
                    <hr class="subs__line">
					
                    <div class="subs__price-plus-text"><?= $block['subs_block_price_HARD']; ?></div>
					
				<?php endif; ?>
					
					
                </div>
				
            </div>
			
        </div>
    </section>

    <section class="container">
        <div class="title-text"><?php the_field('projects_title'); ?></div>
		
		
        <div class="project">
			
			<?php

			if( have_rows('projects_block') ):

				while ( have_rows('projects_block') ) : the_row(); 

			?>
			
					<div class="project__block">
						<button type="button" class="project__site">
							<img src="<?php the_sub_field('projects_block_img'); ?>" class="project__img">
							<div class="project__mini-text">Сайты!</div>
						</button>
						<div class="project__text"><?php the_sub_field('projects_block_title'); ?></div>
					</div>

			<?php

				endwhile;

			endif; 

			?>
			

            <div class="project__space-button"><button type="button" class="project__button"><?php the_field('projects_button_content'); ?></button></div>
        </div>
    </section>

        <div class="big-button">
            <button type="button" class="big-button__button" onclick="openPopUp()">
                <div class="big-button__text">
                    <div class="big-button__txt"><?php the_field('big_button_content'); ?></div>
                    <div class="big-button__arrow"><img src="http://yourstartup.sl/wp-content/uploads/2024/03/Arrow-9.svg" class="big-button__img"></div>
                </div>
            </button>
        </div>
    </main>

</body>

<?php get_footer(); ?>