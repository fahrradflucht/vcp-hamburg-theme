<section class="footer">
    <div class="footer-content">
        <a href=<?php echo get_page_by_title('datenschutzerklärung')->guid; ?> class="footer-content-link">Datenschutzerkl&auml;rung</a>
        &middot
        <a href=<?php echo get_page_by_title('impressum')->guid; ?> class="footer-content-link">Impressum</a>
        &middot
        <a href="<?php echo site_url(); ?>" class="footer-content-link">VCP Hamburg</a>
        &middot
        <a href=<?php echo get_page_by_title('kontakt')->guid; ?> class="footer-content-link">Kontakt</a>
    </div>
</section>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/index.js"></script>
