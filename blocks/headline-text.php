<?php

$headline = get_field('headline');
$subline = get_field('subline');
$text = get_field('text');


echo get_the_title();
echo '<p>' . $headline . '</p>';
echo '<p>' . $subline . '</p>';
echo '<p>' . $text . '</p>';
?>

