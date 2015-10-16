<h3>M&oacute;dulo de Twitter</h3>
	<p>El m&oacute;dulo de Twitter le permite mostrar los tweets que se muestran en su tienda.						<br>
	Todas las opciones de configuraci&oacute;n est&aacute;n disponibles en el Panel de Administraci&oacute;n en la secci&oacute;n <strong>System > Configuration > Templatemonster > Twitter</strong>.</p>
	<figure class="img-polaroid"><img src="img/magento/twitter-1.jpg" alt="" /></figure>					
	<p>El m&oacute;dulo tiene las siguientes opciones:</p>			
	<table  class="options-table">
		<tr>
			<td class="col-1"><strong>Widget ID</strong></td>
			<td>-</td>
			<td>Identificador del widget de Twitter. El identificador se puede obtener despu&eacute;s del registro del widget en la configuraci&oacute;n de su <a href="https://twitter.com/settings/widgets/new" target="_blank">cuenta</a>.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Account name</strong></td>
			<td>-</td>
			<td>Usuario de la cuenta de Twitter con la informaci&oacute;n a mostrar.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Color Scheme</strong></td>
			<td>-</td>
			<td>color del widget. Puede ser claro u oscuro.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Layout enhancements</strong></td>
			<td>-</td>
			<td>permite ocultar parcialmente los elementos de formato del widget.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Tweet limit</strong></td>
			<td>-</td>
			<td>cantidad de tweets que aparecen.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Link color</strong></td>
			<td>-</td>
			<td>permite cambiar el color de los enlaces.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Border color</strong></td>
			<td>-</td>
			<td>permite cambiar el color del borde.</td>
		</tr>			
		<tr>
			<td class="col-1"><strong>Height</strong></td>
			<td>-</td>
			<td>la altura del widget.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Width</strong></td>
			<td>-</td>
			<td>el ancho del widget.</td>
		</tr>
	</table>
	<p>Por defecto, el m&oacute;dulo se muestra en la columna izquierda. Pero hay tres opciones de visualizaci&oacute;n: <strong>left</strong>, <strong>right</strong> y <strong>footer</strong>. <br>
	Para cambiar la posici&oacute;n del m&oacute;dulo, es necesario abrir el archivo <strong>tm_twitter.xml</strong> que se encuentra en la carpeta <strong>/app/design/frontend/tm_themes/themeXXX/layout</strong> de su instalaci&oacute;n.</p>
	Este archivo incluye tres bloques de <strong><em>reference</em></strong> con <strong>name="left"</strong> los par&aacute;metros necesarios (name="right", name="footer").
	<pre class="prettyprint linenums">
&lt;reference name="left"&gt;
	&lt;block type="core/template" name="tm_twitter_timeline" as="tm_twitter_timeline" template="tm/twitter/twitter_timeline.phtml"/&gt;
&lt;/reference&gt;
&lt;!-- &lt;reference name="footer"&gt;
	&lt;block type="core/template" name="tm_twitter_timeline" as="tm_twitter_timeline" template="tm/twitter/twitter_timeline.phtml"/&gt;
&lt;/reference&gt;
&lt;reference name="right"&gt;
	&lt;block type="core/template" name="tm_twitter_timeline" as="tm_twitter_timeline" template="tm/twitter/twitter_timeline.phtml"/&gt;
&lt;/reference&gt; --&gt;</pre>
<p>Dos bloques est&aacute;n comentados en este archivo. Y s&oacute;lo un bloque con <strong>name="left"</strong> no esta comentado. Muestra el m&oacute;dulo en la columna de la izquierda. 
Si usted necesita mostrar el m&oacute;dulo en el pie de p&aacute;gina, siga estas instrucciones:</p>

<ol class="index-list">
	<li>Descomente las l&iacute;neas de c&oacute;digo para el bloque <strong>name="footer"</strong> (el &uacute;ltimo en el ejemplo de c&oacute;digo de arriba) y comente el bloque <strong>name="left"</strong> (el primero en el ejemplo del c&oacute;digo de arriba).</li>
	<li>Abra el archivo <strong>footer.phtml</strong> que se encuentra en la carpeta <strong>app/design/frontend/tm_themes/themeXXX/template/page/html</strong>.</li>
	<li>Pegue el c&oacute;digo siguiente en el lugar necesario:
		<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_twitter_timeline') ?&gt;</pre>	
	</li>
</ol>
<p>Ahora el m&oacute;dulo de Twitter se mostrar&aacute; en el pie de p&aacute;gina.</p>
		