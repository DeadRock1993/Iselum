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
        <script>
            document.addEventListener("DOMContentLoaded", function (event) {
                $(function () {
                    var termsSuggest = new Bloodhound({
                        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('word'),
                        queryTokenizer: Bloodhound.tokenizers.whitespace,

                        remote: {
                            url: '/suggest?term=%QUERY',
                            wildcard: '%QUERY'
                        }
                    });

                    $('#search-word').typeahead(null, {
                        minLength: 3,
                        highlight: true,
                        limit: 30,
                        name: 'terms-suggest',
                        display: 'word',
                        source: termsSuggest
                    });
                });

                $(function () {
                    var deviceDetect = "desktop";

                    /**
                     * Подсказка в случае неполного ввода поискового запроса
                     */
                    $('#search-word').tooltip({placement: 'bottom', trigger: 'manual'}).tooltip('hide');

                    $('#search-submit').dblclick(function () {
                        event.stopPropagation(event);

                        timer = setTimeout(function () {
                            timer = null;
                        }, 2000);

                        return false;
                    });

                    $('#search-submit').click(function () {
                        len = $('#search-word').val().length;

                        if (len < 2) {
                            event.stopPropagation(event);
                            $('#search-word').focus();

                            if (deviceDetect == 'desktop') {
                                $('.header-search-field').effect("shake", {direction: "up", distance: 5});
                            }

                            $('#search-word').tooltip('show');

                            setTimeout(function () {
                                $('#search-word').tooltip('hide');
                            }, 3000);

                            return false;
                        }
                    });
                });
            });
            </script>

            <script>
                WebFontConfig = {
                    google: {
                        families: ['Roboto:300,400,700:cyrillic']
                    }
                };
                (function (d) {
                    var wf = d.createElement('script'), s = d.scripts[0];
                    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                    wf.async = true;
                    s.parentNode.insertBefore(wf, s);
                })(document);
            </script>

            <script type="text/javascript">
                function addLink() {
                    var body_element = document.getElementsByTagName('body')[0];
                    var selection;
                    selection = window.getSelection();

                    var copytext = selection;
                    if (selection.toString().length > 100) {
                        copytext += "<br><br>Источник: <a href='https://gufo.me/%22%20+%20document.location.href%20+%20%22'>" + document.location.href + "</a>";
                    }

                    var newdiv = document.createElement('div');
                    newdiv.style.position = 'absolute';
                    newdiv.style.left = '-99999px';
                    body_element.appendChild(newdiv);
                    newdiv.innerHTML = copytext;
                    selection.selectAllChildren(newdiv);
                    window.setTimeout(function () {
                        body_element.removeChild(newdiv);
                    }, 0);
                }

                document.oncopy = addLink;
            </script>
    <?php wp_footer();?>
    </body>
</html>