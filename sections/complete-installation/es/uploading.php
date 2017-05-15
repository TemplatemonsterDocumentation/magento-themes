<h3>Cargación y descompresión</h3>

<p>Para empezar a trabajar con Magento necesita subir archivos a su servidor de alojamiento. Esto se puede hacer usando el administrador de archivos de alojamiento o algún gestor de FTP de terceros.</p>
            
<ol class="index-list">
  <li>Seleccione los archivos <strong>'unzip.php'</strong> y <strong>'fullpackage.zip'</strong> y súbalos a su servidor (
    <a href="/help/how-upload-files-server-2.html" target="_blank">Cómo subir archivos al servidor</a>).</li>
  <li>Escriba la ruta de acceso al archivo <strong>'unzip.php'</strong> en su servidor (http://your_domain_name/unzip.php) en su <abbr title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc.">navegador</abbr>.</li>
  <li>
  	Debería ver la siguiente pantalla:
  	<figure class="img-polaroid"><img src="img/magento/complete-install-unzip-php.jpg" alt="Unzip.php initial screen."></figure>
  </li>
  <li>Alli seleccione <strong>'Elija el archivo zip' (Choose your zip file)</strong> el archivo para subir <strong>fullpackage.zip</strong>.</li>
  <li>En el campo <strong>'Descomprimir a' (Unzip to)</strong> especifique el directorio en el que desea extraer los archivos.</li>
  <li>Haga clic en el botón <strong>'Descomprimir'(Unzip)</strong> para proceder.</li>
</ol>
          
<p class="alert alert-warning"><span>Por favor asegúrese de establecer los permisos correctos para el directorio donde va a extraer los archivos. Los permisos deben ser <strong>CHMOD 755 o 777</strong> dependiendo de la configuración del servidor. </span></p>
		
