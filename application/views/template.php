<!doctype html>
<html lang="<?php echo I18n::$lang ?>">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
        <!-- styles -->
        <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
        <?php foreach ($scripts_header as $file) echo HTML::script($file), PHP_EOL ?>
    </head>
    <body>
        <?php echo $content ?>
        <!-- javascript -->
        <?php foreach ($scripts_footer as $file) echo HTML::script($file), PHP_EOL ?>
    </body>
</html>