<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php bloginfo('name'); ?> |
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
</head>
<body>