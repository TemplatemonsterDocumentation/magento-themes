<h3>Twitter module</h3>
	<p>Twitter Modul ermöglicht Tweets in Ihrem Online-Shop anzuzeigen. <br>Alle Steuerungsoptionen sind im Control Panel in der Sektion <strong>System > Configuration > Templatemonster > Twitter</strong> verfügbar.</p>
	<figure class="img-polaroid"><img src="img/magento/twitter-1.jpg" alt="" /></figure>					
	<p>Lassen Sie uns die Moduloptionen anschauen:</p>			
	<table  class="options-table">
		<tr>
			<td class="col-1"><strong>Widget ID</strong></td>
			<td>-</td>
			<td>Twitter widget identifier. The identifier can be received after the registration of your widget <a href="https://twitter.com/settings/widgets/new" target="_blank">account</a> in settings.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Account name</strong></td>
			<td>-</td>
			<td>der Name des Twitter-Benutzeraccounts, dessen Band Sie anzeigen möchten.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Color Scheme</strong></td>
			<td>-</td>
			<td>das Farbschema des Widgets. Es kann entweder hell oder dunkel sein.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Layout enhancements</strong></td>
			<td>-</td>
			<td>die jeweilge Option ermöglicht einige Elemente von Layout-Erweiterungen zu verbergen.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Tweet limit</strong></td>
			<td>-</td>
			<td>die Anzahl von angezeigten Tweets.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Link color</strong></td>
			<td>-</td>
			<td>ermöglicht die Farbe von Link zu ändern.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Border color</strong></td>
			<td>-</td>
			<td>ermöglicht die Rahmenfarbe zu ändern.</td>
		</tr>			
		<tr>
			<td class="col-1"><strong>Height</strong></td>
			<td>-</td>
			<td>die Höhe des Widgetfensters.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Width</strong></td>
			<td>-</td>
			<td>die Breite des Widgetfensters.</td>
		</tr>
	</table>
	<p>Standardmäßig wird der Block des Plugins in der linken Spalte angezeigt. Aber es gibt drei Varianten dazu: <strong>links</strong>, <strong>rechts</strong> und im <strong>Footer</strong>. <br>
		Um die Blockposition zu ändern, sollen Sie die Datei <strong>tm_twitter.xml</strong> öffnen, die sich in dem Ordner <strong>/app/design/frontend/tm_themes/themeXXX/layout</strong> Ihrer Installation befindet.</p>
	In dieser Datei gibt es drei Blöcke <strong><em>reference</em></strong> mit der Option <strong>name="left"</strong> (name="right", name="footer").
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
<p>In dieser Datei wurden zwei Blöcke kommentiert. Und nur ein von den Blöcken mit <strong>name="left"</strong> wurde nicht kommentiert. Er zeigt das Plugin in der linken Spalte an. </p>
				Wenn Sie das Plugin, zum Beispiel im Footer, anzeigen möchten, machen Sie das Folgende:

<ol class="index-list">
	<li>Löschen Sie die Block-Kommentierung mit <strong>name="footer"</strong>  (das letzte in dem obigen Beispiel) und kommentieren Sie den Block mit <strong>name="left"</strong> (das erste in dem obigen Beispiel).</li>
	<li>Öffnen Sie die Datei <strong>footer.phtml</strong>, die sich in dem Ordner <strong>app/design/frontend/tm_themes/themeXXX/template/page/html</strong> befindet.</li>
	<li>Fügen Sie in die notwendige Stelle den folgenden Code ein:
<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_twitter_timeline') ?&gt;</pre>	
	</li>
</ol>
<p>Now the Twitter block will be displayed in footer.</p>
		