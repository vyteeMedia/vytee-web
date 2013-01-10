<div id="fixedHeader">
    <div id="logonBar">
        <div id="userID">
            <p>[Usuario]</p>
        </div>
        <div id="welcomeUserMessage">
            <p>Bienvenido, es bueno tenerlo de regreso!</p>
        </div>
    </div>
</div>
<div id="header">
    <div id="mainHeader">
        <div id="mainVyteeLogo">
            <div id="logoImg">
                <img src="/vytee-web/img/mainLogo.png" alt="Main Logo"/>
            </div>
            <div id="eslogan">
                Soluciones y desarrollo gráfico multimedia
            </div>
        </div>
        <div id="mainNav">
            <a href="#">Desarrollo Web</a>
            <a href="#">Diseño Gráfico</a>
            <a href="#">Producción Audiovisual</a>
        </div>
        <div id="location">
            <div id="urlLocation">
                <span class="locationHistory"><a href="<?php echo STATIC_URL;?>">inicio</a> / </span>
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