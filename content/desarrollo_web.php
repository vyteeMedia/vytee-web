<div id="contentWrapper">
    <!--TITULO PRINCIPAL-->
    <div class="mainTitle">
        <h1>Su empresa en internet</h1>
        <h3>Elaboración de Portales Web para Personas, Institutos y Empresas.</h3>
    </div>
    <div class="clear"></div>

    <!--IMAGEN TITULO-->
    <img class="imgTitulo" src="<?php echo STATIC_URL; ?>img/bannerDesarrolloWeb.png"/>

    <!--CONTENIDO CON IMAGEN Y TITULO PRINCIPAL RESALTADO-->
    <div class="contentWithImage">
        <div style="width: 100%;">
            <h1 <?php linkTo("empresa/equipo"); ?>>División de Desarrollo Web</h1>
            <h3>Tecnologías en constante desarrollo e innovación</h3>
            <p>
                Un buen desarrollo web implica un gran número de requerimientos tanto técnicos como artísticos. Nuestro equipo reune lo mejor de ambos mundos para poder proporcionar bases robustas en la programación de los portales, como, también, diseños atractivos y actuales según las tendencias contemporáneas.
            </p>
        </div>
    </div>
    <div class="clearMarginBottom"></div>

    <!--CONTENIDO CON IMAGEN-->
    <div class="contentWithImage">
        <img src="<?php echo STATIC_URL; ?>img/featureWeb1.png"  width="215" height="156"/>
        <div>
            <h1 style="font-size: 20px;">Diagramación Liquida - Responsive Design</h1>
            <h3>El Diseño de su Web adaptado a todos los dispositivo móviles y de escritorio automáticamente </h3>
            <p>
                La mayoría de los usuarios de internet actualmente se conectan desde diferentes dispositivos móviles y ya no solo desde su computador de escritorio o laptop.
                <br/><br/>
                Ya sea desde un Ipad o un iphone como también desde una tablet o smartphone Android o Windows Phone. Con la diagramación liquida su web se adapta automaticamente a cualquier formato sin perder la calidad y el diseño desarrollado.
            </p>
        </div>
    </div>
    <div class="clearMarginBottom"></div>

    <!--CONTENIDO CON IMAGEN-->
    <div class="contentWithImage">
        <img src="<?php echo STATIC_URL; ?>img/featureWeb2.png"  width="215" height="156"/>
        <div>
            <h1 style="font-size: 20px;">Catálogo de Productos o Servicios - Showcase</h1>
            <h3>Todos sus productos mostrados de una manera versatil y atractiva a sus clientes </h3>
            <p>
                La mejor y más atractiva manera de mostrar a sus clientes todos los productos o servicios que su negocio ofrece. En nuestro catálogo de productos usted puede destacar productos para llamar la atención o resaltar ofertas y promociones con un gran impacto visual.
            </p>
        </div>
    </div>
    <div class="clearMarginBottom"></div>

    <!--CONTENIDO CON IMAGEN-->
    <div class="contentWithImageR" style="height: 160px;">
        <img src="<?php echo STATIC_URL; ?>img/featureWeb3.png" width="215" height="156"/>
        <div>
            <h1 style="font-size: 20px;">Control Total del Contenido - Personalización Directa</h1>
            <h3>Capacidad de modificar en linea el contenido de su web directamente </h3>
            <p>
                Ingresando a la zona administrador de su página, usted podrá agregar información a todas las secciones como también actualizar los teléfonos de contacto o domicilio de su empresa. Todo desde la comodidad de cualquier computador o teléfono móvil conectado a internet.
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
        desarrollo.web@vytee.com
    </div>

    <!--Boton Resaltado-->
    <div class="siderbarResaltado">
        <img class="imgSidebar" style="margin-top: 7px; margin-left: 13px;" src="<?php echo STATIC_URL;?>img/btnR.png"/>
        Solicitar Cotización
    </div>

    <!--Boton Simple-->
    <div class="sidebarSimple" <?php linkTo("paquetes/personas"); ?>>
        <img class="imgSidebar" style="margin-top: 4px;" src="<?php echo STATIC_URL;?>img/btnSS.png"/>
        Paquetes para Personas
    </div>

    <!--Boton Simple-->
    <div class="sidebarSimple" <?php linkTo("paquetes/empresas"); ?>>
        <img class="imgSidebar" style="margin-top: 4px;" src="<?php echo STATIC_URL;?>img/btnSS.png"/>
        Paquetes para Empresas
    </div>

    <!--Boton Simple-->
    <div class="sidebarSimple" <?php linkTo("paquetes/otros"); ?>>
        <img class="imgSidebar" style="margin-top: 4px;" src="<?php echo STATIC_URL;?>img/btnSS.png"/>
        Paquetes Personalizados
    </div>

</div>
