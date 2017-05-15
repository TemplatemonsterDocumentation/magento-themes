<h3>Configuration des pages</h3>
<p>Pour que votre template ressemble exactement à celui de notre Démo Live, vous devez paramétrer les pages de la boutique d'une manière spécifique. Nous fournissons tous les fichiers avec le code source des pages. Vous devez les ajouter au panneau d'administration de Magento comme indiqué ci-dessous à l'aide du tableau des paramètres. Le tableau de paramètres se trouve sur la page des <strong>Détails Techniques</strong> sur la page de prévisualisation du template. Le fichier de documentation contient un lien vers cette page:</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <strong>Documentation</strong>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>La page principale du template sera la plus affectée. Elle contient habituellement les éléments suivants: bannière, slider, galerie, etc.</p>
<div class="alert alert-warning"><span>Nous vous recommandons de désactiver l'éditeur WYSIWYG. Pour ce faire, dans le menu du haut de l'interface administrateur, sélectionnez  <strong>Stores &gt; Configuration</strong>. Ouvrez la section "<strong>Content Management</strong>" et dans la fenêtre <strong>WYSIWYG Options</strong> mettez l'option  "<strong>Enable WYSIWYG Editor</strong>" à "<strong>Disabled Completely</strong>".</span></br>
<figure class="img-polaroid"><img src="img/magento/page-settings-1.jpg" alt="" /></figure></div>
<p class="alert alert-warning"><span>Dans le cas où vous avez déjà apporté des changements au code de vos pages et aimeriez ajouter notre code sans que cela n'affecte vos changements, il est recommandé de contacter des techniciens professionnels ou de préparer une sauvegarde avant d'apporter des changements.</span></p>
<ol class="index-list">
	<li>Depuis le menu du haut, sélectionnez <strong>Content > Pages</strong>. Vous trouverez ici toutes les pages de la boutique. <strong>Home page</strong>, <strong>About Us</strong> et <strong>Customer Service</strong> devraient déjà être disponibles, vous n'avez donc pas à les ajouter. Vous n'avez qu'à mettre à jour les pages HTML et le contenu XML. Ouvrez n'importe laquelle pour accéder au contenu.<figure class="img-polaroid"><img src="img/magento/page-settings-2.jpg" alt="" /></figure></li>
	<li>Ouvrez la page et sélectionnez l'onglet <strong>Content</strong>.  Il contient le code HTML de la page. Vous pouvez récupérer le code HTML depuis le fichier source approprié. Vous pouvez voir la liste des fichiers sources inclus dans la section "Template Settings" de la page de prévisualisation de vos templates. Copiez le code depuis le fichier source et collez-le dans la zone <strong>content</strong>.<figure class="img-polaroid"><img src="img/magento/page-settings-3.jpg" alt="" /></figure></li>
	<li>Une fois que vous avez fini avec le code HTML, passez à l'onglet  <strong>"Design"</strong>.  Il contient le code XML de la page. Le code XML permet d'ajouter des blocs statiques Magento et des widgets à la page. Le code XML doit être copié de la même manière que le HTML, depuis le fichier source. Copiez le code XML dans la zone "<strong>Layout Update XML</strong>".<figure class="img-polaroid"><img src="img/magento/page-settings-4.jpg" alt="" /></figure></li>
	<li>N'oubliez pas de sélectionner l'option "<strong>Layout</strong>" valide.</li>
	<li>Dans le cas où vous devez ajouter une page, cliquez sur le bouton <strong>"Add New Page"</strong> dans le coin en haut à droite.</li>
</ol>

<!-- <p>Si vous éprouvez des difficultés, veuillez consulter le tutoriel détaillé sur <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">Comment configurer des pages manuellement</a>.</p> -->		