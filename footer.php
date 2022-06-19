<!-- footer -->
<footer class="hp_ptSm">
    <div class="ly_inner">
        <div class="el_logo">
            <a href="<?php echo esc_url(home_url('/'));?>"><img
                    src="<?php bloginfo('template_url');?>/img/ENDLESS_logo__white.png" alt="店舗ロゴ(白)" /></a>
        </div>
        <ul class="bl_footerNav_list hp_flex hp_column_sp hp_jcc hp_mtSm hp_pbSm">
            <a href=" <?php bloginfo('url');?>/privacy">
                <li class="bl_footerNav_item">プライバシーポリシー</li>
            </a>
            <a href=" <?php bloginfo('url');?>/row">
                <li class="bl_footerNav_item">特定商取引に基づく表記</li>
            </a>
        </ul>
    </div>
    <small>Copyright ENDLESS All Right Reserved.</small>
    <a href="https://ss-design1104.com/" target="_blank" rel="noopener noreferrer" class="bl_production">
        <p>produced by</p>
        <img src="<?php bloginfo('template_url');?>/img/ss-design_logo.png" alt="SS-DESIGNのロゴ">
    </a>
</footer>
<!--ローディングアニメーション -->
<div class="loading">
    <div class="loading-animation">
        <a class="el_logo">
            <img src=" <?php bloginfo('template_url');?>/img/ENDLESS_logo.png" alt="ロゴマーク" />
        </a>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/script.js"></script>
<?php wp_footer();?>
</body>

</html>