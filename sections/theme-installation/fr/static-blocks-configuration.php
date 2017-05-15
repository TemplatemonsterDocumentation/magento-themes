<h3>Configuration des blocs statiques</h3>
<p>Une fois que vous avez fini de configurer les pages, vous devez configurer les blocs statiques. La procédure est similaire: vous devez copier le code des fichiers source et le coller dans les champs correspondants dans le panneau d'administration de Magento. Vous devez utiliser un tableau similaire mais pour les blocs statiques.</p>
<p class="alert alert-warning"><span>Block ID may vary in your Magento installation. You can get correct block id from Content-> Blocks section in Admin panel.</span></p>
<ol class="index-list"> 
	<li>Dans le menu du haut sélectionnez <strong>Content > Blocks</strong>. </li>
	<li>Cliquez sur le bouton <strong>"Add New block"</strong> pour ajouter un nouveau bloc. 
		<figure class="img-polaroid"><img src="img/magento/blocks-1.jpg" alt="" /></figure>
	</li>
	<li>Entrez le nom du bloc et son identificateur. Vous pouvez obtenir les détails sur le bloc avec le tableau sur la page de Démo Live des templates (consultez la partie sur la Configuration Pages).</li>
	<li>Ouvrez le fichier source du bloc et copier le code HTML dans la zone de contenu.</li>
</ol>

<figure class="img-polaroid"><img src="img/magento/blocks-2.jpg" alt="" /></figure>

<p class="alert alert-info"><span>NOTE: certains des templates ne contiennent aucun bloc statique, donc le tableau peut être vide. </span></p>
<p class="alert alert-info"><span>Les fichiers source avec le code des blocs statiques sont stockés dans le répertoire "<strong>sources\demo\static_blocks\</strong>" du package du template. </span></p>

<h4>Comment afficher nos blocs avec un contenu statique?</h4>

<ol class="index-list"> 
	<li>Accédez au <strong>Content > Widgets</strong> dans le menu du haut</li>
	<li>Cliquez sur le bouto <strong>"Add Widget"</strong> en haut à droite pour ajouter le widget.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Spécifiez le type de widget <strong>CMS Static Block</strong> et le thème que vous souhaitez appliquer au widget et cliquez sur le bouton <strong>Continue</strong>.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>À la page suivante, dans le champ <strong>Widget Title</strong> saisissez le nom du widget qui sera affiché dans le panneau d'administration. Dans le champ <strong>Assign to Store Views</strong> vous devez sélectionner les vues de la boutique qui afficheront le widget. Dans le bloc <strong>Layout Updates</strong> cliquez sur le bouton <strong>Add Layout Update</strong>. Dans le champ <strong>Display On</strong> vous pouvez sélectionner les pages où le widget sera affiché. En fonction de pages sélectionnées vous aurez la possibilité de remplir les champs supplémentaires. 
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
	<li>Sélectionnez l'onglet <strong>Widget Options</strong> dans la barre latérale de gauche et sélectionnez le bloc statique auquel vous faites référence. N'oubliez pas d'enregistrer vos modifications. 
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure>
	</li>
</ol>
<p>Une fois que vous avez fini de configurer les pages de la boutiques et les blocs, votre boutique est prête.</p>