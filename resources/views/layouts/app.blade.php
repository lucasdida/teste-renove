<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bem Menininha</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <!-- HEADER -->
        <nav class="navbar sticky-top navbar-light navbar-bg-dark">
            <div class="col-sm-6">  
                Enviamos para todo o Brasil
            </div>
            <div class="col-sm-4">
                Atendimento das 8h as 18h de segunda a sexta
            </div>
            <div class="col-sm-2">
                (13) 98800 - 5400
            </div>
        </nav>
        <nav class="navbar navbar-light navbar-bg-light">
            <div class="col-sm-2">
                <a class="navbar-brand" href="#">
                    <img src="/images/bem_menininha_logo.png" width="150" height="38" class="d-inline-block align-top" alt="">
                </a>
            </div>
            <div class="col-sm-7" style="margin-top: 10px;">
                <form class="form-inline form-search">
                    <input class="form-control mr-sm-2 search-box" style="width:100%" type="search" placeholder="Busque aqui o seu produto" aria-label="Search">
                    <button class="submit-search" type="submit">
                        <i class="fas fa-search" style="font-size: 1.5rem; color: gray"></i>
                    </button>
                </form>
            </div>
            <div class="col-sm-2">
                Olá, <span class="font-weight-bold" style="font-size: 1.2rem;">Carlos.</span><ion-icon name="cart-outline" size="large" style="vertical-align:middle"></ion-icon>
            </div>
        </nav>
        <nav class="navbar navbar-light navbar-bg-light">
            <div class="col-sm-3">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" style="color:#ffffff" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <ion-icon name="menu-outline" class="icons-head" style="vertical-align:middle;"></ion-icon><span class="font-weight-bold">Todas as categorias</span><ion-icon name="chevron-down-outline" class="icons-head" style="vertical-align:middle;"></ion-icon>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Categoria 1</a>
                        <a class="dropdown-item" href="#">Categoria 2</a>
                    </li>
                </ul>
            </div>
                <div class="col-sm-8" style="margin-left:-8rem;">
                    <a class="head-links" style="margin-left:-3rem">Mais vendidas</a>
                    <a class="head-links">Ofertas do dia</a>
                    <a class="head-links">Atendimento ao Cliente</a>
                </div>
            </div>
        </nav>

        @yield('content')


        <!-- FOOTER -->
        <footer class="page-footer pt-4 pb-4 footer-bg-dark">
            <div class="container-fluid text-md-left footer-dark">
                <div class="row">
                    <div class="col-sm-3 d-flex">
                        <div class="footer-text-dark" style="margin-right:1rem;">
                        <i class="fas fa-truck" style="font-size: 50px;"></i>
                        </div>
                        <div class="footer-text-dark">
                            <span class="font-weight-bold" style="font-size:1.2rem;">Frete Grátis</span>
                            <span class="d-block">Acima de R$ 200,00</span>
                        </div>
                    </div>
                    <div class="col-sm-3 d-flex">
                        <div class="footer-text-dark" style="margin-right:1rem;">
                            <i class="fas fa-credit-card" style="font-size: 50px;"></i>
                        </div>
                        <div class="footer-text-dark">
                            <span class="font-weight-bold" style="font-size:1.2rem;">Em até 10x sem juros</span>
                            <span class="d-block">No cartão de crédito</span>
                        </div>
                    </div>
                    <div class="col-sm-3 d-flex">
                        <div class="footer-text-dark" style="margin-right:1rem;">
                            <i class="fas fa-truck" style="font-size: 50px;"></i>
                        </div>
                        <div class="footer-text-dark">
                            <span class="font-weight-bold" style="font-size:1.2rem;">Frete Grátis</span>
                            <span class="d-block">Acima de R$ 200,00</span>
                        </div>
                    </div>
                    <div class="col-sm-3 d-flex">
                        <div class="footer-text-dark" style="margin-right:1rem;">
                            <i class="fas fa-credit-card" style="font-size: 50px;"></i>
                        </div>
                        <div class="footer-text-dark">
                            <span class="font-weight-bold" style="font-size:1.2rem;">Em até 10x sem juros</span>
                            <span class="d-block">No cartão de crédito</span>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <footer class="page-footer pt-4 footer-bg-light">
            <div class="container text-center text-md-left">
                <div class="row">
                    <img src="/images/bem_menininha_logo.png" width="150" height="38" class="d-inline-block align-top center" alt="">
                </div>
            </div>
            <hr class="horizontal-line">
            <div class="container text-center text-md-left">
                <div class="row">
                    <div class="col-md-2 mx-auto footer-text">
                        <h5 class="font-weight-bold mt-3 mb-4">Departamento</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Beleza e Perfumaria</a>
                            </li>
                            <li>
                                <a href="#!">Moda</a>
                            </li>
                            <li>
                                <a href="#!">Saúde</a>
                            </li>
                            <li>
                                <a href="#!">Suplementos e vitaminas</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 mx-auto footer-text" style="margin-top:2.3rem;">
                        <h5 class="font-weight-bold mt-3 mb-4"></h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Kit mãe & filha</a>
                            </li>
                            <li>
                                <a href="#!">Moda</a>
                            </li>
                            <li>
                                <a href="#!">Saúde</a>
                            </li>
                            <li>
                                <a href="#!">T-shirts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="vertical-line"></div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 mx-auto footer-text">
                        <h5 class="font-weight-bold mt-3 mb-4">Institucional</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Quem Somos</a>
                            </li>
                            <li>
                                <a href="#!">Contato</a>
                            </li>
                            <li>
                                <a href="#!">Meus Pedidos</a>
                            </li>
                            <li>
                                <a href="#!">Políticas de privacidade</a>
                            </li>
                        </ul>
                    </div>
                    <div class="vertical-line"></div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 mx-auto footer-text">
                        <h5 class="font-weight-bold mt-3 mb-4">Redes Sociais</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">bem.menininhaoficial</a>
                            </li>
                            <li>
                                <a href="#!">bem.menininhaoficial</a>
                            </li>            
                        </ul>
                    </div>
                    <div class="vertical-line"></div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 mx-auto footer-text">
                        <h5 class="font-weight-bold mt-3 mb-4">Central de Ajuda</h5>
                        <ul class="list-unstyled">
                            <li>
                                Praia Grande - SP
                            </li>
                            <li>
                                <h5 class="font-weight-bold">(13) 98882-9281</h5>
                            </li>
                            <li>
                                Segunda a sexta: 8h30 às 22h
                            </li>                            
                            <li>
                                Sábado: Fechado
                            </li>
                            <li>
                                Domingo: Fechado
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <ul class="list-unstyled list-inline text-center py-2 footer-text" style="margin-top:-15px;">
                <li class="list-inline-item">
                    © 2020 Bemmenininha • Todos os direitos reservados. Avenida Presidente Kennedy, 3106, Aviação Praia Grande, São Paulo, Br
                </li>
            </ul>
        </footer>

        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="https://kit.fontawesome.com/3c18d26987.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </body>
</html>