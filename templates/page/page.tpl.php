<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KS3DSW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KS3DSW');</script>
<!-- End Google Tag Manager -->
<div class="l-highlighted col-md-4 col-md-offset-7">
  <?php print render($page['highlighted']); ?>
</div>
<div class="container l-wrapper">
  <header id="header" class="header l-header row" role="header">
    <div class="col-md-2 col-md-offset-10">
      <a class="pull-right" href="<?php print $front_page; ?>" class="navbar-brand">
        <?php print $site_name; ?>
      </a>
    </div>
  </header>
<div class="container-md-height">
<div id="main-wrapper" class="row row-md-height">
  <div class="l-navigation col-md-2 col-md-height">
   <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?php print $front_page; ?>" id="logo" class="navbar-brand">
          <?php print $site_name; ?>
        </a>
      </div> <!-- /.navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <?php if ($main_menu): ?>
          <ul id="main-menu" class="menu nav navbar-pills nav-stacked">
            <?php print render($main_menu); ?>
          </ul>
        <?php endif; ?>
        <?php if ($search_form): ?>
          <?php print $search_form; ?>
        <?php endif; ?>
      </div><!-- /.navbar-collapse -->
    </nav><!-- /.navbar -->
  </div>
  <div class="l-main col-md-8 col-md-height">
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
      <?php print render($page['content']); ?>
    </div>
  </div> <!-- /#main -->
  <div class="l-sidebar col-md-2 col-md-height">
    <?php print render($page['sidebar_second']); ?>
  </div>
</div> <!-- /#main-wrapper -->
  </div>
<footer id="footer" class="footer l-footer" role="footer">
  <div class="col-md-12">
    <?php print render($page['footer_first']); ?>
  </div>
  <div class="col-md-12">
    <?php print render($page['footer_second']); ?>
  </div>
</footer>
  <div class="prop-top"></div>
  <div class="prop-bottom"></div>
</div>

<div class="scroll-to-top"><a href="#"><?php print t('Back to Top'); ?></a></div>
