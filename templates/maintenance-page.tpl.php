<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 *
 * @ingroup themeable
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>">
  <div class="l-highlighted col-md-4 col-md-offset-7">
    <?php print render($page['highlighted']); ?>
  </div>
  <div class="container l-wrapper">
    <header id="header" class="header l-header row" role="header">
      <div class="col-md-2 col-md-offset-10">
        <a class="pull-right" href="<?php print $front_page; ?>" id="logo" class="navbar-brand">
          <?php print $site_name; ?>
        </a>
      </div>
    </header>
  <div class="container-md-height">
  <div id="main-wrapper" class="row">
    <div class="l-main col-md-12">
      <div>
        <?php if ($messages): ?>
          <div id="messages">
            <?php print $messages; ?>
          </div>
        <?php endif; ?>
        <div id="page-header">
          <?php if ($title): ?>
            <div class="page-header">
              <h1 class="title"><?php print $title; ?></h1>
            </div>
          <?php endif; ?>
          <?php if ($tabs): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
          <?php endif; ?>
          <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
      <div>
        <?php print $content; ?>
      </div>
    </div> <!-- /#main -->
  </div> <!-- /#main-wrapper -->
    </div>
  <footer id="footer" class="footer l-footer" role="footer">
    <div class="col-md-3">
      <?php print render($page['footer_first']); ?>
    </div>
    <div class="col-md-7">
    </div>
    <div class="col-md-2">
      <?php print render($page['footer_second']); ?>
    </div>
  </footer>
    <div class="prop-top"></div>
    <div class="prop-bottom"></div>
  </div>

  <div class="scroll-to-top"><a href="#"><?php print t('Back to Top'); ?></a></div>

</body>
</html>
