$(document).ready(function(){
    //Questão 1
    $("input[type=checkbox][name=internet]").click(function() {
        var internet = $("input[type=checkbox][name=internet]:checked").val();

        if (internet==1) { //com internet
            //alert('ddd'+internet);
            $("#tipo_internet_wifi").css({display: "block"});
            $("#tipo_internet_cabeado").css({display: "block"});
        } else if (internet!=1) { //sem internet
            $("#tipo_internet_wifi").css({display: "none"});
            $("#tipo_internet_cabeado").css({display: "none"});
        }
    });
    //Questão 6
    $("input[type=checkbox][name=codigo]").click(function() {
        var internet = $("input[type=checkbox][name=codigo]:checked").val();

        if (internet==1) { //com internet
            //alert('ddd'+internet);
            $("#treinados").css({display: "block"});
        } else if (internet!=1) { //sem internet
            $("#treinados").css({display: "none"});
        }
    });
  });
