<div id="contentWrapper">
    <div class="mainTitleVWF">
        <div class="logoTitle">
            <h1>vytee Customer</h1>
            <h3>Portal para Clientes</h3>
        </div>
        <div class="mainTitleWrapperVWF">
            <h1>Bienvenido, <?php obtenerDatoUsuario('nombre'); ?></h1>
            <h3>Representate <strong><?php obtenerDatoUsuario('empresa'); ?></strong> </h3>
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
                    <p>Duración Estimada de Desarrollo: <span style="font-weight: bold;"><?php obtenerDatoProyecto('duracion'); ?></span></p>
                </div>
            </div>
        </div>

        <div class="projectScreenShot">
            <div class="panelTitle">
                Propuesta de Diseño Actual
            </div>
            <img src="<?php echo STATIC_URL; ?>img/project1alpha1.png"/>
            <div class="screenShotLink" onclick="window.open('http://www.vytee.com/decovaldiviezo','_blank');">
                Ver Propuesta en Linea
            </div>
        </div>

        <div class="projectState">
            <h1>Evolución y Fases del Proyecto</h1>
            <img src="<?php echo STATIC_URL; ?>img/fase1.png"/>
            <h2>Requisito Siguiente fase: <strong>Aprobar Cotización Final</strong></h2>
        </div>
        <div class="clear"></div>
    </div>
    <div style="float: right; width: 260px;">
        <div class="costWrapper">
            <div style="width: 260px;height: 55px; border-bottom: 1px #A8A8B7 solid;">
                <div style="width: 85px; height: 45px; float: left; padding-top: 7px; text-align: right;">
                    <span class="saldoFavor">S/. <?php obtenerDatoUsuario('saldo'); ?>.00</span>
                    <span class="dSaldoFavor">Saldo a Favor</span>
                </div>
                <div style="width: 160px; height: 50px; float: right; padding-top: 10px; ">
                    <span class="linkAnalisisOpcionesPago">Analizar Opciones de Pago</span>
                    <span class="linkCotizacion">Cotización Detallada</span>
                </div>
            </div>

            <div style="width: 260px;height: 55px;">
                <div style="width: 90px; height: 45px; padding-top: 5px; float: left; text-align: right;">
                    <span class="dCostoTotal">Costo Total del Proyecto</span>
                </div>
                <div style="width: 160px; height: 45px; float: right; text-align: right; padding-right: 5px;  ">
                    <span class="costoTotal">S/. <?php obtenerDatoProyecto('costo'); ?>.00</span><br/>
                    <span class="dMsgCostoTotal"><?php obtenerDatoProyecto('estado_costo'); ?></span>
                </div>
            </div>
        </div>
        <div class="panel" style="height: 132px;">
            <div class="genericPanelTitle">
                Opciones
            </div>
            <div style="float:left; width: 145px; padding-left: 5px;">
                <img src="<?php echo STATIC_URL;?>img/vwfClientesbtn1.png"/>
                <img src="<?php echo STATIC_URL;?>img/vwfClientesbtn2.png"/>
            </div>
            <div style="float:right; width: 100px;">
                <img src="<?php echo STATIC_URL;?>img/vwfClientesbtn3.png"/>
                <img src="<?php echo STATIC_URL;?>img/vwfClientesbtn4.png"/>
            </div>
        </div>
        <div class="panelWB" style="height: 100px;">
            <h1>Último Registro de Desarrollo</h1>
            <p>[17-03]> Implementación GUI Principal</p>
            <p>[17-03]> Diagramación Plantilla General</p>
            <p>[15-03]> Retoma de contacto de imágenes</p>
        </div>
        <div class="panel" style="height: 375px;">
            <div class="genericPanelTitle">
                Servicios Incluidos en el Paquete
            </div>
            <div class="miniSpec">
                <img src="<?php echo STATIC_URL;?>img/miniSpec_CP.png"/>
                <h1>Catálogo de Productos</h1>
                <p>Diseño y habilitación de un catálogo tipo ShowCase.</p>
            </div>
            <div class="miniSpec">
                <img src="<?php echo STATIC_URL;?>img/miniSpec_FB.png"/>
                <h1>Página de Facebook</h1>
                <p>Diseño personalizado de una página de facebook para la empresa.</p>
            </div>
            <div class="miniSpec">
                <img src="<?php echo STATIC_URL;?>img/miniSpec_AJS.png"/>
                <h1>Animación JS</h1>
                <p>Tecnologia JavaScript para la creación de animaciones sin cargar memoria del PC.</p>
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
        <img class="imgSidebar" style="margin-top: 7px; margin-left: 13px;" src="<?php echo STATIC_URL;?>img/btnR.png"/>
        Editar Cuenta
    </div>

    <!--Boton Resaltado-->
    <div class="siderbarResaltado">
        <img class="imgSidebar" style="margin-top: 7px; margin-left: 13px;" src="<?php echo STATIC_URL;?>img/btnR.png"/>
        Nueva Cotización
    </div>

    <!--Boton Simple Tienda-->
    <div class="sidebarSimple">
        <img class="imgSidebar" style="margin-top: 2px;" src="<?php echo STATIC_URL;?>img/btnS.png"/>
        Ver Tienda
    </div>

    <!--Boton Simple-->
    <div class="sidebarSimple">
        <img class="imgSidebar" style="margin-top: 2px;" src="<?php echo STATIC_URL;?>img/btnSS.png"/>
        Departamento de Desarrollo Web
    </div>

    <!--Boton Simple-->
    <div class="sidebarSimple">
        <img class="imgSidebar" style="margin-top: 2px;" src="<?php echo STATIC_URL;?>img/btnSS.png"/>
        Departamento de Diseño Gráfico
    </div>

</div>
