<!DOCTYPE HTML>
<!--
	Prologue 1.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Tu liga</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Liga de futbol Juveniles santiago autonomica grupo 3" />		
		<meta name="keywords" content="liga, milladoiro, daniel zas, juveniles, santiago, futbol" />
		<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-panels.min.js"></script>
		<script src="../js/init.js"></script>
		
			<link rel="stylesheet" href="../css/skel-noscript.css" />
			<link rel="stylesheet" href="../css/style.css" />
			<link rel="stylesheet" href="../css/style-wide.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="../css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="../css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header" class="skel-panels-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<a href="../index.html"<span class="image avatar200"><img src="../images/avatar.jpg" alt="" /></span> </a>
							<div class="clear"></div> 

<!-- 						<h1 id="title">Entrenador</h1>							
							<h1 id="title">Moncho Zas</h1>
							<span class="byline">Equipo: Milladoiro SD</span>
							<span class="byline">Liga: Benjamines  </span>
							<span class="byline">Santiago </span>	
							<span class="byline">Segunda Categoría F-8 Grupo 2</span>		 -->

						<?php			
								$idliga=$_GET['idliga'];
								$acceso = file_get_contents("http://www.siguetuliga.com/ws/index.php?s=Usuario&fc=login&usuario=danizd&pass=cadena");
								$dataaccess = json_decode($acceso, true);
								$idSesion=$dataaccess["idSesion"];


								$json = file_get_contents("http://www.siguetuliga.com/ws/index.php?s=Liga&fc=clasificacion&idLiga=$idliga&tipo=b&idSesion=".$idSesion);
								$data = json_decode($json, true);
										
									echo '<h1 id="title">'.$data['nombreLiga'].'</h1>';	
																		
	 					?> 			
						

							
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="fa fa-home">Inicio</span></a></li>
								<li><a href="#clasificacion" id="contact-link" class="skel-panels-ignoreHref"><span class="fa fa-list">Clasificación</span></a></li>
								<li><a href="#jornada" id="portfolio-link" class="skel-panels-ignoreHref"><span class="fa fa-square-o">Jornada Actual</span></a></li>
								<li><a href="#calendario" id="about-link" class="skel-panels-ignoreHref"><span class="fa fa-th">Calendario</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a target="_blank" href="https://www.facebook.com/S.D.Milladoiro" class="fa fa-facebook solo"><span>Facebook</span></a></li>
						</ul>
						<p class="sigue">Todos los datos de este site fueron obtenidos de <a  target="_blank" href="http://www.siguetuliga.com/inicio">Siguetuliga.com</a></p>
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">
			
				<!-- Intro -->
					<section id="top" class="one">
						<div class="container-banner">

							<a href="#top" class="image featured"><img src="../images/-<?php echo $idliga ?>.jpg" alt="" /></a>

							<header>
								<h2 class="alt">Tu Liga</h2>
							</header>
							
							<p>En esta web podrás obtener, puntualmente, todos los datos relativos a la liga de Benjamines de Santiago. 
								Segunda Categoría F-8 Grupo 2. Todos los partidos, todos los resultados y la clasificación</p>

							<footer>
								<a target="_blank" href="http://www.sdmilladoiro.com" class="button scrolly">SDMilladoiro.com</a>
								<a target="_blank" href="http://www.siguetuliga.com/inicio" class="button scrolly">Siguetuliga.com</a>
								<a target="_blank" href="http://www.futgal.es" class="button scrolly">Futgal.es</a>

							</footer>

						</div>
					</section>


				<!-- Clasificacion -->
					<section id="clasificacion" class="four">
						<div class="container-clasificacion">

							<header>
								<h2>Clasificación</h2>
							</header>
						<div class="container-tabla">
							<table class="tablalistado" cellpadding="0" cellspacing="0">

							           <tr>
							               <th class="pos b ">Pos</th>
							               <th class="equipotabla">Equipo</th>
							               <th>Puntos</th>
							               <th>P.J.</th>
							               <th>P.G.</th>
							               <th>P.E.</th>
							               <th>P.P.</th>
							              <th>G.F.</th>
							              <th>G.C.</th>

							            </tr>

							<?php			



								$json = file_get_contents("http://www.siguetuliga.com/ws/index.php?s=Liga&fc=clasificacion&idLiga=$idliga&tipo=b&idSesion=".$idSesion);
								$datac = json_decode($json, true);
										foreach ($datac['clasificacion']['puestos'] as $k=>$valor) {
											echo '<tr class="banda">';
											echo '<td class="nombre-equipo">'. $datac['clasificacion']['puestos'][$k]['posicion'].'</td>';
											echo '<td>'.$datac['clasificacion']['puestos'][$k]['nombreEquipo'].'</td>';
											echo '<td>'.$datac['clasificacion']['puestos'][$k]['pt'].'</td>';
											echo '<td>'.$datac['clasificacion']['puestos'][$k]['pj'].'</td>';
											echo '<td>'.$datac['clasificacion']['puestos'][$k]['pg'].'</td>';										
											echo '<td>'.$datac['clasificacion']['puestos'][$k]['pe'].'</td>';
											echo '<td>'.$datac['clasificacion']['puestos'][$k]['pp'].'</td>';									
											echo '<td>'.$datac['clasificacion']['puestos'][$k]['gf'].'</td>';									
											echo '<td>'.$datac['clasificacion']['puestos'][$k]['gc'].'</td></tr>';
										
										}

								

								
	 					?> 

	   		
								</table>
							</div>
						</div>
					</section>




					
				<!-- jornada -->
					<section id="jornada" class="two">
						<div class="container-jornada">
					
							<header>
								<h2>Jornada Actual</h2>
							</header>
							<?php

								$json = file_get_contents("http://www.siguetuliga.com/ws/index.php?s=Liga&fc=jornada&idLiga=$idliga&tipo=b&idSesion=".$idSesion);
								$dataj = json_decode($json, true);
								/*
								PRUEBAS
								----------------------------------------------------------------------------------------------------------------------
								*/
								
								//var_dump($dataj['jornadaActual']);
								$datas=array();
								foreach ($dataj['jornadaActual']['partidos'] as $k=>$valor) {
									
									if (!in_array($valor['fechaCompleta'], $datas)) {
										$datas[] = $valor['fechaCompleta'];
									}
									//echo $valor['fechaCompleta'].'<br />';
								}
								//var_dump($datas);
								//echo 'Longitud: '.count($datas);
								/*
								----------------------------------------------------------------------------------------------------------------------
								*/
								//$unafecha = $dataj['jornadaActual']['partidos'][0]['fechaCompleta'];
								//echo "<span class='fechajornada'>".$unafecha."</span>";
								for($z=0; $z<count($datas);$z++)
								{
									echo "<span class='fechajornada'>".$datas[$z]."</span>";
			
										foreach ($dataj['jornadaActual']['partidos'] as $k=>$valor) {
										
											if($valor['fechaCompleta']==$datas[$z])
											{
												if ($valor['nombreEquipoLocal'] == '') {
													$valor['nombreEquipoLocal'] = "<span class='descansa'>DESCANSA</span>";
												} 
												if ($valor['nombreEquipoVisitante'] == '') {
													$valor['nombreEquipoVisitante'] = "<span class='descansa'>DESCANSA</span>";
												} 
												echo '<p class="jornadaactual">'.$valor['nombreEquipoLocal'].'     ';
												if ($valor["terminado"] == true) {
														echo '<span class="goles">'.$valor['golesLocal'].'-'.$valor['golesVisitante'].'</span>';
													}else{
														echo '<span class="hora">Hora: '.$valor["hora"].'</span>';				
													}
												
												echo '    '.$valor['nombreEquipoVisitante'].'</p>';
											}
										}
								}

							?>




						</div>
					</section>

				<!-- calendario -->
					<section id="calendario" class="three">
						<div class="container-calendario">

							<header>
								<h2>Calendario</h2>
							</header>

					<?php

							$json = file_get_contents("http://www.siguetuliga.com/ws/index.php?s=Liga&fc=calendario&idLiga=$idliga&tipo=b&idSesion=".$idSesion);
							$data = json_decode($json, true);
							$i=0;
									foreach ($data["jornadas"] as $k=>$valor) {
									$i++;
										//var_dump($data["jornadas"][0]['partidos']);
										
										if ($valor["partidos"][0]["terminado"] == true) {
											echo "<main><div class='ficha color f".$i."'>";
										}else{
											echo "<main><div class='ficha f".$i."'>";				
										}
										//
										echo "JORNADA ".$valor['idJornada'].'<br />';
										/*echo "<br>";			
										echo "<span class='fecha'>".$valor["partidos"][0]["fechaCompleta"]."</span>";
										echo "<br>";*/
										
											$datas=array();
											
											foreach ($valor['partidos'] as $k=>$mivalor) {
												if (!in_array($mivalor['fechaCompleta'], $datas)) {
													$datas[] = $mivalor['fechaCompleta'];
												}
											}
										
										for($z=0; $z<count($datas);$z++)
										{			
											echo "<span class='fecha'>".$datas[$z]."</span>";
										
											foreach ($valor["partidos"] as $k=>$value) {
											
											if($value['fechaCompleta']==$datas[$z])
											{
												if ($value['nombreEquipoLocal'] == '') {
													$value['nombreEquipoLocal'] = "<span class='descansa'>DESCANSA</span>";
												} 
												if ($value['nombreEquipoVisitante'] == '') {
													$value['nombreEquipoVisitante'] = "<span class='descansa'>DESCANSA</span>";
												} 
												
												echo '<p class="calendario">'.$value['nombreEquipoLocal'].'     ';
												if ($value["terminado"] == true) {
													echo '<span class="goles">'.$value['golesLocal'].'-'.$value['golesVisitante'].'</span>';
												}else{
													echo '<span class="hora">Hora: '.$value["hora"].'</span>';				
												}
												echo '    '.$value['nombreEquipoVisitante'];
												echo '</p>';
											}
												
											}	
										
										}
										echo "</main>";
									}		
 					?> 

						</div>
					</section>
			

			
			</div>

		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<div class="copyright">
						<p>&copy; 2013 Dani</p>
						<ul class="menu">
							<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				
			</div>

	</body>
</html>