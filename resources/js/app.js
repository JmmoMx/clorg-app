import './bootstrap';
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var  indice = 0
var AllQue =[]
var Answer = []

    document.getElementById("evDir").onchange = function() {evaluarSubdireccion()};
    
    function evaluarSubdireccion() {
        let parametro = $("#evDir").val();
        let parametros = {
            'find': parametro,
        };

        $.ajax({
            type: "POST",
            url: "/subDir/findSub/",
            data: parametros,
            dataType: "json",

            beforeSend: function() {
                // console.log(parametro)
            },
    
            success: function(data) {
                let html = '<option value="">-- Seleccione --</option>';
    
                for (let i = 0; i < data.subArea.length; i++) {
                    html += "<option value='" + data.subArea[i].id + "'>" + data.subArea[i].nombre + " -- Clave: "+ data.subArea[i].clave +  "</option>";
                }
    
                $("#evSub").html(html).hide().fadeIn();
                
                // console.log(data)
            },
            complete: function() {
                // contenedor.css({ visibility: "hidden", opacity: 0 });
            },
            error: function(data) {
                // console.log('error');
                // console.log(data);
            }
        });
    }

    document.getElementById("adDir").onchange = function() {adscritoSubdireccion()};

    function adscritoSubdireccion() {
        let parametro = $("#adDir").val();
        let parametros = {
            'find': parametro,
        };

        $.ajax({
            type: "POST",
            url: "/subDir/findSub/",
            data: parametros,
            dataType: "json",

            beforeSend: function() {
                // console.log(parametro)
            },
    
            success: function(data) {
                let html = '<option value="">-- Seleccione --</option>';
    
                for (let i = 0; i < data.subArea.length; i++) {
                    html += "<option value='" + data.subArea[i].id + "'>" + data.subArea[i].nombre + " -- Clave: "+ data.subArea[i].clave +  "</option>";
                }
    
                $("#adSub").html(html).hide().fadeIn();
                
                // console.log(data)
            },
            complete: function() {
                // contenedor.css({ visibility: "hidden", opacity: 0 });
            },
            error: function(data) {
                // console.log('error');
                // console.log(data);
            }
        });
    }

    var form = '#add-infomscion-form';

    $(form).on('submit', function(event){
        event.preventDefault();
        var url = "/climOrg/store/";

        $('#error-evDir').addClass('invisible');
        $('#error-evSub').addClass('invisible');
        $('#error-evClas').addClass('invisible');
        $('#error-adDir').addClass('invisible');
        $('#error-adSub').addClass('invisible');
        $('#error-adClas').addClass('invisible');
        $('#error-adGenero').addClass('invisible');
        $('#error-adGruEd').addClass('invisible');
        $('#error-adAnSer').addClass('invisible');
        $('#error-adDiscapacidad').addClass('invisible');

        $.ajax({
            url: url,
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
                AllQue = response.preguntas
                document.getElementById("preguntaQ").innerHTML=AllQue[indice].nombre
                document.getElementById("contPregunta").hidden = false;

                // let html = "<form class='md:flex md:h-screen md:justify-center md:gap-10 md:items-center' method='POST' enctype='multipart/form-data' novalidate id='add-questions-form'> <meta name='csrf-token' content='{{ csrf_token() }}' /> <div class='md:w-8/12 bg-white p-6 rounded-lg shadow-xl'> <div class='card'> <div class='container'>";
                // html += "<center> <p> "+ AllQue[indice].nombre +" </p>";
                // html += "<div class='row'>  <div class='col s4 m4 l4'> <p><input type='radio' name='respuestaPregunta' id='Siempre' value='1' > Siempre</p> </div> <div class='col s4 m4 l4'> <p><input type='radio' name='respuestaPregunta' id='Aveces' value='2' > A veces</p> </div> <div class='col s4 m4 l4'> <p><input type='radio' name='respuestaPregunta' id='Nunca' value='3' >Nunca</p> </div> </div> </center>";
                
                // html += "<input type='button' id='preguntass' class='float-right bg-blue-300 shadow-md ml-2 border border-black rounded hover:bg-blue text-sm px-4 py-1 text-gray-700 focus:text-white hover:text-white focus:ring focus:ring-blue focus:bg-blue focus:outline-none focus:ring-opacity-50 flex items-center uppercase' value='Seguir' />";
                // html += "</div> </div> </div> </form>";

                // for (let i = 0; i < data.subArea.length; i++) {
                //     html += "<option value='" + data.subArea[i].id + "'>" + data.subArea[i].nombre + " -- Clave: "+ data.subArea[i].clave +  "</option>";
                // }
                let html = "<div></div>";
                $("#olo").html(html).hide().fadeIn();
               
                // document.getElementsByTagName('contPregunta').removeAttribute("hidden"); 
            },
            error: function(jqXHR, textStatus) {
                var fail_msg = jqXHR.responseJSON.errors;
                
                for (const campo in fail_msg) {
                    $('#error-'+campo).removeClass('invisible');
                    // $('#error-'+campo).addClass('text-red-600');
                    // $('#error-'+campo).addClass('text-semibold');
                    // $('#error-'+campo).addClass('bg-red-200');
                    // $('#error-'+campo).addClass('bg-opacity-25');
                    $('#error-'+campo).text(fail_msg[campo][0]);
                }
            }
        });
    });

    document.getElementById("adDiscapacidad").onchange = function() {textoDiscapacidad()};
    
    function textoDiscapacidad() {

        let parametro = $("#adDiscapacidad").val();

        if(parametro == 1 || parametro == 2 || parametro == 3 || parametro == 4){
            document.getElementById("discapacidad").hidden = true;
        }else if(parametro == 5)
        document.getElementById("discapacidad").hidden = false;
    }


    document.getElementById("porqueno").onclick = function() {sigPreg()};

    function sigPreg() {
        
        if(indice < AllQue.length){
            let siempre = document.getElementById("horizontal-list-radio-siempre").checked
            let aVeces = document.getElementById("horizontal-list-radio-aVeces").checked
            let nunca = document.getElementById("horizontal-list-radio-nunca").checked

        if(siempre === false && aVeces === false && nunca === false)
            return false

        if(siempre === true){
            Answer[indice] = document.getElementById("horizontal-list-radio-siempre").value
            document.getElementById("horizontal-list-radio-siempre").checked = false;
        }else if(aVeces === true){
            Answer[indice] = document.getElementById("horizontal-list-radio-aVeces").value
            document.getElementById("horizontal-list-radio-aVeces").checked = false;
        }else if(nunca === true){
            Answer[indice] = document.getElementById("horizontal-list-radio-nunca").value
            document.getElementById("horizontal-list-radio-nunca").checked = false;
        }
        
        indice++;
        if(indice < AllQue.length){
            document.getElementById("preguntaQ").innerHTML=AllQue[indice].nombre
        }else{
            pruebaPaps()
        }

        }else{
            console.log('hola')
        }

        
       
    }


    function pruebaPaps() {        

       var url = "/climOrg/save/";
       let parametros = Answer;
        

       $.ajax({
        url: url,
        method: 'POST',
        data: JSON.stringify({Answer: Answer}),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        headers: {
            'Content-Type': 'application/json'
         },
        success:function(response)
        {
            document.location.href = '/gracias'
        },
        error: function(jqXHR, textStatus) {
            var fail_msg = jqXHR.responseJSON.errors;
            
            for (const campo in fail_msg) {
                $('#error-'+campo).removeClass('invisible');
                // $('#error-'+campo).addClass('text-red-600');
                // $('#error-'+campo).addClass('text-semibold');
                // $('#error-'+campo).addClass('bg-red-200');
                // $('#error-'+campo).addClass('bg-opacity-25');
                $('#error-'+campo).text(fail_msg[campo][0]);
            }
        }
    });
    }