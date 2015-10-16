<h3>Module Twitter</h3>
	<p>Le module Twitter permet d'afficher les tweets en votre boutique. <br>Toutes les options de configuration sont disponibles via le panneau d'administration de Magento dans la section <strong>System > Configuration > Templatemonster > Twitter</strong>.</p>
	<figure class="img-polaroid"><img src="img/magento/twitter-1.jpg" alt="" /></figure>					
	<p>Le module dispose des options suivantes:</p>			
	<table  class="options-table">
		<tr>
			<td class="col-1"><strong>Widget ID</strong></td>
			<td>-</td>
			<td>l'intifiant peut être reçu après l'enregistrement de votre <a href="https://twitter.com/settings/widgets/new" target="_blank"> compte</a> de widget dans les paramètres.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Account name</strong></td>
			<td>-</td>
			<td>le nom d'utilisateur de compte Twitter dont les flux que vous souhaitez afficher.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Color Scheme</strong></td>
			<td>-</td>
			<td>la couleur de peau du widget. Il peut être clair ou foncé.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Layout enhancements</strong></td>
			<td>-</td>
			<td>permet de masquer les éléments du formatage de widget.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Tweet limit</strong></td>
			<td>-</td>
			<td>la quantité de tweets affichés dans le flux.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Link color</strong></td>
			<td>-</td>
			<td>permet de changer la couleur de liens dans le flux.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Border color</strong></td>
			<td>-</td>
			<td>permet de changer la couleur de la bordure dans le flux.</td>
		</tr>			
		<tr>
			<td class="col-1"><strong>Height</strong></td>
			<td>-</td>
			<td>la hauteur de la fenêtre du widget.</td>
		</tr>
		<tr>
			<td class="col-1"><strong>Width</strong></td>
			<td>-</td>
			<td>la largeur de la fenêtre du widget.</td>
		</tr>
	</table>
	<p>Par défaut, le module est affiché dans la colonne de gauche. Mais il y a trois options d'affichage: <strong>gauche</strong>, <strong>droite</strong> et <strong>le pied de page</strong>. <br>
	Pour changer la position du bloc, vous devez ouvrir le fichier <strong>tm_twitter.xml</strong> situé dans le dossier <strong>app/design/frontend/tm_themes/themeXXX/layout</strong> de votre installation.</p>
	Ce fichier comprend trois blocs de <strong><em>reference</em></strong> avec les paramètres <strong>name="left"</strong> (name="right", name="footer").
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
<p>Les deux blocs sont commentés dans ce fichier. Et un seul bloc avec <strong>name="left"</strong> n'est pas commenté. Il affiche le module dans la colonne de gauche.<br>
Si vous avez besoin d'afficher le module dans le pied de page, vous devez suivre ces instructions:</p>

<ol class="index-list">
	<li>Décommentez les lignes de code pour le bloc <strong>name="footer"</strong> (le dernier dans l'exemple du code ci-dessus) et commentez le bloc <strong>name="left"</strong> (le premier dans l'exemple de code ci-dessus).</li>
	<li>Ouvrez le fichier <strong>footer.phtml</strong> situé dans le dossier <strong>app/design/frontend/tm_themes/themeXXX/template/page/html</strong>.</li>
	<li>Collez le code suivant à l'endroit nécessaire:
<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_twitter_timeline') ?&gt;</pre>	
				</li>
</ol>
<p>Maintenant le bloc Twitter sera affiché dans le pied de page.</p>
		