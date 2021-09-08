<!doctype html>
<html lang="<?php print $lang; ?>" class="h5p-iframe">
<head>
  <meta charset="utf-8">
  <title><?php print $content['title']; ?></title>
  <?php for ($i = 0, $s = count($scripts); $i < $s; $i++): ?>
    <script src="<?php print $scripts[$i]; ?>"></script>
  <?php endfor; ?>
  <?php for ($i = 0, $s = count($styles); $i < $s; $i++): ?>
    <link rel="stylesheet" href="<?php print $styles[$i]; ?>">
  <?php endfor; ?>
  <?php if (!empty($additional_embed_head_tags)): print implode("\n", $additional_embed_head_tags); endif; ?>
  <?php
    $divClasses = ['h5p-content'];
    if(isset($content['tags'])){
		$divClasses = array_merge($divClasses,$content['tags']);
	}
	?>
</head>
<body>
  <div class="<?php echo implode(' ', $divClasses); ?>" data-content-id="<?php print $content['id']; ?>"></div>
  <script>
    H5PIntegration = <?php print json_encode($integration); ?>;
  </script>
</body>
</html>
