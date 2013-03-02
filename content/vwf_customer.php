<div id="contentWrapper">

    <div class="mainTitleVWF">
        <div class="logoTitle">
            <h1>vytee Customer</h1>
            <h3>Portal para Clientes</h3>
        </div>
        <div class="mainTitleWrapperVWF">
            <h1>Bienvenido, <?php obtenerDatoUsuario('nombre'); ?></h1>
            <h3>Servicios en Desarrollo: <?php obtenerDatoUsuario('proyectos activos'); ?> </h3>
        </div>
    </div>
    <div class="clear"></div>
    <div style="float: left; width: 475px;">
        <div class="projectTitleVWF">
            <div class="mainProjectTitleVWF">
                <img src="<?php echo STATIC_URL; ?>img/project-icon.png"/>
                <h3><?php obtenerDatoProyecto('dominio'); ?></h3>
                <h1><?php obtenerDatoProyecto('titulo'); ?></h1>
            </div>
            <div class="subProjectTitleVWF">
                <div style="width: 230px;float: left;">
                    <p>Proyecto: <span style="color: #9F7F46;"><?php obtenerDatoProyecto('estado'); ?></span></p>
                    <p>Finaliza el: <span style="color: #A9441F;"><?php obtenerDatoProyecto('fecha_fin'); ?></span></p>
                </div>
                <div style="width: 230px; float: right; text-align: right;">
                    <p>Etapa del Desarrollo: <span style="color: #A9441F;"><?php obtenerDatoProyecto('etapa'); ?></span></p>
                    <p>Duración del Desarrollo: <span style="font-weight: bold;"><?php obtenerDatoProyecto('duracion'); ?></span></p>
                </div>
            </div>
        </div>

        <div class="projectScreenShot">
            <div class="panelTitle">
                Propuesta de Diseño Actual
            </div>
            <img src="<?php echo STATIC_URL; ?>img/project1alpha1.png"/>
            <div class="screenShotLink">
                Ver Propuesta en Linea
            </div>
        </div>

        <div class="projectState">
            <img src="<?php echo STATIC_URL; ?>img/tmpProjectState.png"/>
        </div>
        <div class="clear"></div>
    </div>
    <div style="float: right; width: 260px;">
        <div class="costWrapper">

        </div>
        <div class="panel" style="height: 132px;">
            <div class="genericPanelTitle">
                Opciones
            </div>
        </div>
        <div class="panelWB" style="height: 100px;">

        </div>
        <div class="panel" style="height: 375px;">
            <div class="genericPanelTitle">
                Servicios Incluidos en el Paquete
            </div>
        </div>
    </div>
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
        <img class="imgSidebar" style="margin-top: 7px;" src="<?php echo STATIC_URL;?>img/btnR.png"/>
        Solicitar Cotización
    </div>

    <!--Boton Simple-->
    <div class="sidebarSimple">
        <img class="imgSidebar" style="margin-top: 4px;" src="<?php echo STATIC_URL;?>img/btnSS.png"/>
        Paquetes para Personas
    </div>

    <!--Boton Simple-->
    <div class="sidebarSimple">
        <img class="imgSidebar" style="margin-top: 4px;" src="<?php echo STATIC_URL;?>img/btnSS.png"/>
        Paquetes para Empresas
    </div>

    <!--Boton Simple-->
    <div class="sidebarSimple">
        <img class="imgSidebar" style="margin-top: 4px;" src="<?php echo STATIC_URL;?>img/btnSS.png"/>
        Paquetes Personalizados
    </div>

</div>
