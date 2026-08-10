<?php
/**
 * Site footer.
 */
$asset_base = get_template_directory_uri() . '/assets/img/releve/';
?>
<footer class="site-footer">
    <div>
        <img class="footer-logo" src="<?php echo esc_url($asset_base . 'logo-white.png'); ?>" alt="Releve Brands">
        <p>Natural relief products crafted for everyday wellness.</p>
        <p>&copy; <?php echo esc_html(date_i18n('Y')); ?> Releve Brands. All rights reserved.</p>
    </div>
    <div>
        <p>Contact: <a href="mailto:info@relevebrands.com">info@relevebrands.com</a></p>
        <p>Location: Humble, Texas</p>
        <div class="social-icons" aria-label="Social links placeholders">
            <img src="<?php echo esc_url($asset_base . 'social-1.png'); ?>" alt="Social icon">
            <img src="<?php echo esc_url($asset_base . 'social-2.png'); ?>" alt="Social icon">
            <img src="<?php echo esc_url($asset_base . 'social-3.png'); ?>" alt="Social icon">
        </div>
        <p class="disclaimer">These statements have not been evaluated by the FDA. Products are not intended to diagnose, treat, cure, or prevent disease. Final claims should be reviewed by Releve Brands before launch.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
