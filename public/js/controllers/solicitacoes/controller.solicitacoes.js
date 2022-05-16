$(function () {

    

    var btnAceitar = $(".btnAceitar");

    btnAceitar.click ( function () {

        var key = $(this).attr("data-chave-solicatao") * 1;
        var baseUrl = $("#urlApiAceitarSolicitacoes").val();
        

        $.ajax({
            url: baseUrl,
            data: {
                chave: key
            },
            type: "POST",

            success: function ( resposta ) {

                console.log ( resposta );
                if ( resposta.status ) {
                    var linha = $("#row_" + key);
                    linha.css("background-color", "green");
                    linha.css("color", "white");
                    
            
                    $(this).attr('disabled', 'disabled');
            
                    $("#btn_ban_" + key).attr('disabled', 'disabled');
                    $("#btn_eye_" + key).attr('disabled', 'disabled');
                } else {
                    alert ("Ops, não conseguimos completar a operação.");
                }

            },
            erro: function ( e ) {
                alert ("erro de comunicação");
            }
        });


        
       
        


    });



});