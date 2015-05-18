$(document).ready(function()
{  /*Empiezan el document ready */

	/* Empiezan los tooltips del formulario del proyecto*/
    $('#formularioproyecto').on('mouseover',function()
     {
            $("#myTooltip0").tooltip({
                title : 'Indique el nombre del proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body',
                
                
            });

            $("#myTooltip1").tooltip({

                title : 'Indique el folio del proyecto, con el cual será identificado este proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip2").tooltip({
               
               title : 'Modalidad del proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip3").tooltip({
               
               title : 'Tipo de propuesta.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip4").tooltip({
                html: true,
                title : 'En esta parte llenar los siguientes requisitos:<br>•Título  <br>•Modalidad  <br>•Tipo de propuesta  <br>•Entidad  <br>•Municipio  <br>•Localidad',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip5").tooltip({
                title : 'Opcional PEI.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip6").tooltip({
               
               title : 'Opcional PEI.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip7").tooltip({
               
               title : 'Opcional PEI.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip8").tooltip({
               
                title : 'Se debe seleccionar al menos 3 palabras clave para que los evaluadores identifiquen a grandes rasgos de que trata el proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip9").tooltip({
                html:true,
                title : 'Los tipos de innovación que existen son las siguientes: <br>•Producto<br>•Proceso<br>•Servicio',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip10").tooltip({
               
               title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip11").tooltip({
               
               title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip12").tooltip({
               
               title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

     });
    /* Terminan los tooltips del formulario del proyecto*/

    /* **********************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    **  */

    /* Empiezan los tooltips del formulario de descripciones*/
    $('#formulariodescripciones').on('mouseover',function()
     {
            $("#myTooltip0").tooltip({
                html:true,
                title : 'Indique el folio del proyecto. El cual señalo al principio<br><strong>(En caso de no ser el folio, correcto , favor de cambiarlo).</strong>',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip1").tooltip({
                html: true,
                title : 'Desarrollar la descripción de la propuesta mencionando los siguientes puntos:<br><br>1.  El interés de la empresa proponente por desarrollar dicho proyecto.<br><br>2.  Mencionar el sector que beneficia.<br><br>3.  El impacto que daría el proyecto a la sociedad describiendo el problema que se presenta.<br><br>4.  Por último describir el proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip2").tooltip({
               
               title : 'Describir las actividades que desarrollarán la vinculación y su equipo de trabajo.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip3").tooltip({
               
               title : 'Entregables: Hacer el listado de los entregables comprometidos. Considerar que de cada actividad es un entregable.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip4").tooltip({
                html:true,
                title : 'El objetivo general debe desarrollarse con referencia a lo que se quiere desarrollar. Ejemplo:<br><br> “Diseño y desarrollo de prototipo innovador de colchón inflable automatizado para evitar neumonía y úlceras en la piel de pacientes postrados”',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip5").tooltip({
               
               title : 'Mencionar el resultado esperado al cumplir con las actividades mencionadas.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip6").tooltip({
               
               title : 'Describir con que tecnología llevará a cabo el proyecto, si es que la empresa proponente cuenta con la capacidad y herramientas de hacerlo y como lo realizará.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

     });
     /* Terminan los tooltips del formulario de descripciones*/
      

    /* **********************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    **  */

     /* Empiezan los tooltips del formulario de analisis tecnico*/
    $('#formulariotecnico').on('mouseover',function()
     {
            $("#myTooltip0").tooltip({
                html:true,
                title : 'Indique el folio del proyecto. El cual señalo al principio<br><strong>(En caso de no ser el folio correcto , favor de cambiarlo).</strong>',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip1").tooltip({

                title : 'Indique si la empresa cuenta con experiencias previas que sean relevantes para la ejecución del proyecto que somete.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip2").tooltip({
               html:true,
               title : 'Describa brevemente el resultado del monitoreo tecnológico realizado. Descripción:<br><br>1.  Describir el problema a cubrir con el proyecto.<br><br>2.  Describir como se cubre la necesidad actualmente y comparar la ventaja de como cubriría esa necesidad al nuevo proyecto.<br><br>3.  Mencionar la búsqueda de patentes y que herramientas se utilizarán.<br><br>4.  Por último mencionar los recursos tecnológicos con los que cuenta el proponente y sus vinculaciones.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip3").tooltip({
                html:true,
                title : 'Describa brevemente el resultado de la búsqueda de solicitudes de patentes y patentes son relevantes para el proyecto. Descripción:<br><br>1.  Se menciona en un párrafo donde se realizó la búsqueda (creatividad y objetividad para la redacción).<br><br>2.  Se describen los documentos encontrados.<br><br>3.  Se mencionan cuantas patentes de identificaron mediante esta búsqueda, se describe y se menciona si no se encontró similitud con el proyecto a presentar.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip4").tooltip({
                html:true,
                title : 'Resuma los principales hallazgos de los artículos de investigación y publicaciones consultados. Descripción:<br><br>1.  Se mencionan las bases de datos donde se consulta información para comentar lo siguiente:<br><br>2.  Listado de los documentos involucrados con el proyecto a proponer.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip5").tooltip({
                html:true,
                title : 'Describa brevemente las tecnologías disponibles. Descripción: <br><br>1.  Se hace mención de las tecnologías disponibles de la empresa proponente indicando que de esa manera y con la experiencia en maquinaria y mercado que tenga se pretende complementar con el apoyo para llevar a cabo el desarrollo del proyecto. <br><br>2.  Mencionar las tecnologías disponibles de las vinculaciones de otras empresas, IES o CI Que participan en las convocatorias. <br><br>3.  Mencionar si se trabajó con el tema de propiedad intelectual. <br><br>4.  Se menciona la importancia de la Red de trabajo, su aportación en general y los que lograrán al final de trabajar juntos.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip6").tooltip({
                html:true,
                title : 'Describa brevemente los productos, procesos o servicios similares al que desea desarrollar y que ya están en el mercado. Descripción: <br><br>1.  Mencionar la importancia de desarrollar esta actividad para llevar a cabo el proyecto de comercialización. <br><br>2.  Se enlistan los productos presentes en el mercado relacionados con el proyecto, donde se anexa a cada uno el precio y características generales.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip7").tooltip({
               
               title : 'Especificar si la tecnología con la que se cuenta para llevar a cabo el desarrollo del proyecto es desarrollo interno, adquisición, transferencia de otra empresa o institución académica.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

     });
     /* Terminan los tooltips del formulario de analisis tecnico*/

     /* **********************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    **  */

     /* Empiezan los tooltips del formulario de analisis comercial*/
    $('#formulariocomercial').on('mouseover',function()
     {
            $("#myTooltip0").tooltip({
                html:true,
                title : 'Indique el folio del proyecto. El cual señalo al principio<br><strong>(En caso de no ser el folio correcto , favor de cambiarlo).</strong>',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip1").tooltip({

                title : 'Describir brevemente los orígenes, estructura, objetivos y competencias fundamentales de la empresa.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip2").tooltip({
                title : 'Describir cómo se cumplirán las funciones críticas de administración, incluyendo la adición del personal, una vez que el proyecto logre ser comercialmente exitoso.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip3").tooltip({
                title : 'Describa la experiencia del responsable técnico, personal clave y consultores contratados. Explique por qué son apropiados para llevar a cabo el proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip4").tooltip({
                title : 'Describa el récord de éxito en la comercialización de proyectos y otra investigación llevada a cabo por la empresa y/o miembros del equipo del proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });


     });
     /* Terminan los tooltips del formulario de analisis comercial*/

      /* **********************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    **  */

     /* Empiezan los tooltips del formulario general*/
    $('#formulariogeneral').on('mouseover',function()
     {
            $("#myTooltip0").tooltip({
                html:true,
                title : 'Indique el folio del proyecto. El cual señalo al principio<br><strong>(En caso de no ser el folio, correcto , favor de cambiarlo).</strong>',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip1").tooltip({
                title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip2").tooltip({
               
               title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip3").tooltip({
               
               title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip4").tooltip({
                title : 'Explicar el principal resultado técnico y comercial del proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip5").tooltip({
               
               title : 'Dar una breve visión general del presupuesto del proyecto que incluya los costos anticipados, así como los ingresos u otro capital operativo y flujos de financiamiento que se consideran utilizar para el desarrollo de la innovación y su incursión en el mercado. Incluir como pdf la evidencia disponible sobre las fuentes de financiamiento adicional anticipadas (p.e., carta de compromiso de financiamiento; carta de motivo o evidencia de negociaciones para proveer financiamiento; carta de apoyo al proyecto o algún tipo de compromiso similar; órdenes de compra; etcétera).',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip6").tooltip({
                html:true,
                title : 'Resumir de manera breve los siguientes puntos: <br><br>1) la duración del proyecto (meses); <br><br>2) fechas clave para los entregables propuestos dentro del proyecto ( que incluyen, pero no están limitados a: desarrollo del prototipo, prueba de laboratorio y de sistemas, integración, pruebas en ambiente operativo y demostraciones); y <br><br>3) actividades clave para desarrollo y transición de la innovación hacia un producto o servicio listo para el mercado (independientemente de los que dure el proyecto aprobado por el fondo).',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip7").tooltip({
               html:true,
               title : 'Describir la disponibilidad en la empresa o red de: <br>competencia tecnológica, competencia en el desarrollo avanzado y disponibilidad de tecnologías complementarias (incluir argumentos o evidencia).',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip8").tooltip({
               
               title : 'Especificar cuál es el plan de protección industrial vislumbrado (solicitud de patente, patente, secreto industrial, otra), enfatizando por qué la opción elegida proveerá de suficiente protección y una ventaja competitiva en el tiempo que tome a la tecnología llegar al mercado o más allá.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

             $("#myTooltip9").tooltip({
               
               title : 'Explicar cuáles serán los medios de generación de ingresos para la compañía en caso de que el proyecto sea un éxito, incluyendo: manufactura y ventas directas, ventas a través de revendedores y otros distribuidores, empresa conjunta, licenciamiento, servicio, etcétera.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

     });
     /* Terminan los tooltips del formulario general*/

     /* **********************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    **  */

     /* Empiezan los tooltips del formulario mercado*/
    $('#formulariomercado').on('mouseover',function()
     {
            $("#myTooltip0").tooltip({
                html:true,
                title : 'Indique el folio del proyecto. El cual señalo al principio<br><strong>(En caso de no ser el folio, correcto , favor de cambiarlo).</strong>',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip1").tooltip({
                title : 'Describir el mercado del nuevo producto: escala (regional, nacional o internacional); tamaño (miles de pesos); y tasa de crecimiento anual.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip2").tooltip({
               
               title : 'Describir el modelo de negocio y la aceptación que tiene en el mercado.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip3").tooltip({
               
               title : 'Indicar los supuestos y consideraciones para establecer el precio que los clientes están dispuestos a pagar por el producto o servicio.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip4").tooltip({
                title : 'Describir las proyecciones de mercado basadas en hipótesis razonables incluyendo: ventas estimadas para el nuevo producto, reflejadas en la descripción del ejercicio financiero del año siguiente (miles de pesos ); tiempo proyectado para llegar al mercado; y la cuota de mercado cinco años después de haber entrado al mismo.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip5").tooltip({
               
               title : 'Describir el enfoque de inserción en el mercado (desarrollo o penetración, mayoreo o menudeo, hacer y vender, licencia o alianza estratégica con una empresa en la industria, etcétera).',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip6").tooltip({
                title : 'Descripción del cliente objetivo al que va dirigido el producto, proceso o servicio, así como las necesidades del cliente que están atendidas por el producto o servicio propuesto (que lo diferencian de otros similares) y la manera en que los clientes satisfacen actualmente esas necesidades.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip7").tooltip({
               title : 'Describir los beneficios sociales, educativos o científicos, más allá de consideraciones comerciales que pudieran generar buena voluntad hacia la compañía o hacia el producto o servicio.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip8").tooltip({
               
               title : 'Identificar los grupos o empresas ajenas al proyecto, que ofrezcan el mismo producto o lo estén desarrollando y describa sus respectivas ventajas competitivas.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

             $("#myTooltip9").tooltip({
               
               title : 'Describir productos o servicios existentes en la literatura de patentes o que esté emergiendo de otras investigaciones que puedan ser sustitutos del producto o servicio propuesto por la empresa.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip10").tooltip({
               
               title : 'Describir las barreras de entrada al mercado (regulatorios o de cualquier otro tipo) tanto para la empresa como para futuros competidores que traten de entrar al mismo.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

     });
     

      /* **********************************************************************************************************
    /* Terminan los tooltips del formulario mercado*/

    /**************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    **  */

    /* Empiezan los tooltips del formulario de vinculacion*/
    $('#formulariovinculacion').on('mouseover',function()
     {
            $("#myTooltip0").tooltip({
                html:true,
                title : 'Indique el folio del proyecto. El cual señalo al principio<br><strong>(En caso de no ser el folio correcto , favor de cambiarlo).</strong>',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip1").tooltip({

                title : 'Respuesta PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip2").tooltip({
                title : 'Respuesta PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip3").tooltip({
                title : 'Respuesta PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip4").tooltip({
                title : 'Respuesta PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });


     });
    /* Terminan los tooltips del formulario de vinculacion*/

    /* **********************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    **  */

    /* Empiezan los tooltips del formulario institucion*/
    $('#formularioinstitucion').on('mouseover',function()
     {
            $("#myTooltip0").tooltip({
                html:true,
                title : 'Indique el folio del proyecto. El cual señalo al principio<br><strong>(En caso de no ser el folio, correcto , favor de cambiarlo).</strong>',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip1").tooltip({
                html:true,
                title : 'Anexar al registro los siguientes datos:<br><br>•   Número RENIECYT<br>•   Nombre o razón social<br>•   Tipo de organización<br>•   Monto requerido<br>•   Fecha de entrega',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip2").tooltip({
               
               title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip3").tooltip({
               
               title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip4").tooltip({
                title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip5").tooltip({
               
               title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip6").tooltip({
                title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip7").tooltip({
               title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip8").tooltip({
               
               title : 'Describir las actividades que desarrollarán la vinculación y su equipo de trabajo.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

             $("#myTooltip9").tooltip({
               
               title : 'Hacer el listado de los entregables comprometidos. Considerar que de cada actividad es un entregable.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip10").tooltip({
               
               title : 'Describir de forma en lo que estará participando en el proyecto, desde apoyo con maquinaria, equipo, laboratorio, área de trabajo, equipo de trabajo, etc.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip11").tooltip({
               html:true,
               title : 'Deberá contener:<br><br>•   Nombre de contacto<br>•   Correo electrónico<br>•   Teléfono<br>',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip12").tooltip({
               
               title : 'Se accede a la base de datos de grupo de trabajo la cual se encuentra en la carpeta de base de datos que se encuentra en el escritorio.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip13").tooltip({
               html:true,
               title : 'o   Grado<br>o   Área<br>o   Disciplina<br>o   Subdisciplina<br>o   Especialidad',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip14").tooltip({
               
               title : 'Describir el producto que generará después de cumplir las actividades comprometidos a desarrollar.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip15").tooltip({
               
               title : 'Describir la información relevante del participante, una pequeña reseña de lo que han hecho hasta el día de hoy.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

             $("#myTooltip16").tooltip({
               
               title : 'Describir las actividades que llevará a cabo mediante el desarrollo del proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });


     });
    /* Terminan los tooltips del formulario institucion*/ 

    /* **********************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    **  */

    /* Empiezan los tooltips del formulario de trabajos detallados*/
    $('#formulariodetallado').on('mouseover',function()
     {
            $("#myTooltip0").tooltip({
                html:true,
                title : 'Indique el folio del proyecto. El cual señalo al principio<br><strong>(En caso de no ser el folio correcto , favor de cambiarlo).</strong>',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip1").tooltip({

                title : 'Analizar el desarrollo del plan de trabajo y describirlo de forma general  para el ciclo fiscal. Deberá tener fecha de inicio y fecha de fin.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip2").tooltip({
                title : 'Las actividades deberán de tener fecha de inicio y fecha de término.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip3").tooltip({
                title : 'Mencionar los productos de cada etapa.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip4").tooltip({
                title : 'Respuesta (PEI)',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip5").tooltip({
                title : 'Contemplar los rubros básicos y los que mencione la convocatoria (gasto e inversiones).',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });


     });
    /* Terminan los tooltips del formulario de trabajos detallados*/

    /* **********************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    ************************************************************************************************************
    *************************************************************************************************************
    *************************************************************************************************************
    **  */

    /* Empiezan los tooltips del formulario de trabajos detallados*/
    $('#formularioasesoria').on('mouseover',function()
     {
            $("#myTooltip0").tooltip({
                html:true,
                title : 'Indique el folio del proyecto. El cual señalo al principio<br><strong>(En caso de no ser el folio correcto , favor de cambiarlo).</strong>',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip1").tooltip({

                title : 'Respuesta (PEI)',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip2").tooltip({
                title : 'Respuesta (PEI)',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip3").tooltip({
                title : 'Respuesta (PEI)',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip4").tooltip({
                title : 'Respuesta (PEI)',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip5").tooltip({
                html:true,
                title : 'Se debe tomar en cuenta a los responsables de cada proyecto los cuales son los siguientes: <br><br>•   Responsable Administrativo<br>•   Responsable Técnico<br>•   Responsable Legal<br><br>Se debe contar con los siguientes datos para los 3 :<br>1.  Usuario CVU CONACYT (actualizado).<br>2.  RFC',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });


     });
    /* Terminan los tooltips del formulario de trabajos detallados*/

}); /* Termina el document ready*/
