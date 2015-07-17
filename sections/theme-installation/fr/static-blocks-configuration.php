<h3>Configuration des blocs statiques</h3>
<p>Une fois que vous avez fini de configurer les pages, vous devez configurer les blocs statiques. La procédure est similaire: vous devez copier le code des fichiers source et le coller dans les champs correspondants dans le panneau d'administration de Magento. Vous devez utiliser un tableau similaire mais pour les blocs statiques.</p>
<ol> 
	<li>Dans le menu du haut sélectionnez <b>CMS > Static Blocks</b>.</li>
	<li>Cliquez sur le bouton "Add New block" du coin droit pour ajouter un nouveau bloc.</li>
	<li>Entrez le nom du bloc et son identificateur. Vous pouvez obtenir les détails sur le bloc avec le tableau sur la page de Démo Live des templates (consultez la partie sur la Configuration Pages).</li>
	<li>Ouvrez le fichier source du bloc et copier le code HTML dans la zone de contenu.</li>
</ol>
<figure class="img-polaroid"><img src="img/magento/pages_setting5.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting6.png" alt="" /></figure>

<p class="alert alert-info"><span>NB: certains des templates ne contiennent aucun bloc statique, donc le tableau peut être vide. </span></p>
<p class="alert alert-info"><span>Les fichiers source avec le code des blocs statiques sont stockés dans le répertoire "<b>sources\demo\static_blocks\</b>" du package du template. </span></p>

<p>Comment afficher nos blocs avec un contenu statique?</p>

<ol> 
	<li>Accédez au <b>CMS > Widgets</b> dans le menu du haut.</li>
	<li>Cliquez sur le bouton <strong>Ajouter un nouveau widget </strong> en haut à droite pour ajouter le widget.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Spécifiez le type de widget <strong>CMS > Blocs statiques</strong> et le thème que vous souhaitez appliquer au widget et cliquez sur le bouton <strong>Continuer</strong>.
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure></li>
	<li>À la page suivante, dans le champ <strong>Titre du widget </strong>, saisissez le nom du widget qui sera affiché dans le panneau d'administration.  Dans le champ <strong>Assigner aux vues de la boutique </strong> vous devez sélectionner les vues de la boutique qui afficheront le widget. Dans le bloc <strong>Mise à jour de la disposition </strong> cliquez sur le bouton <strong>Ajouter une mise à jour</strong>. Dans le champ <strong>Display On</strong> vous pouvez sélectionner les pages où le widget sera affiché. En fonction de pages sélectionnées vous aurez la possibilité de remplir les champs supplémentaires.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>Sélectionnez l'onglet <strong>Options des widgets </strong> dans la barre latérale de gauche et sélectionnez le bloc statique auquel vous faites référence. N'oubliez pas d'enregistrer vos modifications.
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
</ol>

<p>Une fois que vous avez fini de configurer les pages de la boutiques et les blocs, votre boutique est prête.</p>