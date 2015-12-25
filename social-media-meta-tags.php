<!-- Twitter Cards -->
<?php if($page->twitterCard() != ""): ?>
  <meta name="twitter:card" content="<?php echo $page->twitterCard() ?>">
<?php endif ?>

<?php if($page->twitterSite() != ""): ?>
  <meta name="twitter:site" content="<?php echo $page->twitterSite() ?>">
<?php endif ?>

<?php if($page->twitterCreator() != ""): ?>
  <meta name="twitter:creator" content="<?php echo $page->twitterCreator() ?>">
<?php endif ?>

<?php if($page->twitterTitle() != ""): ?>
  <meta name="twitter:title" content="<?php echo $page->twitterTitle() ?>">
<?php endif ?>

<?php if($page->twitterDescription() != ""): ?>
  <meta name="twitter:description" content="<?php echo $page->twitterDescription() ?>">
<?php endif ?>

<?php if($page->twitterImage() != ""): ?>
  <meta name="twitter:image" content="<?php echo $page->twitterImage() ?>">
<?php endif ?>




<!-- Open Graph -->
<?php if($page->OpenGraphTitle() != ""): ?>
  <meta property="og:title" content="<?php echo $page->OpenGraphTitle() ?>">
<?php endif ?>

<?php if($page->OpenGraphDescription() != ""): ?>
  <meta property="og:description" content="<?php echo $page->OpenGraphDescription() ?>">
<?php endif ?>

<?php if($page->OpenGraphType() != ""): ?>
  <meta property="og:type" content="<?php echo $page->OpenGraphType() ?>">
<?php endif ?>

<?php if($page->OpenGraphImage() != ""): ?>
  <meta property="og:image" content="<?php echo $page->OpenGraphImage() ?>">
<?php endif ?>

<?php if($page->OpenGraphUrl() != ""): ?>
  <meta property="og:url" content="<?php echo $page->OpenGraphUrl() ?>">
<?php endif ?>