function cf7_redirect() {
    ?>
    <script type="text/javascript">
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = 'https://your-redirection-url.com'; //replace with your URL
    }, false );
    </script>
    <?php
}
add_action('wp_footer', 'cf7_redirect');