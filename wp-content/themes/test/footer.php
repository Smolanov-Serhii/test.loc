<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>

	<footer id="footer" class="footer">
        <div class="footer__container">
            <div class="footer__logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="mobile-copy">
                <a href="">
                    © 2002–2019 Consulting Group <br>Golden Share
                </a>
            </div>

            <nav class="footer__navigate">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav>
            <div class="footer__socials">
                <a href="">
                    <svg width="46" height="47" viewBox="0 0 46 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="23" cy="23.5156" r="23" fill="black"/>
                        <circle cx="23" cy="23.5156" r="23" fill="url(#paint0_linear)"/>
                        <path d="M28.2553 14.9468H25.5209C24.3122 14.9468 23.1531 15.4219 22.2984 16.2677C21.4438 17.1134 20.9636 18.2605 20.9636 19.4566V22.1625H18.2292V25.7703H20.9636V32.986H24.6095V25.7703H27.3438L28.2553 22.1625H24.6095V19.4566C24.6095 19.2174 24.7055 18.9879 24.8764 18.8188C25.0473 18.6496 25.2792 18.5546 25.5209 18.5546H28.2553V14.9468Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                            <linearGradient id="paint0_linear" x1="-0.7785" y1="0.515622" x2="52.9396" y2="13.4785" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C4792D"/>
                                <stop offset="0.296693" stop-color="#FFC256"/>
                                <stop offset="0.599919" stop-color="#C86500"/>
                                <stop offset="1" stop-color="#FFCE77"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
                <a href="">
                    <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="23.802" cy="23.5156" r="23" fill="black"/>
                        <circle cx="23.802" cy="23.5156" r="23" fill="url(#paint0_linear)"/>
                        <path d="M29.0574 14.9468H19.9428C17.4259 14.9468 15.3855 16.9659 15.3855 19.4566V28.4762C15.3855 30.9669 17.4259 32.986 19.9428 32.986H29.0574C31.5743 32.986 33.6147 30.9669 33.6147 28.4762V19.4566C33.6147 16.9659 31.5743 14.9468 29.0574 14.9468Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M28.1458 23.3985C28.2583 24.1491 28.1287 24.9158 27.7755 25.5893C27.4223 26.2629 26.8635 26.8091 26.1785 27.1503C25.4935 27.4915 24.7173 27.6103 23.9602 27.4897C23.2031 27.3691 22.5036 27.0154 21.9614 26.4788C21.4192 25.9422 21.0617 25.2501 20.9399 24.5008C20.818 23.7516 20.938 22.9835 21.2828 22.3056C21.6276 21.6278 22.1796 21.0748 22.8602 20.7253C23.5409 20.3758 24.3156 20.2475 25.0742 20.3589C25.8479 20.4724 26.5643 20.8292 27.1174 21.3765C27.6705 21.9239 28.0311 22.6328 28.1458 23.3985Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                            <linearGradient id="paint0_linear" x1="0.0235015" y1="0.515622" x2="53.7416" y2="13.4785" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C4792D"/>
                                <stop offset="0.296693" stop-color="#FFC256"/>
                                <stop offset="0.599919" stop-color="#C86500"/>
                                <stop offset="1" stop-color="#FFCE77"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
                <a href="">
                    <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="23.5156" cy="23.5156" r="23" fill="black"/>
                        <circle cx="23.5156" cy="23.5156" r="23" fill="url(#paint0_linear)"/>
                        <path d="M33.8201 18.9337C33.7118 18.5057 33.4913 18.1135 33.1809 17.7967C32.8704 17.48 32.4809 17.2499 32.0519 17.1298C30.4842 16.751 24.2133 16.751 24.2133 16.751C24.2133 16.751 17.9425 16.751 16.3748 17.1659C15.9457 17.286 15.5563 17.5161 15.2458 17.8328C14.9353 18.1495 14.7148 18.5417 14.6066 18.9698C14.3196 20.5442 14.1793 22.1414 14.1873 23.7412C14.1771 25.353 14.3174 26.9623 14.6066 28.5486C14.7259 28.9634 14.9514 29.3407 15.2611 29.644C15.5709 29.9474 15.9544 30.1666 16.3748 30.2804C17.9425 30.6953 24.2133 30.6953 24.2133 30.6953C24.2133 30.6953 30.4842 30.6953 32.0519 30.2804C32.4809 30.1603 32.8704 29.9302 33.1809 29.6135C33.4913 29.2967 33.7118 28.9045 33.8201 28.4765C34.1048 26.9139 34.2451 25.3289 34.2394 23.7412C34.2496 22.1293 34.1092 20.52 33.8201 18.9337V18.9337Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22.1626 26.6903L27.4035 23.7409L22.1626 20.7915V26.6903Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                            <linearGradient id="paint0_linear" x1="-0.262875" y1="0.515622" x2="53.4552" y2="13.4785" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C4792D"/>
                                <stop offset="0.296693" stop-color="#FFC256"/>
                                <stop offset="0.599919" stop-color="#C86500"/>
                                <stop offset="1" stop-color="#FFCE77"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
        <div class="footer__police">
            <div class="footer__wrapper">
                <a href="">
                    Политика конфиденциальности
                </a>
                <a href="">
                    Условия пользования
                </a>
                <a href="">
                    © 2002–2019 Consulting Group Golden Share
                </a>
            </div>
        </div>
	</footer>


<?php wp_footer(); ?>

</body>
</html>
