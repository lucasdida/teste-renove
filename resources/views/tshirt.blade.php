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
            <div class="card product-card">
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
            <div class="card price-card">
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
                        De <spam class="old-price">R$ 350,90</spam> por
                        <spam class="new-price font-weight-bold d-block">R$ 197,90</spam>
                        em 5x de <spam class="font-weight-bold" style="color: #0daa58;">R$ 48,90<spam>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection