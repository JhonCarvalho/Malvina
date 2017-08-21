/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Adicionar //
$(document).ready(function(){
    jsonDespesa = {};
    item= [];
dialogDespesa = $('#dialogDespesa'),
    form = "",
addDespesa = function (){
    var baseUrl = document.location.origin;
    
    $.ajax({
        url:baseUrl+'/malvina/Malvina/src/public/evento/menu-despesa',
        cache:false,
        success:function (dados){
            //console.log(dados);
            $('#dialogDespesa').html(dados),
                dialogoDespesa.dialog('open');
        },
        error: function(){
        }
        
    });
},
dialogoDespesa=$("#dialogDespesa").dialog({
    autoOpen:false,
    title:"Adicionar Despesa",
    heigth:600,
    width:550,
    modal:true,
    show:{
        effect:'clip',
        duration:150,
        
    },
    hide:{
           effect:'clip',
        duration:150,
    },
    buttons:{
        Salvar:function(){
            criarArrayDespesa();
            dialogoDespesa.empty();
            dialogoDespesa.dialog('close');
            
        },
        Cancel: function(){
            dialogoDespesa.dialog('close');
        }

    }
    
    
});
    
    criarArrayDespesa = function(){

        despesa = $('#despesa').serialize();
        despesa = despesa.split('&');
        desc= despesa[0].split('=')[1];
        valor= despesa[1].split('=')[1];

        //for(var i= 0;i<jsonDespesa.length)
        jsonDespesa= {
            desc:desc,
            valor:valor
        }
        item.push(jsonDespesa);
        $('#pdesp').html($('#pdesp').html()+'<li>'+desc+' - '+valor+'</button></li>');

    }

});
