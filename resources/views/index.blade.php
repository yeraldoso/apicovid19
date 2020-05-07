<!DOCTYPE html>
<html lang="es">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/page.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=News+Cycle&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type='image/x-icon'/>

    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

	<title>Api Covid-19</title>

</head>
<body data-spy="scroll" data-target=".navbar">

    <!-- Navegacion -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <a class="navbar-brand ml-3" id="titlePage"  href="#"> <strong>Api Covid-19</strong> Chile</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" id="top_menu">
                <li class="nav-item" id="nav1"><a class="nav-link"  href="#apicovid19">Api Covid-19</a></li>
                <li class="nav-item" id="nav2"><a class="nav-link"  href="#fuentes">Fuente de información</a></li>        
                <li class="nav-item" id="nav3"><a class="nav-link"  href="#endpoints">Endpoints</a></li>
                <li class="nav-item" id="nav4"><a class="nav-link"  href="#contacto">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <section class="py-5 px-1 imagenNav1" id="apicovid19" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12 py-5">
                    <h2 class="font-weight-light title_h2 mb-3">API COVID-19</h2>
                    <hr class="py-2">
                    <p class="text-justify">API COVID-19 como su nombre lo indica, es una Api-Rest para que estudiantes, desarrolladores, analistas de datos, estadísticos o cualquier persona interesada pueda tener acceso a los datos epidemiológicos del covid-19 en Chile de una forma estructurada, sencilla y rápida.</p>
                    <p class="text-justify">Este sistema busca automatizar y estandarizar el consumo de los datos mediante una Api-Rest, proceso distinto a como lo entrega actualmente el Ministerio de Ciencias, pero de igual manera efectivo y transparente para el usuario.</p>
                    <p class="text-justify">Para evitar posibles inconsistencias, duplicidad de datos o falta de información, se incorporaron procesos adicionales de extracción de datos, con comprobaciones minuciosas y exhaustivas desde la fuente oficial de información.</p>  
                    <p class="text-justify">No existen costos, ni condiciones adicionales por el uso de esta herramienta, por favor, siéntete libre de utilizarla cuando desees. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 px-1 imagenNav2" id="fuentes" >
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xs-12 pt-5">
                    <h2 class="font-weight-light title_h2 mb-3">Fuente de información</h2>
                    <hr class="py-2">
                    <div class="col-md-12 px-0 py-2">
                        <h3 class="font-weight-light mb-3">¿De dónde extrae Api Covid-19 los datos?</h3>
                        <p class="text-justify">Api Covid-19 obtiene toda la información desde la cuenta oficial de GitHub del Ministerio de Ciencia, Tecnología, Conocimiento e Innovación, <a target="_blank" href="https://github.com/MinCiencia/Datos-COVID19">(MinCiencia)</a>. En este repositorio se encuentran todos los datos repartidos en múltiples archivos CSV.</p>
                    </div>

                    <div class="col-md-12 px-0 py-2">
                        <h3 class="font-weight-light mb-3">¿De dónde extrae la información el MinCiencia?</h3>
                        <p class="text-justify">El MinCiencia posee cuatro fuentes de datos extraídas desde la página del <a target="_blank" href="https://www.minsal.cl/nuevo-coronavirus-2019-ncov/casos-confirmados-en-chile-covid-19/">Ministerio de Salud</a>, estos informes son:  el reporte diario, informe epidemiológico, informe de situación covid19 y la tabla de casos confirmados de la página web. Esta información llega al repositorio de GitHub mediante técnicas de scraping y transcripción manual de documentos PDFs.</p>   
                    </div>

                    <div class="col-md-12 px-0 py-2">
                        <h3 class="font-weight-light mb-3">¿Cómo es el procedimiento de los datos para llegar a Api Covid-19?</h3>
                        <p class="text-justify"> Todos los días se ejecuta un servicio que conecta al repositorio del MinCiencia y obtiene los datos desde los archivos CSV. Internamente el servicio los valida, normaliza y luego los almacena en la base de datos. Adicionalmente, se agrega un proceso de revisión todos los días para verificar que la información a consumir por el cliente coincida con las fuentes ofíciales.</p>     
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 px-1 imagenNav3" id="endpoints" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 pt-5">

                    <h2 class="font-weight-light title_h2 mb-3">Endpoints</h2>
                    <hr class="py-2">

                    <p class="text-justify">En esta sección se detallan todos los endpoints de la Api-Rest con su información respectiva y su correspondiente uso.</p>   
                    <h3 class="font-weight-light mb-3">Ejemplo de uso</h3>
                    <p class="text-justify"> Cada petición será respondida en formato JSON y solo con los metodos GET/HEAD. Por ejemplo, si se quiere acceder al endpoint <a target="_blank" href="{{Request::url()."/regiones"}}"> /regiones</a>, deberás consumirlo de la siguiente manera: </p>   
                    <p class="text-center"><a class="mr-3"  target="_blank" href="{{Request::url()."/regiones"}}"> {{Request::url()}}/regiones</a> </p>
                </div>    
                <div class="table-responsive px-2" >
                    <table class="table table-sm table-hover" >
                      <thead class="thead-info">
                        <tr>
                            <th>Endpoint</th>
                            <th>Recurso</th>
                            <th>Parámetros</th>
                            <th>Descripción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>/regiones</td>
                            <td>regiones</td>
                            <td>-</td>
                            <td>Colección con todas las regiones del país</td>
                        </tr>
                        <tr>
                            <td>/confirmados</td>
                            <td>confirmados</td>
                            <td>-</td>
                            <td>Colección con todos los confirmados de covid-19 en el país</td>
                        </tr>
                        <tr>
                            <td>/confirmados/fecha/{fecha}</td>
                            <td>confirmados.fecha</td>
                            <td>fecha: fecha en formato dd-mm-aaaa o aaaa-mm-dd</td>
                            <td>Colección con todos los confirmados de covid-19 en la fecha indicada</td>
                        </tr>
                        <tr>
                            <td>/confirmados/region/{region}</td>
                            <td>confirmados.region</td>
                            <td>region: numero de región correspondiente en el recurso 'regiones'</td>
                            <td>Colección con todos los confirmados de covid-19 en la región indicada</td>
                        </tr>
                        <tr>
                            <td>/confirmados/region/{region}/fecha/{fecha}</td>
                            <td>confirmados.region.fecha</td>
                            <td>region: numero de región correspondiente en el recurso 'regiones'<br>
                            fecha: fecha en formato dd-mm-aaaa o aaaa-mm-dd
                            </td>
                            <td>Instancia de los confirmados de covid-19 en una región y fecha específica</td>
                        </tr>
                        <tr>
                            <td>/fallecidos</td>
                            <td>fallecidos</td>
                            <td>-</td>
                            <td>Colección con todos los fallecidos de covid-19 en el país</td>
                        </tr>
                        <tr>
                            <td>/fallecidos/fecha/{fecha}</td>
                            <td>fallecidos.fecha</td>
                            <td>fecha: fecha en formato dd-mm-aaaa o aaaa-mm-dd</td>
                            <td>Colección con todos los fallecidos de covid-19 en la fecha indicada</td>
                        </tr>
                        <tr>
                            <td>/fallecidos/region/{region}</td>
                            <td>fallecidos.region</td>
                            <td>region: numero de región correspondiente en el recurso 'regiones'</td>
                            <td>Colección con todos los fallecidos de covid-19 en la región indicada</td>
                        </tr>
                        <tr>
                            <td>/fallecidos/region/{region}/fecha/{fecha}</td>
                            <td>fallecidos.region.fecha</td>
                            <td>region: numero de región correspondiente en el recurso 'regiones'<br>
                                fecha: fecha en formato dd-mm-aaaa o aaaa-mm-dd
                            </td>
                            <td>Instancia de los fallecidos de covid-19 en una región y fecha específica</td>
                        </tr>
                        <tr>
                          <td>/grupoetario</td>
                          <td>grupoetario</td>
                          <td>-</td>
                          <td>Colección con todos los confirmados de covid-19 del país agrupados en genero y rango etario</td>
                        </tr>
                        <tr>
                          <td>/grupoetario/genero/{genero}</td>
                          <td>grupoetario.genero</td>
                          <td>genero: para femenino el parámetro es 'f', para masculino es 'm'. Pueden usarse en mayúsculas o minúsculas</td>
                          <td>Colección con todos los confirmados de covid-19 del país agrupados en genero y rango etario segun el genero indicado</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 px-1 imagenNav4" id="contacto" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 py-5" >
                    <h2 class="font-weight-light title_h2 mb-3">Contacto</h2>
                    <hr class="py-2">
                    <div class="card col-lg-8 offset-lg-2">
                      <div class="card-body"  >
                        <div class="text-center" >
                            <img src="{{ asset('img/perfil.jpg') }}" class="img-fluid" alt="">
                            <p class="pt-4 font-weight-bold">Yerald Silva Uribe, Ingeniero Civil en Informática</p>
                            <p class="text-justify">Hola, soy el creador de Api Covid-19, espero que este proyecto sea de gran ayuda para ti. Te invito a que si tienes alguna duda, sugerencia o incluso mejoras, te contactes a través de mi LinkedIn o Correo Electrónico y yo de manera oportuna te responderé.</p>
                            <a class="mr-3"  target="_blank" href="https://www.linkedin.com/in/yerald-silva-uribe/"><i class="fab fa-linkedin"></i> Yerald Silva Uribe </a>
                            <a href="mailto:yeraldsu@gmail.com"> <i class="far fa-envelope"></i> yeraldsu@gmail.com</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<script type="text/javascript">

    $("#titlePage").click(function() { downScroll("#apicovid19"); });
    $("#nav1").click(function() { downScroll("#apicovid19"); });
    $("#nav2").click(function() { downScroll("#fuentes"); });
    $("#nav3").click(function() { downScroll("#endpoints"); });
    $("#nav4").click(function() { downScroll("#contacto"); });

  
    function downScroll(section_nav, nav)
    {
        //Baja scroll al div
        $('html,body').animate({ scrollTop: $(section_nav).offset().top},'slow');
    }

    //Oculta navbar en pantallazas pequeñas al hacer clic
    $("a").click(function() {  $("#navbarResponsive").removeClass('show'); });




</script>
</html>
