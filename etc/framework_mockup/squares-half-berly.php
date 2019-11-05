<?php
    $test = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Full UL/LI | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/head.inc.php');
?>
<link href="/framework/css/main.css" rel="stylesheet">
<link href="/framework/css/squaresHalf.scss" rel="stylesheet">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/header.inc.php'); ?>    
    <div id="main" class="index" role="main">
        <ul class="serviciosList unstyled">
            <li class="clearfix" id="Logistica">
                <div class="img mask">
                    <img src="/img/servicios/01.jpg" class="displayBlock" alt="Logística.">
                </div>
                <div class="txt borderBox">
                    <h2 class="mbm openSansL">Logística</h2>
                    <p>La logística de Berly es un servicio brindado a partir de nuestro Deposito Central en la Ciudad de Buenos aires y nuestros depósitos en las ciudades de Córdoba y Rosario.</p>
                    <p>Es unos de los puntos fuertes de nuestra operación en el segmento institucional. Son miles de clientes atendidos directamente, independientemente del tamaño de la empresa, sea un bar o una gran industria, todos necesitan ser bien abastecidos. Berly asume el compromiso de entregar los pedidos en el menor plazo posible, para eso contamos con nuestra flota de vehículos propios.</p>
                </div>
            </li>
            <li class="clearfix" id="Comodato">
                <div class="img mask">
                    <img src="/img/servicios/02.jpg" class="displayBlock" alt="Comodato.">
                </div>
                <div class="txt borderBox">
                    <h2 class="mbm openSansL">Comodato</h2>
                    <p>El <span class="upperCase">comodato</span> es un sistema importante de la División Institucional y, a lo la largo del tiempo, demostró ser la mejor opción para las empresas de todos los tamaños, porque es sinónimo de tranquilidad, agilidad y, principalmente, economía.</p>
                    <p>Berly sólo provee los dispensadores bajo la modalidad de <span class="upperCase">comodato</span> <span class="ast">*</span>.</p>
                    <p class="sug"><span class="ast">*</span> Sólo el dispenser para spray de neutralizador de olores y los cestos son comercializados.</p>
                </div>
            </li>
            <li class="clearfix" id="Clientes">
                <div class="img mask">
                    <img src="/img/servicios/03.jpg" class="displayBlock" alt="Clientes.">
                </div>
                <div class="txt borderBox">
                    <h2 class="mbm openSansL">Clientes</h2>
                    <p>Podemos decir que atendemos gran parte de las más grandes empresas instaladas en Argentina. Nuestros productos y servicios forman parte de miles de empleados de todos los sectores de la economía. Les ofrecemos a nuestros clientes productos y servicios de alta calidad y desempeño, con un excelente costo beneficio.</p>
                </div>
            </li>
            <li class="clearfix" id="SegmentosAtendidos">
                <div class="img mask">
                    <img src="/img/servicios/04.jpg" class="displayBlock" alt="Segmentos Atendidos.">
                </div>
                <div class="txt borderBox">
                    <h2 class="mbm openSansL">Segmentos Atendidos</h2>
                    <ul class="unstyled">
                        <li class="pRel pll">Bares y Restaurantes</li>
                        <li class="pRel pll">Hotelería</li>
                        <li class="pRel pll">Educación</li>
                        <li class="pRel pll">Oficinas y edificios corporativos</li>
                        <li class="pRel pll">Industria</li>
                        <li class="pRel pll">Salud</li>
                        <li class="pRel pll">Alto Tránsito</li>
                        <li class="pRel pll">Arquitectos</li>
                        <li class="pRel pll">Empresas de limpieza y de mantenimiento</li>
                    </ul>
                </div>
            </li>
            <li class="clearfix" id="ConsultoriaTecnica">
                <div class="img mask">
                    <img src="/img/servicios/05.jpg" class="displayBlock" alt="Equipos.">
                </div>
                <div class="txt borderBox">
                    <h2 class="mbm openSansL">Equipos</h2>
                    <p>Berly cuenta con un equipo excepcional de profesionales entrenados y preparados para relacionarse de manera altamente eficaz con los clientes, ya sea al momento de presentar los beneficios de nuestros sistemas, sea en la agilidad de solucionar cuestiones cotidianas o en las negociaciones complejas que involucran los departamentos estratégicos de los clientes. En cualquier situación, el equipo de Berly está listo para prestar la mejor atención y siempre garantizar la satisfacción total de los clientes.</p>
                    <p>El equipo directo de Berly consta de profesionales divididos en diferentes funciones: Ventas, Consultoría técnica, entrenamiento, central de atención, administración de ventas y marketing.</p>
                    <p>Para una mejor atención de las regiones con mayor concentración de empresas, el equipo está dividido en 3 filiales: CABA Y GBA, Córdoba y Rosario.</p>
                    <p>Contamos también con representantes en todo el país.</p>
                </div>
            </li>
            <li class="clearfix" id="Entrenamiento">
                <div class="img mask">
                    <img src="/img/servicios/06.jpg" class="displayBlock" alt="Consultoría Técnica.">
                </div>
                <div class="txt borderBox">
                    <h2 class="mbm openSansL">Consultoría Técnica</h2>
                    <p>La calidad de la asistencia técnica de Berly es realizada por nuestros consultores técnicos y es algo que se destaca en comparación con otras empresas competidoras.</p>
                    <p>Especialistas en varias funciones, muy bien entrenados, resuelven con agilidad todos los eventuales problemas.</p>
                    <p>Funciones del Consultor técnico:</p>
                    <ul class="unstyled">
                        <li class="pRel pll">Instalación de dispensers</li>
                        <li class="pRel pll">Atención de reclamos</li>
                        <li class="pRel pll">Introducción de nuevos productos</li>
                        <li class="pRel pll">Testeos de productos</li>
                        <li class="pRel pll">Contrato de Comodato</li>
                        <li class="pRel pll">Integración con los propietarios</li>
                        <li class="pRel pll">Verificación de Stocks</li>
                        <li class="pRel pll">Entrenamiento del equipo de limpieza</li>
                    </ul>
                </div>
            </li>
            <li class="clearfix" id="SolucionesEmpresa">
                <div class="img mask">
                    <img src="/img/servicios/07.jpg" class="displayBlock" alt="Entrenamiento.">
                </div>
                <div class="txt borderBox">
                    <h2 class="mbm openSansL">Entrenamiento</h2>
                    <h3 class="openSansB">PBE: el final del desperdicio</h3>
                    <p>Sin ningún costo, nosotros entrenamos al equipo responsable de la limpieza y mantenimiento de los dispensers, perfeccionando su trabajo. Son abordados conceptos de higiene personal, procedimientos de limpieza, reposición de productos, etc. Nuestros consultores técnicos hacen un estudio detallado de los sanitarios y detectan eventuales problemas como: desperdicio de papel, mal uso de los productos de limpieza, falta de señalización, etc. Cada problema es analizado y se buscan las mejores soluciones, que son transmitidas a la empresa. Luego de ser implementadas las soluciones, el resultado aparece rápidamente: más economía con calidad para los clientes y satisfacción de los usuarios.</p>
                    <h3 class="openSansB">PBU: Programa de Concientización</h3>
                    <p>Berly desarrollo un programa de concientización de usuarios. Se sabe que, la gente en general, no acostumbra mantener los buenos hábitos de educación cuando utiliza baños de uso colectivo. Esto implica, entre otras cosas, un consumo exagerado de los productos disponibles, como toalla de papel, papel higiénico y jabón, lo que acarrea un desperdicio que genera costos innecesarios.</p>
                    <p>Interesados en mantener relaciones comerciales duraderas y garantizar la satisfacción de los clientes, Berly desarrollo el PBU – Programa Berly para los Usuarios. El programa es aplicado con el uso de material impreso y electrónico, principalmente de videos educativos. A parte de de concientizar para el consumo adecuado de los productos, el PBU incentiva el uso consiente del sanitario, abordando temas importantes:</p>
                    <ul class="unstyled">
                        <li class="pRel pll">Utilización de la descarga de Inodoro.</li>
                        <li class="pRel pll">Descarte correcto de basura dentro de los cestos</li>
                        <li class="pRel pll">Uso adecuado de la iluminación, etc. </li>
                    </ul>
                </div>
            </li>
            <li class="clearfix" id="CentroAtencion">
                <div class="img mask">
                    <img src="/img/servicios/09.jpg" class="displayBlock" alt="Soluciones para Empresas.">
                </div>
                <div class="txt borderBox">
                    <h2 class="mbm openSansL">Soluciones para su empresa</h2>
                    <p>En 1993, Berly fue pionera con el lanzamiento de papeles descartables para sanitarios, fabricados con fibras vírgenes, así como con el uso de dispensers propios. Hoy son más de 40 ítems de productos desarrollados con la más avanzada tecnología, como: papeles con excelente suavidad y de alta absorción para el secado de manos, jabones líquidos perfumados y anti-microbiales, sabanas hospitalarias; dispensers modernos y funcionales, que pueden ser personalizados, entre otros.</p>
                </div>
            </li>
            <li class="clearfix">
                <div class="img mask">
                    <img src="/img/servicios/08.jpg" class="displayBlock" alt="Centro de Atención.">
                </div>
                <div class="txt borderBox">
                    <h2 class="mbm openSansL">Centro de Atención</h2>
                    <p>Berly cuenta con eficiente sistema de telemarketing, que trabaja conjuntamente con los vendedores, consultores técnicos y por supuesto clientes.</p>
                </div>
            </li>
        </ul>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/framework/common/footer.inc.php'); ?>
</body>
</html>