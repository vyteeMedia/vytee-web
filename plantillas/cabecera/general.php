<div id="fixedHeader">
    <div id="logonBar">
        <div id="userID">
            <p>
                Hola <?php if(isset($_SESSION['usuario_nombre'])){ echo $_SESSION['usuario_nombre'];}else{echo "Invitado";} ?>, bienvenido!
            </p>
        </div>
        <div id="welcomeUserMessage">

            <?php
            if(isset($_SESSION['usuario_nombre'])){
                ?>
                <p class="welcomerMessage1">Tiene <?php obtenerDatoUsuario('proyectos activos'); ?> Proyecto(s) en Desarrollo</p>
                <p class="welcomerMessage2">No hay ningun mensaje en su bandeja</p>
                <p class="welcomerMessage3">Tiene S/. <?php obtenerDatoUsuario('saldo'); ?>.00 a su favor</p>
                <p class="userLogon" onclick="showLogonDialog();" onmouseleave="hideLogonDialog();">Opciones de Sesión | ▼</p>
                <div id="logonDialog" style="height: 90px; width: 220px;">
                    <h2><?php echo $_SESSION['usuario_nombre']." ".$_SESSION['usuario_apellido']; ?></label></h2>
                    <h3><?php echo $_SESSION['usuario_correo']; ?></h3>
                    <h3><?php echo $_SESSION['usuario_empresa']; ?></h3>
                    <div class="clear" style="margin-bottom: 15px;"></div>
                    <button class="positive" onclick="window.location='<?php echo STATIC_URL;?>vwf/customer'" name="enviar">
                        Ir a la Cuenta
                    </button>

                    <button class="negative" onclick="window.location='<?php echo STATIC_URL;?>php/cerrarSesion.php'" style="float: right; margin-right: 0;">
                        Cerrar Sesion
                    </button>

                </div>
                <?php
            }else{
                ?>
                <p class="welcomerMessage1">Registrese como cliente nuevo y empecemos con su proyecto!</p>
                <p class="welcomerMessage2">Si ya está registrado, inicie sesión para ver el avance de sus proyectos!</p>
                <p class="welcomerMessage3">Adquiera nuevos productos iniciando sesión en su cuenta</p>
                <p class="userLogon" onclick="showLogonDialog();" onmouseleave="hideLogonDialog();">Iniciar Sesión | ▼</p>
                <div id="logonDialog" style="height: 90px; width: 250px;">
                    <form id="logonForm" action="<?php echo STATIC_URL ?>readers/verify.php" method="post">
                        <label>Usuario: </label>
                        <input type="text" name="user" style="width: 150px; float: right;"/>
                        <div class="clear"></div>
                        <label>Contraseña: </label>
                        <input type="password" name="pass" style="width: 150px; float: right;"/>
                        <div class="clear"></div>
                        <button type="submit" class="positive" style="margin-top: 10px;" onclick="this.form.submit()" name="enviar">
                            Iniciar Sesión
                        </button>
                        <div style="float: right;">
                            <button type="submit" class="negative" style="margin-top: 10px;"  onclick="">
                                Registrarse
                            </button>
                        </div>
                    </form>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<div id="header">
    <div id="mainHeader">
        <div id="mainVyteeLogo">
            <div id="logoImg" <?php linkTo("home"); ?>>
                <img src="<?php echo STATIC_URL;?>img/mainLogo.png" alt="Main Logo"/>
            </div>
            <div id="eslogan">
                Soluciones y desarrollo gráfico multimedia
            </div>
        </div>
        <div id="mainNav">
            <a href="#" <?php linkTo("empresa");?>>Acerca de Nosotros</a><br/>
            <a href="#" <?php linkTo("divisiones/desarrollo_web");?>>Desarrollo Web </a>|<a href="#"> Diseño Gráfico</a>
            <a href="#">Producción Audiovisual</a>
        </div>
        <div id="location">
            <div id="urlLocation">
                <span class="locationHistory"><a href="<?php echo STATIC_URL;?>home">inicio</a> / </span>
                <span class="locationActive"><a href="<?php if($nav1!=""){ echo $link1;}?>"><?php if($nav1!=""){ echo $nav1." / ";}?></a></span>
                <span class="locationActive"><a href="<?php if($nav2!=""){ echo $link2;}?>"><?php if($nav2!=""){ echo $nav2." / ";} ?></a></span>
                <span class="locationActive"><a href="<?php if($nav3!=""){ echo $link3;}?>"><?php if($nav3!=""){ echo $nav3." / ";} ?></a></span>
                <span class="locationActive"><a href="<?php if($nav4!=""){ echo $link4;}?>"><?php if($nav4!=""){ echo $nav4." / ";} ?></a></span>
                <span class="locationActive"><a href="<?php if($nav5!=""){ echo $link5;}?>"><?php if($nav5!=""){ echo $nav5." / ";} ?></a></span>
                <span class="locationActive"><a href="<?php if($nav6!=""){ echo $link6;}?>"><?php if($nav6!=""){ echo $nav6." / ";} ?></a></span>
            </div>
        </div>
    </div>
</div>