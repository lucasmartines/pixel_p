<?php 
$caminho = "http://localhost:8080/";

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Foundation for Sites</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/app.css">
</head>

<body>

    <header class="top-bar site_header">
        <div class="grid-x site_header__container">
            <div class="cell large-4 small-12 ">
                <img src="<?= $caminho ?>/assets/logo_cred_consultoria.png" alt="">
            </div>
            <div class="cell site_header__contact large-2 large-offset-1 show-for-lage grid-x">
                <div class="icon icon--margin_right">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="number">
                    <a><span>(11) 3253-1297</span></a>
                    <a><span>(11) 91284-2368</span></a>
                </div>

            </div>
            <div class="cell large-4 site_header__email">
                <a class="icon icon--margin_right">
                    <i class="fa fa-envelope"></i>
                </a>
                <a class="email ">
                    contato@minhaempresa.com
                </a>
            </div>
            <div class="cell large-1 site_header__icons">
                <a class="icon icon--margin_right">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                </a>
                <a class="icon">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </header>

    <nav class="navba_site grid-x show-for-medium">
        <ul class="menu">
            <li>
                <a href="#"> Início </a>
            </li>
            <li>
                <a href="#"> Sobre </a>
            </li>

            <li>
                <a href="#"> Soluções </a>
            </li>

            <li>
                <a href="#"> Novidades </a>
            </li>

            <li>
                <a href="#"> Contatos </a>
            </li>

        </ul>
    </nav>


    <section class="site_hero" style="background-image: url('<?= $caminho ?>/assets/imageHeroContainer.png')">
        <div class="site_hero__container text-center">
            <span>Emprestimo Pessoal</span>
            <h1 class="site_hero__title ">A solução para quem pensa no <br> futuro</h1>
            <button class="site_hero__cta button primary"> Saiba Mais </button>
        </div>
    </section>


    <section class="noticias_site grid-container">
        <div class="grid-x grid-margin-x">

            <div class="cell small-12 medium-4 card">
                <div class=" ">
                    <div class="img">
                        <img src="<?= $caminho ?>/assets/lendo.png" alt="">
                    </div>
                    <div class="content">
                        <h3 class="card__title ">Emprestimo Consignado</h3>
                        <p class="card__content">
                            As melhores taxas e condições para voce realizar os seus sonhos na melhor faze da vida
                            aproveite
                        </p>
                        <a href="#" class="card__action button primary"> Saiba mais </a>
                    </div>
                </div>
            </div>
            <div class="cell small-12 medium-4 card">
                <div class=" ">
                    <div class="img">
                        <img src="<?= $caminho ?>/assets/senhora.png" alt="">
                    </div>
                    <div class="content">
                        <h3 class="card__title ">Emprestimo Consignado</h3>
                        <p class="card__content">
                            As melhores taxas e condições para voce realizar os seus sonhos na melhor faze da vida
                            aproveite
                        </p>
                        <a href="#" class="card__action button primary"> Saiba mais </a>
                    </div>
                </div>
            </div>
            <div class="cell small-12 medium-4 callout noticias_site__sidebar">
                <ul class="no-bullet   noticias_site__sidebar__sub__container ">
                    <li>
                        <a href="">
                            <h3 class="noticias_site__sidebar__titulo">Financiamento Imobiliário</h3>
                        </a>
                        <p class="noticias_site__sidebar__conteudo">O credito que você precisa para enfim realizar o seu
                            sonho de obter a casa própria</p>
                    </li>
                    <li>
                        <a href="">
                            <h3 class="noticias_site__sidebar__titulo">Financiamento Imobiliário</h3>
                        </a>
                        <p class="noticias_site__sidebar__conteudo">O credito que você precisa para enfim realizar o seu
                            sonho de obter a casa própria</p>
                    </li>
                    <li>
                        <a href="">
                            <h3 class="noticias_site__sidebar__titulo">Financiamento Imobiliário</h3>
                        </a>
                        <p class="noticias_site__sidebar__conteudo">O credito que você precisa para enfim realizar o seu
                            sonho de obter a casa própria</p>
                    </li>
                    <li>
                        <a href="">
                            <h3 class="noticias_site__sidebar__titulo">Financiamento Imobiliário</h3>
                        </a>
                        <p class="noticias_site__sidebar__conteudo">O credito que você precisa para enfim realizar o seu
                            sonho de obter a casa própria</p>
                    </li>
                </ul>
            </div> <!-- cell -->
        </div> <!-- grid x -->
    </section> <!-- ./noticias -->

    <section class="grid-container">
        <div class="grid-x grid-margin-x novidades">

            <div class="cell small-12 medium-8">
                <h2 class="novidades__title">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    <span> Novidades </span>
                </h2>
                <hr>

                <div class="novidades__blog">
                    <div class="grid-container">
                        <ul class="grid-x grid-margin-x ">
                            <div class=" ">

                                <li class="grid-x grid-margin-x novidades__blog__list ">
                                    <div class="cell small-12  medium-6 novidades__blog__image__contaner">
                                        <img src="<?= $caminho ?>/assets/lendo.png" alt="">
                                    </div>
                                    <div class="cell small-12  medium-6">
                                        <span class="mini-box">
                                            Seu Dinheio
                                        </span>
                                        <a href="#">
                                            <h4 class="novidades__blog__title"> Poupança Antiga Bate Investimentos novos
                                                em
                                                8,5% </h4>
                                        </a>
                                        <p class='novidades__blog__content'> Meu Primeiro Post do ano, durante muito
                                            tempo eu estive estudando por
                                            compulsoriedade, mas descobri que além. </p>
                                        <p class="novidades__blog__publish-time">
                                            <i class="fa fa-clock-o"></i> <small> Publicado em 14/10/2020 </small>
                                        </p>
                                    </div>
                                </li>
                                <li class="grid-x grid-margin-x novidades__blog__list ">
                                    <div class="cell small-12  medium-6 novidades__blog__image__contaner">
                                        <img src="<?= $caminho ?>/assets/lendo.png" alt="">
                                    </div>
                                    <div class="cell small-12  medium-6">
                                        <span class="mini-box">
                                            Seu Dinheio
                                        </span>
                                        <a href="#">
                                            <h4 class="novidades__blog__title"> Poupança Antiga Bate Investimentos novos
                                                em
                                                8,5% </h4>
                                        </a>
                                        <p class='novidades__blog__content'> Meu Primeiro Post do ano, durante muito
                                            tempo eu estive estudando por
                                            compulsoriedade, mas descobri que além. </p>
                                        <p class="novidades__blog__publish-time">
                                            <i class="fa fa-clock-o"></i> <small> Publicado em 14/10/2020 </small>
                                        </p>
                                    </div>
                                </li>
                                <li class="grid-x grid-margin-x novidades__blog__list ">
                                    <div class="cell small-12  medium-6 novidades__blog__image__contaner">
                                        <img src="<?= $caminho ?>/assets/lendo.png" alt="">
                                    </div>
                                    <div class="cell small-12  medium-6">
                                        <span class="mini-box">
                                            Seu Dinheio
                                        </span>
                                        <a href="#">
                                            <h4 class="novidades__blog__title"> Poupança Antiga Bate Investimentos novos
                                                em
                                                8,5% </h4>
                                        </a>
                                        <p class='novidades__blog__content'> Meu Primeiro Post do ano, durante muito
                                            tempo eu estive estudando por
                                            compulsoriedade, mas descobri que além. </p>
                                        <p class="novidades__blog__publish-time">
                                            <i class="fa fa-clock-o"></i> <small> Publicado em 14/10/2020 </small>
                                        </p>
                                    </div>
                                </li>

                            </div>
                        </ul> <!-- ./grid-x -->
                    </div>
                </div>
            </div>
            <aside class="cell small-12 medium-4 aside">
                
                <div class="search ">
                    <h4 class="title"> Pesquisa </h4>
                    <div class="input-group">
                        <input placeholder="Ex: Crédito Pessoal" class="input-group-field" type="text">
                        <button type="submit" class='input-group-button button search__button'>
                            <i class="fa fa-search "></i>
                        </button>
                    </div>
                </div>

                <div class="show-case" style="height: 200px">
                    <a href="">
                        <div class="img degrade" style="background-image: url(<?= $caminho ?>/assets/beach.png);">
                            <h4 class="title"> Crédito Pessoal </h4>
                            <p class="desc"> Desfrute os benêficios que você e sua familia merecem. </p>
                        </div>
                    </a>
                </div>

                <div class="show-case" style="height: 200px">
                    <a href="">
                        <div class="img degrade" style="background-image: url(<?= $caminho ?>/assets/wallet-1013789_1280\ 1.png);">
                            <h4 class="title"> Crédito Pessoal </h4>
                            <p class="desc"> Desfrute os benêficios que você e sua familia merecem. </p>
                        </div>
                    </a>
                </div>

                <div class="links_sidebar">
                    <a href="">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>

            </aside>

        </div> <!-- ./ grid-x novidades -->
    </section> <!-- ./grid-container -->


    <section class="testimonial">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">

                <div class="cell small-12 medium-6 testimonial__item">
                    <p>
                        <em> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum metus vitae massa
                            dapibus, a ultricies purus interdum. Nunc fermentum, mauris et ornare condimentum, massa
                            turpis laoreet erat, ac f </em>
                    </p>
                    <p>
                        <span class="fa fa-user"></span>
                        Por João sergio - São Paulo - SP
                    </p>
                </div>
                <div class="cell small-12 medium-6 testimonial__item">
                    <p>
                        <em> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum metus vitae massa
                            dapibus, a ultricies purus interdum. Nunc fermentum, mauris et ornare condimentum, massa
                            turpis laoreet erat, ac f </em>
                    </p>
                    <p>
                        <span class="fa fa-user"></span>
                        Por João sergio - São Paulo - SP
                    </p>
                </div>

            </div><!-- ./ grid-x -->
        </div><!-- ./grid-container -->
    </section> <!-- ./testimonial -->


    <footer class="footer text-center">

        <div>
            <p class="footer__title__span">
                <span style="font-size: 24px;">Nãp Perca nenhuma Oportunidade</span>
            </p>
            <h3 class="footer__title">Inscreva-se em nossa newsletter </h3>
        </div>

        <div class="grid-x footer__form">
            <div class="large-offset-4 large-4 small-10 small-offset-1 ">
                <form action="">
                    <div class="search --no_background">
                        <div class="input-group">
                            <input placeholder="Coloque seu Email!" class="input-group-field" type="text">
                            <button type="submit" class='input-group-button button search__button'>
                                <i class="fa fa-search "></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="footer__logo">
            <p>
                <span style="font-weight: 300;"> Simple Credit</span>
            </p>
            <h3>Le Mans Consultoria </h3>
        </div>

        <div class="menu__footer">
            <ul class="menu align-center">
                <li>
                    <a href="#"> Início </a>
                </li>
                <li>
                    <a href="#"> Sobre </a>
                </li>

                <li>
                    <a href="#"> Soluções </a>
                </li>

                <li>
                    <a href="#"> Novidades </a>
                </li>

                <li>
                    <a href="#"> Contatos </a>
                </li>

            </ul>
        </div>

        <div class="contact">
            <span>
                <i class="fa fa-phone"></i>
                (11) 3253-1297 (11) 91284-2368
            </span>
            <br class="hide-for-medium" />
            <span>
                <i class="fa fa-envelope"></i>
                contato@minhaempresa.com
            </span>
        </div>
    </footer>

    <script src="<?= $caminho ?>/js/jquery.js"></script>
    <script src="<?= $caminho ?>/js/what-input.min.js"></script>
    <script src="<?= $caminho ?>/js/foundation.min.js"></script>
   
   
    <script src="<?= $caminho ?>/js/app.js"></script>
</body>

</html>