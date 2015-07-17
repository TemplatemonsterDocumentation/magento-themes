<h3>Configuraci&oacute;n de p&aacute;ginas</h3>
<p>Para que su plantilla se vea exactamente igual que nuestra p&aacute;gina de demostraci&oacute;n, necesita configurar las p&aacute;ginas de la tienda de una forma espec&iacute;fica. Le brindamos todos los archivos de c&oacute;digo fuente de las p&aacute;ginas. Es necesario a&ntilde;adirlos en el panel de administraci&oacute;n de Magento siguiendo las instrucciones a continuaci&oacute;n utilizando la tabla de ajustes. La tabla ajustes se encuentra en la p&aacute;gina <b>Detalles t&eacute;cnicos</b> en la p&aacute;gina de la plantilla de vista previa. El archivo de documentaci&oacute;n contiene el enlace a esta p&aacute;gina:</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <b>Documentation</b>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>La p&aacute;gina principal de la plantilla ser&aacute; la m&aacute;s afectada. Por lo general, contiene los siguientes elementos: banners, elementos deslizantes, galer&iacute;as, etc.</p>
<div class="alert alert-warning"><span>Le recomendamos que desactive el editor WYSIWYG. Para ello, desde el men&uacute; de administraci&oacute;n superior, seleccione <strong>System &gt; Configuration</strong>. Abra la secci&oacute;n "<strong>Content Management</strong>" y en la ventana <strong>WYSIWYG Options</strong> cambie la opcion "<strong>Enable WYSIWYG Editor</strong>" a "<strong>Disabled Completely</strong>".</span></br>
<figure class="img-polaroid"><img src="img/magento/pages_setting1.png" alt="" /></figure></div>
<p class="alert alert-warning"><span>En caso de que ya haya realizado los cambios en el c&oacute;digo de las p&aacute;ginas y desea a&ntilde;adir nuestro c&oacute;digo sin afectar sus modificaciones, se recomienda ponerse en contacto con t&eacute;cnicos profesionales o preparar una copia de seguridad antes de realizar cambios.</span></p>
<ol>
	<li>En el men&uacute; superior, seleccione <b>CMS > Pages</b>. Aqu&iacute; puedes encontrar todas las p&aacute;ginas de la tienda. <b>Home page</b>, <b>About Us</b> y <b>Customer Service</b> ya deber&iacute;an estar disponibles, por lo que no es necesario a&ntilde;adirlas. S&oacute;lo tiene que actualizar las p&aacute;ginas HTML y el contenido XML. Abra cualquiera de ellos para acceder a los contenidos.</li>
	<li>Abra la p&aacute;gina y seleccione la pesta&ntilde;a <b>Content</b>. Contiene el c&oacute;digo HTML de la p&aacute;gina. Puede coger el c&oacute;digo de la p&aacute;gina HTML a partir del archivo fuente apropiado. Usted puede ver la lista de archivos de c&oacute;digo fuente incluido en la secci&oacute;n "Template Settingsa" en la p&aacute;gina de vista previa de la plantilla. Copie el c&oacute;digo del archivo de origen y peguelo en el &aacute;rea <b>content</b>.</li>
	<li>Cuando haya terminado con el c&oacute;digo HTML, cambiar a la pesta&ntilde;a <b>"Design"</b>. Contiene el c&oacute;digo de la p&aacute;gina XML. El c&oacute;digo XML le permite a&ntilde;adir bloques est&aacute;ticos y widgets a la p&aacute;gina de Magento. El c&oacute;digo XML debe ser copiado de la misma manera que el c&oacute;digo HTML desde el archivo de origen. Copie el c&oacute;digo XML en el &aacute;rea "<b>Layout Update XML</b>".</li>
	<li>No olvide seleccionar la opci&oacute;n "<b>Layout</b>" correcta.</li>
	<li>En caso de que necesite agregar una nueva p&aacute;gina, haga clic en el bot&oacute;n <b>"Add New Page"</b> en la esquina superior derecha.</li>
</ol>
<figure class="img-polaroid"><img src="img/magento/pages_setting2.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting3.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting4.png" alt="" /></figure>

<p>En caso de tener alguna dificultad, por favor revise el tutorial detallado sobre <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">C&oacute;mo configurar las p&aacute;ginas de forma manual</a>.</p>		