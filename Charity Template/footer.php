<!-- Footer -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row footer-text">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_widget") ) : ?>
                <?php endif;?>                              
            </div>
        </div><!--/container-->
    
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="footer-text col-md-6">
                        &copy; Goodly Dale Cottages <?php echo date("Y"); ?>
                    </div>
                    <div class="footer-text text-right col-md-6">
                        <p>Designed by Mobbzys</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

         
</body>

</html>