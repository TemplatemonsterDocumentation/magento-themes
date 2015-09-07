		
<h3>Import der Demodaten</h3>
<p>Das Archiv der Magento Vorlage enthält die Datei mit den Demodaten (dump.sql oder dump.gz). Diese Datei befindet sich im Ordner <strong>/sources/sample_data</strong> Ihrer Vorlage. Sie ermöglicht Ihnen die Demodaten zu installieren, damit Ihre Webseite nach der Installation der Vorlage genauso wie die Demoversion der Vorlage aussehen kann.</p>
<p class="alert alert-danger"><span>Nutzen Sie die Datei <strong>dump.sql.gz</strong> nicht, wenn Sie einen existierenden Online-Shop schon haben. Wenn Sie die Datei <strong>dump.sql.gz</strong> importieren, werden dann alle hinzugefügten Produkte gelöscht. Wenn Sie die Demodaten nicht installieren möchten, installieren Sie dann Magento auf eine leere Datenbank. Überspringen Sie dann den Installationsschritt der Damodaten in dieser Anleitung </span></p>	
<p>Um die Dump-Datei zu installieren, führen Sie die folgenden Aktionen durch:</p>
<ol class="index-list">
	<li>Im Control Panel der Datenbank (PhpMyAdmin) wählen Sie die Datenbank, die Sie für die Installation Magento Commerce (Sie wurde erstellt, weil Sie die Aktionen in dem Schritt vorher ausgeführt haben) nutzen möchten.<figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Gehen Sie zum Tab <strong>"Import"</strong> und drücken Sie den Button <strong>"Browse"</strong>.<figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Gehen Sie in den Ordner <strong>"/sources/sample_data"</strong> Ihrer Vorlage und wählen Sie die Datei <strong>dump.sql.gz</strong>. Drücken Sie den Button <strong>"GO"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> Der Importprozess kann ein paar Minuten dauern.</li>
</ol>
		