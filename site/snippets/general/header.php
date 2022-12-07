<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $page->title() ?> - Present Online Websites</title>

        <?php //preview image ophalen ?>
        <?php if($site->previewImage()->isNotEmpty()): ?>
            <?php $previewImage = $site->previewImage()->toFile()->url(); ?>
        <?php endif; ?>

        <!-- GOOGLE / SOCIAL MEDIA TAGS -->
        <!-- FACEBOOK / LINKEDIN / TWITTER -->
        <meta property="og:image" content="<?= $previewImage ?>">
        <meta content="1200" property="og:image:width">
        <meta content="630" property="og:image:height">
        <meta content="PresentOnline" name="author">
        <meta content="<?= $site->metaDescription() ?>" name="description">
        <meta content="index,follow,noodp" name="robots">
        <meta content="<?= $site->metaTitle() ?>" property="og:title">
        <meta content="<?= $site->metaTitle() ?>" property="og:site_name">
        <meta content="<?= $site->metaDescription() ?>" property="og:description">
        <meta content="website" property="og:type">
        <meta content="<?= $site->url() ?>" property="og:url">
        <meta content="PresentOnline" property="article:author">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?= $site->metaTitle() ?>" />
        <meta name="twitter:site" content="presentonlinebe" />
        <meta name="twitter:creator" content="presentonline">
        <meta name="twitter:image" content="<?= $previewImage ?>">
        <link rel="canonical" href="<?= $site->url() ?>">
        <link rel="shortlink" href="<?= $site->url() ?>" />

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?= $site->url() ?>/../assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= $site->url() ?>/../assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= $site->url() ?>/../assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?= $site->url() ?>/../assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <?php if($site->url() == "https://staging.presentonline.be"): ?>
            <meta name="robots" content="noindex">
        <?php endif; ?>

        <!-- STYLESHEETS -->
        <?= css("build/css/style.css") ?>

        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/5ce8890823.js" crossorigin="anonymous"></script>

        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

        <!-- ANALYTICS -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-4RD8RR47H1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-4RD8RR47H1');
        </script> -->
    </head>
    <body>