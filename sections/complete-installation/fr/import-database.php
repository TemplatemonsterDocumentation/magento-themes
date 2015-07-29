		
<h3>Importation de données d'exemple</h3>
<p>Le package de template Magento contient le fichier de données d'exemple (dump.sql ou dump.gz). Ce fichier est se trouve dans le dossier <strong>/sources/sample_data</strong>. Il permet de charger des données d'exemple pour que votre site soit semblable à notre template de démo.</p>
<p class="alert alert-danger"><span>N'importez pas dump.sql.gz si vous avez déjà les données sur votre site. En important dump.sql.gz, tous les produits seront supprimés de votre boutique. Si vous ne voulez pas installer les données d'exemple, utilisez une base de données vide en installant Magento. Passez l'étape de l'installation des données.</span></p>	
<p>Pour installer le fichier dump, suivez les étapes ci-dessous:</p>
<ol class="index-list">
	<li>Connectez-vous sur PhpMyAdmin et sélectionnez la base de données que vous utiliserez pour Magento Commerce (elle a été créée par vous en suivant les étapes fournies plus haut). <figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Allez dans l'onglet <strong>"Import"</strong> et cliquez sur le bouton <strong>"Browse"</strong>.<figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Trouvez le dossier <i>"/sources/sample_data"</i> de votre template et sélectionnez le fichier <strong>dump.sql.gz</strong>. Cliquez sur <strong>"GO"</strong>.  <figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> Le processus d'importation peut prendre quelques minutes.</li>
</ol>