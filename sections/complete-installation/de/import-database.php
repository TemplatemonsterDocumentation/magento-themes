		
<h3>Import der Demodaten</h3>
<p>Das Archiv der Magento Vorlage enthält die Datei mit den Demodaten (dump.sql oder dump.gz). Diese Datei befindet sich im Ordner <b>/sources/sample_data</b> Ihrer Vorlage. Sie ermöglicht Ihnen die Demodaten zu installieren, damit Ihre Webseite nach der Installation der Vorlage genauso wie die Demoversion der Vorlage aussehen kann.</p>
<p class="alert alert-danger"><span>Nutzen Sie die Datei <b>dump.sql.gz</b> nicht, wenn Sie einen existierenden Online-Shop schon haben. Wenn Sie die Datei <b>dump.sql.gz</b> importieren, werden dann alle hinzugefügten Produkte gelöscht. Wenn Sie die Demodaten nicht installieren möchten, installieren Sie dann Magento auf eine leere Datenbank. Überspringen Sie dann den Installationsschritt der Damodaten in dieser Anleitung </span></p>	
<p>Um die Dump-Datei zu installieren, führen Sie die folgenden Aktionen durch:</p>
<ol class="index-list">
	<li>Im Control Panel der Datenbank (PhpMyAdmin) wählen Sie die Datenbank, die Sie für die Installation Magento Commerce (Sie wurde erstellt, weil Sie die Aktionen in dem Schritt vorher ausgeführt haben) nutzen möchten.</li>
	<li>Gehen Sie zum Tab <b>"Import"</b> und drücken Sie den Button <b>"Browse"</b>.</li>
	<li>Gehen Sie in den Ordner <i>"/sources/sample_data"</i> Ihrer Vorlage und wählen Sie die Datei <b>dump.sql.gz.</b></li>
	<li>Drücken Sie den Button <b>"GO"</b>. Der Importprozess kann ein paar Minuten dauern.</li>
</ol>
<p>Wählen Sie die Datenbank, die Sie für Magento CMS nutzen möchten. Wählen Sie <b>"IMPORT"</b>. Drücken Sie den Button  <b>"Browse"</b>.</p>
<figure class="img-polaroid"><img src="img/magento/import-dump1.png" alt="" /></figure>
<p>Gehen Sie in den Ornder "/sources/sample_data" Ihrer Vorlage und wählen Sie die Datei dump.sql.gz.</p>
<figure class="img-polaroid"><img src="img/magento/import-dump2.png" alt="" /></figure>
<p>Drücken Sie den Button <b>"GO"</b>.</p>
<figure class="img-polaroid"><img src="img/magento/import-dump3.png" alt="" /></figure>
			
		