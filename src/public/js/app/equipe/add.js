$(document).ready(function(){
    var baseUrl = document.location.origin;

    inserirEquipe = function (e,id) {


        var baseUrl = document.location.origin;

        var dados = itemEquipe;
       
        console.log(dados);


        $.ajax({
            type: "POST",
            url: baseUrl + "/malvina/Malvina/src/public/evento/menu-equipe",
            data:{
                'itemEquipe':itemEquipe,
                'idevento':id
            },
            cache: false,
            success: function (data) {
                msg = JSON.parse(data);
             alert(msg.msg);

            },
            error: function (data) {

            }
        });
        e.preventDefault();
        return false;
    }


});
