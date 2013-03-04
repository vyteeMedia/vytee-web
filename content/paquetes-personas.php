<div id="contentWrapper">
    <!--TITULO PRINCIPAL-->
    <div class="mainTitle">
        <h1>Paquetes Web para Personas</h1>
        <h3>Su profesión en internet. Llegué más lejos con el poder del internet y las redes sociales.</h3>
    </div>
    <div class="clear"></div>

    <!--IMAGEN TITULO-->
    <img class="imgTitulo" src="<?php echo STATIC_URL; ?>img/bannerPaquetePersonas.png"/>

    <!--CONTENIDO CON IMAGEN Y TITULO PRINCIPAL RESALTADO-->
    <div class="contentWithImage">
        <div style="width: 100%;">
            <h1 <?php linkTo("empresa/equipo"); ?>>¿Porqué adquirir un paquete de desarrollo vytee?</h1>
            <p>
                Los paquetes de desarrollo creados por <strong>vytee media solution</strong> conforman diversas combinaciones de elementos que se usan de forma recurrente en el diseño web. Permite poder prescindir de ciertas caraterísticas innecesarias para un proyecto o para poder expandir nuevas funciones en su web.
            </p>
        </div>
    </div>
    <div class="clear"></div>

    <!--TITULO SECUNDARIO-->
    <div class="subTitle">
        <h1>Paquetes Disponibles</h1>
        <h3>Si siente que ninguno de los paquetes cumple sus necesidades tenemos paquetes personalizados para que solicite todo lo que su proyecto necesita.</h3>
    </div>
    <div class="clearMarginBottom"></div>

    <!--CONTENIDO CON IMAGEN-->
    <div class="contentWithImage">
        <img src="<?php echo STATIC_URL; ?>img/paquetePersonasB1.png"  width="215" height="156"/>
        <div>
            <h1 style="font-size: 20px;">Portal Básico</h1>
            <h3>El mejor inicio, un reflejo de usted en internet</h3>
            <p>
                Diseño contemporaneo usando las últimas tecnologías en el desarrollo web sin llegar a crear un complejo portal. Este paquete está enfocado en personas que deseen iniciarse en el negocio por intenet o esten interesados en poder mostrar su portafolio o profesión con un alcance mundial.
            </p>
        </div>
    </div>
    <div class="clearMarginBottom"></div>

    <!--CONTENIDO CON IMAGEN-->
    <div class="contentWithImage">
        <img src="<?php echo STATIC_URL; ?>img/paquetePersonasC1.png"  width="215" height="156"/>
        <div>
            <h1 style="font-size: 20px;">Portal Completo</h1>
            <h3>Experiencia y profesionalismo plasmado en su portal</h3>
            <p>
                El portal básico ampliado. <strong>Diseño liquido</strong> para poder visualizar la web en diferentes dispositivos móviles, desdes iphones o smartphones hasta tablets. Desarrollo de un portal complejo con una gran número de diversos contenidos multimedia.
            </p>
        </div>
    </div>
    <div class="clearMarginBottom"></div>

    <!--CONTENIDO CON IMAGEN-->
    <div class="contentWithImageR" style="height: 160px;">
        <img src="<?php echo STATIC_URL; ?>img/paquetePersonasA1.png" width="215" height="156"/>
        <div>
            <h1 style="font-size: 20px;">Portal Avanzado - Control Total</h1>
            <h3>Capacidad de modificar en linea el contenido de su web directamente </h3>
            <p>
                Todo el equipo de desarrollo enfocado en su proyecto. Implementación de gestores de contenidos propio para que usted pueda modificar en cualquier momento y en cualquier lugar los diversos elementos que conforman su web. <strong>Carrito de compra (e-comerce) </strong>y solicitudes complejas de contacto.
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
