<div id="contentWrapper">
    <!--TITULO PRINCIPAL-->
    <div class="mainTitle">
        <h1>Nuestro Método de Trabajo</h1>
        <h3>Contacto constante durante todo el proceso de desarrollo</h3>
    </div>
    <div class="clear"></div>

    <!--IMAGEN TITULO-->
    <img class="imgTitulo" src="<?php echo STATIC_URL; ?>img/metodo.png"/>

    <!--CONTENIDO CON IMAGEN Y TITULO PRINCIPAL RESALTADO-->
    <div class="contentWithImage">
        <img src="<?php echo STATIC_URL; ?>img/vwf-customerLogo.png" width="260" <?php linkTo("vwf"); ?>/>
        <div>
            <h1 <?php linkTo("vwf"); ?>>vytee Work Flow Customer</h1>
            <h3>Una fuerte conexión entre nosotros y nuestros cliente</h3>
            <p>
                Sistema desarrollado por nosotros para facilitar la comunicación bilateral entre nuestros clientes y nuestros desarrolladores. Esto permite un seguimiento del avance de los proyectos por parte del cliente y mejora la resolución de problemas y cambios específicos.
            </p>
        </div>
    </div>
    <div class="clearMarginBottomBIG"></div>

    <!--CONTENIDO CON IMAGEN-->
    <div class="contentWithImage">
        <img src="<?php echo STATIC_URL; ?>img/metodo2.png" width="260" style="float: right;"/>
        <div>
            <h1>Tecnologías y Herramientas</h1>
            <h3>Innovación y continuo aprendizaje de nuevos métodos de trabajo</h3>
            <p>
                Vytee desarrolla estrategias y soluciones comunicativas en el área de diseño y desarrollo de páginas web, realización audiovisual y diseño gráfico en general  tanto en el ámbito comercial, como institucional y artístico.
                <br/><br/>
                Buscamos ser una solución funcional y personalizada, tenemos un enfoque centrado especialmente en el usuario sin dejar de lado nuestro lado humano.
            </p>
        </div>
    </div>
    <div class="clear"></div>
</div>

<!--SIDEBAR-->
<div id="sidebarWrapper">
    <!--Correo-->
    <div class="mailSide">
        <img class="imgSidebarMail" src="<?php echo STATIC_URL;?>img/btnMail.png"/>
        contacto@vytee.com
    </div>

    <!--Boton Simple-->
    <div class="sidebarSimple" onclick="location.href='<?php echo STATIC_URL; ?>empresa/equipo'">
        <img class="imgSidebar" style="margin-top: 4px;" src="<?php echo STATIC_URL;?>img/btnSS.png"/>
        Nuestro Equipo
    </div>

    <!--Boton Simple-->
    <div class="sidebarSimple" onclick="location.href='<?php echo STATIC_URL; ?>empresa'">
        <img class="imgSidebar" style="margin-top: 4px;" src="<?php echo STATIC_URL;?>img/btnSS.png"/>
        Acerca de Nosotros
    </div>

</div>






