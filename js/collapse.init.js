$(document).ready(function() {

    /*BOTON DE + DE ACCESOS*/
    $("#botonclases").click(function() {
        var controls = $("#botonclases").attr("aria-controls");
        var ids = controls.split(" ");
        for (let index = 0; index < ids.length-1; index++) {
            $("#btn_context").addClass("d-none");
            $("#"+ids[index]).removeClass("col-sm-none");
        }        
    });

    /*BOTON DE + DOCUMENTOS*/
    $("#botondoc").click(function() {
        var controls = $("#botondoc").attr("aria-controls");
        var ids = controls.split(" ");
        for (let index = 0; index < ids.length-1; index++) {
            $("#btn_contextdoc").addClass("d-none");
            $("#"+ids[index]).removeClass("col-sm-none");
        }  

    });


    /* DOCUMENTOS DE GESTION*/
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    /*informacion*/
    /*  $("#visionmision").collapse({ "toggle": false, 'parent': '#navaccordion' });*/
    $('.colapsar2').on('show.bs.collapse', function() {
        $('.colapsar2.show').collapse('target');
    });


});