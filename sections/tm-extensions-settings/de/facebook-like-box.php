<h3>Facebook like box</h3>
<p>Das jeweilige Modul ermöglicht Facebook like box in Ihrem Magento Shop anzuzeigen. <br>			
Sie können es im Control Panel Magento, in der Sektion <strong>System > Configuration > Templatemonster > Facebook</strong> einstellen.</p>
<figure class="img-polaroid"><img src="img/magento/facebook-2.jpg" alt="" /></figure>
<p>Lassen Sie uns die Moduloptionen anschauen:</p>			
<table class="options-table">
	<tr>
		<td class="col-1"><strong>App ID</strong></td>
		<td>-</td>
		<td>ID Ihrer Anwendung auf Facebook. Um Facebook Like box nutzen zu können, sollen Sie Ihre Anwendung registrieren. Indem Sie diesem Link <a href="https://developers.facebook.com/" target="_blank">folgen, können Sie mehr darüber erfahren</a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Page URL</strong></td>
		<td>-</td>
		<td>der Link zur Seite bei Facebook.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Show Faces</strong></td>
		<td>-</td>
		<td>ermöglicht Profilfotos von Menschen, die die Seite als „Gefällt mir“ markiert haben, zu verbergen oder anzuzeigen.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Hide cover</strong></td>
		<td>-</td>
		<td>ermöglicht das Hintergrundbild im Header zu entfernen.</td>
	</tr>	
	<tr>
		<td class="col-1"><strong>Show Posts</strong></td>
		<td>-</td>
		<td>ermöglicht die Darstellung von den letzten Beiträgen auf der Seite zu aktivieren.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Height</strong></td>
		<td>-</td>
		<td>die Höhe des Plugins-Bereiches</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Width</strong></td>
		<td>-</td>
		<td>die Breite des Plugins-Bereiches.</td>
	</tr>				
</table>
<p>Standardmäßig wird der Block des Plugins in der linken Spalte angezeigt. Aber es gibt drei Varianten dazu: <strong>links</strong>, <strong>rechts</strong> und im <strong>Footer</strong>. <br> 
	In order to change the position of the block, you need to open <strong>tm_facebook.xml</strong> file located in <strong>app/design/frontend/tm_themes/themeXXX/layout</strong> folder of your installation.

Um die Blockposition zu ändern, sollen Sie die Datei <strong>tm_facebook.xml</strong> öffnen, die sich in dem Ordner <strong>app/design/frontend/tm_themes/themeXXX/layout</strong> Ihrer Installation befindet.</p>
In dieser Datei gibt es drei Blöcke <strong><em>reference</em></strong> mit der Option <strong>name="left"</strong> (name="right", name="footer").
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
<p>In dieser Datei wurden zwei Blöcke kommentiert. Und nur ein von den Blöcken mit <strong>name="left"</strong> wurde nicht kommentiert. Er zeigt das Plugin in der linken Spalte an. 
				Wenn Sie das Plugin, zum Beispiel im Footer, anzeigen möchten, machen Sie das Folgende:
</p>
<ol class="index-list">
	<li>Löschen Sie die Block-Kommentierung mit <strong>name="footer"</strong> (das letzte in dem obigen Beispiel) und kommentieren Sie den Block mit <strong>name="left"</strong> (das erste in dem obigen Beispiel).</li>
	<li>Öffnen Sie die Datei <strong>footer.phtml</strong>, die sich in dem Ordner <strong>app/design/frontend/tm_themes/themeXXX/template/page/html</strong> befinden.</li>
	<li>Fügen Sie in die notwendige Stelle den folgenden Code ein:
<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_facebook_like_footer') ?&gt;</pre>	
	</li>
</ol>
<p>Now the Facebook block will be displayed in footer.</p>
		