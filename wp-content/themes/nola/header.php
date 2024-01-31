<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Naši apartmani Nola, Golden day i Ante nude sve što je potrebno za ugodan boravak u srcu Slavonije. Nalaze se na istoj lokaciji u mirnoj, jednosmjernoj ulici svega 450 metara udaljeni od središnjeg gradskog trga.">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="apartmani, vinkovci, sobe, odmor">
    <?php wp_head() ?>
</head>

<body <?php body_class()?>>
    <header class="header">
        <a href="<?php echo site_url('') ?>" class="header__logo">
            <img src="/wp-content/themes/nola/src/assets/images/logo-dark.svg" alt="nav logo" />
        </a>
        <button class="ham" aria-label="ham button" tabindex="0" aria-controls="nav" data-active="false">
            <div class="ham-line"></div>
            <div class="ham-line"></div>
            <div class="ham-line"></div>
        </button>
        <nav class="nav" data-active="false">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="<?php echo site_url('') ?>" class="nav__link naslovna-link"><img
                            src="/wp-content/themes/nola/src/assets/icons/home-white-icon.svg" aria-hidden="true" />
                        Naslovna</a>
                </li>
                <li class="nav__item">
                    <a href="#o-nama" class="nav__link">O nama</a>
                </li>
                <li class="nav__item">
                    <a href="#apartmani" class="nav__link">Apartmani</a>
                    <ul class="apartmani-drop-down">
                        <li><a href="<?php echo site_url('nola') ?>">Nola</a></li>
                        <li><a href="<?php echo site_url('ante') ?>">Ante</a></li>
                        <li><a href="<?php echo site_url('golden-day') ?>">Golden day</a></li>
                    </ul>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">Kontakt</a>
                </li>
            </ul>
        </nav>
    </header>