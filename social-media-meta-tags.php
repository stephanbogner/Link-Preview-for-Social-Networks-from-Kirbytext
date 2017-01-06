<?php
    // # General
    // ## User for Twitter handle
    $defaultUser = 'st_phan';

    // ## Default Image
    $defaultImage = '';
    if($page->image('opengraph.jpg')){
        $defaultImage = $page->image('opengraph.jpg')->url();
    }else if($page->image('opengraph.png')){
        $defaultImage = $page->image('opengraph.png')->url();
    }else if($page->image()){
        $defaultImage = $page->image()->url();
    }

    // # Open Graph
    // ## Required
    // ### Title
    $openGraphTitle = $page->openGraphTitle();
    if ($openGraphTitle == '') {
        $openGraphTitle = $page->title();    
    }

    // ### Type
    $openGraphType = $page->openGraphType();
    if ($openGraphType == '') {
        $openGraphType = "article";
    }

    // ### Image
    $openGraphImage = $page->openGraphImage();
    if ($openGraphImage == '') {
        $openGraphImage = $defaultImage;
    }
    if ($openGraphImage == '') {
        $openGraphImage = '';
    }
    
    // ### Url
    $openGraphUrl = $page->openGraphUrl();
    if ($openGraphUrl == '') {
        $openGraphUrl = $page->url();
    }
    
    // ### Echo them
    echo '<meta property="og:title" content="' . $openGraphTitle . '"/>';
    echo '<meta property="og:type" content="' . $openGraphType . '"/>';
    echo '<meta property="og:image" content="' . $openGraphImage . '"/>';
    echo '<meta property="og:url" content="' . $openGraphUrl . '"/>';

    // ## Optional Open Graph Tags
    $openGraphAudio = $page->openGraphAudio();
    $openGraphDeterminer = $page->openGraphDeterminer();
    $openGraphLocale = $page->openGraphLocale();
    $openGraphLocaleAlternate = $page->openGraphLocaleAlternate();
    $openGraphSiteName = $page->openGraphSiteName();
    $openGraphVideo = $page->openGraphVideo();

    if($openGraphAudio != ""){
        echo '<meta property="og:audio" content="' . $openGraphAudio . '"/>';
    }
    if($openGraphLocale != ""){
        echo '<meta property="og:locale" content="' . $openGraphLocale . '"/>';
    }
    if($openGraphLocaleAlternate != ""){
        echo '<meta property="og:locale:alternate" content="' . $openGraphLocaleAlternate . '"/>';
    }
    if($openGraphSiteName != ""){
        echo '<meta property="og:site_name" content="' . $openGraphSiteName . '"/>';
    }
    if($openGraphVideo != ""){
        echo '<meta property="og:video" content="' . $openGraphVideo . '"/>';
    }


    // # Twitter
    // ## Required
    // ### Title
    $twitterTitle = $page->twitterTitle();
    if ($twitterTitle == '') {
        $twitterTitle = $page->openGraphTitle();
    }
    if ($twitterTitle == '') {
        $twitterTitle = $page->title();
    }

    // ### Site
    $twitterSite = $page->twitterSite();
    if ($twitterSite == '') {
        $twitterSite = $page->twitterHandle();
    }
    if ($twitterSite == '') {
        $twitterSite = $defaultUser;
    }

    // ### Card
    $twitterCard = $page->twitterCard();
    if ($twitterCard == '') {
        $twitterCard = "summary";
    }
    
    // ### Description
    $twitterDescription = $page->twitterDescription();
    if ($twitterDescription == '') {
        $twitterDescription = $page->openGraphDescription();
    }
    if ($twitterDescription == '') {
        $twitterDescription = $page->description();
    }
    if ($twitterDescription == '') {
        $twitterDescription = '';
    }

    // ### Image (Actually Optional but we are using it anyway)
    $twitterImage = $page->twitterImage();
    if ($twitterImage == '') {
        $twitterImage = $page->openGraphImage();
    }
    if ($twitterImage == '') {
        $twitterImage = $defaultImage;
    }
    if ($twitterImage == '') {
        $twitterImage = '';
    }

    // ### Echo them
    echo '<meta name="twitter:title" content="' . $twitterTitle . '" />';
    echo '<meta name="twitter:site" content="' . $twitterSite . '" />';
    echo '<meta name="twitter:card" content="' . $twitterCard . '" />';
    echo '<meta name="twitter:description" content="' . $twitterDescription . '" />';
    echo '<meta name="twitter:image" content="' . $twitterImage . '" />';

    // ## Optional
    $twitterImageAlt = $page->twitterImageAlt();
    if($twitterImageAlt != ""){
        echo '<meta name="twitter:image:alt" content="' . $twitterImageAlt . '" />';
    }
