<h3>Like Box de Facebook</h3>
<p>Le module donné vous permet d'afficher "Like Box" de Facebook sur votre boutique Magento.	<br>
Vous pouvez le configurer via le panneau d'administration de Magento dans la section <strong>System > Configuration > Templatemonster > Facebook</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/facebook-2.jpg" alt="" /></figure>
<p>Le module dispose des options suivantes:</p>			
<table class="options-table">
	<tr>
		<td class="col-1"><strong>App ID</strong></td>
		<td>-</td>
		<td>l'identifiant de votre compte Facebook. Pour utiliser Like Box de Facebook, vous devez enregistrer votre compte. Vous pouvez suivre le lien pour des instructions complémentaires<a href="https://developers.facebook.com/" target="_blank"></a>.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Page URL</strong></td>
		<td>-</td>
		<td>l'URL de la page de compte Facebook.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Show Faces</strong></td>
		<td>-</td>
		<td>vous permet de masquer ou d'afficher la photo de l'utilisateur qui aimait la page.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Hide cover</strong></td>
		<td>-</td>
		<td>permet de supprimer l'image de fond d'en-tête.</td>
	</tr>	
	<tr>
		<td class="col-1"><strong>Show Posts</strong></td>
		<td>-</td>
		<td>vous permet d'activer / de désactiver les posts récents sur la page.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Height</strong></td>
		<td>-</td>
		<td>la hauteur de la zone de module.</td>
	</tr>
	<tr>
		<td class="col-1"><strong>Width</strong></td>
		<td>-</td>
		<td>la largeur de la zone de module.</td>
	</tr>				
</table>
<p>Par défaut, le module est affiché dans la colonne de gauche. Mais il y a trois options d'affichage: <strong>gauche</strong>, <strong>droite</strong> et <strong>le pied de page</strong>. <br>
Pour changer la position du bloc, vous devez ouvrir le fichier <strong>tm_facebook.xml</strong> situé dans le dossier <strong>app/design/frontend/tm_themes/themeXXX/layout</strong> de votre installation.</p>

Ce fichier comprend trois blocs de <strong><em>reference</em></strong> avec les paramètres <strong>name="left"</strong> (name="right", name="footer").
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
<p>Les deux blocs sont commentés dans ce fichier. Et un seul bloc avec <strong>name="left"</strong> n'est pas commenté. Il affiche le module dans la colonne de gauche.<br>
				Si vous avez besoin d'afficher le module dans le pied de page, vous devez suivre ces instructions:
</p>
<ol class="index-list">
	<li>Décommentez les lignes de code pour le bloc <strong>name="footer"</strong> (le dernier dans l'exemple du code ci-dessus) et commentez le bloc <strong>name="left"</strong> (le premier dans l'exemple de code ci-dessus).</li>
	<li>Ouvrez le fichier <strong>footer.phtml</strong> situé dans le dossier <strong>app/design/frontend/tm_themes/themeXXX/template/page/html</strong>.</li>
	<li>Collez le code suivant à l'endroit nécessaire:
		<pre class="prettyprint linenums">&lt;?php echo $this-&gt;getChildHtml('tm_facebook_like_footer') ?&gt;</pre>	
	</li>
</ol>
<p>Maintenant le bloc de Facebook sera affiché dans le pied de page.</p>
		