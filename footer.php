<section class="footer">
    <div class="footer-content">
        <a href=<?php echo get_page_by_title('impressum')->guid; ?> class="footer-content-link">Impressum</a>
        &middot
        <a href="<?php echo site_url(); ?>" class="footer-content-link">VCP Hamburg</a>
        &middot
        <a href=<?php echo get_page_by_title('kontakt')->guid; ?> class="footer-content-link">Kontakt</a>
    </div>
</setion>
<script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js" integrity="sha256-HUtkNsGc3BlCNQTNPUr5JsjW0wQFeU4nfYOEuUcxptU=" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
