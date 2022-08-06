<?php
/**
 * Footer template
 * 
 * @package div
 * 
 */

 ?>

 <div class="footer_container">
    <div class="footer_inner">
        <div class="left">
        <div class="footer_inner_content">
            <div class="footer-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'nav menu', 'container_class' => 'custom-menu-class' ) ); ?>
            </div>
            <div class="phone">
                Contat Us <phone>1-866-671-5353</phone>
            </div>
        
        </div>
        </div>
        <div class="right">
            <div class="subs">
                Subscribe to our newsletter
            </div>
            <div class="search">
                <input type="text" />
            </div>
        </div>
        
    </div>
    <div class="beneath">
        <div class="copyright">
            copyright @ All Rights Reserved
        </div>
        <div class="media-icons">
            <ul>
                <li>Facebook</li>
                <li>Google Plus</li>
                <li>Twitter</li>
                <li>LinkedIn</li>
            </ul>
        </div>
    </div>
 </div>

<?php wp_footer(); ?>
</body>
</html>