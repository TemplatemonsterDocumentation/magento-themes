<h3>Configuración de bloques estáticos</h3>
<p>Cuando haya terminado de configurar las páginas, es necesario configurar los bloques estáticos. El procedimiento es similar: hay que copiar el código de los archivos de origen y pegarlo en los campos correspondientes en el panel de administración de Magento. Es necesario utilizar una tabla similar pero para los bloques estáticos.</p>
<p class="alert alert-warning"><span>Block ID may vary in your Magento installation. You can get correct block id from Content-> Blocks section in Admin panel.</span></p>
<ol class="index-list"> 
	<li>En el menú superior, vaya a <strong>Content > Blocks</strong>. </li>
	<li>En la esquina superior derecha haga clic en el botón <strong>"Add New block"</strong> para añadir un nuevo bloque estático. 
		<figure class="img-polaroid"><img src="img/magento/blocks-1.jpg" alt="" /></figure>
	</li>
	<li>Especificar el nombre y el identificador del bloque. Usted puede obtener los detalles del bloque de la tabla en la página de configuración de la plantilla (revise la parte de Pages Configuration).</li>
	<li>Abra el archivo de origen del bloque y copie el código HTML en el área de contenido.</li>
</ol>

<figure class="img-polaroid"><img src="img/magento/blocks-2.jpg" alt="" /></figure>

<p class="alert alert-info"><span>NOTA: algunas de las plantillas no contienen bloques estáticos, por lo que la tabla puede estar vacía. </span></p>
<p class="alert alert-info"><span>Los archivos de código fuente con el código de bloques estáticos se guardan en la carpeta "<strong>sources\demo\static_blocks\</strong>" del paquete de la plantilla. </span></p>

<h4>¿Cómo mostrar nuestros bloques con el contenido estático?</h4>

<ol class="index-list"> 
	<li>En el menú superior vaya a <strong>Content > Widgets</strong></li>
	<li>En la esquina superior derecha haga clic en el botón <strong>"Add Widget"</strong> para añadir un nuevo widget.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Especifique el Tipo de widget <strong>CMS Static Block</strong> y el tema que usted quiere aplicar al widget y haga clic en el botón <strong>Continue</strong>.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>En la página siguiente, en el área <strong>Widget Title</strong> introduzca el nombre del widget que se mostrará en el panel de administración. En el campo de <strong>Assign to Store Views</strong> debe seleccionar las opciones de la tienda que se mostrarán en el widget. En el bloque de <strong>Layout Updates</strong> haga clic en el botón <strong>Add Layout Update</strong>. En el campo <strong>Display On</strong> usted puede seleccionar las páginas donde se mostrará el widget. Dependiendo de las páginas seleccionadas usted será capaz de llenar los campos adicionales. 
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
	<li>En la barra lateral izquierda, haga clic el botón <strong>Widget Options</strong>  y seleccione el bloque estático al que usted se refiere. No se olvide de guardar los cambios. 
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure>
	</li>
</ol>
<p>Cuando haya terminado de configurar páginas de la tienda y los bloques, su tienda estará lista para funcionar.</p>