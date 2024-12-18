<?php 
if (isset($_SESSION) == false) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brazil Inverters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- Barra lateral de navegação -->
    <div class="sidebar">
        <a href="#" class="logo-sidebar">
            <div class="logo-container">
                <img src="./img/logo.png" alt="Logo" class="logo-image">
            </div>
        </a>
        <nav>
            <ul>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path
                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                        </svg> Início</a></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-shop-window" viewBox="0 0 16 16">
                            <path
                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5" />
                        </svg>Loja</a></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-collection-fill" viewBox="0 0 16 16">
                            <path
                                d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3m2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1" />
                        </svg> Biblioteca</a></li>
                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                            <path
                                d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.187-1.187l-.283.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205C4.16 7.023 5.369 6.252 6.064 6.931l.284.08a.96.96 0 0 0 1.187-1.187l-.081-.283c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286z" />
                        </svg> Configurações</a>
                </li>
            </ul>
        </nav>
    </div>

    <header>

        <!-- Barra de pesquisa com animação -->
        <div class="search-container">
            <input type="text" placeholder="Pesquisar jogos..." id="search-bar">
            <button type="button" id="search-button">Pesquisar</button>
        </div>
        <div class="navbar-container">
            <div class="nav-left">
                <nav>
                    <ul>
                        <li><a href="#">Descobrir</a></li>
                        <li><a href="#">Navegar</a></li>
                        <li><a href="#">Novidades</a></li>
                    </ul>
                </nav>
            </div>
            <div class="logo">
                <h1>Brazil <span>Inverters</span></h1>
            </div>
            <div class="nav-right">
                <nav>
                    <ul>
                        <li><a href="#">Lista de desejos</a></li>
                        <li><a href="#">Carrinho</a></li>
                        <span class="separator">|</span> <!-- Adicionado aqui -->

                        <!-- Icone Play Store -->
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-google-play" viewBox="0 0 16 16">
                                    <path
                                        d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055zM1 13.396V2.603L6.846 8zM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27" />
                                </svg>
                            </a>
                        </li>

                        <!-- Icone Amigos -->
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                </svg>
                            </a>
                        </li>
                        
                        <!-- Icone Perfil -->
                        <?php if(isset($_SESSION['usuario_id'])): ?>
                        <li>
                            <a href="../admin/rotas.php?action=logout">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>
                            </a>
                        </li>
                        <?php else: ?>
                            <a href="../admin/login.php">
                            <button class="d-flex btn-login">Entrar</button>
                            </a>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>


    </header>


    <!-- Carrossel -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div id="epicGamesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/carossel_war.jpg" class="d-block w-100" alt="Slide 1">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>God of War</h5>
                                <p>Com a vingança contra os deuses do Olimpo
                                    em um passado distante, Kratos agora vive como 
                                    um mortal no reino dos deuses e monstros nórdicos.
                                </p>
                                <a href="#" >
                                <button class="content-button">Comprar</button>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/call-of-duty-carrosel.jpg" class="d-block w-100" alt="Slide 2">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Call od Duty - Black Ops</h5>
                                <p>Call of Duty: Black Ops é um jogo de tiro em primeira pessoa, focado em 
                                    operações secretas durante a Guerra Fria, com narrativa intensa e modos 
                                    multiplayer envolventes.</p>
                                    <a href="#" >
                                <button class="content-button">Comprar</button>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/valorant_carrossel.jpg" class="d-block w-100" alt="Slide 3">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Valorant</h5>
                                <p>Valorant é um jogo de tiro tático em primeira pessoa, 
                                    onde equipes de cinco jogadores competem usando habilidades 
                                    únicas e estratégia. Combina ação rápida com mecânicas precisas.</p>
                                    <a href="#" >
                                <button class="content-button">Baixar</button>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/fornite_carrosel.webp" class="d-block w-100" alt="Slide 3">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Fortnite</h5>
                                <p>*Fortnite* é um jogo de batalha real com construção em tempo real,
                                     onde jogadores competem em um mapa para serem os últimos sobreviventes. 
                                     Inclui modos criativos e eventos temáticos.</p>
                                <a href="#" class="btn btn-primary">Baixar</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/elden_corrossel.webp" class="d-block w-100" alt="Slide 3">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Elden Ring</h5>
                                <p>*Elden Ring* é um RPG de ação em mundo aberto, com combate 
                                    desafiador, exploração intensa e uma narrativa co-criada 
                                    por George R.R. Martin e Hidetaka Miyazaki.</p>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/lol.webp" class="d-block w-100" alt="Slide 3">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>League of Legends</h5>
                                <p>*League of Legends* é um jogo de estratégia em equipe,
                                     onde dois times de cinco campeões competem para destruir a 
                                     base adversária, combinando habilidade, tática e cooperação.</p>
                                <a href="#" class="btn btn-primary">Baixar</a>
                            </div>
                        </div>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#epicGamesCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#epicGamesCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="row" id="games-list">
                    <div class="col-4 mb-3"> <!-- Alterado de col-6 para col-4 -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="./img/war.jpeg" alt="Game 1" class="img-fluid game-image">
                        </a>
                    </div>
                    <div class="col-4 mb-3"> <!-- Alterado de col-6 para col-4 -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="./img/warzone.jpeg" alt="Game 2" class="img-fluid game-image">
                        </a>
                    </div>
                    <div class="col-4 mb-3"> <!-- Alterado de col-6 para col-4 -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="./img/valorant_lateral.20ed7782-0eda-4f9d-b421-4cc47492edc6" alt="Game 3" class="img-fluid game-image">
                        </a>
                    </div>
                    <div class="col-4 mb-3"> <!-- Alterado de col-6 para col-4 -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="./img/fortnite.jpeg" alt="Game 4" class="img-fluid game-image">
                        </a>
                    </div>
                    <div class="col-4 mb-3"> <!-- Alterado de col-6 para col-4 -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="./img/elden_lateral.jpg" alt="Game 4" class="img-fluid game-image">
                        </a>
                    </div>
                    <div class="col-4 mb-3"> <!-- Alterado de col-6 para col-4 -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="./img/lol.webp" alt="Game 4" class="img-fluid game-image">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    

    </section>
    <h4>Descubra algo novo <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
      </svg></h4>
    <div class="carosel">
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://assets1.ignimgs.com/2019/08/26/rocket-league---button-fin-1566850630208.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://static-cdn.jtvnw.net/ttv-boxart/ATLAS.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://cdn-prod.scalefast.com/public/assets/user/6562614/image/fc0fea76b4a2f75dc282d0dba05a31a1.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://assets1.ignimgs.com/2019/08/26/rocket-league---button-fin-1566850630208.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://s2.gaming-cdn.com/images/products/322/orig/bioshock-cover.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://m.media-amazon.com/images/M/MV5BNzEyNGM5YjgtYjFkMC00MTE1LTk1YjgtNjAyYjA2ODUzNzQwXkEyXkFqcGdeQXVyNjk2MTcyMDA@._V1_.jpg"></img>
          </div>
        </div>
      
      </div>

      <div class="content">
        <button id="prev" class="btn">
            <i class='bx bxs-chevron-left'></i>
        </button>
        <div class="con-cards">
            <div class="card">
                <h3>4.6</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/1.png" alt="">
                    <img class="blur" src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/1.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Clash Royale
                    </h2>
                    <p>
                        <!-- text... -->
                        Dare to step on the sand! From the creators of Clash of Clans, comes Clash Royale, a real-time multiplayer game starring your favorite Clash.
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>4.1</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/2.png" alt="">
                    <img class="blur" src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/2.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Assassins Creed
                    </h2>
                    <p>
                        It is a series of video games, comics, books, and shorts of historical fiction. Video games are action-adventure, stealth and open world.
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>4.8</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/4.png" alt="">
                    <img class="blur" src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/4.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Fortnite
                    </h2>
                    <p>
                        Fortnite is a video game of the year 2017 developed by the company Epic Games, released as different software packages that present different game modes
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>3.9</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/5.png" alt="">
                    <img class="blur" src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/5.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Angry Birds
                    </h2>
                    <p>
                        Angry Birds is a casual video game from 2009 developed by Rovio Entertainment
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>4.2</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/6.png" alt="">
                    <img class="blur" src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/6.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Clash of Clans
                    </h2>
                    <p>
                        also known as CoC is an online strategy and village building video game, for mobile devices with IOS and Android platforms.
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>4.9</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/7.png" alt="">
                    <img class="blur" src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/7.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Dark Souls
                    </h2>
                    <p>
                        The Souls series is a series of video games belonging to the role-playing and action genre, created and developed by the company From Software.
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>3.6</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/8.png" alt="">
                    <img class="blur" src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/8.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Far Cry 4
                    </h2>
                    <p>
                        Is an open world first person action video game developed by Ubisoft Montreal in conjunction with Ubisoft Red Storm,
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>3.8</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/9.png" alt="">
                    <img class="blur" src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/9.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Final Fantasy
                    </h2>
                    <p>
                        Final Fantasy XV is a video game of the ARPG genre developed by Square Enix, for PlayStation 4, Xbox One and Microsoft Windows.
                    </p>
                </div>
            </div>
            <div class="card">
                <h3>4.7</h3>
                <i class='bx bx-heart'></i>
                <div class="con-img">
                    <img src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/10.png" alt="">
                    <img class="blur" src="https://raw.githubusercontent.com/luisDanielRoviraContreras/img/master/10.png" alt="">
                </div>
                <div class="con-text">
                    <h2>
                        Gears of War
                    </h2>
                    <p>
                        <!-- card elements... -->
                        Gears of War 4 or Gears 4 is a third-person shooter and action video game developed by The Coalition and distributed by Microsoft released on October 11, 2016 for Xbox One
                    </p> 
                </div>
            </div>
        </div>
        <button id="next" class="btn">
            <i class='bx bxs-chevron-right' ></i>
        </button>
    </div> <br>

    <h4>Descubra algo novo <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
      </svg></h4>
    <div class="carosel">
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://assets1.ignimgs.com/2019/08/26/rocket-league---button-fin-1566850630208.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://static-cdn.jtvnw.net/ttv-boxart/ATLAS.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://cdn-prod.scalefast.com/public/assets/user/6562614/image/fc0fea76b4a2f75dc282d0dba05a31a1.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://assets1.ignimgs.com/2019/08/26/rocket-league---button-fin-1566850630208.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://s2.gaming-cdn.com/images/products/322/orig/bioshock-cover.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://m.media-amazon.com/images/M/MV5BNzEyNGM5YjgtYjFkMC00MTE1LTk1YjgtNjAyYjA2ODUzNzQwXkEyXkFqcGdeQXVyNjk2MTcyMDA@._V1_.jpg"></img>
          </div>
        </div>
      
      </div>

      <h4>Descubra algo novo <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5"/>
      </svg></h4>
    <div class="carosel">
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://assets1.ignimgs.com/2019/08/26/rocket-league---button-fin-1566850630208.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://static-cdn.jtvnw.net/ttv-boxart/ATLAS.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://cdn-prod.scalefast.com/public/assets/user/6562614/image/fc0fea76b4a2f75dc282d0dba05a31a1.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://assets1.ignimgs.com/2019/08/26/rocket-league---button-fin-1566850630208.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://s2.gaming-cdn.com/images/products/322/orig/bioshock-cover.jpg"></img>
          </div>
        </div>
        <div class="glossy-card">
          <div class="image-container">
            <img src="https://m.media-amazon.com/images/M/MV5BNzEyNGM5YjgtYjFkMC00MTE1LTk1YjgtNjAyYjA2ODUzNzQwXkEyXkFqcGdeQXVyNjk2MTcyMDA@._V1_.jpg"></img>
          </div>
        </div>
      
      </div>

      

    <footer>
        <p>© 2024 GamePlatform. Todos os direitos reservados.</p>
    </footer>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

    <script src="index.js"></script>

</body>

</html>