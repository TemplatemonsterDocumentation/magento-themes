<h3>Casella Facebook Mi Piace</h3>
<p>Questo modulo ti permette di inserire una casella Facebook per dare un Mi Piace al tuo negozio  Magento. <br>						
Puoi configurarlo andando sul pannello di amministrazione Magento (Admin Panel) alla sezione  <strong>System > Configuration > Templatemonster > Facebook</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/facebook-2.jpg" alt="" /></figure>
<p>Il modulo ha le seguenti opzioni:</p>			
<table class="options-table">
	<tr>
		<td class="col-1"><strong>App ID</strong></td>
		<td>-</td>
		<td>l'identificativo del tuo account Facebook. Per utilizzare la casella Mi Piace è necessario registrare il proprio account Facebook. Per ulteriori istruzioni, seguire questo <a href="https://developers.facebook.com/" target="_blank">link</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Page URL</strong></td>
		<td>-</td>
		<td>è l'URL della pagina dell'account Facebook.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Show Faces</strong></td>
		<td>-</td>
		<td>ti permette di nascondere o visualizzare le foto degli utenti che hanno dato un Mi Piace alla tua pagina.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Hide cover</strong></td>
		<td>-</td>
		<td>consente di rimuovere l'immagine di sfondo nell'intestazione.</td>
	</tr>	
	<tr>
		<td class="col-1"><strong>Show Posts</strong></td>
		<td>-</td>
		<td>ti permette di abilitare/disabilitare i post recenti sulla pagina.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Height</strong></td>
		<td>-</td>
		<td>altezza dell'area del modulo.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Width</strong></td>
		<td>-</td>
		<td>larghezza dell'area del modulo.</td>
	</tr>				
</table>
<p>Di default, il modulo verrà situato nella colonna a sinistra. Ma è possibile optare per tre possibilità: <strong>sinistra</strong>, <strong>destra</strong> e <strong>pié pagina</strong>. <br>
Per cambiare la posizione del blocco, devi aprire il file <strong>tm_facebook.xml</strong> che si trova nella cartella <strong>app/design/frontend/tm_themes/themeXXX/layout</strong> della tua installazione.</p>

Questo file include tre blocchi di <strong><em>reference</em></strong> con parametri <strong>name="left"</strong> (name="right", name="footer").
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
<p>Due blocchi in questo file sono commentati (Commented out). E solo un blocco con <strong>name="left"</strong> non è commentato, il quale posiziona il blocco nella colonna di sinistra. <br>
Se vuoi posizionare il modulo a pié pagina, segui queste istruzioni:
</p>
<ol class="index-list">
	<li>Togli il commento (uncomment) alle stringhe di codice del blocco <strong>name="footer"</strong>  (l'ultimo, nell'esempio di codice qui sopra) e commenta (comment out) il blocco <strong>name="left"</strong> (il primo, nell'esempio di codice qui sopra).</li>
	<li>Apri il file <strong>footer.phtml</strong> situato nella cartella <strong>app/design/frontend/tm_themes/themeXXX/template/page/html</strong>.</li>
	<li>Incolla il seguente codice nella corretta posizione:
		<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_facebook_like_footer') ?&gt;</pre>	
	</li>
</ol>
<p>Adesso il blocco Facebook verrà situato a pié pagina.</p>
		