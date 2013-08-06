
<? include "header.html" ?>
<div id="fondo2"><img src="images/fondo2.png"/></div>
<div id="naranja"></div>

<div id="boton1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="img1"><img src="images/pagweb.png"/></a>
<a class="btn1">A LA MEDIDA</a>
</div>

<div id="boton2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="img2"><img src="images/descarga.png"/></a>
<a class="btn2">SAINT</a>
</div>

<div id="boton3" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="img3"><img src="images/pagweb.png"/></a>
<a class="btn3">SUPERA-T SOFTWARE</a>
</div>

<a href="descargar.php"><div id="boton4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="img4"><img src="images/cursos.png"/></a>
<a class="btn4">DESCARGAS</a>
</div></a>


<div id="inno"><img src="images/vineta.png" />Innovaciones</div>


<div id="pag"><img src="images/vineta.png" />Páginas Web e Impresoras Fiscales</div>
<div id="pagt" align="justify">Contamos con una variedad de diseños exclusivos los cuales pueden ser adaptados a sus necesidades garantizando la asesoría integral a nivel de imagen, diseño y mercadeo para su web site.<img src="images/pagi.png" /></div>



<div id="sop"><img src="images/vineta.png" />Soporte</div>
<div id="sopt" align="justify">Contamos con una variedad de diseños exclusivos los cuales pueden ser adaptados a sus necesidades garantizando la asesoría integral a nivel de imagen, diseño y mercadeo para su web site.<img src="images/pagi.png" /></div>

<div id="cur"><img src="images/vineta.png" />Cursos</div>
<div id="curt" align="justify">Contamos con una variedad de diseños exclusivos los cuales pueden ser adaptados a sus necesidades garantizando la asesoría integral a nivel de imagen, diseño y mercadeo para su web site.<img src="images/pagi.png" /></div>

<div id="marquee">
<p style="text-align:center;">
<marquee width="250" height="250" scrolldelay="0" scrollamount="2"  direction="up" onMouseOut="this.start();" onMouseOver="this.stop();" >
 <p style="text-align:center;;font-size:20px;color:#f90;line-height:30px; font-weight:bold; font-style:italic;">
 <h4>Gestión Aeroportuaria</h4>
<img src="images/1.png" />
 <h4>Inspector Digital</h4>
<img src="images/2.png" />
 <h4>Optimus System</h4>
<img src="images/3.png" />
</p>
</marquee>
</div>

<body>
</body>
</html>
=======
<?php

require_once("config/db.php");

echo LANG . " holaaa";

?>

<!-- login form box -->
<form method="post" action="index.php" name="loginform">
    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />
    <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />
    <input type="submit"  name="login" value="Log in" />
</form>

<a href="register.php">Register new account</a>
<a href="password_reset.php">I forgot my password</a>
