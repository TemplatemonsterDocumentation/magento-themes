<h3>Modulo Twitter</h3>
	<p>Il modulo Twitter ti permette di inserire dei tweet sul tuo negozio. <br>Tutte le configurazioni sono disponibili nel pannello di amministrazione (Admin Panel), nella sezione <strong>System > Configuration > Templatemonster > Twitter</strong>.</p>
	<figure class="img-polaroid"><img src="img/magento/twitter-1.jpg" alt="" /></figure>					
	<p>Il modulo ha le seguenti opzioni:</p>			
	<table  class="options-table">
		<tr>
			<td class="col-1"><strong>Widget ID</strong></td>
			<td>-</td>
			<td>identificativo del widget Twitter. L'identificativo può essere ottenuto dopo aver effettuato la registrazione dell' <a href="https://twitter.com/settings/widgets/new" target="_blank">account</a> del proprio widget nelle impostazioni.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Account name</strong></td>
			<td>-</td>
			<td>nome utente dell'account Twitter i cui tweet desideri inserire.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Color Scheme</strong></td>
			<td>-</td>
			<td>colore della skin del widget. Può essere scura o chiara.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Layout enhancements</strong></td>
			<td>-</td>
			<td>permette di nascondere parzialmente elementi della formattazione del widget.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Tweet limit</strong></td>
			<td>-</td>
			<td>quantità di tweet da visualizzare nel blocco.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Link color</strong></td>
			<td>-</td>
			<td>permette di cambiare i colori dei link nei tweet.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Border color</strong></td>
			<td>-</td>
			<td>permette di cambiare il colore del bordo del blocco.</td>
		</tr>			
		<tr>
			<td class="col-1"><strong>Height</strong></td>
			<td>-</td>
			<td>altezza della finestra del widget.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Width</strong></td>
			<td>-</td>
			<td>larghezza della finestra del widget.</td>
		</tr>
	</table>
	<p>Di default, il blocco viene posizionato nella colonna di sinistra. Ma ci sono tre possibilità in tutto: <strong>sinistra</strong>, <strong>destra</strong> e <strong>a pié pagina</strong>. <br>
				Per cambiare il posizionamento del blocco, devi aprire il file <strong>tm_twitter.xml</strong> situato nella cartella <strong>app/design/frontend/tm_themes/themeXXX/layout</strong> all'interno della tua installazione.</p>
	Questo file include tre blocchi di <strong><em>reference</em></strong> con parametri <strong>name="left"</strong> (name="right", name="footer").
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
<p>Due blocchi sono commentati (commented out) in questo file. E solo un blocco con <strong>name="left"</strong> non è commentato, il quale posizione il blocco nella colonna di sinistra. </p>
				Se vuoi inserire il modulo a pié pagine, segui queste istruzioni:

<ol class="index-list">
	<li>Togli il commento (uncomment) alle stringhe di codice del blocco <strong>name="footer"</strong> (l'ultimo, nell'esempio di codice qui sopra) e commenta (comment out) il blocco <strong>name="left"</strong> (il primo, nell'esempio di codice qui sopra).</li>
	<li>Apri il file <strong>footer.phtml</strong> situato nella cartella <strong>app/design/frontend/tm_themes/themeXXX/template/page/html</strong>.</li>
	<li>Incolla il seguente codice nella corretta posizione::
		<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_twitter_timeline') ?&gt;</pre>	
	</li>
</ol>
<p>Adesso il blocco Twitter verrà situato a pié pagina.</p>
		