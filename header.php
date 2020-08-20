<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php has_excerpt() ? print get_the_excerpt() : bloginfo('description'); ?>">

<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css">
<link href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_head(); ?>
