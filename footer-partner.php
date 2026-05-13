<footer class="p-partner-footer">
    <div class="p-partner-footer__inner">

        <!-- 左（PC）/ 下（SP）：ロゴ + コピーライト -->
        <div class="p-partner-footer__copyright">
            <span class="p-partner-footer__logo-img">
                <img src="<?php echo get_theme_file_uri(); ?>/img/BacIcon.webp" alt="Web制作 おくだ屋">
            </span>
            <small class="p-partner-footer__copyright-text">© WEB制作 おくだ屋 All rights reserved.</small>
        </div>

        <!-- 右（PC）/ 上（SP）：SNS / 連絡アイコン -->
        <div class="p-partner-footer__links">
            <a href="https://x.com/kakamigaharabac" target="_blank" rel="noopener noreferrer" class="p-partner-footer__link" aria-label="X (Twitter)">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M11.903 8.464L19.348 0h-1.764l-6.466 7.35L5.954 0H0l7.808 11.114L0 19.99h1.764l6.829-7.762 5.453 7.762H20l-8.097-11.526zm-2.417 2.748l-.791-1.108L2.4 1.299h2.71l5.083 7.116.791 1.108 6.605 9.247h-2.71L9.486 11.212z" />
                </svg>
            </a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-partner-footer__link" aria-label="Contact">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                    <polyline points="22,6 12,13 2,6" />
                </svg>
            </a>
        </div>

    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php wp_footer(); ?>

</body>

</html>
