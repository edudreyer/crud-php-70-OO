$(function() {
    $( "#dt_nasc_usu" ).datepicker({
        dateFormat: 'dd/mm/yy',
        closeText:"Fechar",
        prevText:"&#x3C;Anterior",
        nextText:"Próximo&#x3E;",
        currentText:"Hoje",
        monthNames: ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
        monthNamesShort:["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],
            dayNames:["Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado"],
            dayNamesShort:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],
        dayNamesMin:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],
        weekHeader:"Sm",
        firstDay:1
    });
});



jQuery("#telefone_usu")
    .mask("(99) 9999-9999?9")
    .focusout(function (event) {  
        var target, phone, element;  
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
        phone = target.value.replace(/\D/g, '');
        element = $(target);  
        element.unmask();  
        if(phone.length > 10) {  
            element.mask("(99) 99999-999?9");  
        } else {  
            element.mask("(99) 9999-9999?9");  
        }  
    });
$(document).ready(function () { 
    var $seuCampoCpf = $("#cpf_usu");
    $seuCampoCpf.mask('999.999.999-99', {reverse: true});
});

$(document).ready(function () {
        // Método para pular campos teclando ENTER
        $('.pula').on('keypress', function(e){
            var tecla = (e.keyCode?e.keyCode:e.which);

            if(tecla == 13){
                campo = $('.pula');
                indice = campo.index(this);

                if(campo[indice+1] != null){
                    proximo = campo[indice + 1];
                    proximo.focus();
                    e.preventDefault(e);
                }
            }
        });

         // Inseri máscara no CEP
        $("#cep_end").inputmask({
            mask: ["99999-999",],
            keepStatic: true
        });

         // Método para consultar o cep_end
        $('#cep_end').on('blur', function(){

            if($.trim($("#cep_end").val()) != ""){

                $("#mensagem").html('(Aguarde, consultando CEP ...)');
                $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep_end").val(), function(){

                    if(resultadoCEP["resultado"]){
                        $("#logradouro_end").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
                        $("#bairro_end").val(unescape(resultadoCEP["bairro"]));
                        $("#cidade_end").val(unescape(resultadoCEP["cidade"]));
                        $("#uf_end").val(unescape(resultadoCEP["uf"]));
                    }

                    $("#mensagem").html('');
                });             
            }           
        });
    }); 