<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action('get_header'); ?>

<?php
if (have_posts()) : while (have_posts()) : the_post();

    the_content();

endwhile;
endif;
?>

<?php do_action('get_footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
