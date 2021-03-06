<footer class="group js-footer" id="footer" role="contentinfo">
  <div class="footer-wrapper">
    <?php if (get_field('problem_email', 'option')): ?>
      <a href="mailto:<?php the_field('problem_email', 'option'); ?>" class="report-problem-link email-link">Report a problem </a>
    <?php endif; ?>
    <div class="footer-meta">
      <div class="footer-meta-inner">
        Built by <a href="https://mojdigital.blog.gov.uk/">MOJ Digital</a>
      </div>
      <div class="copyright">
        <a href="http://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/copyright-and-re-use/crown-copyright/">© Crown copyright</a>
      </div>
    </div>
  </div>
</footer>
