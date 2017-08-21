/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Created by jhon.carvalho on 27/06/2017.
 */

var baseUrl = document.location.origin;
var self = this;

addDespesa = function (arrayDespesa) {
    var baseUrl = document.location.origin;
    var dados = arrayDespesa;
    /*var arrayDados= dados.split('&');
    var json=[];
    var item={};*/

   /* for(var i = 0; i< arrayDados.length; i++){
        item[arrayDados[i].split('=')[0]]=arrayDados[i].split('=')[1];
    }*/

    $.ajax({
        type: "POST",
        url: baseUrl + "malvina/Malvina/src/public/despesa/add",
        data: dados,
        cache: false,
        success: function (data) {
            console.log(data);

           // msg("Inserido com sucesso !","alert alert-success");

            //$('#tbCurso').DataTable().row.add(item).draw(false);

        },
        error: function (data) {

        }
    })


};



