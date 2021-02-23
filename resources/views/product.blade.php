@extends('layouts.app', ["current" => "product"])

@section('content')


<div class="container-fluid content-bg">
    <div class="row links links-desk">
        <div class="col-sm-1.5 content-marg">
            <button type="button" class="btn btn-outline-dark font-weight-bold">Voltar a lista</button>
        </div>
        <div class="col">
            <a>Inicio</a><span>></span><a>camisetas</a><span>></span><a>Camiseta feminina leão manga curta</a>
        </div>
    </div>

    <div class="row product">
        <div class="col-sm-8">
            <div class="card product-card">
                <div class="card-body">
                    <div class="product-miniatures">
                        <img class="product-min" src="/images/roupa-leao.png">
                        <img class="product-min" src="/images/roupa-leao-red.png">
                        <img class="product-min" src="/images/roupa-leao-blue.png">
                        <img class="product-min" src="/images/roupa-leao-green.png">
                    </div>
                    <div class="product-image">
                        <img src="/images/roupa-leao.png">
                    </div>
                    <div class="product-obs">
                        <div class="delivery-normally">
                            <span>Entregando normalmente</span>
                        </div>
                        
                        <div class="row links links-mobile">
                            <div class="col">
                                <span><</span><a>Camiseta feminina leão manga curta</a>
                            </div>
                        </div>

                        <h5 class="product-text-color">Camisa feminina leão manga curta</h5>
                        
                        <div class="stars" style="display:inline-block">
                            ★★★★☆ <span class="parentheses product-text-color">(118)</span>
                        </div>
                        <a class="evaluate" style="color: #4583d5;">avaliar o produto</a>

                        <!-- CAROUSEL MOBILE-->
                        <div id="carouselExampleIndicators" class="carousel slide d-block center" data-ride="carousel" style="width:25rem; margin-top:30px;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/images/roupa-leao.png">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/roupa-leao-red.png">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/roupa-leao-blue.png">
                                </div> 
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/roupa-leao-green.png">
                                </div>
                            </div>
                            <ol class="carousel-indicators" style="position:inherit">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                        </div>
                        <!-- ------ -->

                        <div class="product-text product-text-color">
                            <span>Lorem Ipsum é um texto fictício da indústria de impressão e composição. 
                                  Lorem Ipsum tem sido o texto fictício padrão da indústria.</span>        
                        </div>
                        <a class="more-info product-text-color">mais informações</a>
                        <div class="cep-calc product-text-color" style="width:70%">
                            <label for="cep"><h6>Simular Frete</h6></label>
                            <input type="text" class="form-control" id="cep" placeholder="Informe o seu CEP">
                        </div>
                        <button type="button" class="btn font-weight-bold btn-cep-mobile" id="btn-cep">OK</button>

                        <div class="share product-text-color d-block" style="margin-top:16%; margin-left:50%; position:static">
                            <h6>Compartilhar</h6>
                        </div>
                        <div class="share product-text-color">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-google-plus-g"></i>
                            <i class="fab fa-pinterest"></i>
                            <i class="far fa-envelope"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-2">
            <div class="card price-card">
                <div class="card-body">
                    <div class="expire d-flex">
                        <div>
                            <i class="far fa-clock clock-icon"></i>
                        </div>
                        <div class="offer-box">
                            <span class="font-weight-bold offer-text">OFERTA EXPIRA EM:</span>
                            <span class="d-block" style="padding-left:15px; font-size:13px; text-decoration: underline; margin-top:-7px;">3 dias - 19:38:25</span>
                        </div>
                    </div>
                    <div class="prices product-text-color">
                        De <span class="old-price">R$ 350,90</span> por
                        <span class="new-price font-weight-bold d-block">R$ 197,90</span>
                        em 5x de <span class="font-weight-bold" style="color: #0daa58;">R$ 48,90</span>
                    </div>
                    <div class="prices product-text-color">
                        <select class="custom-select custom-select-sm select-size">
                            <option>Tamanho P</option>
                            <option>Tamanho M</option>
                            <option>Tamanho G</option>
                        </select>
                        5 unid. em estoque

                        <div>
                            <span class="font-weight-bold" style="font-size:0.6rem; color:black">Quantidade: </span>

                            <select class="select-quantity">
                                <option value="1">1 unidade</option>
                                <option value="2">2 unidades</option>
                                <option value="3">3 unidades</option>
                                <option value="4">4 unidades</option>
                                <option value="5">5 unidades</option>
                            </select>

                            <span style="font-size:0.6rem">  (15 unidades disponíveis)<span>
                        </div>
                    </div>
                    <div class="buttons-buy-add">
                        <button type="button" class="btn font-weight-bold btn-buy">Comprar agora</button>
                        <button type="button" class="btn font-weight-bold btn-add">Adicionar a sacola</button>
                    </div>



                </div>
            </div>

            <div class="card guaranteed-purchase" style="margin-top:2px;">
                <div class="card-body">
                    <span style="color:#007bff;">Compra Garantida</span>, receba o produto que está esperando ou devolvemos o dinheiro.
                    <div class="creditcard-images" style="margin-bottom:-1px">
                        <img src="images/visa.jpg">
                        <img src="images/mastercard.svg">
                        <img src="images/hipercard.svg">
                        <img src="images/americanexpress.png">
                        <img src="images/elo.svg">
                        <img src="images/dinners.png">
                        <img src="images/boleto.png">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row cep-calc-mobile" style="margin-top:1rem">
        <div class="col" style="padding:0">
            <div class="card">
                <div class="card-body">
                    <div class="col-sm-8" style="display:inline-block">
                        <label class="font-weight-bold" for="cep-mobile">Calcule o frete e prazo</label>
                        <input type="text" class="form-control form-control-lg cep-mobile d-flex"  placeholder="Digite o cep" id="cep-mobile">
                    </div>
                    
                    <button type="button" class="btn font-weight-bold btn-cep-mobile" id="btn-cep-mobile">OK</button>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row desc-product">
        <div class="col">    
            <div class="card desc-product-card">
                <div class="card-body">
                    <span class="d-block tittle font-weight-bold">DESCRIÇÃO DO PRODUTO</span>
                    Lorem Ipsum é simplesmente um texto fictício da indústria de impressão e composição. Lorem Ipsum tem sido o texto
                    fictício padrão da indústria. um texto fictício da indústria de impressão e composição. Lorem Ipsum tem sido o texto fictício 
                    padrão da indústria. um texto fictício da indústria de impressão e composição. Lorem Ipsum tem sido o texto fictício padrão 
                    da indústria. um texto fictício da indústria de impressão e composição. Lorem Ipsum tem sido o texto fictício padrão da 
                    indústria. um texto fictício da indústria de impressão e composição. Lorem Ipsum tem sido o texto
                    fictício padrão da indústria.
                
                    <div class="call-center text-center font-weight-bold">
                        Fale com a Central de Atendimento ao Cliente
                    </div>
                </div>
            </div>
            <div class="card product-details-card">
                <div class="card-body">
                    <span class="d-block tittle font-weight-bold">DETALHES DO PRODUTO</span>

                    <table class="table-bordered tb-specification font-weight-bold">
                        <tbody>
                            <tr>
                                <td>Marca</td>
                                <td>HP</td>
                            </tr>
                            <tr>
                                <td>Fabricante</td>
                                <td>HP</td>
                            </tr>
                            <tr>
                                <td>Formato</td>
                                <td>2.5 Polegadas</td>
                            </tr>
                            <tr>
                                <td>Altura do produto</td>
                                <td>2 Centímetros</td>
                            </tr>
                            <tr>
                                <td>Largadura do produto</td>
                                <td>12 Centímetros</td>
                            </tr>
                            <tr>
                                <td>Tamanho da memória externa</td>
                                <td>120</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <a class="more-info">continuar conteúdo...</a>
            </div>
            <div class="card related-products-card">
                <div class="card-body">
                    <span class="d-block tittle font-weight-bold">PRODUTOS RELACIONADOS</span>

                    <div class="row related-products">
                        <div class="col-sm-2">
                            <img src="images/hd.png">
                            HD SSD 128GB Sata
                            Modelo Samsung
                            <span class="d-block font-weight-bold" style="color:black; margin-top:7px; margin-bottom:-8px">R$ 349,90</span>
                            <span style="font-weight:400; font-size:11px">Ou 5x de R$ 29,90 sem juros</span>
                        </div>
                        <div class="col-sm-2">
                            <img src="images/hd.png">
                            HD SSD 128GB Sata
                            Modelo Samsung
                            <span class="d-block font-weight-bold" style="color:black; margin-top:7px; margin-bottom:-8px">R$ 349,90</span>
                            <span style="font-weight:400; font-size:11px">Ou 5x de R$ 29,90 sem juros</span>
                        </div>
                        <div class="col-sm-2">
                            <img src="images/hd.png">
                            HD SSD 128GB Sata
                            Modelo Samsung
                            <span class="d-block font-weight-bold" style="color:black; margin-top:7px; margin-bottom:-8px">R$ 349,90</span>
                            <span style="font-weight:400; font-size:11px">Ou 5x de R$ 29,90 sem juros</span>
                        </div>
                        <div class="col-sm-2">
                            <img src="images/hd.png">
                            HD SSD 128GB Sata
                            Modelo Samsung
                            <span class="d-block font-weight-bold" style="color:black; margin-top:7px; margin-bottom:-8px">R$ 349,90</span>
                            <span style="font-weight:400; font-size:11px">Ou 5x de R$ 29,90 sem juros</span>
                        </div>
                        <div class="col-sm-2">
                            <img src="images/hd.png">
                            HD SSD 128GB Sata
                            Modelo Samsung
                            <span class="d-block font-weight-bold" style="color:black; margin-top:7px; margin-bottom:-8px">R$ 349,90</span>
                            <span style="font-weight:400; font-size:11px">Ou 5x de R$ 29,90 sem juros</span>
                        </div>
                    </div>

                    <div class="row opinions d-flex d-justify-content-center">
                        <div class="col">
                            <h5>Opiniões sobre o produto</h5>

                            <div class="client-review">
                                <ul class="list-unstyled">
                                    <li class="d-flex">
                                        <div class="client-circle">F</div>
                                        <div style="margin-top:-5px">
                                            <span class="font-weight-bold d-flex" style="color:#000000">
                                                Fernando - <div class="stars evaluate d-flex" style="margin-top:-2px">★★★★☆</div>
                                            </span>
                                            <span class="d-block">Review do produto</span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="client-circle">F</div>
                                        <div style="margin-top:-5px">
                                            <span class="font-weight-bold d-flex" style="color:#000000">
                                                Fernando - <div class="stars evaluate d-flex" style="margin-top:-2px">★★★★☆</div>
                                            </span>
                                            <span class="d-block">Review do produto</span>
                                        </div>
                                    </li>
                                    <li class="d-flex" style="opacity:0.6">
                                        <div class="client-circle">F</div>
                                        <div style="margin-top:-5px">
                                            <span class="font-weight-bold d-flex" style="color:#000000">
                                                Fernando - <div class="stars evaluate d-flex" style="margin-top:-2px">★★★★☆</div>
                                            </span>
                                            <span class="d-block">Review do produto</span>
                                        </div>
                                    </li>
                                </ul>
                                <a class="font-weight-bold">Ver todas as opiniões <i class="fas fa-arrow-right"></i></a>
                            </div>

                        </div>
                        <div class="vertical-line" style="color:#cecece; margin-top:5rem; margin-bottom:3rem"></div>
                        <div class="col">
                            <h5>Opiniões dos Clientes (13)</h5>
                            <div class="client-opinion d-flex">
                                <span class="font-weight-bold" style="font-size:6rem">4.0</span>
                                <div style="margin-top:2rem">
                                    <div class="stars evaluate" style="font-size:2rem">★★★★☆</div>
                                    <span class="d-block font-weight-bold" style="font-size:13px; float:right">Média entre 23 opiniões<span>
                                </div>
                            </div>
                            <hr class="horizontal-line" style="color:#cecece; opacity:1">
                            <div class="d-flex">
                                <div class="percentage-circle font-weight-bold">98%</div>
                                <span class="font-weight-bold" style="color:#8c8a8a; font-size:1.2rem; margin-left:1rem; margin-top:0.5rem">Recomendaram esse produto</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <span class="font-weight-bold suggestions" style="color:#747474; font-size:20px; margin-top:2rem;">Quem viu esse produto também comprou</span>

    <div class="row suggestions suggest-cards d-flex d-justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img src="images/hd.png" class="suggestion-product">
                    HD SSD 128GB Sata
                    Modelo Samsung
                    <span class="d-block font-weight-bold" style="color:black; margin-top:7px; margin-bottom:-8px">R$ 349,90</span>
                    <span style="font-weight:400; font-size:11px">Ou 5x de R$ 29,90 sem juros</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img src="images/hd.png" class="suggestion-product">
                    HD SSD 128GB Sata
                    Modelo Samsung
                    <span class="d-block font-weight-bold" style="color:black; margin-top:7px; margin-bottom:-8px">R$ 349,90</span>
                    <span style="font-weight:400; font-size:11px">Ou 5x de R$ 29,90 sem juros</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img src="images/hd.png" class="suggestion-product">
                    HD SSD 128GB Sata
                    Modelo Samsung
                    <span class="d-block font-weight-bold" style="color:black; margin-top:7px; margin-bottom:-8px">R$ 349,90</span>
                    <span style="font-weight:400; font-size:11px">Ou 5x de R$ 29,90 sem juros</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img src="images/hd.png" class="suggestion-product">
                    HD SSD 128GB Sata
                    Modelo Samsung
                    <span class="d-block font-weight-bold" style="color:black; margin-top:7px; margin-bottom:-8px">R$ 349,90</span>
                    <span style="font-weight:400; font-size:11px">Ou 5x de R$ 29,90 sem juros</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img src="images/hd.png" class="suggestion-product">
                    HD SSD 128GB Sata
                    Modelo Samsung
                    <span class="d-block font-weight-bold" style="color:black; margin-top:7px; margin-bottom:-8px">R$ 349,90</span>
                    <span style="font-weight:400; font-size:11px">Ou 5x de R$ 29,90 sem juros</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img src="images/hd.png" class="suggestion-product">
                    HD SSD 128GB Sata
                    Modelo Samsung
                    <span class="d-block font-weight-bold" style="color:black; margin-top:7px; margin-bottom:-8px">R$ 349,90</span>
                    <span style="font-weight:400; font-size:11px">Ou 5x de R$ 29,90 sem juros</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row product-buttons">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="buttons-buy-add-mobile">
                        <button type="button" class="btn font-weight-bold btn-buy">Comprar agora</button>
                        <button type="button" class="btn font-weight-bold btn-add">Adicionar a sacola</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection