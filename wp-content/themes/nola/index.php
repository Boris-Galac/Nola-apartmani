<?php get_header() ?>
<div class="splash-screen">
    <img class="splash-screen__logo" src="/wp-content/themes/nola/src/assets/images/logo-dark.svg"
        alt="logo of katica apartmani" />
    <h2 class="splash-screen__heading">Dobrodošli!</h2>
</div>
<main class="main home-main">
    <div class="carousel">
        <section id="image-carousel" class="splide" aria-label="Beautiful Images">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="/wp-content/themes/nola/src/assets/images/img (1).jpg" />
                    </li>
                    <li class="splide__slide">
                        <img src="/wp-content/themes/nola/src/assets/images/img (2).jpg" />
                    </li>
                    <li class="splide__slide">
                        <img src="/wp-content/themes/nola/src/assets/images/img (3).jpg" />
                    </li>
                    <li class="splide__slide">
                        <img src="/wp-content/themes/nola/src/assets/images/img (4).jpg" />
                    </li>
                    <li class="splide__slide">
                        <img src="/wp-content/themes/nola/src/assets/images/img (5).jpg" />
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- HERO -->
    <section class="hero" id="o-nama">
        <div class="hero__wrapper p-block-3">
            <div class="container">
                <div class="hero__text-wrapper">
                    <h1 class="main__heading">Apartmani Nola Vinkovci centar</h1>
                    <div class="hero__text-inner-wrapper">
                        <p class="paragraph dark-text">
                            Naši apartmani
                            <span class="hero__apartments">Nola, Golden day i Ante</span>
                            nude sve što je potrebno za ugodan boravak u srcu Slavonije.
                            Nalaze se na istoj lokaciji u mirnoj, jednosmjernoj ulici
                            svega 450 metara udaljeni od središnjeg gradskog trga.
                        </p>
                        <div class="hero__text-features-wrapper">
                            <div class="hero__feature">
                                <img src="/wp-content/themes/nola/src/assets/icons/shop-icon.svg"
                                    alt="feature icon of apartments" class="icon" />
                                <p class="paragraph dark-text">
                                    Odmah pored zgrade nalazi se samoposluga, a veliki Spar je
                                    udaljen 200 metara, u krugu 50 metara nalazi se pekara
                                    Mlinar, caffe i slastičarna Promenada.
                                </p>
                            </div>
                            <div class="hero__feature">
                                <img src="/wp-content/themes/nola/src/assets/icons/couch-icon.svg"
                                    alt="feature icon of apartments" class="icon" />
                                <p class="paragraph dark-text">
                                    Moderno i funkcionalno uređeni apartmani opremljeni su sa
                                    svime što vam može zatrebati kako za kraći tako i za duži
                                    boravak. Kuhinja kompletno opremljena; caffe aparat,
                                    blender, mikser... Super brzi internet, kabelska tv sa
                                    preko 100 programa, smart-tv i klima u dnevnom boravku i u
                                    spavaćoj sobi, glačalo, sušilo, pegla za kosu, putni
                                    dječji krevetić nalaze se u svakom apartmanu. Ako naš kraj
                                    želite obići biciklom u ponudi imamo i bicikl koji možete
                                    besplatno koristiti dok boravite u apartmanu uz prethodnu
                                    najavu. Bicikl je subvencionirala Vukovarsko srijemska
                                    županija putem projekta "Razvoj aktivnog turizma" Također
                                    naši apartmani nose oznaku Bike&Bed.
                                </p>
                            </div>
                            <div class="hero__feature">
                                <img src="/wp-content/themes/nola/src/assets/icons/restaurant-icon.svg"
                                    alt="feature icon of apartments" class="icon" />
                                <p class="paragraph dark-text">
                                    Svi bolji restorani su u krugu par sto metara od nas te
                                    vam auto nije ni potreban. U nekim od najboljih restorana
                                    i gradu naši gosti ostvaruju popust od 15% na hranu i
                                    piće. Birajte self check in ili želite da vas netko od
                                    domaćina dočeka. Naši gosti su zadovoljni i uvijek se
                                    vraćaju.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- APARTMANI -->
    <section class="apartmani p-block-6" id="apartmani">
        <div class="container">
            <div class="apartmani__header">
                <h2 class="h2-heading apartmani__heading">Apartmani</h2>
            </div>
            <div class="apartmani__body">
                <a href="nola.html">
                    <figure class="apartmani__thumbnail">
                        <img src="/wp-content/themes/nola/src/assets/images/nola-thumbnail-img.jpg"
                            class="apartmani__overlay" />
                        <h2 class="h2-heading apartmani-thumbnail__heading">Nola</h2>
                    </figure>
                </a>
                <a href="ante.html">
                    <figure class="apartmani__thumbnail">
                        <img src="/wp-content/themes/nola/src/assets/images/ante-thumbnail-img.jpg"
                            class="apartmani__overlay" />
                        <h2 class="h2-heading apartmani-thumbnail__heading">Ante</h2>
                    </figure>
                </a>
                <a href="golden-day.html">
                    <figure class="apartmani__thumbnail">
                        <img src="/wp-content/themes/nola/src/assets/images/golden-thumbnail-img.jpg"
                            class="apartmani__overlay" />
                        <h2 class="h2-heading apartmani-thumbnail__heading">
                            Golden day
                        </h2>
                    </figure>
                </a>
            </div>
        </div>
    </section>
    <!-- CONTACT -->
    <?php get_template_part('template-parts/content', 'contact') ?>
</main>
<?php get_footer() ?>