$(document).ready(function(){
    var baseUrl = document.location.origin;

    inserirDespesa = function (e,id) {


        var baseUrl = document.location.origin;

        var dados = item
       
        console.log(dados);


        $.ajax({
            type: "POST",
            url: baseUrl + "/malvina/Malvina/src/public/evento/menu-despesa",
            data:{
                'item':item,
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
