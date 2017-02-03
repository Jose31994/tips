<!DOCTYPE HTML>
<?php 
$default=false;
$book=false;
$software=false;
$contacto=false;
$tizimin=true;
$papers=false;
?>
<html>
	<head>
    <!-- Modernizr JS -->
    <script src="js/jquery.min.js"></script>
 	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tips - Tizimin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
	</head>


<body>
		

	<?php include_once("cabecera.php");?>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/tizimin/tizimin2017.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Tizimín</h1>
							<!--<h2>Free html5 templates Made by <a href="http://freehtml5.co" target="_blank">freehtml5.co</a></h2>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>



      <?php
	    include('conexion.php');
        $link=conectar();
    ?>



	<div id="fh5co-blog">
		<div class="container">
			<div class="row">

             <div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Especial - ExpoFeria Tizimín 2017</h2>
                  <form id="datef" name="datef" action="eventos" method="post" target="_blank">
                        <input type="hidden" name="date" id="date" value="2017-01-00" />
                 <p><a class="btn btn-primary btn-lg btn-video"  onclick="javascript:document.datef.submit()" ><i class="icon-play"></i>Ver Eventos</a></p>
                  </form>
                   <!--   href="eventos.php"	<p>A continuacion se presenta algunos eventos catalogados por fecha, que formaran parte de la expoferia Tizimin 2017. </p>-->
				</div>
			</div>
		</div>




         <div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Información Sobre Tizimín</h2>
                  <p>A continuaci&oacute;n se presenta información que podría ser útil sobre la ciudad de tizimín. </p>
                   <!--   href="eventos.php"	<p>A continuacion se presenta algunos eventos catalogados por fecha, que formaran parte de la expoferia Tizimin 2017. </p>-->
				</div>
			</div>
		</div>

         <p style="text-align:center" class="p">
            <a class="btn btn-primary btn-lg btn-video" onclick="mostrarmaps();"  ><i class="icon-image"></i>Mapas</a>
            <a class="btn btn-primary btn-lg btn-video" onclick="mostrarabout();" ><i class="icon-image" ></i>Información General:</a>
            <a class="btn btn-primary btn-lg btn-video" onclick="mostrarbusiness();" ><i class="icon-image" ></i>Lugares y teléfonos</a>
            </p>




               <div id="maps" style="display: none;">
                     <br><br>
                                <form class="navbar-form centr"  role="search">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                  </div>
                                  <button type="submit" class="btn btn-default">Buscar</button>
                                </form>

                            	<div id="fh5co-blog" >
                        		<div class="container">
                                  <div class="row">

                        	<?php
                            $result = mysqli_query($link,"SELECT * FROM mapa ORDER BY nombre ASC");
                            while ($row=mysqli_fetch_array($result))
                            {
                                /*almacenamos el nombre de la ruta en la variable $ruta_img*/
                               $ruta_img = $row["ruta"];
                               $nombre=$row["nombre"];
                               $url1=$row["url1"];
                            ?>
                            			   <br>	<div class="col-md-4 col-lg-4 row-eq-height">
                            					<div class="fh5co-blog animate-box">
                            						<a href="tiziminf/<?php echo $ruta_img;?>" ><img class="img-responsive zoom" src="tiziminf/<?php echo $ruta_img;?>" alt=""></a>
                            						<div class="blog-text">
                            							<h3><a href=""#><?php echo $nombre;?></a></h3>
                            							<a href="<?php echo $url1;?>" class="btn btn-primary" target="_blank">Obtener</a>
                            						</div>
                            					</div>
                            				</div>
                            <?php
                              // echo '<img src="books/'.$ruta_img.'"/>';  class="btn btn-primary btn-lg popup-vimeo btn-video"
                               //echo $ruta_img;
                            }
                            mysqli_close();
                            	  ?>
                                    </div>
                        		</div>
                        	</div>
               </div>





               <div id="about" style="display: none;">
                            	<div id="fh5co-blog" >
                        		    <div class="container">
                                      <div class="row">
                                           <div>
                                           <ul class="nav nav-tabs">
                                               <li class="active"><a href="#tab_a" data-toggle="tab">Información</a></li>
                                               <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Yucatán <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                  <li><a href="#tab_resumen" data-toggle="tab">Resumen</a></li>
                                            	  <li><a href="#tab_territorio" data-toggle="tab">Territorio</a></li>
                                                  <li><a href="#tab_poblacion" data-toggle="tab">población</a></li>
                                                  <li><a href="#tab_economia" data-toggle="tab">Economía</a></li>
                                                </ul><!-- end of dropdown menu -->
                                              </li>
                                              <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tizimín <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                  <li><a href="#tab_resumen" data-toggle="tab">Resumen</a></li>
                                            	  <li><a href="#tab_territorio" data-toggle="tab">Territorio</a></li>
                                                  <li><a href="#tab_poblacion" data-toggle="tab">población</a></li>
                                                  <li><a href="#tab_economia" data-toggle="tab">Economía</a></li>
                                                </ul><!-- end of dropdown menu -->
                                              </li>

                                              <li><a href="#tab_b" data-toggle="tab">Tab B</a></li>
                                              <li><a href="#tab_c" data-toggle="tab">Tab C</a></li>

                                            </ul><!-- end of nav -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_a">
                                                        <h4>Información</h4>
                                                        <p>
                                                          <br>
                                                          A continuación se presenta información, sobre la peninsula de yucatán y específicamente del municipio de tizimin.
                                                          <br><br><br>
                                                         Seleccione la opción deseada en el menu superior a este cuadro.
                                                        </p>
                                                    </div>
                                                <div class="tab-pane" id="tab_resumen">
                                                        <h4>Resumen</h4>
                                                        <p>
                                                           <div class="row">
                                                                    <div class="col-md-4 col-lg-4 ">
                                                                           <p><img class="img-responsive zoom" src="tizimin/images/mapa.jpg" width="381" height="394"></p>
                                                                    </div>
                                                                 <div class="cold-6 col-lg-6 ">
                                                                     <strong>Capital</strong>: Mérida<br>
                                                                    <strong>Municipios</strong>: 106<br>
                                                                    <strong>Extensión</strong>: Representa 2.02% del territorio nacional.<br>
                                                                    <strong>Población</strong>: 2 097 175 habitantes, el 1.8% del total del país.<br>
                                                                    <strong>Distribución de población</strong>: 84% urbana y 16% rural; a nivel nacional el dato es de 78 y 22% respectivamente.<br>
                                                                    <strong>Escolaridad</strong>: 8.8 (poco más de segundo año de secundaria); 9.1 el promedio nacional.<br>
                                                                    <strong>Hablantes de lengua indígena de 3 años y más</strong>: 29 de cada 100 personas. <br>
                                                                    A nivel nacional 7 de cada 100 personas hablan lengua indígena.<br>
                                                                    <strong>Sector de actividad que más aporta al PIB estatal</strong>: Comercio.<br>
                                                                    <strong>Aportación al PIB Nacional</strong>: 1.5%
                                                                 </div>
                                                            </div>
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane" id="tab_territorio" >

                                                         <div class="row" >
                                                        <div class="col-md-8 col-lg-8 p">
                                                            <h4>Superficie</h4>
                                                            El estado de Yucatán representa 2.02% de la superficie del país.
                                                            <br>
                                                            <img src="tizimin/images/porcentaje.gif" name="mapa" width="285" height="215" id="mapa" onMouseOver="MM_swapImage('mapa','','tizimin/images/porcentajeb.gif',1)"  onMouseOut="MM_swapImgRestore()">
                                                        </div>
                                                        <br>
                                                        <div class="col-md-8 col-lg-8 p">
                                                        <h4>Division Municipal</h4>

                                                            Al 2015, el estado de Yucatán está dividido en 106 municipios.
                                                            <br>
                                                            <img src="tizimin/images/yuc.gif" width="400" height="353">
                                                            <br>
                                                            Tizmin es el municipio No: 096	con: 77 621 habitantes*<br>
                                                            *Segun la encuesta Intercensal 2015 realizada por el INEGI.
                                                        </div>
                                                        <br><br>
                                                        <div class="col-md-8 col-lg-8 p">
                                                            <h4>Clima</h4>

                                                            <p>El 85.5% de la superficie del estado presenta climas cálido subhúmedo
                                                            y el restante 14.5% presenta clima seco y semiseco, que se localiza en
                                                            la parte norte del estado.<br>
                                                            <br>
                                                            La temperatura media anual es de 26&deg;C, la temperatura máxima
                                                            promedio es alrededor de <strong>36&deg;C</strong> y se presenta en el
                                                            mes de mayo, la temperatura mínima promedio es de <strong>16&deg;C</strong>
                                                            y se presenta en el mes de enero.<br>
                                                            <br>
                                                            La precipitación media estatal es de <strong>1 100 mm </strong>anuales,
                                                            las lluvias se presentan en verano en los meses de junio a octubre.<br>
                                                            <br>
                                                            El clima cálido húmedo permite el desarrollo del cultivo
                                                            del henequén, el de mayor importancia en el estado, pero también
                                                            se cultiva: maíz, frijol, melón, sandia, naranja limón
                                                            y mango.</p>

                                                            <div align="right"><img src="tizimin/images/ria2.jpg" width="240" height="161"><br>
                                                              <span class="fuente">Refugio Faunístico de Río Lagartos</span>
                                                            </div>

                                                            <div align="center"><img src="tizimin/images/cli_yuc.jpg" width="400" height="353"><br>
                                                            <table border="1" cellspacing="0" cellpadding="0">
                                                              <tr>
                                                                <td><table width="100%">
                                                                    <tr>
                                                                      <td><img src="tizimin/images/ref_climas_11.jpg" width="127" height="13" vspace="3"></td>
                                                                      <td><div align="right">85.5%*</div></td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td><img src="tizimin/images/ref_climas_23.jpg" width="127" height="13" vspace="3">&nbsp;&nbsp;</td>
                                                                      <td><div align="right">14.5%*</div></td>
                                                                    </tr>
                                                                  </table>
                                                                                <div align="left" class="fuente">*Referido al total de la superficie
                                                                    estatal.<br>
                                                                    FUENTE: Elaborado con base en INEGI. Carta de Climas 1:1 000 000.</div></td>
                                                              </tr>
                                                            </table>
                                                            </div>


                                                        </div>
                                                        <br>
                                                        <div class="col-md-8 col-lg-8 p">
                                                        <h4>Agua</h4>
                                                            <p>
                                                                En Yucatán no hay corrientes de agua, debido al tipo de rocas, pero existen <strong>cenotes, rejolladas y aguadas</strong>
                                                               (estas últimas son acumulaciones de agua en depresiones naturales durante la época de lluvias).
                                                            </p>
                                                            <p class="tit2">Otros cuerpos de agua</p>
                                                            <table width="90%" align="center">
                                                            <tr>
                                                              <td width="50%" valign="top"> <p><strong>E s t e r o s</strong></p>
                                                                <ul>
                                                                  <li>Celestún</li>
                                                                  <li> Yucalpetén</li>
                                                                  <li> Río Lagartos</li>
                                                                  <li> El Islote</li>
                                                                  <li> Yolvé;</li>
                                                                </ul></td>
                                                              <td valign="top"> <p><strong>L a g u n a s</strong></p>
                                                                <ul>
                                                                  <li>Flamingos</li>
                                                                  <li> Rosada</li>
                                                                </ul></td>
                                                            </tr>
                                                          </table>
                                                          <p align="left">FUENTE: INEGI. Perspectiva Estadística de Yucatán diciembre 2012.
                                                          <a href="http://www.inegi.org.mx/prod_serv/contenidos/espanol/bvinegi/productos/integracion/estd_perspect/yuc/Pers-yuc.pdf" target="_blank"><font size="-3"><em>Consultar</em></font></a></p>
                                                           <div align="right" class="fuente"><img src="tizimin/images/cenote2.jpg" width="240" height="161"><br> Cenote Sagrado</div>
                                                        </div>
                                                        <br>
                                                        <div class="col-md-8 col-lg-8 p">
                                                        <h4>Relieve</h4>
                                                            <p>La superficie estatal forma parte de la provincia Pen&iacute;nsula de
                                                                Yucat&aacute;n.</p>
                                                              <p>La mayor parte del territorio lo conforma una llanura que se form&oacute;
                                                                como producto de la aparici&oacute;n de una plataforma marina compuesta
                                                                por roca calc&aacute;rea (que contiene cal) y en donde se han formado
                                                                cenotes.</p>
                                                              <p>En la zona costera, se han desarrollado playas y cuerpos de agua como
                                                                el estero de Celest&uacute;n, Yucalpet&eacute;n, El Islote y R&iacute;a
                                                                Lagartos.</p>
                                                              <p>Al sur, se localiza el cerro Benito Ju&aacute;rez con 210 metros sobre
                                                                el nivel del mar (msnm), es la mayor altitud entre la llanura y el lomer&iacute;o.
                                                                Como resultado del movimiento de fragmentos o placas tect&oacute;nicas
                                                                de la corteza terrestre se form&oacute; una elevaci&oacute;n muy estrecha
                                                                y alargada en direcci&oacute;n noroeste-sureste a la que se le conoce
                                                                como Sierrita de Ticul.</p>
                                                              <table width="100%">
                                                                <tr>
                                                                  <td width="11%" valign="top" class="fuente">FUENTE:</td>
                                                                  <td width="89%" class="fuente">INEGI. Anuario Estad&iacute;stico del
                                                                    estado de Yucat&aacute;n.<br>
                                                                    INEGI. Continuo Nacional Topogr&aacute;fico S. II escala 1:250 000.<br>
                                                                    INEGI. Conjunto Geol&oacute;gico F15 y F16 escala 1:1 000 000.</td>
                                                                </tr>
                                                              </table>
                                                              <img src="tizimin/images/rel_yuc.jpg" width="400" height="353"><br>
                                                               <table width="20%">
                                                                <tr>
                                                                  <td><img src="tizimin/images/ref_relieve_77.jpg" width="188" height="13" vspace="3"></td>
                                                                </tr>
                                                              </table>
                                                              <p> Sus principales elevaciones son:</p>
                                                              <table width="70%" align="center">
                                                                <tr>
                                                                  <td height="179">
                                                                    <table border="1" align="center" cellpadding="4" cellspacing="4" bordercolor="#66cc33">
                                                                      <tr bgcolor="#66cc33">
                                                                        <td><font color="#FFFFFF"><strong>Nombre</strong></font></td>
                                                                        <td>
                                                                          <div align="center"><font color="#FFFFFF"><strong>Altitud
                                                                            </strong><br>
                                                                            (metros sobre el nivel del mar)</font></div></td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Cerro Benito Ju&aacute;rez</td>
                                                                        <td><div align="center">210</div></td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Cerro Cord&oacute;n Puc</td>
                                                                        <td><div align="center">150</div></td>
                                                                      </tr>
                                                                    </table>
                                                                    <div align="LEFT">
                                                                      <p  class="fuente"><span class="fuente">FUENTE: INEGI. Carta Topogr&aacute;fica Escala 1:50 000, serie III.</span></p>
                                                                  </div></td>
                                                                </tr>
                                                              </table>
                                                              <p class="tit3">Altitud</p><br>
                                                                <p align="center" class="tit2"><img src="tizimin/images/yucatan.gif" width="348" height="179">


                                                        </div>
                                                        <br>
                                                        <div class="col-md-8 col-lg-8 p">
                                                        <h4>Flora y Fauna</h4>
                                                        <div class="col-md-8 col-lg-6 ">
                                                            <h4>Flora</h4>
                                                            <p>
                                                                Predominan las selvas secas y subh&uacute;medas que se localizan
                                                                al centro y noroeste de la entidad; en las zonas costeras se desarrolla
                                                                vegetaci&oacute;n acu&aacute;tica como manglares y tulares. De la
                                                                superficie estatal, 22% est&aacute; destinado a la agricultura; destaca
                                                                el cultivo de pastizales para el consumo del ganado.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-8 col-lg-6 ">
                                                            <h4>Fauna</h4>
                                                            <p>
                                                                <b>Selva h&uacute;meda:</b> fais&aacute;n, loro, guacamaya, colibr&iacute;,
                                                                zenzontle, cardenal, ruise&ntilde;or, tej&oacute;n, martucha, zorrillo,
                                                                pecar&iacute;, mapache, serpiente y nutria. <br>
                                                                <b>En el manglar:</b> flamingo, pato, golondrina y lagarto. <br>
                                                                <b>En matorral:</b> v&iacute;bora de cascabel.<br>
                                                                <b>En ambientes acu&aacute;ticos:</b> tortuga blanca, caguama, mero, rubia,
                                                                caracol, pulpo, delf&iacute;n, langosta, tibur&oacute;n, pargo y huachinango. <br>
                                                                <b>En los bosques:</b> murci&eacute;lagos zapotero y dos l&iacute;neas, p&aacute;jaro
                                                                Toh, halc&oacute;n, codorniz, chachalaca, boa ratonera, rana y sapo.    <br>
                                                                <b><i>Animales en peligro de extinci&oacute;n:</i></b> armadillo, puerco esp&iacute;n,
                                                                manat&iacute;, mono ara&ntilde;a, saraguato negro, tortuga carey y
                                                                oso hormiguero.
                                                            </p>
                                                        </div>
                                                        <br>
                                                        <div align="left">FUENTE: CONABIO</div>

                                                        </div>
                                                       </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_poblacion">
                                                            <div class="row" >
                                                                <div class="col-md-8 col-lg-8 p">
                                                                    <h4>Número de habitantes</h4>
                                                                      <p>En el 2015, en Yucatán viven:</p>
                                                                      <p align="center"> <img src="tizimin/images/poblacion.gif" width="405" height="112"></p>

                                                                      <p>Yucatán ocupa el lugar 21 a nivel nacional por su número de habitantes.</p>

                                                                        <table>
                                                                          <tr bordercolor="#FF9900">
                                                                          <td width="55" valign=middle nowrap bgcolor="#FF9900" class="Normal"><div align="center"><font color="#FFFFFF"><strong>Lugar
                                                                            a<br>
                                                                            nivel<br>
                                                                            nacional</strong></font></div></td>
                                                                          <td width="191" valign=middle nowrap bgcolor="#FF9900" class="Normal"><p align="center"><font color="#FFFFFF"><strong>Entidad
                                                                            Federativa</strong></font></p></td>
                                                                          <td width="102" valign=top bgcolor="#FF9900" class="Normal"><p align="center"><font color="#FFFFFF"><strong>Habitantes<br>
                                                                          </strong>(a&ntilde;o 2015)</font></p></td>
                                                                        </tr>

                                                                        <tr>
                                                                          <td ><div align="center"><font color="#FFFFFF">21</font></div></td>
                                                                          <td background="tizimin/images/flecha.gif">Yucat&aacute;n</td>
                                                                          <td ><div align="right"><font color="#FFFFFF">2 097 175</font></div></td>
                                                                        </tr>
                                                                       </table>
                                                                </div>
                                                                <br>
                                                                <div class="col-md-8 col-lg-8 p">
                                                                    <h4>Número de habitantes</h4>


                                                                </div>
                                                                <br>
                                                                <div class="col-md-8 col-lg-8 p">
                                                                    <h4>Número de habitantes</h4>


                                                                </div>
                                                                <br>
                                                                <div class="col-md-8 col-lg-8 p">
                                                                    <h4>Número de habitantes</h4>


                                                                </div>
                                                                <br>
                                                                <div class="col-md-8 col-lg-8 p">
                                                                    <h4>Número de habitantes</h4>


                                                                </div>
                                                                <br>

                                                            </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_economia">
                                                        <h4>Economía</h4>
                                                        <p>
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane" id="tab_d2">
                                                        <h4>Pane D2</h4>
                                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                                            ac turpis egestas.</p>
                                                    </div>

                                                    <div class="tab-pane" id="tab_b">
                                                        <h4>Pane B</h4>
                                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                                            ac turpis egestas.</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab_c">
                                                        <h4>Pane C</h4>
                                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                                            ac turpis egestas.</p>
                                                    </div>
                                            </div><!-- tab content -->
                                        </div>
                                      </div>
                        		    </div>
                                </div>
               </div>

               <div id="business" style="display: none;">
                   <br><br>
                            	<div id="fh5co-blog" >
                        		    <div class="container">
                                      <div class="row">
                                         div lugares
                                      </div>
                        		    </div>
                                </div>
                   </div>


			</div>
		</div>
	</div>
	


	<?php include_once("foot.php"); ?>

	</body>
</html>

