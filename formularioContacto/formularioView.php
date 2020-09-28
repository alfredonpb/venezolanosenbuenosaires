 <!DOCTYPE html>
<!DOCTYPE html>
<head>
	<meta name="google-site-verification" content="cUI41KHpyy72nDELART-NtAu6c0YTr769c-Wy2wYO5Y" />
	<meta name="keywords" content="diseño web, codigo, programacion, html, css, javascript, tutoriales">
	<meta name="author" content="Migracion-Venezuela-Argentina">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Venezolanos en Buenos Aires</title>	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<script src="https://kit.fontawesome.com/f47412a73a.js" crossorigin="anonymous"></script>         
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">	
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    
<style>
    body {font-family: 'Raleway';  }

    .contenedor {
	width: 600px;
    margin: 0px auto;
    margin-top: -80px;
    }

    .formulario .contenedor-inputs{
	padding:10px;
	background: #fff;
	border-radius:6px 6px 0 0;
        }

    .formulario input[type="text"],
    .formulario input[type="email"] {
	display: block;
	width: 100%;
	margin-bottom: 12px;
	padding: 15px 10px;
	border:none;
	border-bottom: 2px solid #ccc;	
	font-size: 14px;
    }

    .formulario input[type="text"]:focus,
    .formulario input[type="email"]:focus {
	border-bottom: 2px solid #246eb9;
        }

    .formulario input[type="radio"]{
	display: none;
    }

    .formulario .sexo {
	display: flex;
	flex-wrap:no-wrap;
	justify-content:space-between;
	margin-bottom: 20px;
    }

    .formulario .sexo .label-radio {
	width: 49.5%;
    }

    .formulario .sexo .hombre {
	border-radius: 3px 0 0 3px;
    }

    .formulario .sexo .mujer {
	border-radius: 0 3px 3px 0;
    }

    .formulario .label-radio{
	background: rgba(249,160,63, .4);
	color: #fff;
	padding:10px 10px;
	text-align: center;
    }

    .formulario input[type="radio"]:checked + .label-radio{
	background: #f9a03f;
	color: #fff;
    }

    .formulario .terminos {
	/*margin-bottom: 20px;*/
	text-align: center;
	color: #424242;
    }

    .formulario .terminos label {
	margin-left: 0px;
    }
    /* .form textarea {
        max-height:100px;
        min-height:150px;
    } */

    .formulario .error {
	display: none;
	margin-top: 20px;
	border-radius: 3px;
	background: #cc0404;
	color: #fff;
	padding: 15px 10px;
	padding-left: 40px;
    }

    .formulario .btn {
	width: 100%;
	text-align: center;
	background: #246eb9;
	color: #fff;
	border: none;
	display: block;
	padding: 10px 10px;
	cursor: pointer;
	border-radius: 0 0 6px 6px;
	font-family: 'Raleway';
	font-size: 14px;
    }

    .formulario .btn:hover {
	background: #052cd8;
    }
</style>
</head>
 
<body>
	<!--NABVAR-->		
    <nav class="navbar text-center bg-primary fixed-top col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <a href="index.html" class="navbar-brand pl-0" id="harina"> <img src="HARINA-PAN.png" id="harinapan" tabindex="0" class="rounded" height="35" alt="Harinapan"></a>
            <div class="" id="">
                <ul class="navbar-nav mr-auto enlaces-menu">                           
                    <li class="nav-item">
                        <a href="index.html" class="nav-link px-3 text-white">INICIO</a>                           
                    </li>
                    <!-- <li class="nav-item">
                        <a href="formulario.html" class="nav-link px-3 text-white">CONTACTO</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="proposito.html" class="nav-link px-3 text-white">PROPÓSITO</a>
                    </li>                         
                </ul>              
            </div>           
    </nav>
        <h1 class="text-center h1-responsive">Venezolanos en Buenos Aires</h1>     
                  
        <div class="bandera bandera-responsive">                  
            <div class="bola1 mt-0 bolas"> </div>
            <div class="bola2 mx-0 bolas" > 
                <spam class="estrellas">*******</spam>                   
            </div>
            <div class="bola3 mx-0 bolas" > </div>
        </div>

        <!--FORMULARIO--> 
        <div class="contenedor container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="formulario" id="formulario" name="formulario">
                        
                        <div class="contenedor-inputs form-group">
                            <label for="nombre">Nombre y Apellido</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="" placeholder="Escribe tu nombre y apellido">

                            <label for="correo">Correo</label>                           
                            <input type="email" class="form-control" id="correo" name="correo" value="" placeholder=" Escribe tu correo">

                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" class="form-control textarea" id="mensaje"  cols="20" placeholder="Escribe tu mensaje"></textarea>
                        
                                    
                            <div class="terminos form-check">                                
                                <label class="form-check-label pr-4 my-1" for="terminos">Acepto Terminos y Condiciones</label>
                                <input  class="form-check-input my-2" type="checkbox" name="terminos" id="terminos">
                            </div>

                            <ul class="error" id="error"></ul>

                            <!-- <div class="alert-success" id="success">Mensaje enviado exitosamente</div> -->

                            <button type="submit" name="submit" class="btn btn-primary" value="Enviar" >Enviar</button>
                        </div>    
            
                        <!-- <input type="submit" class="btn" value="Enviar"> -->
                       
                        <!-- <div class="sexo">
                                <input type="radio" name="sexo" id="hombre" value="hombre">
                                <label for="hombre" class="label-radio hombre">Hombre</label>
                                        
                                <input type="radio" name="sexo" id="mujer" value="mujer">
                                <label for="mujer" class="label-radio mujer">Mujer</label>
                            </div> -->
                    </form>
                </div>
            </div>
        </div>
	
		<!--FOOTER-->   

    <hr class="hr">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="formulario.js"></script>
    
</body>
</html>
</html>