
            <div class="notice">
                <p>NEW - Text from custom footer-splash.php!</p>
            </div>

            </div> <!-- #content -->

            <footer id="colophon" class="site-footer" role="contentinfo">

                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wphierarchy' ) );
                ?>">
                    <?php printf( esc_html__( 'Proudly powered by %s', 'wphierarchy' ),
                        'WordPress' ); ?>
                </a>

            </footer>

        </div><!-- #page -->

        <?php wp_footer(); ?>

<!--<script>-->
<!--    var docConsole = $("#docConsole");-->
<!--    docConsole.append("<p>Hello, World!</p>");-->
<!--</script>-->
</body>
</html>