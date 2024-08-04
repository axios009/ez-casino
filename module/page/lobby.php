<html lang="th" class="x-windows-os x-chrome-browser x-html-theme-dark">

<head>
    <style type="text/css" data-tippy-stylesheet="">
        .tippy-iOS {
            cursor: pointer !important;
            -webkit-tap-highlight-color: transparent
        }

        .tippy-popper {
            transition-timing-function: cubic-bezier(.165, .84, .44, 1);
            max-width: calc(100% - 8px);
            pointer-events: none;
            outline: 0
        }

        .tippy-popper[x-placement^=top] .tippy-backdrop {
            border-radius: 40% 40% 0 0
        }

        .tippy-popper[x-placement^=top] .tippy-roundarrow {
            bottom: -7px;
            bottom: -6.5px;
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            margin: 0 3px
        }

        .tippy-popper[x-placement^=top] .tippy-roundarrow svg {
            position: absolute;
            left: 0;
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .tippy-popper[x-placement^=top] .tippy-arrow {
            border-top: 8px solid #333;
            border-right: 8px solid transparent;
            border-left: 8px solid transparent;
            bottom: -7px;
            margin: 0 3px;
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0
        }

        .tippy-popper[x-placement^=top] .tippy-backdrop {
            -webkit-transform-origin: 0 25%;
            transform-origin: 0 25%
        }

        .tippy-popper[x-placement^=top] .tippy-backdrop[data-state=visible] {
            -webkit-transform: scale(1) translate(-50%, -55%);
            transform: scale(1) translate(-50%, -55%)
        }

        .tippy-popper[x-placement^=top] .tippy-backdrop[data-state=hidden] {
            -webkit-transform: scale(.2) translate(-50%, -45%);
            transform: scale(.2) translate(-50%, -45%);
            opacity: 0
        }

        .tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=visible] {
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px)
        }

        .tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(-20px);
            transform: translateY(-20px)
        }

        .tippy-popper[x-placement^=top] [data-animation=perspective] {
            -webkit-transform-origin: bottom;
            transform-origin: bottom
        }

        .tippy-popper[x-placement^=top] [data-animation=perspective][data-state=visible] {
            -webkit-transform: perspective(700px) translateY(-10px) rotateX(0);
            transform: perspective(700px) translateY(-10px) rotateX(0)
        }

        .tippy-popper[x-placement^=top] [data-animation=perspective][data-state=hidden] {
            opacity: 0;
            -webkit-transform: perspective(700px) translateY(0) rotateX(60deg);
            transform: perspective(700px) translateY(0) rotateX(60deg)
        }

        .tippy-popper[x-placement^=top] [data-animation=fade][data-state=visible] {
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px)
        }

        .tippy-popper[x-placement^=top] [data-animation=fade][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px)
        }

        .tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=visible] {
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px)
        }

        .tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        .tippy-popper[x-placement^=top] [data-animation=scale] {
            -webkit-transform-origin: bottom;
            transform-origin: bottom
        }

        .tippy-popper[x-placement^=top] [data-animation=scale][data-state=visible] {
            -webkit-transform: translateY(-10px) scale(1);
            transform: translateY(-10px) scale(1)
        }

        .tippy-popper[x-placement^=top] [data-animation=scale][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(-10px) scale(.5);
            transform: translateY(-10px) scale(.5)
        }

        .tippy-popper[x-placement^=bottom] .tippy-backdrop {
            border-radius: 0 0 30% 30%
        }

        .tippy-popper[x-placement^=bottom] .tippy-roundarrow {
            top: -7px;
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
            margin: 0 3px
        }

        .tippy-popper[x-placement^=bottom] .tippy-roundarrow svg {
            position: absolute;
            left: 0;
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        .tippy-popper[x-placement^=bottom] .tippy-arrow {
            border-bottom: 8px solid #333;
            border-right: 8px solid transparent;
            border-left: 8px solid transparent;
            top: -7px;
            margin: 0 3px;
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%
        }

        .tippy-popper[x-placement^=bottom] .tippy-backdrop {
            -webkit-transform-origin: 0 -50%;
            transform-origin: 0 -50%
        }

        .tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=visible] {
            -webkit-transform: scale(1) translate(-50%, -45%);
            transform: scale(1) translate(-50%, -45%)
        }

        .tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=hidden] {
            -webkit-transform: scale(.2) translate(-50%);
            transform: scale(.2) translate(-50%);
            opacity: 0
        }

        .tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=visible] {
            -webkit-transform: translateY(10px);
            transform: translateY(10px)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(20px);
            transform: translateY(20px)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=perspective] {
            -webkit-transform-origin: top;
            transform-origin: top
        }

        .tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=visible] {
            -webkit-transform: perspective(700px) translateY(10px) rotateX(0);
            transform: perspective(700px) translateY(10px) rotateX(0)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=hidden] {
            opacity: 0;
            -webkit-transform: perspective(700px) translateY(0) rotateX(-60deg);
            transform: perspective(700px) translateY(0) rotateX(-60deg)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=visible] {
            -webkit-transform: translateY(10px);
            transform: translateY(10px)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(10px);
            transform: translateY(10px)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=visible] {
            -webkit-transform: translateY(10px);
            transform: translateY(10px)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=scale] {
            -webkit-transform-origin: top;
            transform-origin: top
        }

        .tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=visible] {
            -webkit-transform: translateY(10px) scale(1);
            transform: translateY(10px) scale(1)
        }

        .tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateY(10px) scale(.5);
            transform: translateY(10px) scale(.5)
        }

        .tippy-popper[x-placement^=left] .tippy-backdrop {
            border-radius: 50% 0 0 50%
        }

        .tippy-popper[x-placement^=left] .tippy-roundarrow {
            right: -12px;
            -webkit-transform-origin: 33.33333333% 50%;
            transform-origin: 33.33333333% 50%;
            margin: 3px 0
        }

        .tippy-popper[x-placement^=left] .tippy-roundarrow svg {
            position: absolute;
            left: 0;
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .tippy-popper[x-placement^=left] .tippy-arrow {
            border-left: 8px solid #333;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            right: -7px;
            margin: 3px 0;
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%
        }

        .tippy-popper[x-placement^=left] .tippy-backdrop {
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0
        }

        .tippy-popper[x-placement^=left] .tippy-backdrop[data-state=visible] {
            -webkit-transform: scale(1) translate(-50%, -50%);
            transform: scale(1) translate(-50%, -50%)
        }

        .tippy-popper[x-placement^=left] .tippy-backdrop[data-state=hidden] {
            -webkit-transform: scale(.2) translate(-75%, -50%);
            transform: scale(.2) translate(-75%, -50%);
            opacity: 0
        }

        .tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=visible] {
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px)
        }

        .tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(-20px);
            transform: translateX(-20px)
        }

        .tippy-popper[x-placement^=left] [data-animation=perspective] {
            -webkit-transform-origin: right;
            transform-origin: right
        }

        .tippy-popper[x-placement^=left] [data-animation=perspective][data-state=visible] {
            -webkit-transform: perspective(700px) translateX(-10px) rotateY(0);
            transform: perspective(700px) translateX(-10px) rotateY(0)
        }

        .tippy-popper[x-placement^=left] [data-animation=perspective][data-state=hidden] {
            opacity: 0;
            -webkit-transform: perspective(700px) translateX(0) rotateY(-60deg);
            transform: perspective(700px) translateX(0) rotateY(-60deg)
        }

        .tippy-popper[x-placement^=left] [data-animation=fade][data-state=visible] {
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px)
        }

        .tippy-popper[x-placement^=left] [data-animation=fade][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px)
        }

        .tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=visible] {
            -webkit-transform: translateX(-10px);
            transform: translateX(-10px)
        }

        .tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }

        .tippy-popper[x-placement^=left] [data-animation=scale] {
            -webkit-transform-origin: right;
            transform-origin: right
        }

        .tippy-popper[x-placement^=left] [data-animation=scale][data-state=visible] {
            -webkit-transform: translateX(-10px) scale(1);
            transform: translateX(-10px) scale(1)
        }

        .tippy-popper[x-placement^=left] [data-animation=scale][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(-10px) scale(.5);
            transform: translateX(-10px) scale(.5)
        }

        .tippy-popper[x-placement^=right] .tippy-backdrop {
            border-radius: 0 50% 50% 0
        }

        .tippy-popper[x-placement^=right] .tippy-roundarrow {
            left: -12px;
            -webkit-transform-origin: 66.66666666% 50%;
            transform-origin: 66.66666666% 50%;
            margin: 3px 0
        }

        .tippy-popper[x-placement^=right] .tippy-roundarrow svg {
            position: absolute;
            left: 0;
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg)
        }

        .tippy-popper[x-placement^=right] .tippy-arrow {
            border-right: 8px solid #333;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            left: -7px;
            margin: 3px 0;
            -webkit-transform-origin: 100% 50%;
            transform-origin: 100% 50%
        }

        .tippy-popper[x-placement^=right] .tippy-backdrop {
            -webkit-transform-origin: -50% 0;
            transform-origin: -50% 0
        }

        .tippy-popper[x-placement^=right] .tippy-backdrop[data-state=visible] {
            -webkit-transform: scale(1) translate(-50%, -50%);
            transform: scale(1) translate(-50%, -50%)
        }

        .tippy-popper[x-placement^=right] .tippy-backdrop[data-state=hidden] {
            -webkit-transform: scale(.2) translate(-25%, -50%);
            transform: scale(.2) translate(-25%, -50%);
            opacity: 0
        }

        .tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=visible] {
            -webkit-transform: translateX(10px);
            transform: translateX(10px)
        }

        .tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(20px);
            transform: translateX(20px)
        }

        .tippy-popper[x-placement^=right] [data-animation=perspective] {
            -webkit-transform-origin: left;
            transform-origin: left
        }

        .tippy-popper[x-placement^=right] [data-animation=perspective][data-state=visible] {
            -webkit-transform: perspective(700px) translateX(10px) rotateY(0);
            transform: perspective(700px) translateX(10px) rotateY(0)
        }

        .tippy-popper[x-placement^=right] [data-animation=perspective][data-state=hidden] {
            opacity: 0;
            -webkit-transform: perspective(700px) translateX(0) rotateY(60deg);
            transform: perspective(700px) translateX(0) rotateY(60deg)
        }

        .tippy-popper[x-placement^=right] [data-animation=fade][data-state=visible] {
            -webkit-transform: translateX(10px);
            transform: translateX(10px)
        }

        .tippy-popper[x-placement^=right] [data-animation=fade][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(10px);
            transform: translateX(10px)
        }

        .tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=visible] {
            -webkit-transform: translateX(10px);
            transform: translateX(10px)
        }

        .tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }

        .tippy-popper[x-placement^=right] [data-animation=scale] {
            -webkit-transform-origin: left;
            transform-origin: left
        }

        .tippy-popper[x-placement^=right] [data-animation=scale][data-state=visible] {
            -webkit-transform: translateX(10px) scale(1);
            transform: translateX(10px) scale(1)
        }

        .tippy-popper[x-placement^=right] [data-animation=scale][data-state=hidden] {
            opacity: 0;
            -webkit-transform: translateX(10px) scale(.5);
            transform: translateX(10px) scale(.5)
        }

        .tippy-tooltip {
            position: relative;
            color: #fff;
            border-radius: .25rem;
            font-size: .875rem;
            padding: .3125rem .5625rem;
            line-height: 1.4;
            text-align: center;
            background-color: #333
        }

        .tippy-tooltip[data-size=small] {
            padding: .1875rem .375rem;
            font-size: .75rem
        }

        .tippy-tooltip[data-size=large] {
            padding: .375rem .75rem;
            font-size: 1rem
        }

        .tippy-tooltip[data-animatefill] {
            overflow: hidden;
            background-color: transparent
        }

        .tippy-tooltip[data-interactive],
        .tippy-tooltip[data-interactive] .tippy-roundarrow path {
            pointer-events: auto
        }

        .tippy-tooltip[data-inertia][data-state=visible] {
            transition-timing-function: cubic-bezier(.54, 1.5, .38, 1.11)
        }

        .tippy-tooltip[data-inertia][data-state=hidden] {
            transition-timing-function: ease
        }

        .tippy-arrow,
        .tippy-roundarrow {
            position: absolute;
            width: 0;
            height: 0
        }

        .tippy-roundarrow {
            width: 18px;
            height: 7px;
            fill: #333;
            pointer-events: none
        }

        .tippy-backdrop {
            position: absolute;
            background-color: #333;
            border-radius: 50%;
            width: calc(110% + 2rem);
            left: 50%;
            top: 50%;
            z-index: -1;
            transition: all cubic-bezier(.46, .1, .52, .98);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .tippy-backdrop:after {
            content: "";
            float: left;
            padding-top: 100%
        }

        .tippy-backdrop+.tippy-content {
            transition-property: opacity;
            will-change: opacity
        }

        .tippy-backdrop+.tippy-content[data-state=visible] {
            opacity: 1
        }

        .tippy-backdrop+.tippy-content[data-state=hidden] {
            opacity: 0
        }
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="dns-prefetch" href="//fonts.gstatic.com/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&amp;display=swap" as="font" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" crossorigin rel="stylesheet">
    </noscript>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">





    <meta name="apple-mobile-web-app-title" content="บาคาร่า Ez casino รวมเกม บาคาร่าออนไลน์ จากทั่วโลกไว้ในที่เดียว">
    <title>บาคาร่า Ez casino รวมเกม บาคาร่าออนไลน์ จากทั่วโลกไว้ในที่เดียว</title>

    <meta name="description" content="ไฮคลาส คาสิโน ออนไลน์ EZ Casino เว็บพนันออนไลน์ ครบวงจร, บาคาร่า ออนไลน์, เกมคาสิโน เกมไพ่ ป๊อกเด้ง ไฮโล และ Live casino online ฝากง่าย ถอนไว">
    <meta name="keywords" content="web.meta.keywords">

    <meta property="og:title" content="บาคาร่า Ez casino รวมเกม บาคาร่าออนไลน์ จากทั่วโลกไว้ในที่เดียว">
    <meta property="og:description" content="ไฮคลาส คาสิโน ออนไลน์ EZ Casino เว็บพนันออนไลน์ ครบวงจร, บาคาร่า ออนไลน์, เกมคาสิโน เกมไพ่ ป๊อกเด้ง ไฮโล และ Live casino online ฝากง่าย ถอนไว">
    <meta property="og:locale" content="th">
    <meta property="og:site_name" content="บาคาร่า Ez casino รวมเกม บาคาร่าออนไลน์ จากทั่วโลกไว้ในที่เดียว">
    <meta property="og:url" content="https://ez-casino.org/">
    <meta property="og:image" content="#editme#">



    <link rel="canonical" href="https://ez-casino.org/">

    <meta name="twitter:site" content="@twitter">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="บาคาร่า Ez casino รวมเกม บาคาร่าออนไลน์ จากทั่วโลกไว้ในที่เดียว">
    <meta name="twitter:description" content="ไฮคลาส คาสิโน ออนไลน์ EZ Casino เว็บพนันออนไลน์ ครบวงจร, บาคาร่า ออนไลน์, เกมคาสิโน เกมไพ่ ป๊อกเด้ง ไฮโล และ Live casino online ฝากง่าย ถอนไว">
    <meta name="twitter:image" content="#editme#">

    <link rel="apple-touch-icon" sizes="57x57" href="./assets/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/images/android-icon-192x192.png">
    <link rel="preload" as="fetch" href="./assets/images/manifest.json">
    <link rel="manifest" href="./assets/images/manifest.json">
    <link rel="icon" href="./assets/images/favicon-32x32.png" as="style" onload="this.onload=null;this.rel='icon'">
    <noscript>
        <link rel="icon" href="./assets/images/favicon-32x32.png" />
    </noscript>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./assets/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">

    <!-- <link rel="stylesheet" href="/build/web/ezl-ez-casino/style.9a2dc934.css"> -->
    <link href="./assets/css/Chart.min.css" rel="stylesheet">
    <link href="./assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="./assets/fontawesome/css/regular.min.css" rel="stylesheet">
    <link href="./assets/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="./assets/css/style.9a2dc934.css" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-13L27MLNG3&amp;l=dataLayer&amp;cx=c"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-VRESRXE493&amp;l=dataLayer&amp;cx=c"></script>
    <script
        src="https://connect.facebook.net/signals/config/7819003868178514?v=2.9.162&amp;r=stable&amp;domain=ez-casino.org&amp;hme=e67e7d148043b3a377ad0eb1c82669792a67ba5e3bb5734b69e611ae38f939ca&amp;ex_m=68%2C115%2C102%2C106%2C59%2C3%2C95%2C67%2C15%2C92%2C85%2C49%2C52%2C163%2C166%2C178%2C174%2C175%2C177%2C28%2C96%2C51%2C74%2C176%2C158%2C161%2C171%2C172%2C179%2C124%2C39%2C33%2C136%2C14%2C48%2C184%2C183%2C126%2C17%2C38%2C1%2C41%2C63%2C64%2C65%2C69%2C89%2C16%2C13%2C91%2C88%2C87%2C103%2C50%2C105%2C37%2C104%2C29%2C25%2C159%2C162%2C133%2C27%2C10%2C11%2C12%2C5%2C6%2C24%2C21%2C22%2C55%2C60%2C62%2C72%2C97%2C26%2C73%2C8%2C7%2C77%2C46%2C20%2C99%2C98%2C100%2C93%2C9%2C19%2C18%2C82%2C54%2C80%2C32%2C71%2C0%2C90%2C31%2C79%2C84%2C45%2C44%2C83%2C36%2C4%2C86%2C78%2C42%2C34%2C81%2C2%2C35%2C61%2C40%2C101%2C43%2C76%2C66%2C107%2C58%2C57%2C30%2C94%2C56%2C53%2C47%2C75%2C70%2C23%2C108"
        async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TJN7RFQ3"></script>
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TJN7RFQ3');</script>
    <!-- End Google Tag Manager -->

    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '7819003868178514');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=7819003868178514&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <script type="text/javascript">
        window['gif64'] = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
        window['Bonn'] = {
            boots: [],
            inits: []
        };
    </script>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebPage",
      "image": [
          "./assets/images/ez-lotto-meta-1x1.jpg",
          "./assets/images/ez-lotto-meta-4x3.jpg",
          "./assets/images/ez-lotto-meta-16x9.jpg"
      ],
      "name": "คาสิโนออนไลน์ EZ Casino คาสิโนอันดับ 1 เว็บตรงที่คุณมั่นใจ",
      "url": "https://ez-casino.org/"
    }
</script>
</head>

<body class="">



    <nav class="x-header js-header-selector navbar navbar-expand -logged">
        <div class="container-fluid -inner-container">
            <div class="">
                <button type="button" class="btn bg-transparent p-0 x-hamburger" data-toggle="modal" data-target="#themeSwitcherModal">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>


            <div id="headerBrand">
                <a class="navbar-brand" href="/">
                    <img alt="หวยออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-logo -default img-fluid" width="440" height="104" src="./assets/images/logo.png">
                    <img alt="หวยออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-logo -invert img-fluid" width="440" height="104" src="./assets/images/logo-invert.png">
                </a>
            </div>


            <div class="x-menu">
                <div class="-menu-container">







                    <a href="/casino" class="-menu-link ">
                        <img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon img-fluid" width="40" height="40" src="./assets/images/ic-menu-casino.png">
                        <img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon -active img-fluid" width="40" height="40" src="./assets/images/ic-menu-casino-active.png">
                        <span>คาสิโน</span>
                    </a>






                    <a href="/pgsoft" class="-menu-link ">
                        <img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon img-fluid" width="40" height="40" src="./assets/images/ic-menu-slot.png">
                        <img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon -active img-fluid" width="40" height="40" src="./assets/images/ic-menu-slot-active.png">
                        <span>สล็อต</span>
                    </a>






                    <a href="/sport" class="-menu-link ">
                        <img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon img-fluid" width="40" height="40" src="./assets/images/ic-menu-sport.png">
                        <img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon -active img-fluid" width="40" height="40" src="./assets/images/ic-menu-sport-active.png">
                        <span>กีฬา</span>
                    </a>






                    <a href="/%E0%B8%AB%E0%B8%A7%E0%B8%A2" class="-menu-link ">
                        <img alt="หวยออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon img-fluid" width="40" height="40" src="./assets/images/ic-menu-lotto.png">
                        <img alt="หวยออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon -active img-fluid" width="40" height="40" src="./assets/images/ic-menu-lotto-active.png">
                        <span>หวย</span>
                    </a>






                    <a href="/invitation" class="-menu-link ">
                        <img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon img-fluid" width="40" height="40" src="./assets/images/ic-menu-invitation.png">
                        <img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon -active img-fluid" width="40" height="40" src="./assets/images/ic-menu-invitation-active.png">
                        <span>ชวนเพื่อน</span>
                    </a>






                    <a href="/promotions" class="-menu-link ">
                        <img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon img-fluid" width="40" height="40" src="./assets/images/ic-menu-promotion.png">
                        <img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon -active img-fluid" width="40" height="40" src="./assets/images/ic-menu-promotion-active.png">
                        <span>โปรโมชั่น</span>
                    </a>






                    <a href="/blogs" class="-menu-link ">
                        <img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon img-fluid" width="40" height="40" src="./assets/images/ic-menu-blog.png">
                        <img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="-icon -active img-fluid" width="40" height="40" src="./assets/images/ic-menu-blog-active.png">
                        <span>ข่าวสาร</span>
                    </a>
                </div>
            </div>





            <div id="headerContent">



                <div class="x-logged">




                    <a href="https://t.me/ezsup_official" class="x-header-btn-support -in-logged " target="_blank" rel="noreferrer nofollow">
                        <picture>
                            <source type="image/webp" srcset="./assets/images/ic-telegram-support.webp">
                            <source type="image/png" srcset="./assets/images/ic-telegram-support.png"><img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="img-fluid -ic" width="120"
                                height="39" src="./assets/images/ic-telegram-support.png">
                        </picture>
                        <picture>
                            <source type="image/webp" srcset="./assets/images/ic-telegram-support-mobile.webp">
                            <source type="image/png" srcset="./assets/images/ic-telegram-support-mobile.png"><img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์"
                                class="img-fluid -ic -mobile" width="28" height="28" src="./assets/images/ic-telegram-support-mobile.png">
                        </picture>
                    </a>


                    <a href="https://lin.ee/ZpHnqdt" class="x-header-btn-support -in-logged " target="_blank" rel="noreferrer nofollow">
                        <picture>
                            <source type="image/webp" srcset="./assets/images/ic-line-support.webp">
                            <source type="image/png" srcset="./assets/images/ic-line-support.png"><img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="img-fluid -ic" width="120"
                                height="39" src="./assets/images/ic-line-support.png">
                        </picture>
                        <picture>
                            <source type="image/webp" srcset="./assets/images/ic-line-support-mobile.webp">
                            <source type="image/png" srcset="./assets/images/ic-line-support-mobile.png"><img alt="หวยออนไลน์ สล็อตออนไลน์ แทงหวยออนไลน์ เว็บพนันออนไลน์" class="img-fluid -ic -mobile"
                                width="28" height="28" src="./assets/images/ic-line-support-mobile.png">
                        </picture>
                    </a>


                    <div class="-transaction-outer-container ">
                        <div class="-deposit-container d-none d-xl-block">
                            <a href="#deposit" class="text-white js-account-approve-aware btn -btn-deposit" data-toggle="modal" data-target="#depositModal">
                                <div class="f-7">ฝากเงิน</div>
                            </a>
                        </div>
                        <div class="-withdraw-container d-none d-xl-block">
                            <a href="#withdraw" class="text-white js-account-approve-aware btn -btn-withdraw" data-toggle="modal" data-target="#withdrawModal">
                                <div class="f-7">ถอนเงิน</div>
                            </a>
                        </div>
                    </div>

                    <div class="-profile-outer-container ">
                        <div class="-balance-container">


                            <div class="-text-username">
                                0929651369
                            </div>


                            <div class="-user-balance js-user-balance f-sm-6 f-7 ">
                                <div class="-inner-box-wrapper">

                                    <span id="customer-balance" class="js-customer-balance">
                                        <span class="text-green-lighter">0.00</span>

                                    </span>


                                    <button type="button" id="btn-customer-balance-reload" class="-btn-balance -in-box " data-loading="_onReloadBalance_" data-done="_onReloadBalanceDone_"
                                        data-ajax-href="/account/_ajax_/get-balance?reload=1" data-target="#customer-balance, .js-customer-balance">
                                        <i class="fas fa-sync-alt f-9"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="-profile-container">
                            <a href="#account" data-toggle="modal" data-target="#accountModal" class="-btn-wrapper">



                                <div class="x-profile-image">
                                    <img class="img-fluid -profile-image" src="./assets/images/fc5d22292336ddc45a74a42690a103a8.png" alt="customer image">
                                </div>
                            </a>
                            <div class="d-xl-none d-block">
                                <div class="js-ez-logged-sidebar">



                                    <div class="x-profile-image">
                                        <img class="img-fluid -profile-image" src="./assets/images/fc5d22292336ddc45a74a42690a103a8.png" alt="customer image">
                                    </div>
                                </div>

                                <div class="x-menu-account-list-sidebar">


                                    <div class="x-modal-account-menu-mobile">
                                        <div class="-modal-profile-mobile -default d-block d-xl-none">
                                            <div class="text-right">
                                                <i class="fas fa-times f-5 js-close-account-sidebar"></i>
                                            </div>





                                            <div class="x-profile-image">
                                                <img class="img-fluid -profile-image" src="./assets/images/fc5d22292336ddc45a74a42690a103a8.png" alt="customer image">
                                            </div>

                                            <div class="-balance-container">


                                                <div class="-text-username">
                                                    0929651369
                                                </div>


                                                <div class="-user-balance js-user-balance f-sm-6 f-7 ">
                                                    <div class="-inner-box-wrapper">

                                                        <img alt="หวยออนไลน์ แทงหวยออนไลน์" class="-ic img-fluid" width="26" height="26" src="./assets/images/ic-coin.png">

                                                        <span id="customer-balance" class="js-customer-balance">
                                                            <span class="text-green-lighter">0.00</span>

                                                        </span>


                                                        <button type="button" id="btn-customer-balance-reload" class="-btn-balance -in-box " data-loading="_onReloadBalance_"
                                                            data-done="_onReloadBalanceDone_" data-ajax-href="/account/_ajax_/get-balance?reload=1"
                                                            data-target="#customer-balance, .js-customer-balance">
                                                            <i class="fas fa-sync-alt f-9"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="-transaction-button-wrapper">




                                            <a class="x-transaction-button-v2 -in-sidebar -deposit js-close-account-sidebar lazyload x-bg-position-center" href="javascript:void(0)" data-toggle="modal"
                                                data-target="#depositModal" data-bgset="./assets/images/btn-deposit-bg.png">
                                                <img alt="ฝากเงิน เงินฝาก หวยออนไลน์ แทงหวยออนไลน์" class="img-fluid -icon" width="35" height="35" src="./assets/images/ic-account-deposit.png">

                                                <div class="-text-wrapper">
                                                    <span class="-title">ฝากเงิน</span>
                                                    <span class="-sub-title">Deposit</span>
                                                </div>
                                            </a>



                                            <a class="x-transaction-button-v2 -in-sidebar -withdraw js-close-account-sidebar lazyload x-bg-position-center" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#withdrawModal" data-bgset="./assets/images/btn-withdraw-bg.png">
                                                <img alt="ถอนเงิน ยอดถอน หวยออนไลน์ แทงหวยออนไลน์" class="img-fluid -icon" width="35" height="35" src="./assets/images/ic-account-withdraw.png">

                                                <div class="-text-wrapper">
                                                    <span class="-title">ถอนเงิน</span>
                                                    <span class="-sub-title">Withdraw</span>
                                                </div>
                                            </a>
                                        </div>


                                        <ul class="navbar-nav">



                                            <li class="nav-item -account-profile">
                                                <button type="button" class="nav-link js-close-account-sidebar -account-profile" data-toggle="modal" data-target="#accountModalMobile">
                                                    <img alt="ข้อมูลบัญชี หวยออนไลน์ แทงหวยออนไลน์" class="img-fluid -icon-image" width="35" height="35" src="./assets/images/ic-account-menu-user.png">
                                                    <span class="-text-menu">ข้อมูลบัญชี</span>

                                                </button>
                                            </li>


                                            <li class="nav-item -account-link-social">
                                                <button type="button" class="nav-link js-close-account-sidebar -account-link-social" data-toggle="modal" data-target="#linkSocialAccountModalMobile">

                                                    <div class="-text-menu-wrapper">
                                                        <img alt="ข้อมูลบัญชี หวยออนไลน์ แทงหวยออนไลน์" class="img-fluid -icon-image" width="35" height="35"
                                                            src="./assets/images/ic-account-menu-link-social-media.png">
                                                        <span class="-text-menu">โซเชียล</span>
                                                    </div>

                                                    <div class="-text-menu -highlight">ฟรี 25 บาท!</div>

                                                </button>
                                            </li>


                                            <li class="nav-item -account-pocket-farm">
                                                <button type="button" class="nav-link js-close-account-sidebar -account-pocket-farm" data-toggle="modal" data-target="#pocketFarmModalMobile">
                                                    <img alt="PocketFarm ฝากดอก ออกผล ดอกเบี้ย 10% ง่ายๆ" class="img-fluid -icon-image" width="35" height="35"
                                                        src="./assets/images/ic-account-menu-pocket-farm.png">
                                                    <span class="-text-menu">Pocket Farm</span>

                                                </button>
                                            </li>


                                            <li class="nav-item -account-invitation">
                                                <a class="nav-link -account-invitation" href="/invitation">
                                                    <img alt="แนะนำเพื่อน หวยออนไลน์ แทงหวยออนไลน์" class="img-fluid -icon-image" width="35" height="35"
                                                        src="./assets/images/ic-account-menu-invitation.png">
                                                    <span class="-text-menu">แนะนำเพื่อน</span>

                                                </a>
                                            </li>


                                            <li class="nav-item -account-bill-history">
                                                <button type="button" class="nav-link js-close-account-sidebar -account-bill-history" data-toggle="modal" data-target="#billHistoryModalMobile">
                                                    <img alt="ประวัติ หวยออนไลน์ แทงหวยออนไลน์" class="img-fluid -icon-image" width="35" height="35"
                                                        src="./assets/images/ic-account-menu-bill-history.png">
                                                    <span class="-text-menu">ประวัติ</span>

                                                </button>
                                            </li>


                                            <li class="nav-item -account-provider">
                                                <button type="button" class="nav-link js-close-account-sidebar -account-provider" data-toggle="modal" data-target="#providerUserModalMobile">
                                                    <img alt="เข้าเล่นผ่านแอพ หวยออนไลน์ แทงหวยออนไลน์" class="img-fluid -icon-image" width="35" height="35"
                                                        src="./assets/images/ic-account-menu-provider.png">
                                                    <span class="-text-menu">เข้าเล่นผ่านแอพ</span>

                                                </button>
                                            </li>


                                            <li class="nav-item -coupon js-account-approve-aware">
                                                <button type="button" class="nav-link js-close-account-sidebar -coupon js-account-approve-aware" data-toggle="modal" data-target="#couponModalMobile">
                                                    <img alt="ใช้คูปอง หวยออนไลน์ แทงหวยออนไลน์" class="img-fluid -icon-image" width="35" height="35" src="./assets/images/ic-account-menu-coupon.png">
                                                    <span class="-text-menu">ใช้คูปอง</span>

                                                </button>
                                            </li>


                                            <li class="nav-item -join-promotion">
                                                <button type="button" class="nav-link js-close-account-sidebar -join-promotion" data-toggle="modal" data-target="#joinPromotionModalMobile">
                                                    <img alt="โปรโมชั่นที่เข้าร่วม หวยออนไลน์ แทงหวยออนไลน์" class="img-fluid -icon-image" width="35" height="35"
                                                        src="./assets/images/ic-account-menu-promotion.png">
                                                    <span class="-text-menu">โปรโมชั่นที่เข้าร่วม</span>

                                                </button>
                                            </li>


                                            <li class="nav-item -promotion-return-by-user">
                                                <button type="button" class="nav-link js-close-account-sidebar -promotion-return-by-user" data-toggle="modal"
                                                    data-target="#promotionReturnByUserModalMobile">
                                                    <img alt="โบนัสเพิ่ม ทุกสัปดาห์ หวยออนไลน์ แทงหวยออนไลน์" class="img-fluid -icon-image" width="35" height="35"
                                                        src="./assets/images/ic-account-menu-bonus.png">
                                                    <span class="-text-menu">โบนัสเพิ่ม ทุกสัปดาห์</span>

                                                </button>
                                            </li>


                                            <li class="nav-item -logout">

                                                <a class="nav-link js-require-confirm  -logout" href="/logout" data-title="ต้องการออกจากระบบ ?">
                                                    <img alt="ออกจากระบบ หวยออนไลน์ แทงหวยออนไลน์" class="img-fluid -icon-image" width="35" height="35"
                                                        src="./assets/images/ic-account-menu-logout.png">
                                                    <span class="-text-menu">ออกจากระบบ</span>

                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="main__content" data-bgset="./assets/images/index-bg.png" class="x-bg-position-center x-bg-index lazyloaded" style="background-image: url(&quot;./assets/images/index-bg.png&quot;);">
        <div class="js-replace-cover-seo-container">
            <div class="x-homepage-banner-container">
                <div data-slickable="{&quot;arrows&quot;:false,&quot;dots&quot;:true,&quot;slidesToShow&quot;:1,&quot;centerMode&quot;:true,&quot;infinite&quot;:true,&quot;autoplay&quot;:true,&quot;autoplaySpeed&quot;:4000,&quot;pauseOnHover&quot;:false,&quot;focusOnSelect&quot;:true,&quot;variableWidth&quot;:true,&quot;responsive&quot;:{&quot;sm&quot;:{&quot;fade&quot;:true,&quot;variableWidth&quot;:false,&quot;slidesToShow&quot;:1}}}"
                    class="x-banner-slide-wrapper -single slick-initialized slick-slider slick-dotted animated fadeInUp" data-animatable="fadeInUp" data-delay="200">
                    <div class="slick-list draggable" style="padding: 0px 50px;">
                        <div class="slick-track" style="opacity: 1; width: 40000px; transform: translate3d(-3122px, 0px, 0px);">
                            <div class="-slide-inner-wrapper -slick-item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">

                                <a class="-link-wrapper" href="https://www.ez-casino.org/promotions" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/4c8ab0510d8011c2a26c7d61005d5772.webp">
                                        <source type="image/jpg" srcset="./assets/images/4c8ab0510d8011c2a26c7d61005d5772.jpg">
                                        <img class="img-fluid -slick-item -item-7" alt="Banner 4" width="1200" height="590" src="./assets/images/4c8ab0510d8011c2a26c7d61005d5772.jpg">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1">

                                <a class="-link-wrapper" href="https://www.ez-casino.org/promotions" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/b3b12e4eb809b4b926041999c77a70b2.webp">
                                        <source type="image/jpg" srcset="./assets/images/b3b12e4eb809b4b926041999c77a70b2.jpg">
                                        <img class="img-fluid -slick-item -item-8" alt="Banner 5" width="1200" height="590" src="./assets/images/b3b12e4eb809b4b926041999c77a70b2.jpg">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide" data-slick-index="0" aria-hidden="true" role="tabpanel" id="slick-slide00"
                                aria-describedby="slick-slide-control00" tabindex="-1">

                                <a class="-link-wrapper" href="https://ezcasino.me/invitation" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/ed1834a2cb41725091ad1727493f032f.webp">
                                        <source type="image/jpg" srcset="./assets/images/ed1834a2cb41725091ad1727493f032f.jpg">
                                        <img class="img-fluid -slick-item -item-1" alt="ลิงก์ชวนเพื่อน" width="1200" height="590" src="./assets/images/ed1834a2cb41725091ad1727493f032f.jpg">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide" data-slick-index="1" aria-hidden="true" role="tabpanel" id="slick-slide01"
                                aria-describedby="slick-slide-control01" tabindex="-1">

                                <a class="-link-wrapper" href="https://www.ez-casino.org/promotions" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/88564b45db8162db1edff5abf0e114c4.webp">
                                        <source type="image/png" srcset="./assets/images/88564b45db8162db1edff5abf0e114c4.png">
                                        <img class="img-fluid -slick-item -item-2" alt="" width="1200" height="590" src="./assets/images/88564b45db8162db1edff5abf0e114c4.png">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide" data-slick-index="2" aria-hidden="true" role="tabpanel" id="slick-slide02"
                                aria-describedby="slick-slide-control02" tabindex="-1">

                                <a class="-link-wrapper" href="https://www.ez-casino.org/promotions" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/baa5ce6fafa22c699f582dce69859515.webp">
                                        <source type="image/png" srcset="./assets/images/baa5ce6fafa22c699f582dce69859515.png">
                                        <img class="img-fluid -slick-item -item-3" alt="Banner 1" width="1200" height="590" src="./assets/images/baa5ce6fafa22c699f582dce69859515.png">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide slick-current slick-active slick-center" data-slick-index="3" aria-hidden="false" role="tabpanel"
                                id="slick-slide03" aria-describedby="slick-slide-control03">
                                <div class="-link-wrapper">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/d5603fcef3511f2056ed295d55cb50c3.webp">
                                        <source type="image/png" srcset="./assets/images/d5603fcef3511f2056ed295d55cb50c3.png">
                                        <img class="img-fluid -slick-item -item-4" alt="Banner 2" width="1200" height="590" src="./assets/images/d5603fcef3511f2056ed295d55cb50c3.png">
                                    </picture>

                                </div>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide" data-slick-index="4" aria-hidden="true" role="tabpanel" id="slick-slide04"
                                aria-describedby="slick-slide-control04" tabindex="-1">
                                <div class="-link-wrapper">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/b920f70b4550869c8ea8c6641ce901b6.webp">
                                        <source type="image/png" srcset="./assets/images/b920f70b4550869c8ea8c6641ce901b6.png">
                                        <img class="img-fluid -slick-item -item-5" alt="Banner 3" width="1200" height="590" src="./assets/images/b920f70b4550869c8ea8c6641ce901b6.png">
                                    </picture>

                                </div>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide" data-slick-index="5" aria-hidden="true" role="tabpanel" id="slick-slide05"
                                aria-describedby="slick-slide-control05" tabindex="-1">

                                <a class="-link-wrapper" href="https://www.ez-casino.org/promotions" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/96419ace54c403778ecc985da66964c4.webp">
                                        <source type="image/png" srcset="./assets/images/96419ace54c403778ecc985da66964c4.png">
                                        <img class="img-fluid -slick-item -item-6" alt="" width="1200" height="590" src="./assets/images/96419ace54c403778ecc985da66964c4.png">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide" data-slick-index="6" aria-hidden="true" role="tabpanel" id="slick-slide06"
                                aria-describedby="slick-slide-control06" tabindex="-1">

                                <a class="-link-wrapper" href="https://www.ez-casino.org/promotions" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/4c8ab0510d8011c2a26c7d61005d5772.webp">
                                        <source type="image/jpg" srcset="./assets/images/4c8ab0510d8011c2a26c7d61005d5772.jpg">
                                        <img class="img-fluid -slick-item -item-7" alt="Banner 4" width="1200" height="590" src="./assets/images/4c8ab0510d8011c2a26c7d61005d5772.jpg">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide" data-slick-index="7" aria-hidden="true" role="tabpanel" id="slick-slide07"
                                aria-describedby="slick-slide-control07" tabindex="-1">

                                <a class="-link-wrapper" href="https://www.ez-casino.org/promotions" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/b3b12e4eb809b4b926041999c77a70b2.webp">
                                        <source type="image/jpg" srcset="./assets/images/b3b12e4eb809b4b926041999c77a70b2.jpg">
                                        <img class="img-fluid -slick-item -item-8" alt="Banner 5" width="1200" height="590" src="./assets/images/b3b12e4eb809b4b926041999c77a70b2.jpg">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" tabindex="-1">

                                <a class="-link-wrapper" href="https://ezcasino.me/invitation" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/ed1834a2cb41725091ad1727493f032f.webp">
                                        <source type="image/jpg" srcset="./assets/images/ed1834a2cb41725091ad1727493f032f.jpg">
                                        <img class="img-fluid -slick-item -item-1" alt="ลิงก์ชวนเพื่อน" width="1200" height="590" src="./assets/images/ed1834a2cb41725091ad1727493f032f.jpg">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" tabindex="-1">

                                <a class="-link-wrapper" href="https://www.ez-casino.org/promotions" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/88564b45db8162db1edff5abf0e114c4.webp">
                                        <source type="image/png" srcset="./assets/images/88564b45db8162db1edff5abf0e114c4.png">
                                        <img class="img-fluid -slick-item -item-2" alt="" width="1200" height="590" src="./assets/images/88564b45db8162db1edff5abf0e114c4.png">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" tabindex="-1">

                                <a class="-link-wrapper" href="https://www.ez-casino.org/promotions" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/baa5ce6fafa22c699f582dce69859515.webp">
                                        <source type="image/png" srcset="./assets/images/baa5ce6fafa22c699f582dce69859515.png">
                                        <img class="img-fluid -slick-item -item-3" alt="Banner 1" width="1200" height="590" src="./assets/images/baa5ce6fafa22c699f582dce69859515.png">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" tabindex="-1">
                                <div class="-link-wrapper">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/d5603fcef3511f2056ed295d55cb50c3.webp">
                                        <source type="image/png" srcset="./assets/images/d5603fcef3511f2056ed295d55cb50c3.png">
                                        <img class="img-fluid -slick-item -item-4" alt="Banner 2" width="1200" height="590" src="./assets/images/d5603fcef3511f2056ed295d55cb50c3.png">
                                    </picture>

                                </div>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" tabindex="-1">
                                <div class="-link-wrapper">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/b920f70b4550869c8ea8c6641ce901b6.webp">
                                        <source type="image/png" srcset="./assets/images/b920f70b4550869c8ea8c6641ce901b6.png">
                                        <img class="img-fluid -slick-item -item-5" alt="Banner 3" width="1200" height="590" src="./assets/images/b920f70b4550869c8ea8c6641ce901b6.png">
                                    </picture>

                                </div>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" tabindex="-1">

                                <a class="-link-wrapper" href="https://www.ez-casino.org/promotions" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/96419ace54c403778ecc985da66964c4.webp">
                                        <source type="image/png" srcset="./assets/images/96419ace54c403778ecc985da66964c4.png">
                                        <img class="img-fluid -slick-item -item-6" alt="" width="1200" height="590" src="./assets/images/96419ace54c403778ecc985da66964c4.png">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide slick-cloned" data-slick-index="14" aria-hidden="true" tabindex="-1">

                                <a class="-link-wrapper" href="https://www.ez-casino.org/promotions" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/4c8ab0510d8011c2a26c7d61005d5772.webp">
                                        <source type="image/jpg" srcset="./assets/images/4c8ab0510d8011c2a26c7d61005d5772.jpg">
                                        <img class="img-fluid -slick-item -item-7" alt="Banner 4" width="1200" height="590" src="./assets/images/4c8ab0510d8011c2a26c7d61005d5772.jpg">
                                    </picture>

                                </a>
                            </div>
                            <div class="-slide-inner-wrapper -slick-item slick-slide slick-cloned" data-slick-index="15" aria-hidden="true" tabindex="-1">

                                <a class="-link-wrapper" href="https://www.ez-casino.org/promotions" target="_blank" rel="nofollow noopener" tabindex="-1">





                                    <picture>
                                        <source type="image/webp" srcset="./assets/images/b3b12e4eb809b4b926041999c77a70b2.webp">
                                        <source type="image/jpg" srcset="./assets/images/b3b12e4eb809b4b926041999c77a70b2.jpg">
                                        <img class="img-fluid -slick-item -item-8" alt="Banner 5" width="1200" height="590" src="./assets/images/b3b12e4eb809b4b926041999c77a70b2.jpg">
                                    </picture>

                                </a>
                            </div>
                        </div>
                    </div>







                    <ul class="slick-dots" style="" role="tablist">
                        <li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 8" tabindex="-1">1</button></li>
                        <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 8" tabindex="-1">2</button></li>
                        <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 8" tabindex="-1">3</button></li>
                        <li role="presentation" class="slick-active"><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 8" tabindex="0"
                                aria-selected="true">4</button></li>
                        <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control04" aria-controls="slick-slide04" aria-label="5 of 8" tabindex="-1">5</button></li>
                        <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control05" aria-controls="slick-slide05" aria-label="6 of 8" tabindex="-1">6</button></li>
                        <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control06" aria-controls="slick-slide06" aria-label="7 of 8" tabindex="-1">7</button></li>
                        <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control07" aria-controls="slick-slide07" aria-label="8 of 8" tabindex="-1">8</button></li>
                    </ul>
                </div>



            </div>


        </div>



        <div class="x-index-content-main-container -logged">




            <div class="x-quick-transaction-buttons js-quick-transaction-buttons ">






                <a class="btn -btn -promotion lazyload x-bg-position-center" href="/promotions" target="_blank" rel="noopener nofollow" data-bgset="./assets/images/btn-promotion-bg.png">
                    <span class="-ic-wrapper"> <img alt="โปรโมชั่นสุดคุ้ม เพื่อลูกค้าคนสำคัญ" class="img-fluid -ic" width="40" height="40"
                            src="./assets/images/ic-quick-transaction-button-promotion.png"></span>

                    <span class="-btn-inner-content">
                        <span class="-btn-inner-content-title">โปรโมชั่น</span>
                    </span>

                </a>




                <button class="btn -btn -deposit lazyload x-bg-position-center" data-toggle="modal" data-target="#depositModal" data-bgset="./assets/images/btn-deposit-bg.png">
                    <span class="-ic-wrapper"> <img alt="ฝากเงินง่ายๆ ด้วยระบบออโต้ การันตี 1 นาที" class="img-fluid -ic" width="40" height="40" src="./assets/images/ic-account-deposit.png"></span>

                    <span class="-btn-inner-content">
                        <span class="-btn-inner-content-title">ฝากเงิน</span>
                        <span class="-btn-inner-content-sub-title">Deposit</span>
                    </span>

                </button>




                <button class="btn -btn -withdraw lazyload x-bg-position-center" data-toggle="modal" data-target="#withdrawModal" data-bgset="./assets/images/btn-withdraw-bg.png">
                    <span class="-ic-wrapper"> <img alt="ถอนเงินง่ายๆ ด้วยระบบออโต้ การันตี เท่าไหร่ก็จ่าย" class="img-fluid -ic" width="40" height="40"
                            src="./assets/images/ic-account-withdraw.png"></span>

                    <span class="-btn-inner-content">
                        <span class="-btn-inner-content-title">ถอนเงิน</span>
                        <span class="-btn-inner-content-sub-title">Withdraw</span>
                    </span>

                </button>
            </div>









            <div class="x-title-with-tag-header animated fadeInUp" data-animatable="fadeInUp" data-delay="150">
                <div class="container">
                    <h1 class="-title">คาสิโนออนไลน์ EZ Casino เว็บคาสิโนอันดับ 1 ในเอเชีย</h1>

                </div>
            </div>













            <div class="x-category-total-game -v2">
                <div class="container-fluid">
                    <nav class="nav-menu" id="navbarCategory">
                        <ul class="-menu-parent navbar-nav flex-row">
                            <li class="-list-parent nav-item px-lg-2 -category-popular animated fadeInUp" data-animatable="fadeInUp" data-delay="50">














                                <a href="/%E0%B8%A2%E0%B8%AD%E0%B8%94%E0%B8%99%E0%B8%B4%E0%B8%A2%E0%B8%A1" class="x-category-button -category-popular -index-page  -category-button-v2 -hoverable ">





                                    <img alt="category skill image png" class="-img -default" width="300" height="82" src="./assets/images/menu-category-popular.png">

                                    <img alt="category skill image png" class="-img -hover" width="300" height="82" src="./assets/images/menu-category-popular-hover.png">

                                    <span class="-menu-text-main -text-btn-image">
                                        <div class="-menu-text-wrapper">
                                            <span class="-text-desktop">ยอดนิยม</span>
                                            <span class="-text-mobile">ยอดนิยม</span>
                                        </div>
                                    </span>



                                </a>
                            </li>
                            <li class="-list-parent nav-item px-lg-2 -category-casino animated fadeInUp" data-animatable="fadeInUp" data-delay="100">














                                <a href="/casino" class="x-category-button -category-casino -index-page  -category-button-v2 -hoverable ">





                                    <img alt="category casino image png" class="-img -default" width="300" height="82" src="./assets/images/menu-category-casino.png">

                                    <img alt="category casino image png" class="-img -hover" width="300" height="82" src="./assets/images/menu-category-casino-hover.png">

                                    <span class="-menu-text-main -text-btn-image">
                                        <div class="-menu-text-wrapper">
                                            <span class="-text-desktop">คาสิโน</span>
                                            <span class="-text-mobile">คาสิโน</span>
                                        </div>
                                    </span>



                                </a>
                            </li>
                            <li class="-list-parent nav-item px-lg-2 -category-slot animated fadeInUp" data-animatable="fadeInUp" data-delay="150">














                                <a href="/pgsoft" class="x-category-button -category-slot -index-page  -category-button-v2 -hoverable ">





                                    <img alt="category slot image png" class="-img -default" width="300" height="82" src="./assets/images/menu-category-slot.png">

                                    <img alt="category slot image png" class="-img -hover" width="300" height="82" src="./assets/images/menu-category-slot-hover.png">

                                    <span class="-menu-text-main -text-btn-image">
                                        <div class="-menu-text-wrapper">
                                            <span class="-text-desktop">สล็อต</span>
                                            <span class="-text-mobile">สล็อต</span>
                                        </div>
                                    </span>



                                </a>
                            </li>
                            <li class="-list-parent nav-item px-lg-2 -category-lotto animated fadeInUp" data-animatable="fadeInUp" data-delay="200">














                                <a href="/%E0%B8%AB%E0%B8%A7%E0%B8%A2" class="x-category-button -category-lotto -index-page  -category-button-v2 -hoverable ">





                                    <img alt="category lotto image png" class="-img -default" width="300" height="82" src="./assets/images/menu-category-lotto.png">

                                    <img alt="category lotto image png" class="-img -hover" width="300" height="82" src="./assets/images/menu-category-lotto-hover.png">

                                    <span class="-menu-text-main -text-btn-image">
                                        <div class="-menu-text-wrapper">
                                            <span class="-text-desktop">หวย</span>
                                            <span class="-text-mobile">หวย</span>
                                        </div>
                                    </span>



                                </a>
                            </li>
                            <li class="-list-parent nav-item px-lg-2 -category-sport animated fadeInUp" data-animatable="fadeInUp" data-delay="250">














                                <a href="/sport" class="x-category-button -category-sport -index-page  -category-button-v2 -hoverable ">





                                    <img alt="category sport image png" class="-img -default" width="300" height="82" src="./assets/images/menu-category-sport.png">

                                    <img alt="category sport image png" class="-img -hover" width="300" height="82" src="./assets/images/menu-category-sport-hover.png">

                                    <span class="-menu-text-main -text-btn-image">
                                        <div class="-menu-text-wrapper">
                                            <span class="-text-desktop">กีฬา</span>
                                            <span class="-text-mobile">กีฬา</span>
                                        </div>
                                    </span>



                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>









            <div class="x-provider-category -provider_casinos ">
                <div class="container-fluid">
                    <div class="-provider-category-wrapper animated fadeInUp" data-animatable="fadeInUp" data-delay="150">



                        <ul class="navbar-nav">
                            <li class="nav-item -provider-card-item -first">

                                <a href="/casino">
                                    <div class="-provider-label-inner">
                                        <div class="-title">คาสิโนออนไลน์</div>
                                        <div class="-sub-title">ชั้นนำ</div>
                                    </div>
                                    <img alt="Category casino first-banner" class="-img img-fluid ls-is-cached lazyloaded" width="400" height="580"
                                        data-src="./assets/images/index-casino-category-first-banner.png" src="./assets/images/index-casino-category-first-banner.png">
                                </a>

                            </li>
                            <li class="nav-item -provider-card-item -wt-aesexy">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-aesexy/ezs-wt-aesexy-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-aesexy/ezs-wt-aesexy-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-aesexy/ezs-wt-aesexy-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-aesexy/ezs-wt-aesexy-vertical.png"><img alt="wt-aesexy cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-aesexy/ezs-wt-aesexy-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-aesexy/ezs-wt-aesexy-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=wt-aesexy" class="js-account-approve-aware -btn -btn-play" target="_blank" rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="-title">AE Sexy</div>
                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-we">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-we/ezs-wt-we-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-we/ezs-wt-we-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-we/ezs-wt-we-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-we/ezs-wt-we-vertical.png"><img alt="wt-we cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-we/ezs-wt-we-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-we/ezs-wt-we-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=wt-we" class="js-account-approve-aware -btn -btn-play" target="_blank" rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="-title">WE</div>
                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -sa-gaming">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/sa-gaming/ezs-sa-gaming-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/sa-gaming/ezs-sa-gaming-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/sa-gaming/ezs-sa-gaming-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/sa-gaming/ezs-sa-gaming-vertical.png"><img alt="sa-gaming cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/sa-gaming/ezs-sa-gaming-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/sa-gaming/ezs-sa-gaming-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=sa-gaming" class="js-account-approve-aware -btn -btn-play" target="_blank" rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>

                                                    <a href="/lobby/test?channelCode=sa-gaming" class="-btn -btn-demo" target="_blank" rel="nofollow noopener">
                                                        <span class="-text-btn">ทดลองเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="-title">SA Gaming</div>
                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-dream-gaming">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-dream-gaming/ezs-wt-dream-gaming-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-dream-gaming/ezs-wt-dream-gaming-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-dream-gaming/ezs-wt-dream-gaming-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-dream-gaming/ezs-wt-dream-gaming-vertical.png"><img alt="wt-dream-gaming cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-dream-gaming/ezs-wt-dream-gaming-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-dream-gaming/ezs-wt-dream-gaming-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=wt-dream-gaming" class="js-account-approve-aware -btn -btn-play" target="_blank" rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>

                                                    <a href="/lobby/test?channelCode=wt-dream-gaming" class="-btn -btn-demo" target="_blank" rel="nofollow noopener">
                                                        <span class="-text-btn">ทดลองเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="-title">Dream Gaming</div>
                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-mgp-live">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-mgp-live/ezs-wt-mgp-live-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-mgp-live/ezs-wt-mgp-live-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-mgp-live/ezs-wt-mgp-live-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-mgp-live/ezs-wt-mgp-live-vertical.png"><img alt="wt-mgp-live cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-mgp-live/ezs-wt-mgp-live-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-mgp-live/ezs-wt-mgp-live-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=wt-mgp-live" class="js-account-approve-aware -btn -btn-play" target="_blank" rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="-title">Micro Gaming Plus Casino</div>
                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wm">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <img alt="wm cover image png" class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                            data-src="https://asset.cloudigame.co/build/admin/img/wm/ezs-wm-vertical.png" src="https://asset.cloudigame.co/build/admin/img/wm/ezs-wm-vertical.png">






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=wm" class="js-account-approve-aware -btn -btn-play" target="_blank" rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>

                                                    <a href="/lobby/test?channelCode=wm" class="-btn -btn-demo" target="_blank" rel="nofollow noopener">
                                                        <span class="-text-btn">ทดลองเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="-title">WM Casino</div>
                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wtm-asia-gaming">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <img alt="wtm-asia-gaming cover image png" class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                            data-src="https://asset.cloudigame.co/build/admin/img/wtm-asia-gaming/ezs-wtm-asia-gaming-vertical-animation.gif"
                                            src="https://asset.cloudigame.co/build/admin/img/wtm-asia-gaming/ezs-wtm-asia-gaming-vertical-animation.gif">






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=wtm-asia-gaming" class="js-account-approve-aware -btn -btn-play" target="_blank" rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="-title">Asia Gaming</div>
                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-eg">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <img alt="wt-eg cover image png" class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                            data-src="https://asset.cloudigame.co/build/admin/img/wt-eg/ezs-wt-eg-vertical.png"
                                            src="https://asset.cloudigame.co/build/admin/img/wt-eg/ezs-wt-eg-vertical.png">






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=wt-eg" class="js-account-approve-aware -btn -btn-play" target="_blank" rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="-title">Evolution Gaming</div>
                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-pt-live">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-pt-live/ezs-wt-pt-live-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-pt-live/ezs-wt-pt-live-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-pt-live/ezs-wt-pt-live-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-pt-live/ezs-wt-pt-live-vertical.png"><img alt="wt-pt-live cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-pt-live/ezs-wt-pt-live-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-pt-live/ezs-wt-pt-live-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=wt-pt-live" class="js-account-approve-aware -btn -btn-play" target="_blank" rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="-title">PlayTech Live</div>
                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-allbet-full">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-allbet-full/ezs-wt-allbet-full-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-allbet-full/ezs-wt-allbet-full-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-allbet-full/ezs-wt-allbet-full-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-allbet-full/ezs-wt-allbet-full-vertical.png"><img alt="wt-allbet-full cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-allbet-full/ezs-wt-allbet-full-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-allbet-full/ezs-wt-allbet-full-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=wt-allbet-full" class="js-account-approve-aware -btn -btn-play" target="_blank" rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>

                                                    <a href="/lobby/test?channelCode=wt-allbet-full" class="-btn -btn-demo" target="_blank" rel="nofollow noopener">
                                                        <span class="-text-btn">ทดลองเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="-title">AllBet</div>
                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-ppa-live">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-ppa-live/ezs-wt-ppa-live-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-ppa-live/ezs-wt-ppa-live-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-ppa-live/ezs-wt-ppa-live-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-ppa-live/ezs-wt-ppa-live-vertical.png"><img alt="wt-ppa-live cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-ppa-live/ezs-wt-ppa-live-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-ppa-live/ezs-wt-ppa-live-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=wt-ppa-live" class="js-account-approve-aware -btn -btn-play" target="_blank" rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="-title">PragmaticPlay Live</div>
                                </div>

                            </li>
                        </ul>

                    </div>
                </div>
            </div>










            <div class="x-provider-category -provider_slots ">
                <div class="container-fluid">
                    <div class="-provider-category-wrapper animated fadeInUp" data-animatable="fadeInUp" data-delay="150">



                        <ul class="navbar-nav">
                            <li class="nav-item -provider-card-item -first">

                                <a href="/pgsoft">
                                    <div class="-provider-label-inner">
                                        <div class="-title">สล็อตออนไลน์</div>
                                        <div class="-sub-title"></div>
                                    </div>
                                    <img alt="Category slot first-banner" class="-img img-fluid ls-is-cached lazyloaded" width="400" height="580"
                                        data-src="./assets/images/index-slot-category-first-banner.png" src="./assets/images/index-slot-category-first-banner.png">
                                </a>

                            </li>
                            <li class="nav-item -provider-card-item -wt-ppa">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-ppa/ezs-wt-ppa-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-ppa/ezs-wt-ppa-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-ppa/ezs-wt-ppa-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-ppa/ezs-wt-ppa-vertical.png"><img alt="wt-ppa cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-ppa/ezs-wt-ppa-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-ppa/ezs-wt-ppa-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/pragmaticplay" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-pg-soft">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-pg-soft/ezs-wt-pg-soft-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-pg-soft/ezs-wt-pg-soft-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-pg-soft/ezs-wt-pg-soft-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-pg-soft/ezs-wt-pg-soft-vertical.png"><img alt="wt-pg-soft cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-pg-soft/ezs-wt-pg-soft-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-pg-soft/ezs-wt-pg-soft-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/pgsoft" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-advant-play">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-advant-play/ezs-wt-advant-play-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-advant-play/ezs-wt-advant-play-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-advant-play/ezs-wt-advant-play-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-advant-play/ezs-wt-advant-play-vertical.png"><img alt="wt-advant-play cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-advant-play/ezs-wt-advant-play-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-advant-play/ezs-wt-advant-play-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/advantplay" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-dragoon-soft">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-dragoon-soft/ezs-wt-dragoon-soft-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-dragoon-soft/ezs-wt-dragoon-soft-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-dragoon-soft/ezs-wt-dragoon-soft-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-dragoon-soft/ezs-wt-dragoon-soft-vertical.png"><img alt="wt-dragoon-soft cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-dragoon-soft/ezs-wt-dragoon-soft-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-dragoon-soft/ezs-wt-dragoon-soft-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/dragoonsoft" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-joker">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-joker/ezs-wt-joker-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-joker/ezs-wt-joker-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-joker/ezs-wt-joker-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-joker/ezs-wt-joker-vertical.png"><img alt="wt-joker cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-joker/ezs-wt-joker-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-joker/ezs-wt-joker-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/joker" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-fa-chai">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big animated fadeInUp" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-fa-chai/ezs-wt-fa-chai-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-fa-chai/ezs-wt-fa-chai-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-fa-chai/ezs-wt-fa-chai-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-fa-chai/ezs-wt-fa-chai-vertical.png"><img alt="wt-fa-chai cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-fa-chai/ezs-wt-fa-chai-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-fa-chai/ezs-wt-fa-chai-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/fachai" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-cq9">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-cq9/ezs-wt-cq9-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-cq9/ezs-wt-cq9-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-cq9/ezs-wt-cq9-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-cq9/ezs-wt-cq9-vertical.png"><img alt="wt-cq9 cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-cq9/ezs-wt-cq9-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-cq9/ezs-wt-cq9-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/cq9" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wtm-spinix">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wtm-spinix/ezs-wtm-spinix-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wtm-spinix/ezs-wtm-spinix-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wtm-spinix/ezs-wtm-spinix-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wtm-spinix/ezs-wtm-spinix-vertical.png"><img alt="wtm-spinix cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wtm-spinix/ezs-wtm-spinix-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wtm-spinix/ezs-wtm-spinix-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/spinix" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-mgp-slot">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-mgp-slot/ezs-wt-mgp-slot-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-mgp-slot/ezs-wt-mgp-slot-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-mgp-slot/ezs-wt-mgp-slot-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-mgp-slot/ezs-wt-mgp-slot-vertical.png"><img alt="wt-mgp-slot cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-mgp-slot/ezs-wt-mgp-slot-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-mgp-slot/ezs-wt-mgp-slot-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/microgaming" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-evo-play">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-evo-play/ezs-wt-evo-play-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-evo-play/ezs-wt-evo-play-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-evo-play/ezs-wt-evo-play-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-evo-play/ezs-wt-evo-play-vertical.png"><img alt="wt-evo-play cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-evo-play/ezs-wt-evo-play-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-evo-play/ezs-wt-evo-play-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/evoplay" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-ps">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big -cannot-entry -ma  " data-status="-cannot-entry -ma">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-ps/ezs-wt-ps-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-ps/ezs-wt-ps-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-ps/ezs-wt-ps-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-ps/ezs-wt-ps-vertical.png"><img alt="wt-ps cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-ps/ezs-wt-ps-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-ps/ezs-wt-ps-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/playstar" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-red-tiger">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-red-tiger/ezs-wt-red-tiger-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-red-tiger/ezs-wt-red-tiger-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-red-tiger/ezs-wt-red-tiger-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-red-tiger/ezs-wt-red-tiger-vertical.png"><img alt="wt-red-tiger cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-red-tiger/ezs-wt-red-tiger-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-red-tiger/ezs-wt-red-tiger-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/redtiger" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-habanero">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-habanero/ezs-wt-habanero-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-habanero/ezs-wt-habanero-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-habanero/ezs-wt-habanero-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-habanero/ezs-wt-habanero-vertical.png"><img alt="wt-habanero cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-habanero/ezs-wt-habanero-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-habanero/ezs-wt-habanero-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/habanero" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-mpoker">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-mpoker/ezs-wt-mpoker-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-mpoker/ezs-wt-mpoker-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-mpoker/ezs-wt-mpoker-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-mpoker/ezs-wt-mpoker-vertical.png"><img alt="wt-mpoker cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-mpoker/ezs-wt-mpoker-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-mpoker/ezs-wt-mpoker-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/mpoker" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-play-tech">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-play-tech/ezs-wt-play-tech-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-play-tech/ezs-wt-play-tech-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-play-tech/ezs-wt-play-tech-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-play-tech/ezs-wt-play-tech-vertical.png"><img alt="wt-play-tech cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-play-tech/ezs-wt-play-tech-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-play-tech/ezs-wt-play-tech-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/playtech" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wtm-endorphina">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wtm-endorphina/ezs-wtm-endorphina-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wtm-endorphina/ezs-wtm-endorphina-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wtm-endorphina/ezs-wtm-endorphina-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wtm-endorphina/ezs-wtm-endorphina-vertical.png"><img alt="wtm-endorphina cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wtm-endorphina/ezs-wtm-endorphina-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wtm-endorphina/ezs-wtm-endorphina-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/endorphina" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-goldy">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-goldy/ezs-wt-goldy-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-goldy/ezs-wt-goldy-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-goldy/ezs-wt-goldy-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-goldy/ezs-wt-goldy-vertical.png"><img alt="wt-goldy cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-goldy/ezs-wt-goldy-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-goldy/ezs-wt-goldy-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/goldy" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-kalamba">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-kalamba/ezs-wt-kalamba-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-kalamba/ezs-wt-kalamba-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-kalamba/ezs-wt-kalamba-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-kalamba/ezs-wt-kalamba-vertical.png"><img alt="wt-kalamba cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-kalamba/ezs-wt-kalamba-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-kalamba/ezs-wt-kalamba-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/kalamba" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wtm-ygg-gaming">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wtm-ygg-gaming/ezs-wtm-ygg-gaming-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wtm-ygg-gaming/ezs-wtm-ygg-gaming-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wtm-ygg-gaming/ezs-wtm-ygg-gaming-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wtm-ygg-gaming/ezs-wtm-ygg-gaming-vertical.png"><img alt="wtm-ygg-gaming cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wtm-ygg-gaming/ezs-wtm-ygg-gaming-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wtm-ygg-gaming/ezs-wtm-ygg-gaming-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/yggdrasil" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-only-play">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-only-play/ezs-wt-only-play-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-only-play/ezs-wt-only-play-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-only-play/ezs-wt-only-play-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-only-play/ezs-wt-only-play-vertical.png"><img alt="wt-only-play cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-only-play/ezs-wt-only-play-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-only-play/ezs-wt-only-play-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/onlyplay" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-netent-slot">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-netent-slot/ezs-wt-netent-slot-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-netent-slot/ezs-wt-netent-slot-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-netent-slot/ezs-wt-netent-slot-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-netent-slot/ezs-wt-netent-slot-vertical.png"><img alt="wt-netent-slot cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-netent-slot/ezs-wt-netent-slot-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-netent-slot/ezs-wt-netent-slot-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/netentslot" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-wm-slot">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-wm-slot/ezs-wt-wm-slot-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-wm-slot/ezs-wt-wm-slot-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-wm-slot/ezs-wt-wm-slot-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-wm-slot/ezs-wt-wm-slot-vertical.png"><img alt="wt-wm-slot cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-wm-slot/ezs-wt-wm-slot-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-wm-slot/ezs-wt-wm-slot-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/wmslot" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -sp">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/sp/ezs-sp-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/sp/ezs-sp-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/sp/ezs-sp-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/sp/ezs-sp-vertical.png"><img alt="sp cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/sp/ezs-sp-vertical.png" src="https://asset.cloudigame.co/build/admin/img/sp/ezs-sp-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/simpleplay" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                            <li class="nav-item -provider-card-item -wt-rich88">





                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>

















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-rich88/ezs-wt-rich88-vertical.webp"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-rich88/ezs-wt-rich88-vertical.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/wt-rich88/ezs-wt-rich88-vertical.png"
                                                srcset="https://asset.cloudigame.co/build/admin/img/wt-rich88/ezs-wt-rich88-vertical.png"><img alt="wt-rich88 cover image png"
                                                class="img-fluid -cover-img ls-is-cached lazyloaded" width="400" height="580"
                                                data-src="https://asset.cloudigame.co/build/admin/img/wt-rich88/ezs-wt-rich88-vertical.png"
                                                src="https://asset.cloudigame.co/build/admin/img/wt-rich88/ezs-wt-rich88-vertical.png">
                                        </picture>






                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/rich88" class="-btn -btn-play">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </li>
                        </ul>

                    </div>
                </div>
            </div>











            <div class="x-lotto-category">
                <div class="container-fluid">
                    <div class="-lotto-category-wrapper" data-animatable="fadeInUp" data-delay="150">

                        <ul class="navbar-nav">
                            <li class="nav-item -lotto-card-item -first">
                                <a href="/%E0%B8%AB%E0%B8%A7%E0%B8%A2">
                                    <div class="-lotto-label-inner">
                                        <div class="-title">หวยออนไลน์</div>
                                        <div class="-sub-title"></div>
                                    </div>
                                    <img alt="Category lotto first-banner" class="-img img-fluid lazyload" width="500" height="728" data-src="./assets/images/index-lotto-category-first-banner.png"
                                        src="https://asset.cloudigame.co/build/admin/img/ezl-default-loading-big-with-countdown.png">
                                </a>

                            </li>


                            <li class="nav-item -lotto-card-item">






                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big-with-countdown-dark   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component -animate -big-with-countdown-dark " data-animatable="fadeInUp" data-delay="400">
                                            <img alt="Provider ic live animation" class="-img-badge img-fluid" width="50" height="60" src="./assets/images/ajax-ic-live-animate.png">
                                        </div>



















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/ez-lotto/game1234-vertical-countdown-dark.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/ez-lotto/game1234-vertical-countdown-dark.png"><img
                                                alt="lotto cover image png" class="img-fluid lazyload -cover-img" width="456" height="714"
                                                data-src="https://asset.cloudigame.co/build/admin/img/ez-lotto/game1234-vertical-countdown-dark.png"
                                                src="https://asset.cloudigame.co/build/admin/img/ezl-default-loading-big-with-countdown.png">
                                        </picture>




                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=lotto&amp;metadata%5Bgame_id%5D=game1234" class="js-account-approve-aware -btn -btn-play" target="_blank"
                                                        rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>





                                <div class="x-countdown-timer -game1234  js-timer-state">
                                    <div class="-countdown-timer-outer">
                                        <div class="-countdown-timer-liner -running -highlight-lotto -game1234"></div>
                                        <div class="-countdown-timer-container">
                                            <div class="-countdown-timer-wrapper -running -highlight-lotto -game1234">
                                                <img alt="Icon clock" class="img-fluid -icon" width="26" height="26" style="" src="./assets/images/ic-clock.png">
                                                <i class="far fa-clock d-md-none" style="display: inline;"></i>
                                                <span class="-timer">00:19</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item -lotto-card-item">






                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big-with-countdown-dark   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component -animate -big-with-countdown-dark " data-animatable="fadeInUp" data-delay="400">
                                            <img alt="Provider ic live animation" class="-img-badge img-fluid" width="50" height="60" src="./assets/images/ajax-ic-live-animate.png">
                                        </div>



















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/ez-lotto/pingpong-vertical-countdown-dark.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/ez-lotto/pingpong-vertical-countdown-dark.png"><img
                                                alt="lotto cover image png" class="img-fluid lazyload -cover-img" width="456" height="714"
                                                data-src="https://asset.cloudigame.co/build/admin/img/ez-lotto/pingpong-vertical-countdown-dark.png"
                                                src="https://asset.cloudigame.co/build/admin/img/ezl-default-loading-big-with-countdown.png">
                                        </picture>




                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=lotto&amp;metadata%5Bgame_id%5D=pingpong" class="js-account-approve-aware -btn -btn-play" target="_blank"
                                                        rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>





                                <div class="x-countdown-timer -pingpong  js-timer-state" style="">
                                    <div class="-countdown-timer-outer">
                                        <div class="-countdown-timer-liner -running -highlight-lotto -pingpong"></div>
                                        <div class="-countdown-timer-container">
                                            <div class="-countdown-timer-wrapper -running -highlight-lotto -pingpong">
                                                <img alt="Icon clock" class="img-fluid -icon" width="26" height="26" style="" src="./assets/images/ic-clock.png">
                                                <i class="far fa-clock d-md-none" style="display: inline;"></i>
                                                <span class="-timer">02:34</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item -lotto-card-item">






                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big-with-countdown-dark   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component -animate -big-with-countdown-dark " data-animatable="fadeInUp" data-delay="400">
                                            <img alt="Provider ic live animation" class="-img-badge img-fluid" width="50" height="60" src="./assets/images/ajax-ic-live-animate.png">
                                        </div>



















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/ez-lotto/pingpong-15-vertical-countdown-dark.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/ez-lotto/pingpong-15-vertical-countdown-dark.png"><img
                                                alt="lotto cover image png" class="img-fluid lazyload -cover-img" width="456" height="714"
                                                data-src="https://asset.cloudigame.co/build/admin/img/ez-lotto/pingpong-15-vertical-countdown-dark.png"
                                                src="https://asset.cloudigame.co/build/admin/img/ezl-default-loading-big-with-countdown.png">
                                        </picture>




                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=lotto&amp;metadata%5Bgame_id%5D=pingpong-15" class="js-account-approve-aware -btn -btn-play"
                                                        target="_blank" rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>





                                <div class="x-countdown-timer -pingpong-15  js-timer-state">
                                    <div class="-countdown-timer-outer">
                                        <div class="-countdown-timer-liner -running -highlight-lotto -pingpong-15"></div>
                                        <div class="-countdown-timer-container">
                                            <div class="-countdown-timer-wrapper -running -highlight-lotto -pingpong-15">
                                                <img alt="Icon clock" class="img-fluid -icon" width="26" height="26" style="" src="./assets/images/ic-clock.png">
                                                <i class="far fa-clock d-md-none" style="display: inline;"></i>
                                                <span class="-timer">03:35</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item -lotto-card-item">






                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big-with-countdown-dark   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big-with-countdown-dark" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>



















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/ez-lotto/crypto-vertical-countdown-dark.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/ez-lotto/crypto-vertical-countdown-dark.png"><img
                                                alt="lotto cover image png" class="img-fluid lazyload -cover-img" width="456" height="714"
                                                data-src="https://asset.cloudigame.co/build/admin/img/ez-lotto/crypto-vertical-countdown-dark.png"
                                                src="https://asset.cloudigame.co/build/admin/img/ezl-default-loading-big-with-countdown.png">
                                        </picture>




                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=lotto&amp;metadata%5Bgame_id%5D=crypto" class="js-account-approve-aware -btn -btn-play" target="_blank"
                                                        rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>





                                <div class="x-countdown-timer -crypto  js-timer-state">
                                    <div class="-countdown-timer-outer">
                                        <div class="-countdown-timer-liner -running -highlight-lotto -crypto"></div>
                                        <div class="-countdown-timer-container">
                                            <div class="-countdown-timer-wrapper -running -highlight-lotto -crypto">
                                                <img alt="Icon clock" class="img-fluid -icon" width="26" height="26" style="" src="./assets/images/ic-clock.png">
                                                <i class="far fa-clock d-md-none" style="display: inline;"></i>
                                                <span class="-timer">00:13</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item -lotto-card-item">






                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big-with-countdown-dark   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big-with-countdown-dark" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>



















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/ez-lotto/government-vertical-countdown-dark.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/ez-lotto/government-vertical-countdown-dark.png"><img
                                                alt="lotto cover image png" class="img-fluid lazyload -cover-img" width="456" height="714"
                                                data-src="https://asset.cloudigame.co/build/admin/img/ez-lotto/government-vertical-countdown-dark.png"
                                                src="https://asset.cloudigame.co/build/admin/img/ezl-default-loading-big-with-countdown.png">
                                        </picture>




                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=lotto&amp;metadata%5Bgame_id%5D=government" class="js-account-approve-aware -btn -btn-play" target="_blank"
                                                        rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                                <div class="x-lotto-title-overlay">
                                    <span class="-game-title">หวยรัฐบาล</span>
                                </div>



                                <div class="x-countdown-timer -government  js-timer-state">
                                    <div class="-countdown-timer-outer">
                                        <div class="-countdown-timer-liner -running "></div>
                                        <div class="-countdown-timer-container">
                                            <div class="-countdown-timer-wrapper -running ">
                                                <img alt="Icon clock" class="img-fluid -icon" width="26" height="26" style="" src="./assets/images/ic-clock.png">
                                                <i class="far fa-clock d-md-none" style="display: inline;"></i>
                                                <span class="-timer">11 วัน</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item -lotto-card-item">






                                <div class="x-game-list-item-macro-in-share js-game-list-toggle -big-with-countdown-dark   " data-status="">
                                    <div class="-inner-wrapper">
                                        <div class="x-game-badge-component - -big-with-countdown-dark" data-animatable="fadeInUp" data-delay="400">
                                            <span></span>
                                        </div>



















                                        <picture>
                                            <source type="image/webp" data-srcset="https://asset.cloudigame.co/build/admin/img/ez-lotto/laos-vertical-countdown-dark.webp">
                                            <source type="image/png" data-srcset="https://asset.cloudigame.co/build/admin/img/ez-lotto/laos-vertical-countdown-dark.png"><img
                                                alt="lotto cover image png" class="img-fluid lazyload -cover-img" width="456" height="714"
                                                data-src="https://asset.cloudigame.co/build/admin/img/ez-lotto/laos-vertical-countdown-dark.png"
                                                src="https://asset.cloudigame.co/build/admin/img/ezl-default-loading-big-with-countdown.png">
                                        </picture>




                                        <div class="-overlay">
                                            <div class="-overlay-inner">
                                                <div class="-wrapper-container">
                                                    <a href="/account/lobby/play?channelCode=lotto&amp;metadata%5Bgame_id%5D=laos" class="js-account-approve-aware -btn -btn-play" target="_blank"
                                                        rel="nofollow noopener">
                                                        <i class="fas fa-play"></i>
                                                        <span class="-text-btn">เข้าเล่น</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                                <div class="x-lotto-title-overlay">
                                    <span class="-game-title">หวยลาว</span>
                                </div>



                                <div class="x-countdown-timer -laos  js-timer-state">
                                    <div class="-countdown-timer-outer">
                                        <div class="-countdown-timer-liner -running "></div>
                                        <div class="-countdown-timer-container">
                                            <div class="-countdown-timer-wrapper -running ">
                                                <img alt="Icon clock" class="img-fluid -icon" width="26" height="26" style="display: none;" src="./assets/images/ic-clock.png">
                                                <i class="far fa-clock d-md-none" style="display: none;"></i>
                                                <span class="-timer">แทงหวย</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>





            <div class="x-tab-content">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="tab-content-1">





                        <div class="x-vertical-content">
                            <div class="container-fluid">
                                <h2 class="-text-heading d-none d-md-block" data-animatable="fadeInUp">
                                    EZ Casino คาสิโนออนไลน์ เต็มรูปแบบ ระดับพรีเมียม
                                </h2>

                                <div class="-vertical-content-wrapper -content-center">
                                    <img alt="EZ casino vertical content image" class="-img-first img-fluid lazyload" width="1119" height="468"
                                        data-src="./assets/images/index-vertical-content-with-image-first.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">

                                    <div class="-block-content">
                                        <h3 class="-text-title d-block d-md-none animated fadeInUp" data-animatable="fadeInUp">
                                            EZ Casino คาสิโนออนไลน์ เต็มรูปแบบ <br> ระดับพรีเมียม
                                        </h3>

                                        <p class="-text-description" data-animatable="fadeInUp" data-delay="200">
                                            Ez Casino สุดยอดผู้ให้บริการระดับพรีเมียม <a href="/casino">คาสิโนออนไลน์</a> ระบบออโต้ ฝาก-ถอน รวดเร็ว ทันใจ นวัตกรรม ที่ทันสมัยที่สุด ยกระดับคุณภาพของ
                                            เว็บพนันออนไลน์ ผ่านกระบวนการที่ทำได้ง่ายๆ ให้สมาชิกทำรายการได้ด้วยตัวเอง ภายใน 30 วินาที ไม่ผ่านแอดมิน รองรับได้ทุกธนาคารชั้นนำในไทย ไม่เก็บค่าธรรมเนียม
                                            ฝากยอดเล็กยอดใหญ่ เราก็การันตีความปลอดภัยให้ มั่นใจได้เลยว่าคุณจะได้รับการบริการเป็นอย่างดี ไม่มีการแบ่งแยกชนชั้น ทำเงินได้อย่างจุใจผ่าน
                                            เกมคาสิโนบนค่ายดังที่หลากหลาย และหากคุณเอาชนะได้ สามารถดำเนินการถอนได้ทันที ไม่ติดเงื่อนไข และเว็บคาสิโน บริการด้วยทีมงานคุณภาพ 24 ชั่วโมง
                                            ไม่ว่าคุณจะพบเจอกับปัญหาติดขัดระหว่างการใช้งาน พร้อมดูแลอย่างมืออาชีพ ช่วยให้คำแนะนำ เป็นที่ปรึกษาจนกว่าคุณจะได้รับความพึงพอใจสูงสุด
                                            เพราะผู้เล่นทุกท่านคือคนสำคัญของเรา
                                        </p>
                                    </div>


                                </div>
                            </div>
                        </div>





                        <div class="x-ezc-content-box-column-list-container">
                            <div class="container ">
                                <div class="row -header-wrapper">
                                    <div class="col-12">
                                        <h3 class="-heading-title">Ez Casino คาสิโนเว็บตรง ระดับไฮคลาส</h3>
                                    </div>
                                </div>
                                <div class="row -content-wrapper">
                                    <div class="col-12">
                                        <div class="-article-list">
                                            <article class="-article-item">
                                                <picture>
                                                    <source type="image/webp" data-srcset="./assets/images/content-index-column-list-icon-1.webp">
                                                    <source type="image/png" data-srcset="./assets/images/content-index-column-list-icon-1.png"><img alt="Content index icon 1 png"
                                                        class="img-fluid lazyload -ic" width="90" height="90" data-src="./assets/images/content-index-column-list-icon-1.png"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                </picture>
                                                <div class="-content">
                                                    <h4 class="-title">» เท่าไหร่ก็จ่าย ไม่อั้น «</h4>
                                                    <p class="-description">แทงไม้ละ 200,000 <br> รับเต็มทุกโต๊ะ ทุกค่าย</p>
                                                </div>
                                            </article>
                                            <article class="-article-item">
                                                <picture>
                                                    <source type="image/webp" data-srcset="./assets/images/content-index-column-list-icon-2.webp">
                                                    <source type="image/png" data-srcset="./assets/images/content-index-column-list-icon-2.png"><img alt="Content index icon 2 png"
                                                        class="img-fluid lazyload -ic" width="90" height="90" data-src="./assets/images/content-index-column-list-icon-2.png"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                </picture>
                                                <div class="-content">
                                                    <h4 class="-title">» EZ Withdraw «</h4>
                                                    <p class="-description">ถอน 5,000,000 ต่อวัน <br> ไม่จำกัดรอบ</p>
                                                </div>
                                            </article>
                                            <article class="-article-item">
                                                <picture>
                                                    <source type="image/webp" data-srcset="./assets/images/content-index-column-list-icon-3.webp">
                                                    <source type="image/png" data-srcset="./assets/images/content-index-column-list-icon-3.png"><img alt="Content index icon 3 png"
                                                        class="img-fluid lazyload -ic" width="90" height="90" data-src="./assets/images/content-index-column-list-icon-3.png"
                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                </picture>
                                                <div class="-content">
                                                    <h4 class="-title">» ออโต้ทุกรายการ «</h4>
                                                    <p class="-description">ฝาก 5 &lt; วินาที <br> ถอน 2 &lt; นาที</p>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="x-content-banner-horizontal-component -not-merge " id="">
                            <div class="container">
                                <div class="-banner-container -banner-right">
                                    <div class="-text-wrapper -text-wrapper-left">
                                        <div class="-text-wrapper-inner">




                                            <h3 class="-text-title">คาสิโน ถ่ายทอดสดลิขสิทธิ์แท้ ส่งตรงจากต่างประเทศ</h3>







                                            <p class="-text-sub-title">สำหรับ บาคาร่า เสือมังกร รูเล็ต หรือว่าไฮโล ทุกรูปแบบคาสิโนที่มีการเดิมพันผ่านช่องทางระบบสตรีมสด ที่ EZ Casino
                                                ของเราเป็นอีกหนึ่งสิ่งที่ถูกกล่าวขานมาอย่างยาวนาน และเป็นที่ยอมรับ พร้อมให้บริการแก่ผู้ที่สนใจมาเปิดประสบการณ์ใหม่ๆ
                                                สุดทันสมัยไปด้วยกันด้วยความที่เราเป็นเว็บชั้นนำมาแรงและกำลังเป็นที่นิยมสุดๆ ใน 2022 นี้จึงใส่ใจในมาตรฐานเป็นพิเศษถ่ายทอดสด
                                                ลิขสิทธิ์แท้ส่งตรงจากต่างประเทศด้วยสัญญาณภาพที่คมชัด เร็ว แรง ลื่นไหลไม่มีสะดุด
                                                มองเห็นทุกรายละเอียดรวมไปถึงดีลเลอร์สาวสวยของเราด้วยไม่พลาดทุกจังหวะในช่วงเวลาสำคัญของการลงเดิมพัน เซิร์ฟเวอร์ที่มั่นคงจึงส่งผลให้ระบบของเรา
                                                มีความเสถียรภาพขั้นสูงสุดจนสร้างความรู้สึกที่สมจริงเสมือนว่าได้นั่งเล่นอยู่ในบ่อนดังๆโดยไม่ต้องเสีย เวลาเดินทางไปถึงที่สามารถร่วมสนุกกับเราได้ง่ายๆ
                                                คาสิโนออนไลน์รองรับทุกแพลตฟอร์มสร้างรายได้ไม่มีขาดตอนผ่านหน้าจอโทรศัพท์มือถือ คอมพิวเตอร์ หรือแท็บเล็ตทุกอุปกรณ์ที่คุณถนัดพร้อมกับอินเทอร์เน็ต ได้ตลอด
                                                24 ชั่วโมง สะดวกสบาย รองรับทั้งระบบปฏิบัติการ iOS และ Android ล็อกอินบนทางเข้าหน้าเว็บได้ทันทีไม่ต้องดาวน์โหลดหรือติดตั้ง
                                                โปรแกรมใดๆไม่ว่าจะอยู่ที่ไหนบนโลกก็รับความบันเทิงเหล่านี้ได้อย่างจุใจ</p>


                                        </div>
                                    </div>
                                    <div class="-img-wrapper">
                                        <img alt="EZ Casino Image" class="img-fluid lazyload -img-banner" data-src="./assets/images/content-banner-horizontal-1.png"
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade " id="tab-content-2">





                        <div class="x-vertical-content">
                            <div class="container-fluid">

                                <div class="-vertical-content-wrapper -content-center">
                                    <img alt="EZ casino vertical content image" class="-img-first img-fluid lazyload" width="1119" height="468"
                                        data-src="./assets/images/ez-casino-index-privilege-banner.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">

                                    <div class="-block-content">
                                        <h3 class="-text-title animated fadeInUp" data-animatable="fadeInUp">
                                            เล่นคาสิโนออนไลน์กับ EZ casino ดีอย่างไร
                                        </h3>

                                    </div>


                                </div>
                            </div>
                        </div>






                        <div class="x-ezs-status-game-section-wrapper">
                            <div class="container">
                                <ul class="-status-game-container-wrapper">
                                    <li class="-status-list animated fadeInUp" data-animatable="fadeInUp" data-delay="100" data-offset="200%">

                                        <div class="-status-content">
                                            <h3 class="-status-title h5">การันตีความมั่นคงและปลอดภัยขั้นสูงสุด</h3>
                                            <span class="-status-detail d-none d-md-block">สร้างความมั่นใจให้กับผู้เล่นด้วยการการันตีความปลอดภัยขั้นสูงสุด
                                                เนื่องจากเป็นเว็บที่ได้รับลิขสิทธิ์การถ่ายทอดสดโดยตรง ไม่ผ่านเอเย่นต์ ที่เปิดให้บริการอย่างถูกต้อง มีมาตรฐานระดับสากล
                                                ใช้ระบบออโต้ตั้งแต่ขั้นตอนการสมัครสมาชิกที่สามารถลงทะเบียนผ่านหน้าเว็บได้ด้วยตัวคุณเอง ใช้แค่เบอร์มือถือ หรือระบบฝากถอน ที่ทำได้ง่ายๆ เสร็จภายใน 10
                                                วินาที ไม่ต้องผ่านเจ้าหน้าที่ ฝากง่าย ถอนไว จ่ายจริง ต้องที่ EZ Casino เท่านั้น สะดวกและปลอดภัยกว่า</span>
                                        </div>
                                    </li>
                                    <li class="-status-list animated fadeInUp" data-animatable="fadeInUp" data-delay="200" data-offset="200%">

                                        <div class="-status-content">
                                            <h3 class="-status-title h5">คาสิโนออนไลน์ครบจบในที่เดียว</h3>
                                            <span class="-status-detail d-none d-md-block">รวบรวมเกมเดิมพันเอาไว้ครบครันทุกประเภท จากหลากหลายค่ายดังที่ได้ทำการคัดสรรมาแล้วเป็นอย่างดี
                                                พร้อมเสิร์ฟความสุข ความสนุกสนานให้คุณได้ตลอดเวลา แบบที่ไม่ซ้ำซากจำเจเหมือนที่ไหนแน่นอน ระบบถ่ายทอดสดลิขสิทธิ์แท้ส่งตรงจากต่างประเทศแบบเรียลไทม์
                                                ด้วยสัญญาณที่เสถียรภาพมาพร้อมกับดีลเลอร์สาวสวยสุดเซ็กซี่ ทำหน้าที่ดูแลคุณตลอดทั้งเกม
                                                ที่สำคัญเรามีบริการทดลองเล่นฟรีสำหรับมือใหม่ที่กำลังอยู่ในระหว่างการตัดสินใจเลือก และซักซ้อมฝีมือก่อนไปพบกับของจริง</span>
                                        </div>
                                    </li>
                                    <li class="-status-list animated fadeInUp" data-animatable="fadeInUp" data-delay="300" data-offset="200%">

                                        <div class="-status-content">
                                            <h3 class="-status-title h5">เดิมพันคาสิโนได้อย่างไม่มีสะดุด</h3>
                                            <span class="-status-detail d-none d-md-block">สร้างความสะดวกสบายในการเข้าเล่น
                                                เนื่องจากสมาชิกสามารถเข้าไปร่วมสนุกเดิมพันบนเว็บไซต์ได้ทันทีเพียงแค่มีอุปกรณ์ที่สามารถเชื่อมต่ออินเทอร์เน็ตได้
                                                ล็อกอินผ่านทางหน้าเว็บบนเบราว์เซอร์ได้ง่ายๆ ไม่ว่าจะอยู่ที่ไหนหรือเมื่อไหร่เปิดให้บริการตลอด 24 ชั่วโมง
                                                ไม่จำเป็นที่จะต้องดาวน์โหลดหรือเสียเวลาหาลิงก์ทางเข้า</span>
                                        </div>
                                    </li>
                                    <li class="-status-list animated fadeInUp" data-animatable="fadeInUp" data-delay="400" data-offset="200%">

                                        <div class="-status-content">
                                            <h3 class="-status-title h5">โปรโมชั่นสุดคุ้มค่าที่ Ez casino</h3>
                                            <span class="-status-detail d-none d-md-block">โปรโมชั่นสุดคุ้ม โบนัสและสิทธิพิเศษอีกมากมาย พลิกโฉมวงการพนันด้วยสิทธิพิเศษ Privilege สำหรับสมาชิกรับ
                                                eazysood สูตรเดิมพันบาคาร่าและสล็อตออนไลน์ เพิ่มโอกาสในการทำเงินได้จริงและ ezmovie.co ดูหนังออนไลน์ฟรี คุณภาพระดับ Full HD
                                                ทั้งหมดทั้งมวลนี้ไม่มีค่าใช้จ่ายใดๆ ทั้งสิ้น</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane fade " id="tab-content-3">





                        <div class="x-blog-section">
                            <div class="container-fluid">
                                <h2 class="-section-title">EZ News</h2>

                                <div class="my-3 mb-lg-4">


                                    <div class="x-blog-category-container -as-default">
                                        <div class="-category-wrapper">

                                            <a href="/blogs?category=zean-sood" class="-btn-category ">
                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/ic-blog-category-zean-sood.webp">
                                                    <source type="image/png" srcset="./assets/images/ic-blog-category-zean-sood.png"><img alt="icon ตำราเซียน" class="img-fluid -icon" width="38"
                                                        height="38" src="./assets/images/ic-blog-category-zean-sood.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/ic-blog-category-zean-sood.webp">
                                                    <source type="image/png" srcset="./assets/images/ic-blog-category-zean-sood.png"><img alt="icon active ตำราเซียน" class="img-fluid -icon -active"
                                                        width="38" height="38" src="./assets/images/ic-blog-category-zean-sood.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/blog-category-bg.webp">
                                                    <source type="image/png" srcset="./assets/images/blog-category-bg.png"><img alt="รูปพื้นหลัง blog category" class="img-fluid -bg" width="160"
                                                        height="55" src="./assets/images/blog-category-bg.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/blog-category-bg-active.webp">
                                                    <source type="image/png" srcset="./assets/images/blog-category-bg-active.png"><img alt="icon active เลขเด็ด" class="img-fluid -bg -active"
                                                        width="160" height="55" src="./assets/images/blog-category-bg-active.png">
                                                </picture>

                                                <span class="-text-title">ตำรา<br class="d-block d-sm-none">เซียน</span>
                                            </a>

                                            <a href="/blogs?category=popular-casino" class="-btn-category ">
                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/ic-blog-category-popular-casino.webp">
                                                    <source type="image/png" srcset="./assets/images/ic-blog-category-popular-casino.png"><img alt="icon Casino น่าเล่น" class="img-fluid -icon"
                                                        width="38" height="38" src="./assets/images/ic-blog-category-popular-casino.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/ic-blog-category-popular-casino.webp">
                                                    <source type="image/png" srcset="./assets/images/ic-blog-category-popular-casino.png"><img alt="icon active Casino น่าเล่น"
                                                        class="img-fluid -icon -active" width="38" height="38" src="./assets/images/ic-blog-category-popular-casino.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/blog-category-bg.webp">
                                                    <source type="image/png" srcset="./assets/images/blog-category-bg.png"><img alt="รูปพื้นหลัง blog category" class="img-fluid -bg" width="160"
                                                        height="55" src="./assets/images/blog-category-bg.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/blog-category-bg-active.webp">
                                                    <source type="image/png" srcset="./assets/images/blog-category-bg-active.png"><img alt="icon active เลขเด็ด" class="img-fluid -bg -active"
                                                        width="160" height="55" src="./assets/images/blog-category-bg-active.png">
                                                </picture>

                                                <span class="-text-title">Casino <br class="d-block d-sm-none"> น่าเล่น</span>
                                            </a>

                                            <a href="/blogs?category=super-shot" class="-btn-category ">
                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/ic-blog-category-super-shot.webp">
                                                    <source type="image/png" srcset="./assets/images/ic-blog-category-super-shot.png"><img alt="icon Shot แม่น" class="img-fluid -icon" width="38"
                                                        height="38" src="./assets/images/ic-blog-category-super-shot.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/ic-blog-category-super-shot.webp">
                                                    <source type="image/png" srcset="./assets/images/ic-blog-category-super-shot.png"><img alt="icon active Shot แม่น" class="img-fluid -icon -active"
                                                        width="38" height="38" src="./assets/images/ic-blog-category-super-shot.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/blog-category-bg.webp">
                                                    <source type="image/png" srcset="./assets/images/blog-category-bg.png"><img alt="รูปพื้นหลัง blog category" class="img-fluid -bg" width="160"
                                                        height="55" src="./assets/images/blog-category-bg.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/blog-category-bg-active.webp">
                                                    <source type="image/png" srcset="./assets/images/blog-category-bg-active.png"><img alt="icon active เลขเด็ด" class="img-fluid -bg -active"
                                                        width="160" height="55" src="./assets/images/blog-category-bg-active.png">
                                                </picture>

                                                <span class="-text-title">Shot <br class="d-block d-sm-none"> แม่น</span>
                                            </a>

                                            <a href="/blogs?category=news-event" class="-btn-category ">
                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/ic-blog-category-news-event.webp">
                                                    <source type="image/png" srcset="./assets/images/ic-blog-category-news-event.png"><img alt="icon Event" class="img-fluid -icon" width="38"
                                                        height="38" src="./assets/images/ic-blog-category-news-event.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/ic-blog-category-news-event.webp">
                                                    <source type="image/png" srcset="./assets/images/ic-blog-category-news-event.png"><img alt="icon active Event" class="img-fluid -icon -active"
                                                        width="38" height="38" src="./assets/images/ic-blog-category-news-event.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/blog-category-bg.webp">
                                                    <source type="image/png" srcset="./assets/images/blog-category-bg.png"><img alt="รูปพื้นหลัง blog category" class="img-fluid -bg" width="160"
                                                        height="55" src="./assets/images/blog-category-bg.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/blog-category-bg-active.webp">
                                                    <source type="image/png" srcset="./assets/images/blog-category-bg-active.png"><img alt="icon active เลขเด็ด" class="img-fluid -bg -active"
                                                        width="160" height="55" src="./assets/images/blog-category-bg-active.png">
                                                </picture>

                                                <span class="-text-title">Event</span>
                                            </a>

                                            <a href="/blogs?category=news-lotto" class="-btn-category ">
                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/ic-blog-category-news-lotto.webp">
                                                    <source type="image/png" srcset="./assets/images/ic-blog-category-news-lotto.png"><img alt="icon หวย" class="img-fluid -icon" width="38" height="38"
                                                        src="./assets/images/ic-blog-category-news-lotto.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/ic-blog-category-news-lotto.webp">
                                                    <source type="image/png" srcset="./assets/images/ic-blog-category-news-lotto.png"><img alt="icon active หวย" class="img-fluid -icon -active"
                                                        width="38" height="38" src="./assets/images/ic-blog-category-news-lotto.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/blog-category-bg.webp">
                                                    <source type="image/png" srcset="./assets/images/blog-category-bg.png"><img alt="รูปพื้นหลัง blog category" class="img-fluid -bg" width="160"
                                                        height="55" src="./assets/images/blog-category-bg.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/blog-category-bg-active.webp">
                                                    <source type="image/png" srcset="./assets/images/blog-category-bg-active.png"><img alt="icon active เลขเด็ด" class="img-fluid -bg -active"
                                                        width="160" height="55" src="./assets/images/blog-category-bg-active.png">
                                                </picture>

                                                <span class="-text-title">หวย</span>
                                            </a>

                                            <a href="/blogs?category=news-slot" class="-btn-category ">
                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/ic-blog-category-news-slot.webp">
                                                    <source type="image/png" srcset="./assets/images/ic-blog-category-news-slot.png"><img alt="icon สล็อต" class="img-fluid -icon" width="38"
                                                        height="38" src="./assets/images/ic-blog-category-news-slot.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/ic-blog-category-news-slot.webp">
                                                    <source type="image/png" srcset="./assets/images/ic-blog-category-news-slot.png"><img alt="icon active สล็อต" class="img-fluid -icon -active"
                                                        width="38" height="38" src="./assets/images/ic-blog-category-news-slot.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/blog-category-bg.webp">
                                                    <source type="image/png" srcset="./assets/images/blog-category-bg.png"><img alt="รูปพื้นหลัง blog category" class="img-fluid -bg" width="160"
                                                        height="55" src="./assets/images/blog-category-bg.png">
                                                </picture>

                                                <picture>
                                                    <source type="image/webp" srcset="./assets/images/blog-category-bg-active.webp">
                                                    <source type="image/png" srcset="./assets/images/blog-category-bg-active.png"><img alt="icon active เลขเด็ด" class="img-fluid -bg -active"
                                                        width="160" height="55" src="./assets/images/blog-category-bg-active.png">
                                                </picture>

                                                <span class="-text-title">สล็อต</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div data-animatable="fadeInUp" data-offset="200%" class="animated fadeInUp">


                                    <div class="x-blog-card-list-container">
                                        <div class="row -list-row">
                                            <div class="col-sm-6 col-md-4 col-lg-3 -list-item">




                                                <div class="x-blog-card-list-item-container">
                                                    <a href="/Slots6666-A-super-fun-online-slot" class="-card-wrapper">
                                                        <div class="-card-image">
                                                            <img alt="สล็อต6666 - เกมสล็อตออนไลน์สุดมันส์รับโชคใหญ่" class="img-fluid -image lazyload" width="237" height="140"
                                                                data-src="./assets/images/b0a948d1c75a535f348ebf7c665de626.jpg"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </div>


                                                        <h6 class="-card-title">สล็อต6666 - เกมสล็อตออนไลน์สุดมันส์รับโชคใหญ่</h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 -list-item">




                                                <div class="x-blog-card-list-item-container">
                                                    <a href="/live-casinos-a-hot-new-source-of-money-making" class="-card-wrapper">
                                                        <div class="-card-image">
                                                            <img alt="คาสิโนสด แหล่งทำเงินใหม่มาแรง ตอบโจทย์ทุกการเดิมพัน เต็มคำทุกกำไร" class="img-fluid -image lazyload" width="237" height="140"
                                                                data-src="./assets/images/858a14434491e3dda0981cc54e6cb1e6.jpg"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </div>


                                                        <h6 class="-card-title">คาสิโนสด แหล่งทำเงินใหม่มาแรง ตอบโจทย์ทุกการเดิมพัน เต็มคำทุกกำไร</h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 -list-item">




                                                <div class="x-blog-card-list-item-container">
                                                    <a href="/Entrance-to-pg-soft-source" class="-card-wrapper">
                                                        <div class="-card-image">
                                                            <img alt="ทางเข้า pg soft แหล่งเกมสล็อตออนไลน์มาแรง" class="img-fluid -image lazyload" width="237" height="140"
                                                                data-src="./assets/images/f5a2cfef862fb507e197376a36983405.jpg"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </div>


                                                        <h6 class="-card-title">ทางเข้า pg soft แหล่งเกมสล็อตออนไลน์มาแรง</h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 -list-item">




                                                <div class="x-blog-card-list-item-container">
                                                    <a href="/285casino-catches-every-eyes" class="-card-wrapper">
                                                        <div class="-card-image">
                                                            <img alt="285คาสิโน สะกดทุกสายตา ลงเดิมพันได้แบบนอนสต็อป ผู้ชนะแห่งโลกการพนัน" class="img-fluid -image lazyload" width="237" height="140"
                                                                data-src="./assets/images/fd616cb05fc51958d524894b0f5985a9.png"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </div>


                                                        <h6 class="-card-title">285คาสิโน สะกดทุกสายตา ลงเดิมพันได้แบบนอนสต็อป ผู้ชนะแห่งโลกการพนัน</h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 -list-item">




                                                <div class="x-blog-card-list-item-container">
                                                    <a href="/reviews-and-promotions-online-casino-777" class="-card-wrapper">
                                                        <div class="-card-image">
                                                            <img alt="รีวิวและโปรโมชั่น คาสิโนออนไลน์777 พร้อมเคล็ดลับ" class="img-fluid -image lazyload" width="237" height="140"
                                                                data-src="./assets/images/b579b85f3a4f83f9b67739135db334e8.jpg"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </div>


                                                        <h6 class="-card-title">รีวิวและโปรโมชั่น คาสิโนออนไลน์777 พร้อมเคล็ดลับ</h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 -list-item">




                                                <div class="x-blog-card-list-item-container">
                                                    <a href="/online-casino-888-number-1" class="-card-wrapper">
                                                        <div class="-card-image">
                                                            <img alt="คาสิโนออนไลน์888 ยอดนิยมอันดับ 1 ที่มาแรงที่สุดในตอนนี้" class="img-fluid -image lazyload" width="237" height="140"
                                                                data-src="./assets/images/2c6eeca22eea46909318057800ff0053.jpg"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </div>


                                                        <h6 class="-card-title">คาสิโนออนไลน์888 ยอดนิยมอันดับ 1 ที่มาแรงที่สุดในตอนนี้</h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 -list-item">




                                                <div class="x-blog-card-list-item-container">
                                                    <a href="/%E0%B9%80%E0%B8%A7%E0%B9%87%E0%B8%9A%E0%B8%9E%E0%B8%99%E0%B8%B1%E0%B8%99-285%E0%B8%84%E0%B8%B2%E0%B8%AA%E0%B8%B4%E0%B9%82%E0%B8%99-%E0%B8%99%E0%B9%88%E0%B8%B2%E0%B8%AA%E0%B8%99%E0%B9%83%E0%B8%88%E0%B8%A7%E0%B8%B2%E0%B8%87%E0%B9%80%E0%B8%87%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%B8%E0%B8%99%E0%B9%80%E0%B8%94%E0%B8%B4%E0%B8%A1%E0%B8%9E%E0%B8%B1%E0%B8%99-10-%E0%B8%9A%E0%B8%B2%E0%B8%97-%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%99%E0%B9%84%E0%B8%94%E0%B9%89%E0%B8%AA%E0%B8%9A"
                                                        class="-card-wrapper">
                                                        <div class="-card-image">
                                                            <img alt="เว็บพนัน 285คาสิโน น่าสนใจวางเงินทุนเดิมพัน 10 บาท เล่นได้สบายๆ" class="img-fluid -image lazyload" width="237" height="140"
                                                                data-src="./assets/images/dc446b4665435fd01a989cffa1a62f54.jpg"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </div>


                                                        <h6 class="-card-title">เว็บพนัน 285คาสิโน น่าสนใจวางเงินทุนเดิมพัน 10 บาท เล่นได้สบายๆ</h6>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3 -list-item">




                                                <div class="x-blog-card-list-item-container">
                                                    <a href="/auto-casino-baccarat-game" class="-card-wrapper">
                                                        <div class="-card-image">
                                                            <img alt="คาสิโนauto เกมบาคาร่า แจกสูตรเทคนิควิธีการเล่น ให้สำหรับสมาชิกทุกท่าน" class="img-fluid -image lazyload" width="237" height="140"
                                                                data-src="./assets/images/c91b9dd2673d4b2ca557603007650675.jpg"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </div>


                                                        <h6 class="-card-title">คาสิโนauto เกมบาคาร่า แจกสูตรเทคนิควิธีการเล่น ให้สำหรับสมาชิกทุกท่าน</h6>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="-all-blog-link-wrapper">
                                                <a href="/blogs" class="-all-blog-link ">
                                                    ข่าวทั้งหมด
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>




                        <div class="x-question-and-answer-container">
                            <div class="container">



                                <h2 class="-title">คำถามที่พบบ่อย</h2>


                                <div class="-accordion-list-wrapper accordion" id="questionAndAnswerAccordion">
                                    <article class="-accordion-list-item-wrapper">
                                        <h4 class="-btn " data-toggle="collapse" data-target="#questionAndAnswerAccordion-why-ez-casino" aria-expanded="1"
                                            aria-controls="questionAndAnswerAccordion-why-ez-casino">
                                            ทำไมต้องเลือกเล่น EZ Casino?
                                            <i class="fas fa-plus"></i>
                                            <i class="fas fa-minus"></i>
                                        </h4>
                                        <div id="questionAndAnswerAccordion-why-ez-casino" class="collapse show js-q-and-a-article-content" aria-labelledby="headingOne"
                                            data-parent="#questionAndAnswerAccordion">




                                            <p class="-description">นอกจาก EZ Casino จะให้บริการด้านคาสิโนออนไลน์แล้ว ทางเรายังมีสิทธิพิเศษมากมายที่จะมอบให้แก่ผู้ที่เข้ามาเดิมพันอีกด้วย
                                                ความปลอดภัยและโปร่งใสของเว็บตรงอย่างเราได้รับความน่าเชื่อถือเป็นอย่างมากและพร้อมให้บริการตลอด 24 ชั่วโมง</p>

                                        </div>
                                    </article>
                                    <article class="-accordion-list-item-wrapper">
                                        <h4 class="-btn collapsed" data-toggle="collapse" data-target="#questionAndAnswerAccordion-what-provider-popular" aria-expanded=""
                                            aria-controls="questionAndAnswerAccordion-what-provider-popular">
                                            ค่ายคาสิโนไหน เป็นที่นิยม ณ ปัจจุบัน?
                                            <i class="fas fa-plus"></i>
                                            <i class="fas fa-minus"></i>
                                        </h4>
                                        <div id="questionAndAnswerAccordion-what-provider-popular" class="collapse js-q-and-a-article-content" aria-labelledby="headingOne"
                                            data-parent="#questionAndAnswerAccordion">




                                            <p class="-description">ค่ายเกมคาสิโนออนไลน์ที่ได้รับความนิยมมีดังนี้ sacasino,wmcasino,aecasino และอื่นๆ ตามลำดับ ทั้งหมดสามารถเข้าเล่นได้ที่ ezcasino
                                                ภายในเว็บเดียว</p>

                                        </div>
                                    </article>
                                    <article class="-accordion-list-item-wrapper">
                                        <h4 class="-btn collapsed" data-toggle="collapse" data-target="#questionAndAnswerAccordion-what-event-popular" aria-expanded=""
                                            aria-controls="questionAndAnswerAccordion-what-event-popular">
                                            กิจกรรมไหนที่ได้รับความนิยมมากที่สุด?
                                            <i class="fas fa-plus"></i>
                                            <i class="fas fa-minus"></i>
                                        </h4>
                                        <div id="questionAndAnswerAccordion-what-event-popular" class="collapse js-q-and-a-article-content" aria-labelledby="headingOne"
                                            data-parent="#questionAndAnswerAccordion">




                                            <p class="-description">กิจกรรมบนคาสิโนออนไลน์ของเราที่ได้รับความนิยมมากที่สุดจะเป็น บวกทุกบิลชนะ เพราะไม่ติดเงื่อนไขใดๆ
                                                ไม่ว่าจะเล่นได้น้อยหรือมากสามารถถอนได้ทันที</p>

                                        </div>
                                    </article>
                                    <article class="-accordion-list-item-wrapper">
                                        <h4 class="-btn collapsed" data-toggle="collapse" data-target="#questionAndAnswerAccordion-how-long-deposit-withdraw" aria-expanded=""
                                            aria-controls="questionAndAnswerAccordion-how-long-deposit-withdraw">
                                            ฝาก - ถอน ใช้เวลานานหรือไม่?
                                            <i class="fas fa-plus"></i>
                                            <i class="fas fa-minus"></i>
                                        </h4>
                                        <div id="questionAndAnswerAccordion-how-long-deposit-withdraw" class="collapse js-q-and-a-article-content" aria-labelledby="headingOne"
                                            data-parent="#questionAndAnswerAccordion">




                                            <p class="-description">เว็บไซต์ของเรามีระบบฝาก-ถอนออโต้ที่รวดเร็ว โดยทำรายการแต่ละครั้งไม่เกิน 10 วินาที
                                                เพื่อความสะดวกแก่ผู้เดิมพันจึงไม่ปล่อยให้ทุกท่านรอนาน</p>

                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="# เล่นคาสิโนออนไลน์กับ EZ casino ดีอย่างไร" class="nav-link active" id="tab-content-button-1" data-toggle="pill" data-target="#tab-content-1">
                            คาสิโนพรีเมียม
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="# เล่นคาสิโนออนไลน์กับ EZ casino ดีอย่างไร" class="nav-link " id="tab-content-button-2" data-toggle="pill" data-target="#tab-content-2">
                            EZ Casino ดีอย่างไร
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="# เล่นคาสิโนออนไลน์กับ EZ casino ดีอย่างไร" class="nav-link " id="tab-content-button-3" data-toggle="pill" data-target="#tab-content-3">
                            คำถามที่พบบ่อย
                        </a>
                    </li>
                </ul>
            </div>









            <div class="x-review-entry-index-container js-review-entry-index">
                <div class="-header-wrapper -logged js-review-form-container " data-url="/account/_ajax_/promotion-review">
                    <div style="height: 300px;" data-ajax-load="/account/_ajax_/promotion-review"></div>
                </div>
                <div class="-outer-content-wrapper">

                    <div class="x-review-list-content-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <strong class="-main-title" data-animatable="fadeInUp" data-delay="150">ข้อความรีวิวจากผู้ใช้จริง</strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <ul class="nav -review-list">
                                        <li class="-review-list-item" data-animatable="fadeInLeft">
                                            <div class="-header">


                                                <div class="-profile-wrapper -full">
                                                    <img src="./assets/images/f2825a51244b28a2b7083e4c1bb0f8b0.png" class="-profile-img" alt="ระบบ Review จากผู้ใช้งานจริง" width="100" height="100">
                                                    <div class="-right-content">
                                                        <div class="-top">
                                                            <span class="-text">สมาชิกหมายเลข : 091-784-xxxx</span>
                                                        </div>
                                                        <div class="-bottom">
                                                            <span class="-detail">IP : 159.192.43.177</span>
                                                            <span class="-detail"><i class="far fa-clock -ic"></i> 20-07-2024 20:31 น.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="-star-rate-wrapper -small">
                                                    <div class="rating-container rating-xs rating-animate rating-disabled">
                                                        <div class="rating-stars"><span class="empty-stars"><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span></span><span class="filled-stars"
                                                                style="width: 100%;"><span class="star"><i class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span
                                                                    class="star"><i class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span></span><input type="hidden" value="5" data-star-rating="{&quot;step&quot;:1}" readonly="readonly"
                                                                class="rating-input"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-description">
                                                <p class="x-review-comment-rendered">เว็บสวยใช้ง่าย JACKPOT แตกบ่อย โปรโมชั่นเด็ด แอดมิน บริการดี มีเกมให้เล่นเยอะ ฝากถอน เร็วมาก</p>
                                            </div>

                                        </li>
                                        <li class="-review-list-item" data-animatable="fadeInLeft">
                                            <div class="-header">


                                                <div class="-profile-wrapper -full">
                                                    <img src="./assets/images/fc5d22292336ddc45a74a42690a103a8.png" class="-profile-img" alt="ระบบ Review จากผู้ใช้งานจริง" width="100" height="100">
                                                    <div class="-right-content">
                                                        <div class="-top">
                                                            <span class="-text">สมาชิกหมายเลข : 092-379-xxxx</span>
                                                        </div>
                                                        <div class="-bottom">
                                                            <span class="-detail">IP : 2001:44c8:44fb:b26a::1</span>
                                                            <span class="-detail"><i class="far fa-clock -ic"></i> 20-07-2024 20:30 น.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="-star-rate-wrapper -small">
                                                    <div class="rating-container rating-xs rating-animate rating-disabled">
                                                        <div class="rating-stars"><span class="empty-stars"><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span></span><span class="filled-stars"
                                                                style="width: 100%;"><span class="star"><i class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span
                                                                    class="star"><i class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span></span><input type="hidden" value="5" data-star-rating="{&quot;step&quot;:1}" readonly="readonly"
                                                                class="rating-input"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-description">
                                                <p class="x-review-comment-rendered">มีเกมให้เล่นเยอะ โปรโมชั่นดี แอดมินตอบเร็ว ฝากถอนไว ภายใน 5 วินาที เว็บใช้งานง่าย โปรโมชั่นดี โปรโมชั่นเยอะ
                                                    ฝากถอนไว ภายใน 5 วินาที ไม่ต้องรอสลิปไม่ต้องเสียเวลารอนาน สุดยอดมาก แอดมินตอบเร็ว ถามปุ๊บตอบปั๊บบริการน่ารักมาก รักเลย
                                                    แอดมินตอบเร็วพร้อมบริการแบบครบวงจรจากทีมงานแอดมินเชี่ยวชาญ ช่วยเหลือนักพนันตลอดการเดิมพันเมื่อท่านเกิดปัญหา
                                                    มีเกมให้เล่นเยอะมีรูปแบบของเกมให้ท่านได้เลือกเล่นแบบไม่อั้นตลอดทั้งวัน เว็บใช้งานง่ายมีความแปลกใหม่กว่าใคร
                                                    และมีการพัฒนาระบบการเล่นให้มีความเสถียรอยู่ตลอดเวลา ลื่นไหลไม่มีสะดุดตลอดการใช้งาน โปรโมชั่นดีแจการฝากถอนกับเว็บพนัน
                                                    ปัจจัยสำคัญอย่างหนึ่งในการตัดสินใจก่อนเล่นพนันก็คือการฝากเงินและถอนเงินที่มั่นคงและน่าเชื่อถือ การบริการฝากเงินที่รวดเร็ว สะดวก&amp;amp;lt;br
                                                    /&amp;amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br>
                                                    ในการฝาก และขั้นต่ำการฝากที่เข้าถึงลูกค้า ⭐⭐⭐⭐⭐ แอดมิน บริการดี JACKPOT แตกบ่อย โปรโมชั่นเด็ด ฝากถอน เร็วมาก เว็บสวยใช้ง่าย</p>
                                            </div>

                                        </li>
                                        <li class="-review-list-item" data-animatable="fadeInLeft">
                                            <div class="-header">


                                                <div class="-profile-wrapper -full">
                                                    <img src="./assets/images/f2825a51244b28a2b7083e4c1bb0f8b0.png" class="-profile-img" alt="ระบบ Review จากผู้ใช้งานจริง" width="100" height="100">
                                                    <div class="-right-content">
                                                        <div class="-top">
                                                            <span class="-text">สมาชิกหมายเลข : 064-676-xxxx</span>
                                                        </div>
                                                        <div class="-bottom">
                                                            <span class="-detail">IP : 1.46.153.160</span>
                                                            <span class="-detail"><i class="far fa-clock -ic"></i> 20-07-2024 20:28 น.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="-star-rate-wrapper -small">
                                                    <div class="rating-container rating-xs rating-animate rating-disabled">
                                                        <div class="rating-stars"><span class="empty-stars"><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span></span><span class="filled-stars"
                                                                style="width: 100%;"><span class="star"><i class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span
                                                                    class="star"><i class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span></span><input type="hidden" value="5" data-star-rating="{&quot;step&quot;:1}" readonly="readonly"
                                                                class="rating-input"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-description">
                                                <p class="x-review-comment-rendered">ฝากถอน เร็วมาก JACKPOT แตกบ่อย เว็บสวยใช้ง่าย โปรโมชั่นเด็ด แอดมิน บริการดี</p>
                                            </div>

                                        </li>
                                        <li class="-review-list-item" data-animatable="fadeInLeft">
                                            <div class="-header">


                                                <div class="-profile-wrapper -full">
                                                    <img src="./assets/images/profile_icon_level_02.png" class="-profile-img" alt="ระบบ Review จากผู้ใช้งานจริง" width="100" height="100">
                                                    <div class="-right-content">
                                                        <div class="-top">
                                                            <span class="-text">สมาชิกหมายเลข : 093-604-xxxx</span>
                                                        </div>
                                                        <div class="-bottom">
                                                            <span class="-detail">IP : 1.46.153.160</span>
                                                            <span class="-detail"><i class="far fa-clock -ic"></i> 20-07-2024 20:28 น.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="-star-rate-wrapper -small">
                                                    <div class="rating-container rating-xs rating-animate rating-disabled">
                                                        <div class="rating-stars"><span class="empty-stars"><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span></span><span class="filled-stars"
                                                                style="width: 100%;"><span class="star"><i class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span
                                                                    class="star"><i class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span></span><input type="hidden" value="5" data-star-rating="{&quot;step&quot;:1}" readonly="readonly"
                                                                class="rating-input"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-description">
                                                <p class="x-review-comment-rendered">เว็บสวยใช้ง่าย โปรโมชั่นเด็ด แอดมิน บริการดี มีเกมให้เล่นเยอะ JACKPOT แตกบ่อย</p>
                                            </div>

                                        </li>
                                        <li class="-review-list-item" data-animatable="fadeInLeft">
                                            <div class="-header">


                                                <div class="-profile-wrapper -full">
                                                    <img src="./assets/images/fc5d22292336ddc45a74a42690a103a8.png" class="-profile-img" alt="ระบบ Review จากผู้ใช้งานจริง" width="100" height="100">
                                                    <div class="-right-content">
                                                        <div class="-top">
                                                            <span class="-text">สมาชิกหมายเลข : 064-973-xxxx</span>
                                                        </div>
                                                        <div class="-bottom">
                                                            <span class="-detail">IP : 2001:44c8:44fb:b26a::1</span>
                                                            <span class="-detail"><i class="far fa-clock -ic"></i> 20-07-2024 20:25 น.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="-star-rate-wrapper -small">
                                                    <div class="rating-container rating-xs rating-animate rating-disabled">
                                                        <div class="rating-stars"><span class="empty-stars"><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span></span><span class="filled-stars"
                                                                style="width: 100%;"><span class="star"><i class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span
                                                                    class="star"><i class="fas fa-star"></i></span><span class="star"><i class="fas fa-star"></i></span><span class="star"><i
                                                                        class="fas fa-star"></i></span></span><input type="hidden" value="5" data-star-rating="{&quot;step&quot;:1}" readonly="readonly"
                                                                class="rating-input"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-description">
                                                <p class="x-review-comment-rendered">มีเกมให้เล่นเยอะ โปรโมชั่นดี แอดมินตอบเร็ว ฝากถอนไว ภายใน 5 วินาที เว็บใช้งานง่าย โปรโมชั่นดี โปรโมชั่นเยอะ
                                                    ฝากถอนไว ภายใน 5 วินาที ไม่ต้องรอสลิปไม่ต้องเสียเวลารอนาน สุดยอดมาก แอดมินตอบเร็ว ถามปุ๊บตอบปั๊บบริการน่ารักมาก รักเลย
                                                    แอดมินตอบเร็วพร้อมบริการแบบครบวงจรจากทีมงานแอดมินเชี่ยวชาญ ช่วยเหลือนักพนันตลอดการเดิมพันเมื่อท่านเกิดปัญหา
                                                    มีเกมให้เล่นเยอะมีรูปแบบของเกมให้ท่านได้เลือกเล่นแบบไม่อั้นตลอดทั้งวัน เว็บใช้งานง่ายมีความแปลกใหม่กว่าใคร
                                                    และมีการพัฒนาระบบการเล่นให้มีความเสถียรอยู่ตลอดเวลา ลื่นไหลไม่มีสะดุดตลอดการใช้งาน โปรโมชั่นดีแจการฝากถอนกับเว็บพนัน
                                                    ปัจจัยสำคัญอย่างหนึ่งในการตัดสินใจก่อนเล่นพนันก็คือการฝากเงินและถอนเงินที่มั่นคงและน่าเชื่อถือ การบริการฝากเงินที่รวดเร็ว สะดวก&amp;amp;lt;br
                                                    /&amp;amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br>
                                                    ในการฝาก และขั้นต่ำการฝากที่เข้าถึงลูกค้า ⭐⭐⭐⭐⭐ แอดมิน บริการดี JACKPOT แตกบ่อย โปรโมชั่นเด็ด ฝากถอน เร็วมาก เว็บสวยใช้ง่าย</p>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="text-center mt-4" data-animatable="fadeInUp">
                                <a href="/reviews" class="btn -btn-view">
                                    <span class="-btn-text">ดูรีวิวทั้งหมด</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>



        <div class="x-modal modal -v2 -alert-modal animated fadeInRight" id="alertModal" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content"
            data-ajax-modal-always-reload="true" tabindex="-1" data-animatable="fadeInRight" data-delay="700" data-dismiss-alert="true">
            <div class="modal-dialog -modal-size -v2  " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body -modal-body">
                        <div class="d-flex -alert-body">
                            <div class="text-center mr-3 -alert-body-wrapper">






                                <picture>
                                    <source type="image/webp" srcset="./assets/images/ic-alert-success.webp">
                                    <source type="image/png" srcset="./assets/images/ic-alert-success.png">
                                    <img class="-img-alert js-ic-success img-fluid" alt="ทำรายการเว็บพนันออนไลน์สำเร็จ" width="40" height="40" src="./assets/images/ic-alert-success.png">
                                </picture>







                                <picture>
                                    <source type="image/webp" srcset="./assets/images/ic-alert-failed.webp">
                                    <source type="image/png" srcset="./assets/images/ic-alert-failed.png">
                                    <img class="-img-alert js-ic-fail img-fluid" alt="ทำรายการเว็บพนันออนไลน์ไม่สำเร็จ" width="40" height="40" src="./assets/images/ic-alert-failed.png">
                                </picture>
                            </div>
                            <div class="my-auto js-modal-content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 x-theme-switcher-v2" id="themeSwitcherModal" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true"
            tabindex="-1">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable modal-dialog-centered" role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body -modal-body">
































                        <div class="-theme-switcher-container">
                            <div class="-inner-header-section">
                                <a class="-link-wrapper" href="/">
                                    <picture>
                                        <source type="image/webp" data-srcset="./assets/images/logo.webp">
                                        <source type="image/png" data-srcset="./assets/images/logo.png"><img alt="logo image" class="img-fluid lazyload -logo lazyload" width="180" height="42"
                                            data-src="./assets/images/logo.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                    </picture>
                                </a>
                            </div>



                            <div class="x-cross-site-list-outer-wrapper">


                                <div class="x-crosses-site-container">





                                    <a href="#0" class="btn -btn-crosses -is-current lazyload x-bg-position-center" data-bgset="./assets/images/theme-switcher-ezcasino-bg-active.png">
                                        <img alt="รูปแบนเนอร์ EZ Casino" class="img-fluid -logo" width="93" height="25" src="./assets/images/theme-switcher-ezcasino-logo.png">

                                    </a>







                                    <a href="https://ez-slot.bet/change-web?_t=h3842m9pcapp9td9opfn7t90g9&amp;_sign=eec9d7a6544ace60b97405eeab944d10a852fc2347ef3df1a3fb0b0e1b3852faeb87a813d847035db9c354b2b4ca420faa4ea0933b53ea6c7f715c99d093c736"
                                        class="btn -btn-crosses  lazyload x-bg-position-center" target="_blank" rel="ugc nofollow" data-bgset="./assets/images/theme-switcher-ezslot-bg.png">
                                        <img alt="รูปแบนเนอร์ EZ Slot" class="img-fluid -logo" width="93" height="25" src="./assets/images/theme-switcher-ezslot-logo.png">

                                    </a>






                                    <a href="https://ezlotto.vip/change-web?_t=h3842m9pcapp9td9opfn7t90g9&amp;_sign=eec9d7a6544ace60b97405eeab944d10a852fc2347ef3df1a3fb0b0e1b3852faeb87a813d847035db9c354b2b4ca420faa4ea0933b53ea6c7f715c99d093c736"
                                        class="btn -btn-crosses  lazyload x-bg-position-center" target="_blank" rel="ugc nofollow" data-bgset="./assets/images/theme-switcher-ezlotto-bg.png">
                                        <img alt="รูปแบนเนอร์ EZ Lotto" class="img-fluid -logo" width="93" height="25" src="./assets/images/theme-switcher-ezlotto-logo.png">

                                    </a>

                                </div>

                            </div>

                            <div class="-inner-top-body-section">
                                <div class="col-6 -wrapper-box">











                                    <button type="button" class="btn -btn-item x-transaction-button-v2 -deposit -top-btn -horizontal lazyload x-bg-position-center" data-toggle="modal"
                                        data-dismiss="modal" data-target="#depositModal" data-bgset="./assets/images/btn-deposit-bg.png">
                                        <picture>
                                            <source type="image/webp" data-srcset="./assets/images/ic-account-deposit.webp">
                                            <source type="image/png" data-srcset="./assets/images/ic-account-deposit.png"><img alt="รูปไอคอนฝากเงิน" class="img-fluid -icon-image lazyload" width="50"
                                                height="50" data-src="./assets/images/ic-account-deposit.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                        </picture>

                                        <div class="-typo-wrapper">
                                            <div class="-title">ฝากเงิน</div>
                                            <div class="-sub-title">Deposit</div>
                                        </div>

                                    </button>

                                </div>
                                <div class="col-6 -wrapper-box">











                                    <button type="button" class="btn -btn-item x-transaction-button-v2 -withdraw -top-btn -horizontal lazyload x-bg-position-center" data-toggle="modal"
                                        data-dismiss="modal" data-target="#withdrawModal" data-bgset="./assets/images/btn-withdraw-bg.png">
                                        <picture>
                                            <source type="image/webp" data-srcset="./assets/images/ic-account-withdraw.webp">
                                            <source type="image/png" data-srcset="./assets/images/ic-account-withdraw.png"><img alt="รูปไอคอนถอนเงิน" class="img-fluid -icon-image lazyload" width="50"
                                                height="50" data-src="./assets/images/ic-account-withdraw.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                        </picture>

                                        <div class="-typo-wrapper">
                                            <div class="-title">ถอนเงิน</div>
                                            <div class="-sub-title">Withdraw</div>
                                        </div>

                                    </button>

                                </div>
                            </div>

                            <div class="-inner-center-body-section">
                                <div class="col-6 -wrapper-box">











                                    <a href="/event" class="btn -btn-item -event-button -menu-center -horizontal lazyload x-bg-position-center"
                                        data-bgset="./assets/images/theme-switcher-middle-btn-bg.png">
                                        <picture>
                                            <source type="image/webp" data-srcset="./assets/images/ic-modal-menu-event.webp">
                                            <source type="image/png" data-srcset="./assets/images/ic-modal-menu-event.png"><img alt="รูปไอคอนสิทธิพิเศษ" class="img-fluid -icon-image lazyload"
                                                width="65" height="53" data-src="./assets/images/ic-modal-menu-event.png"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                        </picture>

                                        <div class="-typo-wrapper">
                                            <div class="-typo -is-logged">สิทธิพิเศษ</div>
                                        </div>

                                    </a>

                                </div>
                                <div class="col-6 -wrapper-box">











                                    <a href="/promotions" class="btn -btn-item -promotion-button -menu-center -horizontal lazyload x-bg-position-center"
                                        data-bgset="./assets/images/theme-switcher-middle-btn-bg.png">
                                        <picture>
                                            <source type="image/webp" data-srcset="./assets/images/ic-modal-menu-promotion.webp">
                                            <source type="image/png" data-srcset="./assets/images/ic-modal-menu-promotion.png"><img alt="รูปไอคอนโปรโมชั่น" class="img-fluid -icon-image lazyload"
                                                width="65" height="53" data-src="./assets/images/ic-modal-menu-promotion.png"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                        </picture>

                                        <div class="-typo-wrapper">
                                            <div class="-typo -is-logged">โปรโมชั่น</div>
                                        </div>

                                    </a>

                                </div>
                                <div class="col-6 -wrapper-box">











                                    <a href="https://ezmovie.co/" class="btn -btn-item -movie-button -menu-center -horizontal lazyload x-bg-position-center" target="_blank" rel="noopener nofollow"
                                        data-bgset="./assets/images/theme-switcher-middle-btn-bg.png">
                                        <picture>
                                            <source type="image/webp" data-srcset="./assets/images/ic-modal-menu-movie.webp">
                                            <source type="image/png" data-srcset="./assets/images/ic-modal-menu-movie.png"><img alt="รูปไอคอนดูหนัง" class="img-fluid -icon-image lazyload" width="65"
                                                height="53" data-src="./assets/images/ic-modal-menu-movie.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                        </picture>

                                        <div class="-typo-wrapper">
                                            <div class="-typo -is-logged">ดูหนัง</div>
                                        </div>

                                    </a>

                                </div>
                                <div class="col-6 -wrapper-box">











                                    <a href="https://lin.ee/ZpHnqdt" class="btn -btn-item -line-button -menu-center -horizontal lazyload x-bg-position-center" target="_blank" rel="noopener nofollow"
                                        data-bgset="./assets/images/theme-switcher-middle-btn-bg.png">
                                        <picture>
                                            <source type="image/webp" data-srcset="./assets/images/ic-modal-menu-line.webp">
                                            <source type="image/png" data-srcset="./assets/images/ic-modal-menu-line.png"><img alt="รูปไอคอนดูหนัง" class="img-fluid -icon-image lazyload" width="65"
                                                height="53" data-src="./assets/images/ic-modal-menu-line.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                        </picture>

                                        <div class="-typo-wrapper">
                                            <div class="-typo -is-logged">ไลน์</div>
                                        </div>

                                    </a>

                                </div>
                            </div>

                            <div class="-inner-bottom-body-section">
                                <div class="col-12 -wrapper-box">












                                    <a href="#share1theme-switcher" class="btn -btn-item -social-share-button -menu-banner  " data-ajax-modal-ondemand-user="social-share-modal-1" data-force="true"
                                        data-x-dismiss="true" data-parent-class-selector="x-social-share-main-modal -v2" data-url="/account/_ajax_/social-share-submit/1/create">
                                        <picture>
                                            <source type="image/webp" data-srcset="./assets/images/menu-banner-social-share.webp">
                                            <source type="image/png" data-srcset="./assets/images/menu-banner-social-share.png"><img alt="รูปแบนเนอร์แชร์แลกทรัพย์"
                                                class="img-fluid -banner-image lazyload" width="342" height="98" data-src="./assets/images/menu-banner-social-share.png"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                        </picture>


                                    </a>

                                </div>
                                <div class="col-12 -wrapper-box">











                                    <a href="#0" class="btn -btn-item -bookmark-button -menu-banner  js-add-to-home-screen">
                                        <picture>
                                            <source type="image/webp" data-srcset="./assets/images/menu-banner-bookmark.webp">
                                            <source type="image/png" data-srcset="./assets/images/menu-banner-bookmark.png"><img alt="รูปแบนเนอร์ bookmark" class="img-fluid -banner-image lazyload"
                                                width="342" height="98" data-src="./assets/images/menu-banner-bookmark.png"
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                        </picture>


                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 " id="bookmarkModal" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true" tabindex="-1">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable         -no-fixed-button
    " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-header -modal-header">
                        <h3 class="x-title-modal d-inline-block m-auto">
                            <span>Bookmark</span>
                        </h3>
                    </div>
                    <div class="modal-body -modal-body">

                        <div class="x-bookmark-modal-container">
                            <nav>
                                <div class="nav nav-tabs x-bookmark-tabs-header-wrapper" id="nav-tab" role="tablist">
                                    <a class="nav-link " id="nav-android-tab" data-toggle="tab" href="#nav-android" role="tab" aria-controls="nav-android" aria-selected="true">Android</a>
                                    <a class="nav-link active" id="nav-ios-tab" data-toggle="tab" href="#nav-ios" role="tab" aria-controls="nav-ios" aria-selected="true">iOS</a>
                                </div>
                            </nav>

                            <div class="tab-content x-bookmark-tabs-content-wrapper" id="nav-tabContent">


                                <div class="tab-pane fade " id="nav-android" role="tabpanel" aria-labelledby="nav-android-tab">
                                    <div class="-slide-wrapper -bookmark-slider-for-android slick-initialized slick-slider slick-dotted"
                                        data-slickable="{&quot;arrows&quot;:false,&quot;dots&quot;:true,&quot;slidesToShow&quot;:1,&quot;fade&quot;:true,&quot;infinite&quot;:true,&quot;autoplay&quot;:false,&quot;asNavFor&quot;:&quot;.-bookmark-slider-nav-android&quot;}">
                                        <div class="slick-list draggable">
                                            <div class="slick-track" style="opacity: 1; width: 0px;">
                                                <div class="-slide-inner-wrapper slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" role="tabpanel" id="slick-slide10">






                                                    <picture>
                                                        <source type="image/webp" data-srcset="./assets/images/bookmark-android-1.webp">
                                                        <source type="image/png" data-srcset="./assets/images/bookmark-android-1.png">
                                                        <img class="-img lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="253" height="513"
                                                            data-src="./assets/images/bookmark-android-1.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                    </picture>
                                                </div>
                                                <div class="-slide-inner-wrapper slick-slide" data-slick-index="1" aria-hidden="true"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="tabpanel" id="slick-slide11">






                                                    <picture>
                                                        <source type="image/webp" data-srcset="./assets/images/bookmark-android-2.webp">
                                                        <source type="image/png" data-srcset="./assets/images/bookmark-android-2.png">
                                                        <img class="-img lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="253" height="513"
                                                            data-src="./assets/images/bookmark-android-2.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                    </picture>
                                                </div>
                                                <div class="-slide-inner-wrapper slick-slide" data-slick-index="2" aria-hidden="true"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="tabpanel" id="slick-slide12">






                                                    <picture>
                                                        <source type="image/webp" data-srcset="./assets/images/bookmark-android-3.webp">
                                                        <source type="image/png" data-srcset="./assets/images/bookmark-android-3.png">
                                                        <img class="-img lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="253" height="513"
                                                            data-src="./assets/images/bookmark-android-3.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>


                                        <ul class="slick-dots" style="" role="tablist">
                                            <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 3"
                                                    tabindex="0" aria-selected="true">1</button></li>
                                            <li role="presentation"><button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide11" aria-label="2 of 3"
                                                    tabindex="-1">2</button></li>
                                            <li role="presentation"><button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide12" aria-label="3 of 3"
                                                    tabindex="-1">3</button></li>
                                        </ul>
                                    </div>

                                    <div class="-slide-wrapper -bookmark-slider-nav-android slick-initialized slick-slider"
                                        data-slickable="{&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;slidesToShow&quot;:1,&quot;fade&quot;:true,&quot;infinite&quot;:true,&quot;autoplay&quot;:false,&quot;asNavFor&quot;:&quot;.-bookmark-slider-for-android&quot;}">
                                        <div class="slick-list draggable">
                                            <div class="slick-track" style="opacity: 1; width: 0px;">
                                                <div class="-slide-inner-wrapper slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                                    <div class="-content-wrapper -center">






                                                        <picture>
                                                            <source type="image/webp" data-srcset="./assets/images/bookmark-slide-number-1.webp">
                                                            <source type="image/png" data-srcset="./assets/images/bookmark-slide-number-1.png">
                                                            <img class="-icon lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="60" height="60"
                                                                data-src="./assets/images/bookmark-slide-number-1.png"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </picture>
                                                        <div class="-description">เข้า Google Chrome แล้ว Search <br> “EZ Casino” เข้าสู่หน้าเว็บ</div>
                                                    </div>
                                                </div>
                                                <div class="-slide-inner-wrapper slick-slide" data-slick-index="1" aria-hidden="true"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
                                                    <div class="-content-wrapper -center">






                                                        <picture>
                                                            <source type="image/webp" data-srcset="./assets/images/bookmark-slide-number-2.webp">
                                                            <source type="image/png" data-srcset="./assets/images/bookmark-slide-number-2.png">
                                                            <img class="-icon lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="60" height="60"
                                                                data-src="./assets/images/bookmark-slide-number-2.png"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </picture>
                                                        <div class="-description">เลือก “ติดตั้ง”</div>
                                                    </div>
                                                </div>
                                                <div class="-slide-inner-wrapper slick-slide" data-slick-index="2" aria-hidden="true"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
                                                    <div class="-content-wrapper -center">






                                                        <picture>
                                                            <source type="image/webp" data-srcset="./assets/images/bookmark-slide-number-3.webp">
                                                            <source type="image/png" data-srcset="./assets/images/bookmark-slide-number-3.png">
                                                            <img class="-icon lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="60" height="60"
                                                                data-src="./assets/images/bookmark-slide-number-3.png"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </picture>
                                                        <div class="-description">ตรวจสอบหน้า <br> โฮมสกรีนว่ามีไอคอนขึ้นแล้ว</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <div class="tab-pane fade show active" id="nav-ios" role="tabpanel" aria-labelledby="nav-ios-tab">
                                    <div class="-slide-wrapper -bookmark-slider-for-ios slick-initialized slick-slider slick-dotted"
                                        data-slickable="{&quot;arrows&quot;:false,&quot;dots&quot;:true,&quot;slidesToShow&quot;:1,&quot;fade&quot;:true,&quot;infinite&quot;:true,&quot;autoplay&quot;:false,&quot;asNavFor&quot;:&quot;.-bookmark-slider-nav-ios&quot;}">
                                        <div class="slick-list draggable">
                                            <div class="slick-track" style="opacity: 1; width: 0px;">
                                                <div class="-slide-inner-wrapper slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" role="tabpanel" id="slick-slide30">






                                                    <picture>
                                                        <source type="image/webp" data-srcset="./assets/images/bookmark-ios-1.webp">
                                                        <source type="image/png" data-srcset="./assets/images/bookmark-ios-1.png">
                                                        <img class="-img lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="253" height="513"
                                                            data-src="./assets/images/bookmark-ios-1.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                    </picture>
                                                </div>
                                                <div class="-slide-inner-wrapper slick-slide" data-slick-index="1" aria-hidden="true"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="tabpanel" id="slick-slide31">






                                                    <picture>
                                                        <source type="image/webp" data-srcset="./assets/images/bookmark-ios-2.webp">
                                                        <source type="image/png" data-srcset="./assets/images/bookmark-ios-2.png">
                                                        <img class="-img lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="253" height="513"
                                                            data-src="./assets/images/bookmark-ios-2.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                    </picture>
                                                </div>
                                                <div class="-slide-inner-wrapper slick-slide" data-slick-index="2" aria-hidden="true"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="tabpanel" id="slick-slide32">






                                                    <picture>
                                                        <source type="image/webp" data-srcset="./assets/images/bookmark-ios-3.webp">
                                                        <source type="image/png" data-srcset="./assets/images/bookmark-ios-3.png">
                                                        <img class="-img lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="253" height="513"
                                                            data-src="./assets/images/bookmark-ios-3.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                    </picture>
                                                </div>
                                                <div class="-slide-inner-wrapper slick-slide" data-slick-index="3" aria-hidden="true"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="tabpanel" id="slick-slide33">






                                                    <picture>
                                                        <source type="image/webp" data-srcset="./assets/images/bookmark-ios-4.webp">
                                                        <source type="image/png" data-srcset="./assets/images/bookmark-ios-4.png">
                                                        <img class="-img lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="253" height="513"
                                                            data-src="./assets/images/bookmark-ios-4.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>



                                        <ul class="slick-dots" style="" role="tablist">
                                            <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control30" aria-controls="slick-slide30" aria-label="1 of 4"
                                                    tabindex="0" aria-selected="true">1</button></li>
                                            <li role="presentation"><button type="button" role="tab" id="slick-slide-control31" aria-controls="slick-slide31" aria-label="2 of 4"
                                                    tabindex="-1">2</button></li>
                                            <li role="presentation"><button type="button" role="tab" id="slick-slide-control32" aria-controls="slick-slide32" aria-label="3 of 4"
                                                    tabindex="-1">3</button></li>
                                            <li role="presentation"><button type="button" role="tab" id="slick-slide-control33" aria-controls="slick-slide33" aria-label="4 of 4"
                                                    tabindex="-1">4</button></li>
                                        </ul>
                                    </div>

                                    <div class="-slide-wrapper -bookmark-slider-nav-ios slick-initialized slick-slider"
                                        data-slickable="{&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;slidesToShow&quot;:1,&quot;fade&quot;:true,&quot;infinite&quot;:true,&quot;autoplay&quot;:false,&quot;asNavFor&quot;:&quot;.-bookmark-slider-for-ios&quot;}">
                                        <div class="slick-list draggable">
                                            <div class="slick-track" style="opacity: 1; width: 0px;">
                                                <div class="-slide-inner-wrapper slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                                    <div class="-content-wrapper -center">






                                                        <picture>
                                                            <source type="image/webp" data-srcset="./assets/images/bookmark-slide-number-1.webp">
                                                            <source type="image/png" data-srcset="./assets/images/bookmark-slide-number-1.png">
                                                            <img class="-icon lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="60" height="60"
                                                                data-src="./assets/images/bookmark-slide-number-1.png"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </picture>
                                                        <div class="-description">เข้า Safari แล้ว Search “EZ Casino” <br> เข้าสู่หน้าเว็บ กดที่</div>
                                                    </div>
                                                </div>
                                                <div class="-slide-inner-wrapper slick-slide" data-slick-index="1" aria-hidden="true"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
                                                    <div class="-content-wrapper -center">






                                                        <picture>
                                                            <source type="image/webp" data-srcset="./assets/images/bookmark-slide-number-2.webp">
                                                            <source type="image/png" data-srcset="./assets/images/bookmark-slide-number-2.png">
                                                            <img class="-icon lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="60" height="60"
                                                                data-src="./assets/images/bookmark-slide-number-2.png"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </picture>
                                                        <div class="-description">เลือก “เพิ่มลงใปยังหน้าจอโฮม”</div>
                                                    </div>
                                                </div>
                                                <div class="-slide-inner-wrapper slick-slide" data-slick-index="2" aria-hidden="true"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
                                                    <div class="-content-wrapper -center">






                                                        <picture>
                                                            <source type="image/webp" data-srcset="./assets/images/bookmark-slide-number-3.webp">
                                                            <source type="image/png" data-srcset="./assets/images/bookmark-slide-number-3.png">
                                                            <img class="-icon lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="60" height="60"
                                                                data-src="./assets/images/bookmark-slide-number-3.png"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </picture>
                                                        <div class="-description">กด “เพิ่ม”ทางลัดเข้าสู่เกมส์ <br> ลงในหน้าจอโฮม</div>
                                                    </div>
                                                </div>
                                                <div class="-slide-inner-wrapper slick-slide" data-slick-index="3" aria-hidden="true"
                                                    style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
                                                    <div class="-content-wrapper -center">






                                                        <picture>
                                                            <source type="image/webp" data-srcset="./assets/images/bookmark-slide-number-4.webp">
                                                            <source type="image/png" data-srcset="./assets/images/bookmark-slide-number-4.png">
                                                            <img class="-icon lazyload" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย" width="60" height="60"
                                                                data-src="./assets/images/bookmark-slide-number-4.png"
                                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                                        </picture>
                                                        <div class="-description">ตรวจสอบหน้า <br> โฮมสกรีนว่ามีไอคอนขึ้นแล้ว</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            Bonn.boots.push(function () {
                                const $bookmarkModal = $('#bookmarkModal')
                                if (!$bookmarkModal.length) {
                                    return
                                }

                                const $slideWrapper = $bookmarkModal.find('.-slide-wrapper');
                                const slickSetPosition = () => $slideWrapper.slick('setPosition')

                                // WATCHING ON MODAL WAS OPENED
                                $bookmarkModal.on('shown.bs.modal', function (e) {
                                    slickSetPosition()
                                })

                                // WATCHING ON TAB WAS TOGGLED
                                $bookmarkModal.find('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                                    slickSetPosition()
                                });
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 -modal-full-page" id="websiteMenuModal" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true"
            tabindex="-1">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-header -modal-header">
                        <h3 class="x-title-modal d-inline-block m-auto">
                            <span></span>
                        </h3>
                    </div>
                    <div class="modal-body -modal-body">
                        <div class="x-website-menu-modal-body">
                            <a href="/" class="nav-link -btn-logo">
                                <img alt="บาคาร่าออนไลน์ สล็อตออนไลน์ อันดับหนึ่งในประเทศไทย" class="img-fluid lazyload -img" width="400" height="150" data-src="./assets/images/logo.png"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                            </a>



                            <ul class="nav x-website-menu-entry-list -as-vertical">




                                <li class="nav-item -nav-item">
                                    <a class="nav-link -nav-link" href="/reviews">

                                        <img alt="บาคาร่าออนไลน์ สล็อตออนไลน์ อันดับหนึ่งในประเทศไทย" class="img-fluid lazyload -img" width="50" height="50"
                                            data-src="./assets/images/ic-website-menu-review.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">

                                        <span class="-text">รีวิว</span>

                                    </a>
                                </li>




                                <li class="nav-item -nav-item">
                                    <a class="nav-link -nav-link" href="https://ezmovie.co" target="_blank" rel="noopener nofollow">

                                        <img alt="บาคาร่าออนไลน์ สล็อตออนไลน์ อันดับหนึ่งในประเทศไทย" class="img-fluid lazyload -img" width="50" height="50"
                                            data-src="./assets/images/ic-website-menu-movie.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">

                                        <span class="-text">ดูหนัง</span>

                                    </a>
                                </li>




                                <li class="nav-item -nav-item">
                                    <a class="nav-link -nav-link" href="/promotions">

                                        <img alt="บาคาร่าออนไลน์ สล็อตออนไลน์ อันดับหนึ่งในประเทศไทย" class="img-fluid lazyload -img" width="50" height="50"
                                            data-src="./assets/images/ic-website-menu-promotion.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">

                                        <span class="-text">โปรโมชั่น</span>

                                    </a>
                                </li>




                                <li class="nav-item -nav-item">
                                    <a class="nav-link -nav-link" href="/event">

                                        <img alt="บาคาร่าออนไลน์ สล็อตออนไลน์ อันดับหนึ่งในประเทศไทย" class="img-fluid lazyload -img" width="50" height="50"
                                            data-src="./assets/images/ic-website-menu-event.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">

                                        <span class="-text">สิทธิพิเศษ</span>

                                    </a>
                                </li>




                                <li class="nav-item -nav-item">
                                    <a class="nav-link -nav-link" href="/blogs">

                                        <img alt="บาคาร่าออนไลน์ สล็อตออนไลน์ อันดับหนึ่งในประเทศไทย" class="img-fluid lazyload -img" width="50" height="50"
                                            data-src="./assets/images/ic-website-menu-blog.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">

                                        <span class="-text">บทความ</span>

                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>






        <div class="x-wrapper-right-container ">






            <div class="x-notification-entrance-container js-notification-entry" data-reload-badge-url="/_ajax_/inbox-user/badge-info">
                <a href="#notificationCenter" class="-link-wrapper -shake" data-toggle="modal" data-target="#notificationCenterModal">
                    <div class="-img-wrapper">
                        <img alt="Notification bell image png" class="-img" width="40" height="40" src="./assets/images/notification-ic-bell.png">
                    </div>

                    <div class="x-notification-badge-container">
                        <span class="-text">1</span>
                    </div>
                </a>
            </div>





            <a href="javascript:void(0)" class="-menu-link" data-toggle="modal" data-target="#integrateUserOriginManualModal">
            </a>


        </div>





        <div class="x-modal modal -v2 " id="accountModal" role="dialog" aria-hidden="true" data-loading-container=".modal-body" data-ajax-modal-always-reload="true" tabindex="-1"
            data-ajax-modal="/account/_ajax_/customer-info" data-container="#accountModal">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable -modal-big" role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body -modal-body">
                        <div class="js-modal-content"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 -with-more-than-half-size" id="accountModalMobile" role="dialog" aria-hidden="true" data-loading-container=".modal-body" data-ajax-modal-always-reload="true"
            tabindex="-1" data-ajax-modal="/account/_ajax_/customer-info?isMobileView=1" data-container="#accountModalMobile">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body -modal-body">
                        <div class="js-modal-content"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 -with-more-than-half-size" id="providerUserModalMobile" role="dialog" aria-hidden="true" data-loading-container=".modal-body" data-ajax-modal-always-reload="true"
            tabindex="-1" data-ajax-modal="/account/_ajax_/provider-user-info?isMobileView=1" data-container="#providerUserModalMobile">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body -modal-body">
                        <div class="js-modal-content"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 -with-more-than-half-size" id="couponModalMobile" role="dialog" aria-hidden="true" data-loading-container=".modal-body" data-ajax-modal-always-reload="true"
            tabindex="-1" data-ajax-modal="/account/_ajax_/coupon-apply?isMobileView=1" data-container="#couponModalMobile">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body -modal-body">
                        <div class="js-modal-content"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 -with-more-than-half-size" id="joinPromotionModalMobile" role="dialog" aria-hidden="true" data-loading-container=".modal-body"
            data-ajax-modal-always-reload="true" tabindex="-1" data-ajax-modal="/account/_ajax_/promotion?isMobileView=1" data-container="#joinPromotionModalMobile">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body -modal-body">
                        <div class="js-modal-content"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 -with-backdrop -with-separator -with-half-size" id="depositModal" role="dialog" aria-hidden="true" data-loading-container=".modal-body"
            data-ajax-modal-always-reload="true" tabindex="-1" data-ajax-modal="/account/_ajax_/deposit" data-container="#depositModal">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-header -modal-header">
                        <h3 class="x-title-modal d-inline-block m-auto">
                            <span></span>
                        </h3>
                    </div>
                    <div class="modal-body -modal-body">
                        <div class="js-modal-content"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 -with-more-than-half-size" id="withdrawModal" role="dialog" aria-hidden="true" data-loading-container=".modal-body" data-ajax-modal-always-reload="true"
            tabindex="-1" data-ajax-modal="/account/_ajax_/withdraw" data-container="#withdrawModal">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-header -modal-header">
                        <h3 class="x-title-modal d-inline-block m-auto">
                            <span></span>
                        </h3>
                    </div>
                    <div class="modal-body -modal-body">
                        <div class="js-modal-content"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 -with-half-size x-withdraw-select-option" id="withdrawSelectOptionModal" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content"
            data-ajax-modal-always-reload="true" tabindex="-1">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-header -modal-header">
                        <h3 class="x-title-modal m-auto">

                            <div class="-title">ถอนเงิน</div>
                            <div class="-sub-title">ขอแนะนำ PocketFarm รับเพิ่มมากถึง <span class="-highlight">10%</span></div>
                        </h3>
                    </div>
                    <div class="modal-body -modal-body">
                        <div class="x-withdraw-select-option-body">
                            <ul class="nav -menu-wrapper">



                                <li class="nav-item">
                                    <button data-target="#accountModal" data-toggle="modal" data-dismiss="modal" class="-option-button" data-to-ajax-account-modal="/account/_ajax_/pocket-farm">
                                        <div class="-img-wrapper">
                                            <img alt="คาสิโนออนไลน์ สล็อตออนไลน์ บาคาร่าออนไลน์ อันดับ 1" class="img-fluid lazyload -img" width="40" height="40"
                                                data-src="./assets/images/ic-withdraw-option-pocket-farm.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                        </div>
                                        <div class="-text">ฝากกับ PocketFarm<br>รับเพิ่มมากถึง 10%</div>
                                    </button>
                                </li>


                                <li class="nav-item">
                                    <button data-target="#withdrawModal" data-toggle="modal" data-dismiss="modal" class="-option-button">
                                        <div class="-img-wrapper">
                                            <img alt="คาสิโนออนไลน์ สล็อตออนไลน์ บาคาร่าออนไลน์ อันดับ 1" class="img-fluid lazyload -img" width="40" height="40"
                                                data-src="./assets/images/ic-withdraw-option-withdraw.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                                        </div>
                                        <div class="-text">ถอนเงินจากบัญชี</div>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 " id="depositChoosePromotionModal" role="dialog" aria-hidden="true" data-loading-container=".modal-body" data-ajax-modal-always-reload="true" tabindex="-1"
            data-ajax-modal="/account/_ajax_/promotions/in-deposit" data-container="#depositChoosePromotionModal">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-header -modal-header">
                        <h3 class="x-title-modal d-inline-block m-auto">
                            <span></span>
                        </h3>
                    </div>
                    <div class="modal-body -modal-body">
                        <div class="js-modal-content"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 -with-more-than-half-size" id="promotionReturnByUserModalMobile" role="dialog" aria-hidden="true" data-loading-container=".modal-body"
            data-ajax-modal-always-reload="true" tabindex="-1" data-ajax-modal="/account/_ajax_/promotion-return?isMobileView=1" data-container="#promotionReturnByUserModalMobile">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable -modal-small" role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-header -modal-header">
                        <h3 class="x-title-modal d-inline-block m-auto">
                            รับโบนัสเพิ่ม ทุกสัปดาห์
                        </h3>
                    </div>
                    <div class="modal-body -modal-body">
                        <div class="js-modal-content"></div>
                    </div>
                </div>
            </div>
        </div>




        <div class="x-modal modal -v2 -alert-reset-passcode-modal -with-half-size" id="alertResetPasscodeModal" role="dialog" aria-hidden="true" data-loading-container=".modal-body"
            data-ajax-modal-always-reload="true" tabindex="-1" data-container="#alertResetPasscodeModal">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content -modal-content">
                    <div class="modal-header -modal-header">
                    </div>
                    <div class="modal-body -modal-body">


                        <div class="x-register-tab-container js-tab-pane-checker-v3">
                            <div class="container">

                                <ul class="nav nav-tabs x-register-tab">
                                    <li class="nav-item   -confirmRequestTab" id="tab-confirmRequestTab">
                                        <a data-toggle="tab" href="#tab-content-logged-confirmRequestTab" class="nav-link">
                                            confirmRequestTab
                                        </a>
                                    </li>
                                    <li class="nav-item   -resetPasswordVerifyOtp" id="tab-resetPasswordVerifyOtp">
                                        <a data-toggle="tab" href="#tab-content-logged-resetPasswordVerifyOtp" class="nav-link">
                                            resetPasswordVerifyOtp
                                        </a>
                                    </li>
                                    <li class="nav-item   -resetPasswordSetPassword" id="tab-resetPasswordSetPassword">
                                        <a data-toggle="tab" href="#tab-content-logged-resetPasswordSetPassword" class="nav-link">
                                            resetPasswordSetPassword
                                        </a>
                                    </li>
                                    <li class="nav-item   -resetPasswordResult" id="tab-resetPasswordResult">
                                        <a data-toggle="tab" href="#tab-content-logged-resetPasswordResult" class="nav-link">
                                            resetPasswordResult
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="x-alert-reset-passcode-tabs x-modal-body-base -v3">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="tab-content-logged-confirmRequestTab" data-completed-dismiss-modal="">

                                        <div class="x-tab-confirm-request">
                                            <div class="x-title-register-modal-v3 ">
                                                <span class="-title">ประกาศ</span>
                                            </div>

                                            <p class="mt-3 -description">เนื่องจากมีการเปลี่ยนรูปแบบการใช้งาน <br> ลูกค้ากรุณาตั้งรหัสผ่านใหม่เป็นเลข 6 หลัก <br> เพื่อเข้าสู่ระบบ</p>

                                            <img alt="Reset passcode init" class="-ic img-fluid mb-3" width="130" height="136" src="./assets/images/ic-reset-passcode.png">



                                            <div class="x-reset-pw-text-container ">
                                                <form method="post" data-register-v3-form="/_ajax_/v3/reset-password/request-otp" data-register-step="resetPasswordPhoneNumber"
                                                    data-tab-next-step="#tab-content-logged-resetPasswordVerifyOtp">
                                                    <input type="hidden" required="" id="phone_number[phoneNumber]" name="phone_number[phoneNumber]" pattern=".{10,11}" value="0929651369"
                                                        placeholder="095-123-4567">
                                                    <button type="submit" class="btn -submit -btn-confirm btn-primary my-lg-3 mt-0 js-btn-confirm">
                                                        <i class="-ic fa fa-spinner fa-spin"></i>
                                                        <span class="-message">เปลี่ยนรหัสผ่าน</span>
                                                    </button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="tab-content-logged-resetPasswordVerifyOtp" data-completed-dismiss-modal="">
                                        <div class="x-modal-body-base -v3 x-form-register-v3">
                                            <div class="row -register-container-wrapper">
                                                <div class="col">
                                                    <div class="x-title-register-modal-v3 ">
                                                        <span class="-title">กรอกรหัส OTP</span>
                                                        <span class="-sub-title">รหัส 4 หลัก ส่งไปยัง <span class="js-phone-number -highlight"></span></span>
                                                    </div>
                                                </div>

                                                <div data-animatable="fadeInRegister" data-offset="0" class="col animated fadeInRegister">
                                                    <div class="x-modal-separator-container x-form-register">
                                                        <div class="-top ">

                                                            <div data-animatable="fadeInRegister" data-offset="0" class="-animatable-container -otp-body animated fadeInRegister">
                                                                <form method="post" data-register-v3-form="/_ajax_/v3/reset-password/verify-otp/_resetPasswordToken"
                                                                    data-register-step="resetPasswordVerifyOtp" data-tab-next-step="#tab-content-logged-resetPasswordSetPassword"
                                                                    name="js-reset-password-v3-otp-form">
                                                                    <div class="d-flex -otp-input-container js-register-v3-input-group">

                                                                        <div class="js-separator-container js-login-reset-password-otp-container">
                                                                            <input type="text" id="resetPasswordOtp0" name="otp0" inputmode="text" readonly="" pattern="[0-9]*" autofocus="1"
                                                                                class="-digit-otp js-otp-input" data-separator-input="true" data-type="otp">
                                                                        </div>


                                                                        <div class="js-separator-container js-login-reset-password-otp-container">
                                                                            <input type="text" id="resetPasswordOtp1" name="otp1" inputmode="text" readonly="" pattern="[0-9]*" autofocus="1"
                                                                                class="-digit-otp js-otp-input" data-separator-input="true" data-type="otp">
                                                                        </div>


                                                                        <div class="js-separator-container js-login-reset-password-otp-container">
                                                                            <input type="text" id="resetPasswordOtp2" name="otp2" inputmode="text" readonly="" pattern="[0-9]*" autofocus="1"
                                                                                class="-digit-otp js-otp-input" data-separator-input="true" data-type="otp">
                                                                        </div>


                                                                        <div class="js-separator-container js-login-reset-password-otp-container">
                                                                            <input type="text" id="resetPasswordOtp3" name="otp3" inputmode="text" readonly="" pattern="[0-9]*" autofocus="1"
                                                                                class="-digit-otp js-otp-input" data-separator-input="true" data-type="otp">
                                                                        </div>

                                                                    </div>
                                                                    <input type="hidden" id="resetPasswordOtp" name="otp" pattern="[0-9]*" class="form-control mb-3">
                                                                    <input type="hidden" id="resetPasswordToken" name="resetPasswordToken" class="form-control mb-3">

                                                                    <div class="d-none js-keypad-number-wrapper">


                                                                        <div class="x-keypad-number-container">
                                                                            <div class="-btn-group-wrapper">

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="1" data-target="#resetPasswordOtp0"
                                                                                    data-options="{&quot;maxLength&quot;:4,&quot;inputContainer&quot;:&quot;.js-separator-container.js-login-reset-password-otp-container&quot;,&quot;targetSubmitForm&quot;:&quot;js-reset-password-v3-otp-form&quot;}">
                                                                                    1
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="2" data-target="#resetPasswordOtp0"
                                                                                    data-options="{&quot;maxLength&quot;:4,&quot;inputContainer&quot;:&quot;.js-separator-container.js-login-reset-password-otp-container&quot;,&quot;targetSubmitForm&quot;:&quot;js-reset-password-v3-otp-form&quot;}">
                                                                                    2
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="3" data-target="#resetPasswordOtp0"
                                                                                    data-options="{&quot;maxLength&quot;:4,&quot;inputContainer&quot;:&quot;.js-separator-container.js-login-reset-password-otp-container&quot;,&quot;targetSubmitForm&quot;:&quot;js-reset-password-v3-otp-form&quot;}">
                                                                                    3
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="4" data-target="#resetPasswordOtp0"
                                                                                    data-options="{&quot;maxLength&quot;:4,&quot;inputContainer&quot;:&quot;.js-separator-container.js-login-reset-password-otp-container&quot;,&quot;targetSubmitForm&quot;:&quot;js-reset-password-v3-otp-form&quot;}">
                                                                                    4
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="5" data-target="#resetPasswordOtp0"
                                                                                    data-options="{&quot;maxLength&quot;:4,&quot;inputContainer&quot;:&quot;.js-separator-container.js-login-reset-password-otp-container&quot;,&quot;targetSubmitForm&quot;:&quot;js-reset-password-v3-otp-form&quot;}">
                                                                                    5
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="6" data-target="#resetPasswordOtp0"
                                                                                    data-options="{&quot;maxLength&quot;:4,&quot;inputContainer&quot;:&quot;.js-separator-container.js-login-reset-password-otp-container&quot;,&quot;targetSubmitForm&quot;:&quot;js-reset-password-v3-otp-form&quot;}">
                                                                                    6
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="7" data-target="#resetPasswordOtp0"
                                                                                    data-options="{&quot;maxLength&quot;:4,&quot;inputContainer&quot;:&quot;.js-separator-container.js-login-reset-password-otp-container&quot;,&quot;targetSubmitForm&quot;:&quot;js-reset-password-v3-otp-form&quot;}">
                                                                                    7
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="8" data-target="#resetPasswordOtp0"
                                                                                    data-options="{&quot;maxLength&quot;:4,&quot;inputContainer&quot;:&quot;.js-separator-container.js-login-reset-password-otp-container&quot;,&quot;targetSubmitForm&quot;:&quot;js-reset-password-v3-otp-form&quot;}">
                                                                                    8
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="9" data-target="#resetPasswordOtp0"
                                                                                    data-options="{&quot;maxLength&quot;:4,&quot;inputContainer&quot;:&quot;.js-separator-container.js-login-reset-password-otp-container&quot;,&quot;targetSubmitForm&quot;:&quot;js-reset-password-v3-otp-form&quot;}">
                                                                                    9
                                                                                </button>

                                                                                <div class="btn -btn js-keypad-btn -btn-none" type="button" data-key="none" data-target="#resetPasswordOtp0"
                                                                                    data-options="{&quot;maxLength&quot;:4,&quot;inputContainer&quot;:&quot;.js-separator-container.js-login-reset-password-otp-container&quot;,&quot;targetSubmitForm&quot;:&quot;js-reset-password-v3-otp-form&quot;}">
                                                                                </div>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="0" data-target="#resetPasswordOtp0"
                                                                                    data-options="{&quot;maxLength&quot;:4,&quot;inputContainer&quot;:&quot;.js-separator-container.js-login-reset-password-otp-container&quot;,&quot;targetSubmitForm&quot;:&quot;js-reset-password-v3-otp-form&quot;}">
                                                                                    0
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-backspace" type="button" data-key="backspace"
                                                                                    data-target="#resetPasswordOtp0"
                                                                                    data-options="{&quot;maxLength&quot;:4,&quot;inputContainer&quot;:&quot;.js-separator-container.js-login-reset-password-otp-container&quot;,&quot;targetSubmitForm&quot;:&quot;js-reset-password-v3-otp-form&quot;}">
                                                                                    <i class="fas fa-backspace"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="text-center">
                                                                        <button type="submit" class="btn -submit btn-primary my-lg-3 mt-0">
                                                                            ยืนยัน
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="-bottom ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="tab-content-logged-resetPasswordSetPassword" data-completed-dismiss-modal="">
                                        <div class="x-modal-body-base -v3 -password x-form-register-v3">
                                            <div class="row -register-container-wrapper">
                                                <div class="col">
                                                    <div class="x-title-register-modal-v3 ">
                                                        <span class="-title">ตั้งรหัสผ่านใหม่</span>
                                                        <span class="-sub-title">กรอกตัวเลขรหัส 6 หลัก เพื่อใช้เข้าสู่ระบบ</span>
                                                    </div>
                                                </div>

                                                <div data-animatable="fadeInRegister" data-offset="0" class="col animated fadeInRegister">
                                                    <div class="x-modal-separator-container x-form-register">
                                                        <div class="-top ">

                                                            <div data-animatable="fadeInRegister" data-offset="0" class="-animatable-container -password-body animated fadeInRegister">
                                                                <form method="post" data-register-v3-form="/_ajax_/v3/reset-password/set-password/_resetPasswordSetPassword"
                                                                    data-register-step="resetPasswordSetPassword" data-tab-next-step="#tab-content-logged-resetPasswordResult">
                                                                    <div class="d-flex -password-input-container js-register-v3-input-group">

                                                                        <div class="js-separator-container js-reset-password-container">
                                                                            <input type="password" id="resetPasswordSetPassword_1" name="resetPasswordSetPassword_1" inputmode="text" readonly=""
                                                                                pattern="[0-9]*" autofocus="1" class="-digit-password js-otp-input" data-separator-input="true"
                                                                                data-type="set_password">
                                                                        </div>


                                                                        <div class="js-separator-container js-reset-password-container">
                                                                            <input type="password" id="resetPasswordSetPassword_2" name="resetPasswordSetPassword_2" inputmode="text" readonly=""
                                                                                pattern="[0-9]*" autofocus="1" class="-digit-password js-otp-input" data-separator-input="true"
                                                                                data-type="set_password">
                                                                        </div>


                                                                        <div class="js-separator-container js-reset-password-container">
                                                                            <input type="password" id="resetPasswordSetPassword_3" name="resetPasswordSetPassword_3" inputmode="text" readonly=""
                                                                                pattern="[0-9]*" autofocus="1" class="-digit-password js-otp-input" data-separator-input="true"
                                                                                data-type="set_password">
                                                                        </div>


                                                                        <div class="js-separator-container js-reset-password-container">
                                                                            <input type="password" id="resetPasswordSetPassword_4" name="resetPasswordSetPassword_4" inputmode="text" readonly=""
                                                                                pattern="[0-9]*" autofocus="1" class="-digit-password js-otp-input" data-separator-input="true"
                                                                                data-type="set_password">
                                                                        </div>


                                                                        <div class="js-separator-container js-reset-password-container">
                                                                            <input type="password" id="resetPasswordSetPassword_5" name="resetPasswordSetPassword_5" inputmode="text" readonly=""
                                                                                pattern="[0-9]*" autofocus="1" class="-digit-password js-otp-input" data-separator-input="true"
                                                                                data-type="set_password">
                                                                        </div>


                                                                        <div class="js-separator-container js-reset-password-container">
                                                                            <input type="password" id="resetPasswordSetPassword_6" name="resetPasswordSetPassword_6" inputmode="text" readonly=""
                                                                                pattern="[0-9]*" autofocus="1" class="-digit-password js-otp-input" data-separator-input="true"
                                                                                data-type="set_password">
                                                                        </div>

                                                                    </div>

                                                                    <input type="hidden" id="resetPasswordSetPasswordToken" name="resetPasswordSetPasswordToken">

                                                                    <div class="d-none js-keypad-number-wrapper">


                                                                        <div class="x-keypad-number-container">
                                                                            <div class="-btn-group-wrapper">

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="1" data-target="#resetPasswordSetPassword_1"
                                                                                    data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-reset-password-container&quot;}">
                                                                                    1
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="2" data-target="#resetPasswordSetPassword_1"
                                                                                    data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-reset-password-container&quot;}">
                                                                                    2
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="3" data-target="#resetPasswordSetPassword_1"
                                                                                    data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-reset-password-container&quot;}">
                                                                                    3
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="4" data-target="#resetPasswordSetPassword_1"
                                                                                    data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-reset-password-container&quot;}">
                                                                                    4
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="5" data-target="#resetPasswordSetPassword_1"
                                                                                    data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-reset-password-container&quot;}">
                                                                                    5
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="6" data-target="#resetPasswordSetPassword_1"
                                                                                    data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-reset-password-container&quot;}">
                                                                                    6
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="7" data-target="#resetPasswordSetPassword_1"
                                                                                    data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-reset-password-container&quot;}">
                                                                                    7
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="8" data-target="#resetPasswordSetPassword_1"
                                                                                    data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-reset-password-container&quot;}">
                                                                                    8
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="9" data-target="#resetPasswordSetPassword_1"
                                                                                    data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-reset-password-container&quot;}">
                                                                                    9
                                                                                </button>

                                                                                <div class="btn -btn js-keypad-btn -btn-none" type="button" data-key="none" data-target="#resetPasswordSetPassword_1"
                                                                                    data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-reset-password-container&quot;}">
                                                                                </div>

                                                                                <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="0" data-target="#resetPasswordSetPassword_1"
                                                                                    data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-reset-password-container&quot;}">
                                                                                    0
                                                                                </button>

                                                                                <button class="btn -btn js-keypad-btn -btn-backspace" type="button" data-key="backspace"
                                                                                    data-target="#resetPasswordSetPassword_1"
                                                                                    data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-reset-password-container&quot;}">
                                                                                    <i class="fas fa-backspace"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="text-center">
                                                                        <button type="submit" class="btn -submit btn-primary my-lg-3 mt-0">
                                                                            ยืนยัน
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="-bottom ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="tab-content-logged-resetPasswordResult" data-completed-dismiss-modal="#alertResetPasscodeModal">

                                        <div class="x-modal-body-base -v3 x-form-register-v3">
                                            <div class="row -register-container-wrapper">
                                                <div data-animatable="fadeInRegister" data-offset="0" class="col animated fadeInRegister">
                                                    <div class="text-center d-flex flex-column justify-content-center h-100">
                                                        <div class="text-center">

                                                            <img alt="สมัครสมาชิก SUCCESS" class="js-ic-success -success-ic img-fluid" width="150" height="150"
                                                                src="./assets/images/animated-register-success.png">
                                                        </div>

                                                        <div class="-title">อัปเดตรหัสผ่านของคุณเรียบร้อย!</div>
                                                        <div class="-sub-title">ระบบกำลังพาคุณไปหน้าหลัก</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="x-modal modal -v2 x-modal-promotion-alert -with-half-size" id="promotionAlertModal" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content"
            data-ajax-modal-always-reload="true" tabindex="-1">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable modal-dialog-centered" role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-header -modal-header">
                    </div>
                    <div class="modal-body -modal-body">
                    </div>
                </div>
            </div>
        </div>



        <div class="x-modal modal -v2 -with-half-size" id="changePasswordModal" role="dialog" aria-hidden="true" data-loading-container=".modal-body" data-ajax-modal-always-reload="true" tabindex="-1"
            data-container="#changePassordModal" data-dismiss-modal-target="#accountModalMobile, #accountModal">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable -dialog-in-tab -change-password-index-dialog" role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-header -modal-header">
                        <h3 class="x-title-modal d-inline-block m-auto">
                            <span></span>
                        </h3>
                    </div>
                    <div class="modal-body -modal-body">

                        <div class="x-register-tab-container -register js-tab-pane-checker-v3">
                            <div class="container">

                                <ul class="nav nav-tabs x-register-tab js-change-password-tab">
                                    <li class="nav-item  active -currentPassword" id="tab-currentPassword">
                                        <a data-toggle="tab" href="#tab-content-currentPassword" class="nav-link">
                                            currentPassword
                                        </a>
                                    </li>
                                    <li class="nav-item   -newPassword" id="tab-newPassword">
                                        <a data-toggle="tab" href="#tab-content-newPassword" class="nav-link">
                                            newPassword
                                        </a>
                                    </li>
                                    <li class="nav-item   -resultChangePasswordSuccess" id="tab-resultChangePasswordSuccess">
                                        <a data-toggle="tab" href="#tab-content-resultChangePasswordSuccess" class="nav-link">
                                            resultChangePasswordSuccess
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <form method="post" name="js-change-password-current" data-register-v3-form="/_ajax_/v3/change-password" data-register-step="changePassword" data-is-passcode="1">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="tab-content-currentPassword" data-completed-dismiss-modal="">


                                        <div class="x-modal-body-base -v3 x-form-register-v3">
                                            <div class="row -register-container-wrapper">
                                                <div class="col">
                                                    <div class="x-title-register-modal-v3 ">
                                                        <span class="-title">รหัสผ่านเดิม 6 หลัก</span>
                                                        <span class="-sub-title">กรุณากรอกเลขรหัสผ่านเดิม 6 หลัก</span>
                                                    </div>
                                                </div>

                                                <div data-animatable="fadeInRegister" data-offset="0" class="col animated fadeInRegister">
                                                    <div class="x-modal-separator-container x-form-change-password">
                                                        <div class="-top ">

                                                            <div data-animatable="fadeInModal" data-offset="0" class="-animatable-container -password-body animated fadeInModal">
                                                                <div class="d-flex -password-input-container js-register-v3-input-group">

                                                                    <div class="js-separator-container js-change-password-container">
                                                                        <input type="text" id="currentPassword_1" name="currentPassword_1" readonly="" inputmode="text" pattern="[0-9]*"
                                                                            class="-digit-password js-otp-input" data-separator-input="true" data-type="current_set_password">
                                                                    </div>


                                                                    <div class="js-separator-container js-change-password-container">
                                                                        <input type="text" id="currentPassword_2" name="currentPassword_2" readonly="" inputmode="text" pattern="[0-9]*"
                                                                            class="-digit-password js-otp-input" data-separator-input="true" data-type="current_set_password">
                                                                    </div>


                                                                    <div class="js-separator-container js-change-password-container">
                                                                        <input type="text" id="currentPassword_3" name="currentPassword_3" readonly="" inputmode="text" pattern="[0-9]*"
                                                                            class="-digit-password js-otp-input" data-separator-input="true" data-type="current_set_password">
                                                                    </div>


                                                                    <div class="js-separator-container js-change-password-container">
                                                                        <input type="text" id="currentPassword_4" name="currentPassword_4" readonly="" inputmode="text" pattern="[0-9]*"
                                                                            class="-digit-password js-otp-input" data-separator-input="true" data-type="current_set_password">
                                                                    </div>


                                                                    <div class="js-separator-container js-change-password-container">
                                                                        <input type="text" id="currentPassword_5" name="currentPassword_5" readonly="" inputmode="text" pattern="[0-9]*"
                                                                            class="-digit-password js-otp-input" data-separator-input="true" data-type="current_set_password">
                                                                    </div>


                                                                    <div class="js-separator-container js-change-password-container">
                                                                        <input type="text" id="currentPassword_6" name="currentPassword_6" readonly="" inputmode="text" pattern="[0-9]*"
                                                                            class="-digit-password js-otp-input" data-separator-input="true" data-type="current_set_password">
                                                                    </div>

                                                                </div>

                                                                <input type="hidden" id="currentPassword" name="currentPassword" pattern="[0-9]*" class="form-control mb-3">

                                                                <div class="d-none js-keypad-number-wrapper">


                                                                    <div class="x-keypad-number-container">
                                                                        <div class="-btn-group-wrapper">

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="1" data-target="#currentPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-change-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-current-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-current&quot;}">
                                                                                1
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="2" data-target="#currentPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-change-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-current-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-current&quot;}">
                                                                                2
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="3" data-target="#currentPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-change-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-current-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-current&quot;}">
                                                                                3
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="4" data-target="#currentPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-change-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-current-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-current&quot;}">
                                                                                4
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="5" data-target="#currentPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-change-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-current-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-current&quot;}">
                                                                                5
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="6" data-target="#currentPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-change-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-current-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-current&quot;}">
                                                                                6
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="7" data-target="#currentPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-change-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-current-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-current&quot;}">
                                                                                7
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="8" data-target="#currentPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-change-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-current-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-current&quot;}">
                                                                                8
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="9" data-target="#currentPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-change-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-current-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-current&quot;}">
                                                                                9
                                                                            </button>

                                                                            <div class="btn -btn js-keypad-btn -btn-none" type="button" data-key="none" data-target="#currentPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-change-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-current-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-current&quot;}">
                                                                            </div>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="0" data-target="#currentPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-change-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-current-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-current&quot;}">
                                                                                0
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-backspace" type="button" data-key="backspace" data-target="#currentPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-change-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-current-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-current&quot;}">
                                                                                <i class="fas fa-backspace"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-center">
                                                                    <button type="button" class="btn -submit btn-primary my-lg-3 mt-0 js-current-password-button"
                                                                        onclick="$('a[href=\'#tab-content-newPassword\']').click();">
                                                                        ยืนยัน
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="-bottom ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="tab-content-newPassword" data-completed-dismiss-modal="">
                                        <div class="x-modal-body-base -v3 x-form-register-v3">
                                            <div class="row -register-container-wrapper">
                                                <div class="col">
                                                    <div class="x-title-register-modal-v3 ">
                                                        <span class="-title">ตั้งรหัส 6 หลักใหม่</span>
                                                        <span class="-sub-title">กรอกเลขรหัส 6 หลัก เพื่อใช้เข้าสู่ระบบ</span>
                                                    </div>
                                                </div>

                                                <div data-animatable="fadeInRegister" data-offset="0" class="col animated fadeInRegister">
                                                    <div class="x-modal-separator-container x-form-change-password">
                                                        <div class="-top ">

                                                            <div data-animatable="fadeInModal" data-offset="0" class="-animatable-container -password-body animated fadeInModal">
                                                                <div class="d-flex -password-input-container js-register-v3-input-group">

                                                                    <div class="js-separator-container js-new-password-container">
                                                                        <input type="text" id="newPassword_1" name="newPassword_1" inputmode="text" pattern="[0-9]*"
                                                                            class="-digit-password js-otp-input" data-separator-input="true" data-type="set_new_password" required="">
                                                                    </div>


                                                                    <div class="js-separator-container js-new-password-container">
                                                                        <input type="text" id="newPassword_2" name="newPassword_2" inputmode="text" pattern="[0-9]*"
                                                                            class="-digit-password js-otp-input" data-separator-input="true" data-type="set_new_password" required="">
                                                                    </div>


                                                                    <div class="js-separator-container js-new-password-container">
                                                                        <input type="text" id="newPassword_3" name="newPassword_3" inputmode="text" pattern="[0-9]*"
                                                                            class="-digit-password js-otp-input" data-separator-input="true" data-type="set_new_password" required="">
                                                                    </div>


                                                                    <div class="js-separator-container js-new-password-container">
                                                                        <input type="text" id="newPassword_4" name="newPassword_4" inputmode="text" pattern="[0-9]*"
                                                                            class="-digit-password js-otp-input" data-separator-input="true" data-type="set_new_password" required="">
                                                                    </div>


                                                                    <div class="js-separator-container js-new-password-container">
                                                                        <input type="text" id="newPassword_5" name="newPassword_5" inputmode="text" pattern="[0-9]*"
                                                                            class="-digit-password js-otp-input" data-separator-input="true" data-type="set_new_password" required="">
                                                                    </div>


                                                                    <div class="js-separator-container js-new-password-container">
                                                                        <input type="text" id="newPassword_6" name="newPassword_6" inputmode="text" pattern="[0-9]*"
                                                                            class="-digit-password js-otp-input" data-separator-input="true" data-type="set_new_password" required="">
                                                                    </div>

                                                                </div>

                                                                <input type="hidden" id="newPassword[first]" name="newPassword[first]" pattern="[0-9]*" class="form-control mb-3">

                                                                <div class="d-none js-keypad-number-wrapper">


                                                                    <div class="x-keypad-number-container">
                                                                        <div class="-btn-group-wrapper">

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="1" data-target="#newPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-new-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-new-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-new&quot;}">
                                                                                1
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="2" data-target="#newPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-new-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-new-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-new&quot;}">
                                                                                2
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="3" data-target="#newPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-new-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-new-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-new&quot;}">
                                                                                3
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="4" data-target="#newPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-new-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-new-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-new&quot;}">
                                                                                4
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="5" data-target="#newPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-new-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-new-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-new&quot;}">
                                                                                5
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="6" data-target="#newPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-new-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-new-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-new&quot;}">
                                                                                6
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="7" data-target="#newPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-new-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-new-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-new&quot;}">
                                                                                7
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="8" data-target="#newPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-new-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-new-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-new&quot;}">
                                                                                8
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="9" data-target="#newPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-new-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-new-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-new&quot;}">
                                                                                9
                                                                            </button>

                                                                            <div class="btn -btn js-keypad-btn -btn-none" type="button" data-key="none" data-target="#newPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-new-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-new-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-new&quot;}">
                                                                            </div>

                                                                            <button class="btn -btn js-keypad-btn -btn-keypad" type="button" data-key="0" data-target="#newPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-new-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-new-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-new&quot;}">
                                                                                0
                                                                            </button>

                                                                            <button class="btn -btn js-keypad-btn -btn-backspace" type="button" data-key="backspace" data-target="#newPassword_1"
                                                                                data-options="{&quot;maxLength&quot;:6,&quot;inputContainer&quot;:&quot;.js-separator-container.js-new-password-container&quot;,&quot;enabledButtonTarget&quot;:&quot;.js-new-password-button&quot;,&quot;targetSubmitForm&quot;:&quot;js-change-password-new&quot;}">
                                                                                <i class="fas fa-backspace"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-center">
                                                                    <button type="submit" class="btn -submit btn-primary my-lg-3 mt-0 js-new-password-button">
                                                                        ยืนยัน
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="-bottom ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="tab-content-resultChangePasswordSuccess" data-completed-dismiss-modal="#changePasswordModal">
                                        <div class="js-change-password-success-container">

                                            <div class="x-modal-body-base -v3 x-form-register-v3">
                                                <div class="row -register-container-wrapper">
                                                    <div data-animatable="fadeInRegister" data-offset="0" class="col animated fadeInRegister">
                                                        <div class="text-center d-flex flex-column justify-content-center h-100">
                                                            <div class="text-center">

                                                                <img alt="สมัครสมาชิก SUCCESS" class="js-ic-success -success-ic img-fluid" width="150" height="150"
                                                                    src="./assets/images/animated-register-success.png">
                                                            </div>

                                                            <div class="-title">เปลี่ยนรหัสผ่านสำเร็จ!</div>
                                                            <div class="-sub-title">ระบบกำลังพาคุณไปหน้าหลัก</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade x-how-block-image-modal -with-backdrop" id="howToDepositTransfer" tabindex="-1" role="dialog" aria-labelledby="howToDeposit" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered w-auto" role="document">
                <div class="modal-content bg-transparent w-auto m-auto border-0">
                    <div class="modal-body text-center p-0">
                        <img src="https://ez-casino.org/media/cache/strip/202403/block/ec3c89001ce98844db21c912b3035714.jpg" class="-img" alt="Profile cover image" width="100%" height="auto">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade x-how-block-image-modal -with-backdrop" id="howToDepositPayment" tabindex="-1" role="dialog" aria-labelledby="howToDeposit" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered w-auto" role="document">
                <div class="modal-content bg-transparent w-auto m-auto border-0">
                    <div class="modal-body text-center p-0">
                        <img src="./assets/images/055066db2f9805f1e5ff6aa93a81c8b1.jpg" class="-img" alt="Profile cover image" width="100%" height="auto">
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade x-how-block-image-modal -with-backdrop" id="howToWithdraw" tabindex="-1" role="dialog" aria-labelledby="howToDeposit" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered w-auto" role="document">
                <div class="modal-content bg-transparent w-auto m-auto border-0">
                    <div class="modal-body text-center p-0">
                        <img src="https://ez-casino.org/media/cache/strip/202403/block/9471756d6a99ccef6cd5e5fc7421ae24.jpg" class="-img" alt="Profile cover image" width="100%" height="auto">
                    </div>
                </div>
            </div>
        </div>











        <div class="x-modal modal -v2 -scrollable -no-button js-modal-scrollable" id="notificationCenterModal" role="dialog" aria-hidden="true" data-loading-container=".modal-body"
            data-ajax-modal-always-reload="true" tabindex="-1" data-ajax-modal="/_ajax_/notifitaion-info" data-container="#notificationCenterModal .modal-body">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-header -modal-header">
                        <div class="-outer-wrapper">

                            <img alt="Notification bg image png" class="-title-bg" width="320" height="64" src="./assets/images/notification-title-bg.png">

                            <h3 class="x-title-modal ">

                                <img alt="Notification icon bell image png" class="-ic-title" width="40" height="40" src="./assets/images/notification-ic-bell.png">

                                <span class="-text">กระดานแจ้งเตือน</span>
                            </h3>
                        </div>
                    </div>
                    <div class="modal-body -modal-body">
                        <div class="js-modal-content"></div>
                    </div>
                </div>
            </div>
        </div>




        <div class="x-modal modal -v2 " id="pocketFarmModalMobile" role="dialog" aria-hidden="true" data-loading-container=".modal-body" data-ajax-modal-always-reload="true" tabindex="-1"
            data-ajax-modal="/account/_ajax_/pocket-farm?isMobileView=1" data-container="#pocketFarmModalMobile">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable -modal-big" role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body -modal-body">
                        <div class="js-modal-content"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="x-emoji-wrapper -mobile js-emoji-wrapper">
            <div class="x-emoji-icon -bonus js-emoji-icon" data-emoji="bonus"></div>
            <div class="x-emoji-icon -angry js-emoji-icon" data-emoji="angry"></div>
            <div class="x-emoji-icon -boring js-emoji-icon" data-emoji="boring"></div>
            <div class="x-emoji-icon -car js-emoji-icon" data-emoji="car"></div>
            <div class="x-emoji-icon -card js-emoji-icon" data-emoji="card"></div>
            <div class="x-emoji-icon -cardchip js-emoji-icon" data-emoji="cardchip"></div>
            <div class="x-emoji-icon -chipcoin js-emoji-icon" data-emoji="chipcoin"></div>
            <div class="x-emoji-icon -clover js-emoji-icon" data-emoji="clover"></div>
            <div class="x-emoji-icon -coin js-emoji-icon" data-emoji="coin"></div>
            <div class="x-emoji-icon -diamond js-emoji-icon" data-emoji="diamond"></div>
            <div class="x-emoji-icon -dice js-emoji-icon" data-emoji="dice"></div>
            <div class="x-emoji-icon -goldbar js-emoji-icon" data-emoji="goldbar"></div>
            <div class="x-emoji-icon -handcard js-emoji-icon" data-emoji="handcard"></div>
            <div class="x-emoji-icon -happy js-emoji-icon" data-emoji="happy"></div>
            <div class="x-emoji-icon -laughing js-emoji-icon" data-emoji="laughing"></div>
            <div class="x-emoji-icon -like js-emoji-icon" data-emoji="like"></div>
            <div class="x-emoji-icon -roulette js-emoji-icon" data-emoji="roulette"></div>
            <div class="x-emoji-icon -sleeping js-emoji-icon" data-emoji="sleeping"></div>
            <div class="x-emoji-icon -smart js-emoji-icon" data-emoji="smart"></div>
            <div class="x-emoji-icon -smile js-emoji-icon" data-emoji="smile"></div>
            <div class="x-emoji-icon -smilelove js-emoji-icon" data-emoji="smilelove"></div>
            <div class="x-emoji-icon -wheellucky js-emoji-icon" data-emoji="wheellucky"></div>
        </div>

        <div class="x-emoji-overlay -mobile js-emoji-overlay"></div>




        <div class="x-modal modal -v2 " id="linkSocialAccountModalMobile" role="dialog" aria-hidden="true" data-loading-container=".modal-body" data-ajax-modal-always-reload="true" tabindex="-1"
            data-ajax-modal="/account/_ajax_/promotion-bind-social-account?isMobileView=1" data-container="#linkSocialAccountModalMobile">
            <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content -modal-content">
                    <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body -modal-body">
                        <div class="js-modal-content"></div>
                    </div>
                </div>
            </div>
        </div>





        <script id="b-loading" type="text/template">
        <div class="x-dice-container py-5 m-auto d-flex">
    <div id="dice" class="mx-auto">
        <div class="side front">
            <div class="dot center bg-danger"></div>
        </div>
        <div class="side front inner"></div>
        <div class="side top">
            <div class="dot dtop dleft"></div>
            <div class="dot dbottom dright"></div>
        </div>
        <div class="side top inner"></div>
        <div class="side right">
            <div class="dot dtop dleft"></div>
            <div class="dot center"></div>
            <div class="dot dbottom dright"></div>
        </div>
        <div class="side right inner"></div>
        <div class="side left">
            <div class="dot dtop dleft"></div>
            <div class="dot dtop dright"></div>
            <div class="dot dbottom dleft"></div>
            <div class="dot dbottom dright"></div>
        </div>
        <div class="side left inner"></div>
        <div class="side bottom">
            <div class="dot center"></div>
            <div class="dot dtop dleft"></div>
            <div class="dot dtop dright"></div>
            <div class="dot dbottom dleft"></div>
            <div class="dot dbottom dright"></div>
        </div>
        <div class="side bottom inner"></div>
        <div class="side back">
            <div class="dot dtop dleft"></div>
            <div class="dot dtop dright"></div>
            <div class="dot dbottom dleft"></div>
            <div class="dot dbottom dright"></div>
            <div class="dot center dleft"></div>
            <div class="dot center dright"></div>
        </div>
        <div class="side back inner"></div>
        <div class="side cover x"></div>
        <div class="side cover y"></div>
        <div class="side cover z"></div>
    </div>
</div>
    </script>

        <script id="loading" type="text/template">
        <div class="x-dice-container py-5 m-auto d-flex">
    <div id="dice" class="mx-auto">
        <div class="side front">
            <div class="dot center bg-danger"></div>
        </div>
        <div class="side front inner"></div>
        <div class="side top">
            <div class="dot dtop dleft"></div>
            <div class="dot dbottom dright"></div>
        </div>
        <div class="side top inner"></div>
        <div class="side right">
            <div class="dot dtop dleft"></div>
            <div class="dot center"></div>
            <div class="dot dbottom dright"></div>
        </div>
        <div class="side right inner"></div>
        <div class="side left">
            <div class="dot dtop dleft"></div>
            <div class="dot dtop dright"></div>
            <div class="dot dbottom dleft"></div>
            <div class="dot dbottom dright"></div>
        </div>
        <div class="side left inner"></div>
        <div class="side bottom">
            <div class="dot center"></div>
            <div class="dot dtop dleft"></div>
            <div class="dot dtop dright"></div>
            <div class="dot dbottom dleft"></div>
            <div class="dot dbottom dright"></div>
        </div>
        <div class="side bottom inner"></div>
        <div class="side back">
            <div class="dot dtop dleft"></div>
            <div class="dot dtop dright"></div>
            <div class="dot dbottom dleft"></div>
            <div class="dot dbottom dright"></div>
            <div class="dot center dleft"></div>
            <div class="dot center dright"></div>
        </div>
        <div class="side back inner"></div>
        <div class="side cover x"></div>
        <div class="side cover y"></div>
        <div class="side cover z"></div>
    </div>
</div>
    </script>










        <footer class="x-footer -ezl -logged">


            <div class="-inner-wrapper lazyload x-bg-position-center" data-bgset="./assets/images/footer-inner-bg.png">
                <div class="container -inner-title-wrapper">


                    <img alt="คาสิโนออนไลน์ แทงหวยออนไลน์ หวยออนไลน์ สล็อตออนไลน์ เว็บพนันออนไลน์" class="img-fluid -logo" width="440" height="104" src="./assets/images/logo.png">


                    <p class="-text-sub-title">
                        <span class="-highlight">EZ CASINO</span> เว็บไซต์ คาสิโนออนไลน์ ที่มีบริการแบบฟูลเซอวิส ไม่ว่าจะเป็น บาคาร่า รูเล็ต หวย รวมไปถึงเกมส์ยอดนิยมอย่าง สล็อตออนไลน์ ยิงปลา รวมไปถึง
                        แทงบอลออนไลน์ พร้อมระบบถ่ายทอดสดตลอด 24 ชั่วโมง เล่นทุกที่ ทุกเวลา เล่นได้ครบทั้ง iOs หรือ Android รวมไประบบปฏิบัติการอื่นๆ ที่มาพร้อมระบบ ฝาก - ถอน ด้วยระบบ AI Smart
                        เล่นง่ายไม่มีสะดุด ที่เดียวเท่านั้นต้อง Ezcasino เพราะเราคือ No.1 แห่งวงการคาสิโนออนไลน์
                    </p>

                </div>




                <div class="container">
                    <div class="-footer-menu">
                        <div class="-block-tag">
                            <h3 class="-text-title -provider">ผู้ให้บริการคาสิโนออนไลน์</h3>
                            <div class="row">
                                <div class="col-12">
                                    <div class="-tags-list">
                                        <a href="#0" class="btn -btn-tag">SA Gaming</a>
                                        <a href="#0" class="btn -btn-tag">WM Casino</a>
                                        <a href="#0" class="btn -btn-tag">PragmaticPlay Live</a>
                                        <a href="#0" class="btn -btn-tag">PlayTech Live</a>
                                        <a href="#0" class="btn -btn-tag">Evolution Gaming</a>
                                        <a href="#0" class="btn -btn-tag">AE Sexy</a>
                                        <a href="#0" class="btn -btn-tag">AllBet</a>
                                        <a href="#0" class="btn -btn-tag">Dream Gaming</a>
                                        <a href="#0" class="btn -btn-tag">Micro Gaming Plus Casino</a>
                                        <a href="#0" class="btn -btn-tag">WE</a>
                                        <a href="#0" class="btn -btn-tag">Asia Gaming</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="-block-tag">
                            <h3 class="-text-title -provider">สารบัญ</h3>
                            <div class="row">
                                <div class="col-12">
                                    <div class="-tags-list">



                                        <a href="/%E0%B8%AB%E0%B8%A7%E0%B8%A2" class="btn -btn-tag">หวย</a>



                                        <a href="/pgsoft" class="btn -btn-tag">สล็อต</a>



                                        <a href="/casino" class="btn -btn-tag">คาสิโน</a>



                                        <a href="/sport" class="btn -btn-tag">กีฬา</a>



                                        <a href="/invitation" class="btn -btn-tag">ชวนเพื่อน</a>



                                        <a href="/promotions" class="btn -btn-tag">โปรโมชั่น</a>



                                        <a href="/blogs" class="btn -btn-tag">ข่าวสาร</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="-terms-wrapper">
                    <a href="/term-and-condition" target="_blank" class="-link" rel="nofollow noopener">
                        Term and condition
                    </a>
                </div>


            </div>

            <div class="text-center -copy-right-container">


                <p class="mb-0 -copy-right-text">
                    Copyright © 2024 EZ Casino. All Rights Reserved.
                </p>
            </div>
        </footer>


        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJN7RFQ3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Google tag (gtag.js) -->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-VRESRXE493"></script>

        <!-- Google tag (gtag.js) ezcasino.me -->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-13L27MLNG3"></script>

        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());

            gtag('config', 'G-VRESRXE493');

            // ezcasino.me
            gtag('config', 'G-13L27MLNG3');
        </script>
    </div>
    <script src="https://js.pusher.com/7.2.0/pusher.min.js"></script>


    <script>

    </script>

    <script>
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>

    <script>
        var IS_ANDROID = false;
        var IS_MOBILE = false;
    </script>



    <div class="x-modal modal -v2 -with-more-than-half-size" id="billHistoryModalMobile" role="dialog" aria-hidden="true" data-loading-container=".modal-body" data-ajax-modal-always-reload="true"
        tabindex="-1" data-ajax-modal="/account/_ajax_/customer-bill-history?isMobileView=1" data-container="#billHistoryModalMobile">
        <div class="modal-dialog -modal-size -v2 modal-dialog-centered modal-dialog-scrollable " role="document">
            <div class="modal-content -modal-content">
                <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="modal-body -modal-body">
                    <div class="js-modal-content"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var _HAS_BANK_ = true;
        var _IS_ACCOUNT_APPROVED_ = true;
        var WS_ENTRY = 'wss://api.ezslot.bet/wss';
        var _H_ = 'Agq9yKAGZGPZxbBXoJmdow==';
    </script>
    <!-- <script src="/bundles/_themes/web/ezl-ez-casino/goswebsocket/js/vendor/autobahn.min.js"></script>
  <script src="/bundles/_themes/web/ezl-ez-casino/goswebsocket/js/websocket.js"></script>

  <script src="/build/runtime.1ba6bf05.js"></script>
  <script src="/build/0.d3701a8e.js"></script>
  <script src="/build/1.0d7038bc.js"></script>
  <script src="/build/web/ezl-ez-casino/app.d8d3d7bd.js"></script> -->
    <script type="text/javascript" src="./assets/js/0.d3701a8e.js"></script>
    <script type="text/javascript" src="./assets/js/1.0d7038bc.js"></script>
    <script type="text/javascript" src="./assets/js/app.d8d3d7bd.js"></script>
    <script type="text/javascript" src="./assets/js/autobahn.min.js"></script>
    <script type="text/javascript" src="./assets/js/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="./assets/js/fbevents.js"></script>
    <script type="text/javascript" src="./assets/js/gtm.js"></script>
    <!-- <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css"
    integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/solid.min.css"
    integrity="sha512-xIEmv/u9DeZZRfvRS06QVP2C97Hs5i0ePXDooLa5ZPla3jOgPT/w6CzoSMPuRiumP7A/xhnUBxRmgWWwU26ZeQ==" crossorigin="anonymous" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/regular.min.css"
    integrity="sha512-1yhsV5mlXC9Ve9GDpVWlM/tpG2JdCTMQGNJHvV5TEzAJycWtHfH0/HHSDzHFhFgqtFsm1yWyyHqssFERrYlenA==" crossorigin="anonymous" onload="this.onload=null;this.rel='stylesheet'"> -->

    <!-- <noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/regular.min.css"
      integrity="sha512-1yhsV5mlXC9Ve9GDpVWlM/tpG2JdCTMQGNJHvV5TEzAJycWtHfH0/HHSDzHFhFgqtFsm1yWyyHqssFERrYlenA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/solid.min.css"
      integrity="sha512-xIEmv/u9DeZZRfvRS06QVP2C97Hs5i0ePXDooLa5ZPla3jOgPT/w6CzoSMPuRiumP7A/xhnUBxRmgWWwU26ZeQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css"
      integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />
  </noscript> -->



</body>

</html>