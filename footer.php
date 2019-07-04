<footer class="footer hidden-print">
            <br>
            <div class="container text-center small">
                <!-- BEGIN MAIN NAVIGATION --> 
                    <!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
       				<img id="logoMenu" class="logoMenu" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"></a>-->    					
					<?php wp_nav_menu( array(
						'theme_location'  => 'menu',
						'menu'            => '',
						'container_id'    => '',
						'menu_class'      => '',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul class = "list-inline">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					) ); ?>
                <!-- END MAIN NAVIGATION -->              
            <p>&copy; 2019 Iselum</p>
            </div>
</footer>
<!--
<script src="https://cdn.gufo.me/assets/6e1c339d/jquery.js"></script>
<script src="https://cdn.gufo.me/assets/888cc5c7/yii.js"></script>
<script src="https://cdn.gufo.me/assets/ed7f97cd/jquery-ui.js"></script>
<script src="https://cdn.gufo.me/js/typeahead.js/typeahead.bundle.js"></script>
<script src="https://cdn.gufo.me/js/jscroll/jquery.jscroll.js"></script>
<script src="https://cdn.gufo.me/js/history.js/scripts/bundled/html4+html5/jquery.history.js"></script>
<script src="https://cdn.gufo.me/js/tether.js"></script>
<script src="https://cdn.gufo.me/libs/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
--> 

    <?php wp_footer();?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
    </body>
</html>