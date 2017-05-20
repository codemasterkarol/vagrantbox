<?php
    $sitetitle = 'Avalampch!';
    $sitedescription = 'This is a development box created using vagrant, ansible, and the LAMP stack with HTML/CSS!';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $sitetitle; ?></title>
    <!-- Meta Data for SEO and Social Media -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Basic website built with Vagrant and Ansible with some extras thrown in.">
    <meta name="keywords" content="Vagrant, Ansible, Web Development, PHP, HTML5, CSS3">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" /> <!-- summary | summary_large_image -->
    <meta name="twitter:site" content="@karolbrennan" /><!-- your twitter username -->
    <meta name="twitter:title" content="Avalampch!" />
    <meta name="twitter:description" content="Basic website built with Vagrant and Ansible with some extras thrown in." />
    <meta name="twitter:image" content="/assets/images/ogimage.png" />
    <meta name="twitter:image:alt" content="Avalampch! Dev Box" />
    <!-- Facebook and others -->
    <meta property="og:image" content="/assets/images/ogimage.png"/>
    <!-- CDN Stylesheets and Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Assistant|Pragati+Narrow" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<header>
    <h1><a href="/"><?= $sitetitle; ?></a></h1>
    <h2><?= $sitedescription; ?></h2>
</header>