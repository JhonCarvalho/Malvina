/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Adicionar //
$(document).ready(function(){
    

    
    var baseUrl = document.location.origin;
    jsonDespesa = {};
    jsonEquipe = {};
    item = [];
    itemEquipe = [];
    totalDespesa = parseFloat("0");
    totalEquipe= parseFloat("0");

    dialogDespesa = $('#dialogDespesa'),
    dialogEquipe = $('#dialogEquipe'),
        

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
        valor= parseFloat(despesa[1].split('=')[1]);
        totalDespesa+= valor;
        //for(var i= 0;i<jsonDespesa.length)
        jsonDespesa= {
            desc:desc,
            valor:valor
        }

        item.push(jsonDespesa);
        //$('#pdesp').tooltip({title: "<a href='www.google.com'>google</a>", html: true, placement: "bottom"});
        $('#pdesp').html($('#pdesp').html()+'<li>'+desc+' - '+valor+'</button></li>');
        $('#tdesp').html('R$ '+totalDespesa);
    }



    //////////////////EQUIPE /////////////////////////

    addEquipe = function (){
        var baseUrl = document.location.origin;

        $.ajax({
            url:baseUrl+'/malvina/Malvina/src/public/evento/menu-equipe',
            cache:false,
            success:function (dados){
                //console.log(dados);
                $('#dialogEquipe').html(dados),
                    dialogEquipe.dialog('open');
            },
            error: function(){
            }

        });
    },

    dialogoEquipe=$("#dialogEquipe").dialog({
        autoOpen:false,
        title:"Adicionar Equipe",
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
                criarArrayEquipe();
                dialogoEquipe.empty();
                dialogoEquipe.dialog('close');

            },
            Cancel: function(){
                dialogoEquipe.dialog('close');
            }

        }


    });
    
    criarArrayEquipe = function(){

        equipe = $('#equipe').serialize();
        //console.log(equipe);
        equipe = equipe.split('&');

        nome = equipe[0].split('=')[1];
        funcao= equipe[1].split('=')[1];
        cache= parseFloat(equipe[2].split('=')[1]);
        totalEquipe+= cache;
        //for(var i= 0;i<jsonDespesa.length)
        jsonEquipe= {
            nome :nome,
            funcao:funcao,
            cache:cache
        }
        //console.log(jsonEquipe);
        itemEquipe.push(jsonEquipe);
        $('#pEq').html($('#pEq').html()+'<li>'+nome+' - '+funcao+' - '+cache+'</button></li>');
        $('#tEq').html('R$ '+totalEquipe);
    };

    carregarGrid = function () {


        $('#tbEvento').DataTable().destroy();

        $('#tbEvento').DataTable({
            "paging": true,
            'searching': true,
            "pageLength": 5,
            "language": {
                "sEmptyTable": "Nenhum registro encontrado para o filtro informado",

                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de MAX registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "",
                    "sLast": ""
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            },
            "ajax": {
                url: baseUrl + '/malvina/Malvina/src/public/evento/listar',
                dataType: "JSON",
                type: "GET",
                dataSrc: '',
            },

            'columns': [

                {data: "nome_evento"},
                {data: function (data) {
                    //console.log(data.dt_evento);
                    dt = data.dt_evento;
                    dt = dt.date.split(' ')[0];
                    //console.log(dt);
                    return dt;

                }},
                {data: "contratante"},
                {data: "vendedor"},
                {data: "vl_total"},
                {
                    data: function (data) {
                        var id = 4;

                        return ' <button  class="btn btn-warning " onclick="detalhar' +
                            '(' + id + ',$(this))"><span class="glyphicon glyphicon-list"> Detalhar</span></button>';

                    }
                },

            ],


        });
        


    }

});
