
<!DOCTYPE html><html lang="es">
<head>
 <title>Página HMTL5</title>
 <meta charset="UTF-8">
<meta description="Página con etiquetas HTML 5 para proyectos web"/> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <link rel="slylesheet" type="text/css" media="all" href="css/estilos.css"/> 

      <!--link: enlazar la hoja de estilo            rel: tipo de enlace, eje hoja de estilos stylesheet            type: texto            media: dirigita a que medio print, web, dispositivo...        -->
<style> 

  * { 
  	margin: 0; 
    padding: 0;
}

@font-face { 

  font-family: "Chalet";    src: url("../fonts/Chalet.eot"); 

  src: url("../fonts/Chalet.eot?#iefix") format("embedded-opentype"), 

       url("../fonts/Chalet.woff") format("woff"), 

       url("../fonts/Chalet.ttf") format("truetype"), 

       url("../fonts/Chalet.svg#Chalet") format("svg"); 

  font-weight: normal; 

  font-style: normal;

}

/* 16px es el minimo es 12 puntos en word = 100% =1em M*/

body{

    background: #212121 url(../img/fondo.jpg); 

  color: #FFF;    font-family:  "Chalet", Helvetica, Verdana;    font-size: 2em;

}

h1{    color: #F60;
       margin: 0.25em auto;
       text-align: center;

    text-shadow: 5px 5px 10px rgba(225,255,255,0.5);

}

header, nav, footer{ 

  background: #1E6381; 

  border-radius: 0.5em; 

  margin: 0.5em auto; 

  max-width: 960px; 

  padding: 0.25em; 

  text-align: center;

}

}
section#contenedor{
    position: relative;
    margin: 0.5em auto;
    max-width: 960px;
    padding: 0;
    text-align: center;

}
section#principal, aside{ 

    background: #1E6381;
    border-radius: 0.5em; 
    display:  inline-block; 
    margin: 0.25em auto;
    max-width: 960px; 
    min-height: 200px; 
    padding: 0.25em; 
    text-align: center; 
    vertical-align: top; 
    width: 65%;

}


article{ 
  background: #011E30; 
  border-radius: 0.5em; 
  min-height: 140px; 
  padding: 0.25em;

}

aside#izq{
width:23%;
  }
aside#der{
width:23%;
height:360px;
  }

  
</style>
    </head>
       <body>
 <header> 

<h1>TALLER EVALUATIVO</h1> 
 <figure> 
 	<img src="img/logo.png" width="100">
        	<h1>logo</h1>
            <figcaption>SENA</figcaption> 
 </figure> 
</header>


 <nav> 
 Menú del sitio 
</nav>
        <!--- en la parte del contenido antes div 
ahora es seccion y article, seccion area unica del sitio, eje area del video, article: zona unica,
ejemplo comentarios del video en youtube--> 

   
              <section> 
 <section id="contenedor">             
           <center>
             <aside id="izq">
               <hgroup>
        <h1>otro encabezado en hgroup para no perder relevancia </h1>
        <h2>Otro encabezado tipo h2</h2>   
       </hgroup> 
      <article>Este es un artículo de contenido<section>esta es otra seccion</section></article>
             </aside>
              <aside id="der"></aside>
             
              </center>     
                        </section> 

      </section>
      <footer> 

          Todos los derechos Reservados 2018. Melissa Martínez.

        </footer> 

  </body>

</html>