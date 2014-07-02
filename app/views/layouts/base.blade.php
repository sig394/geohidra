<!DOCTYPE HTML>
<html>
	<head>
    	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<title>GEOHIDRA</title>
		{{ HTML::style('css/bootstrap.min.css'); }}
		<link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
		{{ HTML::style('css/customize.css'); }}
		{{ HTML::style('css/style.css'); }}

    </head>
    <body>
    	<div id="header">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-3 logo">
	    				Construimos futuro
	    			</div>
	    			<div class="col-md-7">
	    				<div class="container-fluid">
		    				<div class="btn-group">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownGeohidra" data-toggle="dropdown">
							    	GEOHIDRA
							  	</button>
							  	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownGeohidra">
							    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">MISION-VISION</a></li>
							    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">CERTIFICACIONES<br>Y REGISTROS</a></li>
							    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">PRESENTACION<br>EJECUTIVA</a></li>
							    </ul>
							</div>
							<div class="btn-group">
							    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownServicios" data-toggle="dropdown">
							    	SERVICIOS
							  	</button>
							  	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownServicios">
							    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">MISION-VISION</a></li>
							    </ul>
							</div>
							<div class="btn-group">
							    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownProyectos" data-toggle="dropdown">
							    	PROYECTOS
							  	</button>
							  	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownProyectos">
							    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">MISION-VISION</a></li>
							    </ul>
							</div>
							<div class="btn-group">
							    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownCarreras" data-toggle="dropdown">
							    	CARRERAS
							  	</button>
							  	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownCarreras">
							    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">MISION-VISION</a></li>
							    </ul>
							</div>
							<div class="btn-group">
							    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownContacto" data-toggle="dropdown">
							    	CONTACTO
							  	</button>
							  	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownContacto">
							    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">MISION-VISION</a></li>
							    </ul>
							</div>
						</div>
	    			</div>
	    			<div class="col-md-2 pull-right">
	    				<div class="pull-right" style="margin-right:20px;margin-top:-10px;">
	    					<div class="pull-right">
	    						<img src="{{asset('img/flag-us.png')}}" />
	    						<img src="{{asset('img/flag-es.png')}}" />
	    					</div>
	    					<br>
	    					<a class="btn btn-default btn-xs login" href="{{URL::to('login')}}">INICIAR SESION</a>
	    				</div>
	    			</div>
	    		</div>

	    	</div>
	    </div>
    	@yield('content_body')
    	
    	<div class="container">
    		<div class="row footer">
    			<div class="col-md-11 col-md-offset-1">
					<div class="col-md-5 copy_rights">
						2014 Geohidra, Todo los derechos reservados
					</div>
					<div class="col-md-7 copy_rights">
						<div class="pull-right">
							<ul class="footer-menu">
								<li>
									<a href="">CONTACTOS</a>
								</li>
								<li>
									<a href="">CARRERAS</a>
								</li>
								<li>
									<a href="">PROYECTOS</a>
								</li>
								<li>
									<a href="">SERVICIOS</a>
								</li>
								<li>
									<a href="">GEOHIDRA</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
    		</div>
    	</div>
    	
    </body>
    {{ HTML::script('js/jquery-1.11.1.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
</html>