<h3>Configuración de páginas</h3>
<p>Para que su página se vea exactamente igual que nuestra plantilla Demo, necesita configurar las páginas de la tienda de una forma específica. Ofrecemos todos los archivos con el código fuente de las páginas.  Es necesario añadirlos en el panel de administración de Magento siguiendo las instrucciones a continuación utilizando la tabla de ajustes. Tabla de configuración se encuentra en la página <strong>Technical details</strong> en la página de vista previa de la plantilla. El archivo de documentación contiene el enlace a esta página:</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <strong>Documentación</strong>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>La página principal de la plantilla será la más afectada. Por lo general, contiene los siguientes elementos: banners, slider, galerías, etc.</p>
<div class="alert alert-warning"><span>Le recomendamos que desactive el editor WYSIWYG. Para ello, desde el menú de administración superior, seleccione <strong>Stores &gt; Configuration</strong>. Abra la sección "<strong>Content Management</strong>" y en la ventana <strong>WYSIWYG Options</strong> cambie la opcion "<strong>Enable WYSIWYG Editor</strong>" por la "<strong>Disabled Completely</strong>".</span></br>
<figure class="img-polaroid"><img src="img/magento/page-settings-1.jpg" alt="" /></figure></div>
<p class="alert alert-warning"><span>En caso de que ya haya realizado los cambios en el código de las páginas y desea añadir nuestro código sin afectar sus modificaciones, se recomienda ponerse en contacto con técnicos profesionales o preparar una copia de seguridad antes de realizar cambios.</span></p>
<ol class="index-list">
	<li>En el menú superior, seleccione <strong>Content > Pages</strong>. Aquí puede encontrar todas las páginas de la tienda. <strong>Home page</strong>, <strong>About Us</strong> and <strong>Customer Service</strong> ya deberían estar disponibles, por lo que no es necesario añadirlas. Sólo tiene que actualizar las páginas HTML y el contenido XML. Abra cualquiera de ellos para acceder a los contenidos.<figure class="img-polaroid"><img src="img/magento/page-settings-2.jpg" alt="" /></figure></li>
	<li>Abra la página y seleccione la pestaña <strong>Content</strong>. Contiene el código HTML de la página. Usted puede tomar el código HTML de la página del archivo fuente apropiada. Se puede ver la lista de archivos de código fuente incluido en la sección "Template Settings" en la página de vista previa de la plantilla.  Copie el código del archivo de origen y peguelo en el área <strong>content</strong> .<figure class="img-polaroid"><img src="img/magento/page-settings-3.jpg" alt="" /></figure></li>
	<li>Cuando haya terminado con el código HTML, cambiar a la pestaña   <strong>"Design"</strong>. Contiene el código de la página XML. El código XML le permite añadir bloques estáticos y widgets a la página de Magento. El código XML debe ser copiado de la misma manera que el código HTML desde el archivo de origen. Copie el código XML en el área "<strong>Layout Update XML</strong>".<figure class="img-polaroid"><img src="img/magento/page-settings-4.jpg" alt="" /></figure></li>
	<li>No olvide seleccionar la opción válida "<strong>Layout</strong>" .</li>
	<li>En caso de que necesite agregar una nueva página, haga clic en el botón <strong>"Add New Page"</strong> en la esquina superior derecha.</li>
</ol>

<!-- <p>In case you have any difficulties, please check the detailed tutorial on <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">How to configure pages manually</a>.</p> -->		