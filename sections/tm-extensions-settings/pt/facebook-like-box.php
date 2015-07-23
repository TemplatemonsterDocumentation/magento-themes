<h3>Caixa de Curtidas do Facebook (Facebook like box)</h3>
<p>Este módulo permite mostrar uma caixa de curtidas no Facebook em sua loja do Magento.	<br>					
Você pode configurar através do Painel Administrativo do Magento em <strong>Sistema (System) > Configurações (Configuration) > Templatemonster > Facebook</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/facebook-2.jpg" alt="" /></figure>
<p>O módulo tem as seguintes opções:</p>			
<table class="options-table">
	<tr>
		<td class="col-1"><strong>App ID</strong></td>
		<td>-</td>
		<td>identificador de sua conta do Facebook. Para usar a Caixa de Curtidas do Facebook, você precisa registrar sua conta. Você pode ver mais instruções <a href="https://developers.facebook.com/" target="_blank">neste link</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Page URL</strong></td>
		<td>-</td>
		<td>o endereço (URL) da página da conta do Facebook.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Show Faces</strong></td>
		<td>-</td>
		<td>permite que você esconda ou mostre a foto do usuário que curtiu a página.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Hide cover</strong></td>
		<td>-</td>
		<td>permite apagar a imagem de fundo do cabeçalho.</td>
	</tr>	
	<tr>
		<td class="col-1"><strong>Show Posts</strong></td>
		<td>-</td>
		<td>permite que você ative/desative publicações recentes na página.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Height</strong></td>
		<td>-</td>
		<td>a altura do módulo.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Width</strong></td>
		<td>-</td>
		<td>a largura do módulo.</td>
	</tr>				
</table>
<p>Por padrão, o módulo é mostrado na coluna esquerda. Mas você tem três opções de estilo: <strong>esquerda</strong>, <strong>direita</strong> e <strong>rodapé</strong>. <br>
Para mudar a posição do bloco, você deve abrir o arquivo <strong>tm_facebook.xml</strong> localizado em <strong>app/design/frontend/default/themeXXX/layout</strong>.</p>

Esse arquivo inclui três blocos de <strong><em>reference</em></strong> com os parâmetros <strong>name="left"</strong> (name="right", name="footer").
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
<p>Dois blocos estão comentados neste arquivo. O único bloco não comentado é o que tem o parâmetro <strong>name="left"</strong>. Ele faz o módulo ser mostrado na clouna direita. <br>
Se você precisar mostrar o módulo no rodapé, você precisa seguir essas instruções:
</p>
<ol class="index-list">
	<li>Descomente as linhas de código do bloco com <strong>name="footer"</strong> (o último do exemplo acima) e comente o bloco <strong>name="left"</strong> (o primeiro bloco de código de exemplo acima).</li>
	<li>Abra o arquivo <strong>footer.phtml</strong> localizado em <strong>app/design/frontend/default/themeXXX/template/page/html</strong>.</li>
	<li>Cole o seguinte código no lugar desejado:
<pre class="prettyprint linenums">	&lt;?php echo $this-&gt;getChildHtml('tm_facebook_like_footer') ?&gt;</pre>	
	</li>
</ol>
<p>Agora o bloco do Facebook será mostrado no rodapé.</p>
		