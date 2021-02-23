$(function () {
    $('#cep').val("");
    
    $('#cep-mobile').val("");
    $('#cep-mobile').mask("99999-999");
    $('#cep').mask("99999-999");
    
})



$('#btn-cep').on('click', function() {
    var cep = $('#cep').val().replace(/\D/g, '');
    verificacep(cep);
});

$('#btn-cep-mobile').on('click', function() {
    var cep = $('#cep-mobile').val().replace(/\D/g, '');
    verificacep(cep);
});

$('.product-min').on('click', function () {
    var image_path = $(this).attr('src');
    image_path = '<img src="' + image_path + '">';


    $('.product-image').css('visibility', 'hidden');
    $('.product-image').html(image_path);
    $('.product-image').css('visibility', 'visible');
});


function verificacep(cep) {
            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
    
                //Valida o formato do CEP.
                if(validacep.test(cep)) {
    
                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
    
                        if (!("erro" in dados)) {
                            console.log('Logradouro: ' + dados.logradouro + ' - Bairro: ' + dados.bairro + ' - Cidade: ' + dados.localidade + ' - UF: ' + dados.uf);

                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    alert("Formato de CEP inválido.");
                }
            } //end if.
}



 