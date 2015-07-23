<h3>Módulo do Twitter</h3>
	<p>O módulo do Twitter te permite mostrar twitadas na sua loja.	<br>					
	Todas as configurações disponíveis estão no painel em <strong>Sistema (System) > Configurações (Configuration) > Templatemonster > Twitter</strong>.</p>
	<figure class="img-polaroid"><img src="img/magento/twitter-1.jpg" alt="" /></figure>					
	<p>O módulo tem as seguintes opções:</p>			
	<table  class="options-table">
		<tr>
			<td class="col-1"><strong>Widget ID</strong></td>
			<td>-</td>
			<td>Identificador de widget do Twitter. O identificador pode ser recebido após o registro de sua <a href="https://twitter.com/settings/widgets/new" target="_blank">conta</a> em configurações.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Account name</strong></td>
			<td>-</td>
			<td>Nome de usuário da conta que você deseja mostrar.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Color Scheme</strong></td>
			<td>-</td>
			<td>cor do tema do widget. Pode ser claro ou escuro.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Layout enhancements</strong></td>
			<td>-</td>
			<td>permite esconder elementos parcialmente na formatação do widget.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Tweet limit</strong></td>
			<td>-</td>
			<td>quantidade de twitadas sendo mostradas.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Link color</strong></td>
			<td>-</td>
			<td>permite mudar a cor dos links.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Border color</strong></td>
			<td>-</td>
			<td>permite mudar a cor da borda do feed.</td>
		</tr>			
		<tr>
			<td class="col-1"><strong>Height</strong></td>
			<td>-</td>
			<td>altura da janela do widget.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Width</strong></td>
			<td>-</td>
			<td>largura da janela do widget.</td>
		</tr>
	</table>
	<p>Por padrão, o módulo é mostrado na coluna esquerda. Mas você tem três opções de estilo: <strong>esquerda</strong>, <strong>direita</strong> e <strong>rodapé</strong>. <br>
				Para mudar a posição do bloco, você deve abrir o arquivo <strong>tm_twitter.xml</strong> localizado em <strong>app/design/frontend/default/themeXXX/layout</strong>.</p>
	
			Esse arquivo inclui três blocos de <strong><em>reference</em></strong> com os parâmetros <strong>name="left"</strong> (name="right", name="footer").
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
<p>Dois blocos estão comentados neste arquivo. O único bloco não comentado é o que tem o parâmetro <strong>name="left"</strong>. Ele faz o módulo ser mostrado na clouna direita. </p>
				Se você precisar mostrar o módulo no rodapé, você precisa seguir essas instruções:

<ol class="index-list">
	<li>Descomente as linhas de código do bloco com <strong>name="footer"</strong> (o último do exemplo acima) e comente o bloco <strong>name="left"</strong> (o primeiro bloco de código de exemplo acima).</li>
	<li>Abra o arquivo <strong>footer.phtml</strong> localizado em <strong>app/design/frontend/default/themeXXX/template/page/html</strong>.</li>
	<li>Cole o seguinte código no lugar desejado:
<pre class="prettyprint linenums">	&lt;?php echo $this-&gt;getChildHtml('tm_twitter_timeline') ?&gt;</pre>	
	</li>
</ol>
<p>Agora o bloco do Twitter será mostrado no rodapé.</p>
		