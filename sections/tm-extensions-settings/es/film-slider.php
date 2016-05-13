<h3>Film Slider</h3>
<p>Módulo FilmSlider de TemplateMonster es una implementación del elegante y profesional plugin de jQuery ‘Slider Pro’. Le permite agregar un slider con múltiples capas a la página principal de la tienda. Rica colección de opciones de configuración del slider y la interfaz de usuario le ayudará a configurar el slider de forma rápida y sencilla.</p>
<p>En el menú principal de navegación verá una nueva opción en menú <strong>TemplateMonster</strong>.<br> 
Para empezar a trabajar con el módulo  FilmSlider, haga clic en elemento de menú <strong>Template Monster -> Sliders</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/slide-1.png" alt="" /></figure>
<p>Aquí se puede ver una lista de sliders disponibles donde se puede desactivar/activar, eliminar o editar los sliders.</p>
<figure class="img-polaroid"><img src="img/magento/slide-2.png" alt="" /></figure>
<p>Para añadir nuevo slider haga clic en el botón <strong>Add New Slider</strong> en la esquina superior derecha. <br>
En la pantalla de configuración del slider en la sección <strong>General Options</strong> se pueden ver todos los ajustes disponibles del slider. <strong>Slider Items</strong> esta sección le permite añadir diapositivas al slider.
</p>
<figure class="img-polaroid"><img src="img/magento/slide-3.png" alt="" /></figure>
<p>Vamos a ver qué opciones del slider están disponibles. Como se puede ver las opciones se dividen en varias partes para hacer que la interfaz de configuración más fácil de usar.</p>

<h4>Opciones Generales</h4>
<h5>Ajustes Principales</h5>
<p>Esta sección le permite configurar el título del slider, seleccione Vista de tienda, activar / desactivar el control deslizante, ajuste su anchura y altura. Cada opción se refiere a la propiedad del plugin Slider Pro jQuery. Puede encontrar una descripción más específica de cada propiedad en <a target='_blank' href="https://github.com/bqworks/slider-pro/blob/master/docs/api.md#1-properties">Slider Pro documentation</a>. Algunas propiedades del plugin jQuery este no presenta configuración en el FilmSlider, los añadiremos en futuras versiones.</p>
<figure class="img-polaroid"><img src="img/magento/slide-4.png" alt="" /></figure>
Dimensiones del Slider (anchura y altura) se puede establecer un valor fijo, a 900 (indicando 900 pixeles), o a un valor de porcentaje, a '100%'.
<div class="alert alert-warning">
	Please note: slide title, store view and status are required, you cannot save the slide without these values set.
</div>

<h5>Ajustes de Imagen</h5>
<p>En la sección de imagen que pueden ajustar los valores de configuración de imagen del slider. Cada opción tiene una breve descripción. Vamos a describir algunos de ellos más específicamente.</p>
<figure class="img-polaroid"><img src="img/magento/slide-5.png" alt="" /></figure>
<h6>aspectRatio</h6>
Establece la relación de aspecto de las diapositivas. Si se establece en un valor diferente de -1, la altura de las diapositivas será reemplazada para mantener la relación de aspecto especificado.
<h6>imageScaleMode</h6>
Establece el modelo a escala de las imágenes principales de diapositivas (añadido como fondo). 'cover' escala y recorta la imagen de modo que llene toda la diapositiva. 'contain' mantiene toda la imagen visible dentro de la diapositiva. 'exact' coincidirá con el tamaño de la imagen al tamaño de la diapositiva. 'none' deja la imagen a su tamaño original.
<h6>forceSize</h6>
Si el tamaño de la presentación de diapositivas se verá obligado a la anchura completa o ventana completa.
<div class="alert alert-warning">
	Nota: Puede hacer que la presentación de diapositivas ocupe ventana de ancho completo o total dándole una anchura y/o altura de '100%'. Sin embargo, a veces, el slider puede estar dentro de otros contenedores que son menos que la anchura completa/ventana. La opción  'forceSize' es útil en estas situaciones, ya que ampliará la presentación de diapositivas para llenar el ancho de la ventana o desbordamiento de sus elementos principales.
</div>

<h5>Ajustes de Diapositivas</h5>
La sección de configuración de diapositivas permite configurar el comportamiento de diapositivas. Aquí puede configurar la animación de diapositivas, el tamaño del cursor visible, mezclar las diapositivas y las diapositivas en bucle.
<figure class="img-polaroid"><img src="img/magento/slide-6.png" alt="" /></figure>

<h5>Ajustes de la animación del Fundido</h5>
Esta sección contiene los ajustes para la animación de fundido. Intensificación de la animación se puede activar en el cambio de diapositivas.
<figure class="img-polaroid"><img src="img/magento/slide-7.png" alt="" /></figure>
Puede especificar si desea borrar la diapositiva anterior y la duración de la animación de fundido en milisegundos. 

<h5>Ajustes de reproducción Automática</h5>
Reproducción automática permite al Film Slider colocar a través de las diapositivas de forma automática. Este parámetro de configuración contiene opciones para configurar la reproducción automática y hacer una pausa con el cursor del ratón.
<figure class="img-polaroid"><img src="img/magento/slide-8.png" alt="" /></figure>

<h5>Parámetros de Controles</h5>
Los controles  son los botones de navegación que le permiten cambiar las diapositivas. En FilmSlider hay varios tipos de controles de navegación: Flechas Anterior/Siguiente, botones de paginación. Activar la navegación por teclado le permite cambiar entre diapositivas utilizando el teclado. Además, puede activar el botón si desea mover la diapositiva a modo de pantalla completa.
<figure class="img-polaroid"><img src="img/magento/slide-9.png" alt="" /></figure>

<h5>Configuración Responsive</h5>
La sección  de configuración Responsive configures el comportamiento deslizante en los dispositivos móviles. Aquí puede definir los puntos de corte ancho de la pantalla (pequeño, medio, grande). Puede activar la capacidad de cambiar las diapositivas al tocar (para pantallas táctiles).
<figure class="img-polaroid"><img src="img/magento/slide-10.png" alt="" /></figure>

<h5>Configuración de Leyenda</h5>
La leyenda le permite añadir texto a cada diapositiva. Esta sección le permite activar la leyenda de la animación de fundido y define su duración.
<figure class="img-polaroid"><img src="img/magento/slide-11.png" alt="" /></figure>

<h5>Configuraciones principales de capas</h5>
Ajustes de configuración en capas contienen capas de la pantalla de diapositivas. Cada opción tiene una breve descripción a continuación de campos de entrada.
<figure class="img-polaroid"><img src="img/magento/slide-12.png" alt="" /></figure>

<h4>Agregar Diapositivas</h4>
Puede añadir nuevas diapositivas solamente después de guardar las diapositivas. Haga clic en el botón  <strong>Save and Continue Edit</strong> en la esquina superior derecha. Cuando la presentación de diapositivas se guarda, vaya a la pestaña
<figure class="img-polaroid"><img src="img/magento/slide-13.png" alt="" /></figure>
Click <strong>Add Slider Item</strong> para agregar una nueva diapositiva. Vamos a ver que opciones de configuración de diapositivas están disponibles.

<h5>Información de diapositiva</h5>
Puede introducir el título de diapositiva y establecer su estado (activado/desactivado).
<figure class="img-polaroid"><img src="img/magento/slide-14.png" alt="" /></figure>

<h5>Imágenes de Diapositivas</h5>
Esta sección le permite añadir imágenes a la diapositiva. Haga clic en el botón Insert Image para abrir Medioteca donde puede seleccionar las imágenes disponibles.
<figure class="img-polaroid"><img src="img/magento/slide-15.png" alt="" /></figure>
También puede subir imágenes desde su ordenador.
<figure class="img-polaroid"><img src="img/magento/slide-16.png" alt="" /></figure>
Bajo el campo de imagen se puede ver la vista previa de diapositivas. Usted es libre de establecer el tamaño de vista previa a su gusto.

<h4>Trabajar con capas</h4>
FilmSlider es un slider multicapas. Esto significa que usted puede añadir varias capas independientes a la diapositiva. Las capas pueden ser añadidas a la diapositiva en la pantalla de configuración de diapositivas descrito anteriormente. Esta pantalla contiene varias secciones de configuración de capas.

<h5>Lista de capas</h5>
Sección de la lista de capas permite añadir capas a la diapositiva. Se pueden añadir capas a la imagen y capas de texto. Utilice los botones para añadir capas.
<figure class="img-polaroid"><img src="img/magento/slide-17.png" alt="" /></figure>
Al hacer clic en <strong>Add layer image</strong> verá una biblioteca de imágenes donde se puede elegir entre las imágenes disponibles o subir imágenes desde su ordenador.  Haciendo click en  <strong>Add layer text</strong>, verá una nueva capa añadida de texto y los parámetros de la capa.
<figure class="img-polaroid"><img src="img/magento/slide-18.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/slide-19.png" alt="" /></figure>

<h5>Ajustes de la capa de texto</h5>
Utilizando la sección <strong>Layer text settings</strong> puede introducir la capa de texto, tamaño de la capa, colores, tipo de letra, etc.
<figure class="img-polaroid"><img src="img/magento/slide-20.png" alt="" /></figure>
En el campo <strong>Layer text/html</strong> puede introducir su capa de contenido en dos formatos - texto y HTML. 

<h5>Ajustes de posición de texto de la capa</h5>
En esta sección, puede ajustar la posición del texto de la capa.
<figure class="img-polaroid"><img src="img/magento/slide-21.png" alt="" /></figure>

<h5>Parámetros de animación de la capa</h5>
Esta sección le permite configurar la animación de la capa. Se puede definir su posición en la diapositiva, la transición, offset, retardo, duración, etc.
<figure class="img-polaroid"><img src="img/magento/slide-22.png" alt="" /></figure>
Cuando se agrega más capas, la parte inferior de los parámetros de configuración (posición y animación) le mostrará la configuración de la capa seleccionada.
<figure class="img-polaroid"><img src="img/magento/slide-23.png" alt="" /></figure>

<h4>Adding slider to page</h4>
To add slider to your page please use Magento widgets. In the main admin panel menu click <strong>Content -> Pages</strong> item.
<figure class="img-polaroid"><img src="img/magento/slide-24.png" alt="" /></figure>
Select the page you want to add slider to and click <strong>Edit</strong>.
<figure class="img-polaroid"><img src="img/magento/slide-25.png" alt="" /></figure>
At the page editing screen switch to <strong>Content</strong> section and click <strong>Insert Widget</strong> button.
<figure class="img-polaroid"><img src="img/magento/slide-27.png" alt="" /></figure>
In the appeared window select widget type <strong>Template Monster FilmSlider</strong>, select the slider you want to insert and click <strong>Insert Widget</strong> button. 
<figure class="img-polaroid"><img src="img/magento/slide-28.png" alt="" /></figure>
When you are done adding the widget click <strong>Save Page</strong> button and switch to store frontend to see the result.