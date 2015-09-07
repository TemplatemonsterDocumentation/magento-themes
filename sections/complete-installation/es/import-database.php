		
<h3>Importar los datos de ejemplo</h3>
<p>El paquete de la plantilla de Magento contiene el archivo de datos de ejemplo (dump.sql o dump.gz). Este archivo se encuentra en la carpeta de su plantilla <strong>/sources/sample_data</strong>. Le permitir&aacute; cargar los datos de ejemplo, por lo que su sitio web se ver&aacute; exactamente igual que en nuestra plantilla de demostraci&oacute;n.</p>
<p class="alert alert-danger"><span>No importar el archivo dump.sql.gz si ya tiene los datos en su sitio. Si importa el archivo dump.sql.gz todos los productos de su tienda se borrar&aacute;n. Si no desea instalar los datos de ejemplo, utilice la base de datos limpia durante la instalaci&oacute;n de de Magento. Salte el paso de instalaci&oacute;n de datos de ejemplo. </span></p>	
<p>Para instalar el archivo dump, siga los siguientes pasos:</p>
<ol class="index-list">
	<li>Inicie sesi&oacute;n en phpMyAdmin y seleccione la base de datos que va a utilizar para Magento Commerce (Fue creada por usted con la ayuda de los pasos indicados anteriormente).<figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Vaya hasta la pesta&ntilde;a <strong>"Import"</strong> y haga click en el bot&oacute;n <strong>"Browse"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Busque la carpeta <strong>"/sources/sample_data"</strong> de la plantilla y seleccione el archivo <strong>dump.sql.gz</strong>. Haga clic en <strong>"GO"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> El proceso de importaci&oacute;n puede tardar unos minutos.</li>
</ol>		