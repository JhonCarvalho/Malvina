/**
 * Created by jhon.carvalho on 23/08/2017.
 */
$(document).ready(function(){
    var baseUrl = document.location.origin;

    $('form').submit(function (e) {
        
        var baseUrl = document.location.origin;

        var dados = $("form").serialize();

        

        $.ajax({
         type: "POST",
         url: baseUrl + "/malvina/Malvina/src/public/evento/add",
         data:dados,
         cache: false,
         success: function (data) {
            try {
                idevento = JSON.parse(data);

                console.log(idevento.idevento);
                if (itemEquipe.length != 0) {
                    inserirEquipe(e, idevento.idevento);
                }
                if (item.length != 0) {
                    inserirDespesa(e, idevento.idevento);
                }
                location.href = baseUrl+"/malvina/Malvina/src/public/evento";
            }catch(e){

            }


         },
         error: function (data) {

         }
         });
        e.preventDefault();
        return false;
    });


    });




