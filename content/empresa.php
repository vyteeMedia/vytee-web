<div id="contentWrapper">
    <!--TITULO PRINCIPAL-->
    <div class="mainTitle">
        <h1>vytee Media Solutions</h1>
        <h3>Soluciones y desarrollo Web, Gráfico Digital y Audiovisual </h3>
    </div>
    <div class="clear"></div>

    <!--IMAGEN TITULO-->
    <img class="imgTitulo" src="<?php echo STATIC_URL; ?>img/empresa3.png"/>

    <!--CONTENIDO CON IMAGEN Y TITULO PRINCIPAL RESALTADO-->
    <div class="contentWithImage">
        <img src="<?php echo STATIC_URL; ?>img/empresa2.png" width="260" <?php linkTo("empresa/equipo"); ?>/>
        <div>
            <h1 <?php linkTo("empresa/equipo"); ?>>Nuestro Equipo de Desarrollo</h1>
            <h3>Un grupo consistente con bases solidas en el aprendizaje continuo</h3>
            <p>
                Todo parte de un grupo de estudiantes entusiasmados por sus respectivas carreras, quienes en base a la colaboración descubrieron que podían desarrollar una propuesta atractiva, competitiva y distintiva, gracias a las variadas perspectivas y enfoques que presentan sus carreras: La arquitectura, la informática, el marketing y las ciencias de la comunicación.
            </p>
        </div>
    </div>
    <div class="clear"></div>

    <!--CONTENIDO CON IMAGEN-->
    <div class="contentHighlight">
        <div style="width: 100%; margin-top: 50px; margin-bottom: 50px;">
            <p style="font-size: 26px; font-style: italic; text-align: right;">
                "Grupo de trabajo enfocado en el diseño y desarrollo de soluciones o aplicaciones web que cumplan con los requerimientos de nuestros clientes utilizando las herramientas más flexibles y dinámicas."
            </p>
        </div>
    </div>
    <div class="clear"></div>

    <!--CONTENIDO CON IMAGEN-->
    <div class="contentWithImage">
        <img src="<?php echo STATIC_URL; ?>img/empresa1.jpg" width="260"/>
        <div>
            <h1>Nuestro Método de Trabajo</h1>
            <h3>Una búsqueda constante de nuevas tecnologías y herramientas para el desarrollo </h3>
            <p>
                Vytee desarrolla estrategias y soluciones comunicativas en el área de diseño y desarrollo de páginas web, realización audiovisual y diseño gráfico en general  tanto en el ámbito comercial, como institucional y artístico.
                <br/><br/>
                Básicamente Vytee busca ser una solución funcional y personalizada, con un enfoque centrado especialmente en el usuario sin dejar de lado nuestro lado humano.
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
    <div class="sidebarSimple">
        <img class="imgSidebar" style="margin-top: 4px;" src="<?php echo STATIC_URL;?>img/btnSS.png"/>
        Método de Trabajo
    </div>

</div>
