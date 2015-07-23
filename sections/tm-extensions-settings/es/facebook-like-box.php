<h3>Bot&oacute;n Me Gusta de Facebook</h3>
<p>Este m&oacute;dulo le permite mostrar el bot&oacute;n Me Gusta de Facebook en su tienda Magento.	<br>				
Se puede configurar en el Panel de Administraci&oacute;n de Magento en la secci&oacute;n <strong>System > Configuration > Templatemonster > Facebook</strong> section.</p>	
<figure class="img-polaroid"><img src="img/magento/facebook-2.jpg" alt="" /></figure>
<p>El m&oacute;dulo tiene las siguientes opciones:</p>			
<table class="options-table">
	<tr>
		<td class="col-1"><strong>App ID</strong></td>
		<td>-</td>
		<td>el identificador de su cuenta de Facebook. Para utilizar el bot&oacute;n Me Gusta de Facebook tiene que registrar su cuenta. Vaya al siguiente enlace para obtener m&aacute;s <a href="https://developers.facebook.com/" target="_blank">instrucciones</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Page URL</strong></td>
		<td>-</td>
		<td>la dirección URL de la página de cuenta de Facebook.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Show Faces</strong></td>
		<td>-</td>
		<td>le permite ocultar o mostrar la foto del usuario al que le gusta la p&aacute;gina.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Hide cover</strong></td>
		<td>-</td>
		<td>permite eliminar la imagen de fondo en la cabecera.</td>
	</tr>	
	<tr>
		<td class="col-1"><strong>Show Posts</strong></td>
		<td>-</td>
		<td>le permite activar/desactivar la muestra de los mensajes recientes en la p&aacute;gina.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Height</strong></td>
		<td>-</td>
		<td>la altura del m&oacute;dulo.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Width</strong></td>
		<td>-</td>
		<td>el ancho del m&oacute;dulo.</td>
	</tr>				
</table>
<p>Por defecto, el m&oacute;dulo se muestra en la columna izquierda. Pero hay tres opciones de visualizaci&oacute;n: <strong>left</strong>, <strong>right</strong> y <strong>footer</strong>.
Para cambiar la posici&oacute;n del m&oacute;dulo, es necesario abrir el archivo <strong>tm_facebook.xml</strong> que se encuentra en la carpeta <strong>app/design/frontend/default/themeXXX/layout</strong> de su instalaci&oacute;n.</p>

Este archivo incluye tres bloques de <strong><em>reference</em></strong> con <strong>name="left"</strong> los par&aacute;metros necesarios (name="right", name="footer").
<pre class="prettyprint linenums">
&lt;reference name="left"&gt;
	&lt;block type="core/template" name="tm_facebook_like_left" as="tm_facebook_like_left" template="tm/facebook/facebook_like.phtml"/&gt;
&lt;/reference&gt;
&lt;!-- &lt;reference name="right"&gt;
	&lt;block type="core/template" name="tm_facebook_like_right" as="tm_facebook_like_right" template="tm/facebook/facebook_like.phtml"/&gt;
&lt;/reference&gt; --&gt;
&lt;!-- &lt;reference name="footer"&gt;
	&lt;block type="core/template" name="tm_facebook_like_footer" as="tm_facebook_like_footer" template="tm/facebook/facebook_like.phtml"/&gt;
&lt;/reference&gt; --&gt;</pre>
<p>>Dos bloques est&aacute;n comentados en este archivo. Y s&oacute;lo un bloque con <strong>name="left"</strong> no esta comentado. Muestra el m&oacute;dulo en la columna de la izquierda. <br>
Si usted necesita mostrar el m&oacute;dulo en el pie de p&aacute;gina, siga estas instrucciones:
</p>
<ol class="index-list">
	<li>Descomente las l&iacute;neas de c&oacute;digo para el bloque <strong>name="footer"</strong> (el &uacute;ltimo en el ejemplo de c&oacute;digo de arriba) y comente el bloque <strong>name="left"</strong> (el primero en el ejemplo del c&oacute;digo de arriba).</li>
	<li>Abra el archivo <strong>footer.phtml</strong> que se encuentra en la carpeta <strong>app/design/frontend/default/themeXXX/template/page/html</strong>.</li>
	<li>Pegue el c&oacute;digo siguiente en el lugar necesario:
		<pre class="prettyprint linenums">	&lt;?php echo $this-&gt;getChildHtml('tm_facebook_like_footer') ?&gt;</pre>	
	</li>
</ol>
<p>Ahora el m&oacute;dulo de Facebook se mostrar&aacute; en el pie de p&aacute;gina.</p>
		