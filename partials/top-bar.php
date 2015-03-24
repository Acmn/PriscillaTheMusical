<div class="row">
		<!-- Starting the Top-Bar -->
		<nav class="top-bar" data-topbar>
		    <ul class="title-area">
		        <li class="name">
		        </li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		    </ul>
		    <section class="top-bar-section">
		    <?php
		        wp_nav_menu( array(
		            'theme_location' => 'primary',
		            'menu_id' => 'primary-menu',
		            'container' => false,
		            'depth' => 0,
		            'items_wrap' => '<ul class="left">%3$s</ul>',
		            'walker' => new reverie_walker( array(
		                'in_top_bar' => true,
		                'item_type' => 'li'
		            ) ),
		        ) );
		    ?>
		    </section>
		</nav><!-- End of Top-Bar -->
	</div>