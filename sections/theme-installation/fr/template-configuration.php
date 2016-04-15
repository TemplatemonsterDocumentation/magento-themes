<h3>Configuration du Template</h3>
<p>Nous allons passer en revue les options de configuration du template en se basant sur l'exemple. Il est configuré de la même manière que notre template de Démo Live, sans affecter les données relatives aux produits.</p>

<h4>Activation du nouveau template</h4>
<ol class="index-list">
	<li>Ouvrir le panneau d'administration de Magento et allez dans le menu <strong>Stores > Configuration</strong>.
		<figure class="img-polaroid"><img src="img/magento/Theme-set-1.jpg" alt="" /></figure>
	</li>
	<li>Dans le menu <strong>General</strong> sélectionnez l'onglet <strong>Design</strong>. Cliquez l'onglet <strong>Design Theme</strong> et dans la liste déroulante <strong>Design Theme</strong> sélectionnez le thème et cliquez sur le bouton <strong>Save Config</strong>.
		<figure class="img-polaroid"><img src="img/magento/Theme-set-2.jpg" alt="" /></figure>
	</li>	
</ol>

<h4>Ré-indexage des données</h4>
<ol class="index-list">
	<li>Ouvrez le panneau d'administration de Magento et allez dans le menu <strong>System > Index Management</strong>.
		<figure class="img-polaroid"><img src="img/magento/Theme-set-3.jpg" alt="" /></figure>
	</li>
	<li>Dans la première colonne ouvrez la liste déroulante et choisissez l'option "<strong>Select All</strong>". 
		<figure class="img-polaroid"><img src="img/magento/Theme-set-4.jpg" alt="" /></figure>
	</li>
	<li>Dans le top sélecteur "<strong>Actions</strong>" shoisissez une option "<strong>Update on save</strong>". Cela permettra automatiquement réindexer les données spécifiées après l'enregistrement des paramètres dans le panneau d'administration.  
		<figure class="img-polaroid"><img src="img/magento/Theme-set-5.jpg" alt="" /></figure>
	</li>
	<li>Cliquez sur le bouton "<strong>Submit</strong>".</li>
	<li>Veuillez patienter, ceci pourrait prendre du temps.</li>
</ol>

<h4>Désactiver le cache</h4>
<p>Pour que les changements apparaissent sur votre site sans retard, vous devez désactiver le cache. Ceci prévient les actions supplémentaires de nettoyage de cache après chaque changement que vous faites. Vous pouvez l'activer quand vous avez fini de modifier la boutique.</p>
<ol class="index-list">
	<li>Ouvrez le panneau d'administration de Magento et allez dans le menu <strong>System > Cache Management</strong>. 
		<figure class="img-polaroid"><img src="img/magento/Theme-set-6.jpg" alt="" /></figure>
	</li>
	<li>Dans la première colonne ouvrez la liste déroulante et choisissez l'option "<strong>Select All</strong>". 
		<figure class="img-polaroid"><img src="img/magento/Theme-set-7.jpg" alt="" /></figure>
	</li>
	<li>Dans le champ "<strong>Refresh</strong>" choisissez une option "<strong>Disable</strong>".
		<figure class="img-polaroid"><img src="img/magento/Theme-set-8.jpg" alt="" /></figure>
	</li>
	<li>Cliquez sur le bouton "<strong>Submit</strong>".</li>
</ol>