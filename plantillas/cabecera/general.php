<div id="fixedHeader">
    <div id="logonBar">
        <div id="userID">
            <p>Hola, bienvenido!</p>
        </div>
        <div id="welcomeUserMessage">
            <p>Registrese como cliente nuevo y empecemos con su proyecto!</p>
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