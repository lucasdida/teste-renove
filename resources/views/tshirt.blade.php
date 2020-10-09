@extends('layouts.app', ["current" => "tshirt"])

@section('content')


<div class="container-fluid content-bg">
    <div class="row links">
        <div class="col-sm-1.5 content-marg">
            <button type="button" class="btn btn-outline-dark font-weight-bold">Voltar a lista</button>
        </div>
        <div class="col">
            <a>Inicio</a><span>></span><a>camisetas</a><span>></span><a>Camiseta feminina leão manga curta</a>
        </div>
    </div>

    <div class="row product">
        <div class="col-sm-8">
            <div class="card product-card" style="border:none">
                <div class="card-body">
                    <div class="product-miniatures">
                        <img src="/images/roupa-leao.png">
                        <img src="/images/roupa-leao-red.png">
                        <img src="/images/roupa-leao-blue.png">
                        <img src="/images/roupa-leao-green.png">
                    </div>
                    <div class="product-image">
                        <img src="/images/roupa-leao.png">
                    </div>
                    <div class="product-obs">
                        <div class="delivery-normally">
                            <span>Entregando normalmente</span>
                        </div>
                        
                        <h5 class="product-text-color">Camisa feminina leão manga curta</h5>
                        
                        <div class="stars evaluate">
                            ★★★★★ <span class="parentheses product-text-color">(118)</span>
                        </div>
                        <a style="color: #4583d5; float: right;">avaliar o produto</a>
                        <div class="product-text product-text-color">
                            <span>Lorem Ipsum é um texto fictício da indústria de impressão e composição. 
                                  Lorem Ipsum tem sido o texto fictício padrão da indústria.</span>        
                        </div>
                        <a class="product-text-color">mais informações</a>
                        <div class="cep-calc product-text-color">
                            <label for="cep"><h6>Simular Frete</h6></label>
                            <input type="text" class="form-control" id="cep" placeholder="Informe o seu CEP">
                        </div>

                        <div class="share product-text-color" style="margin-top: 2rem;">
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
            <div class="card price-card" style="border:none">
                <div class="card-body">
                    <div class="expire d-flex">
                        <div>
                            <i class="far fa-clock" style="font-size:2.3rem;"></i>
                        </div>
                        <div>
                            <span class="font-weight-bold" style="padding-left:15px;">OFERTA EXPIRA EM:</span>
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

                        <span class="font-weight-bold" style="font-size:0.6rem; color:black">Quantidade: </span>

                        <select style="border:none; width:32%; font-size:0.7rem">
                            <option value="1">1 unidade</option>
                            <option value="2">2 unidades</option>
                            <option value="3">3 unidades</option>
                            <option value="4">4 unidades</option>
                            <option value="5">5 unidades</option>
                        </select>

                        <span style="font-size:0.6rem">(15 unidades disponíveis)<span>
                    </div>
                    <div class="buttons-buy-add">
                        <button type="button" class="btn font-weight-bold btn-buy">Comprar agora</button>
                        <button type="button" class="btn font-weight-bold btn-add">Adicionar a sacola</button>
                    </div>



                </div>
            </div>

            <div class="card guaranteed-purchase" style="border:none; margin-top:2px;">
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

    <div class="row desc-product">
        <div class="col">    
            <div class="card" style="border:none">
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
                </div>
            </div>
        </div>
    </div>


</div>


@endsection