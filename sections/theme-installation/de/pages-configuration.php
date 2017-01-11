<h3>Pages Konfiguration</h3>
<p>Damit Ihre Vorlage genauso wie unsere Live-Demo aussieht, müssen Sie Store-Seiten in einer bestimmten Art und Weise einrichten. Wir liefern alle Dateien mit dem Seiten-Quellcode.Sie müssen sie zur Magento Admin-Panel hinzufügen, gemäß den nächsten Anweisungen mit der Einstellungen-Tabelle. Einstellungen-Tabelle können Sie auf der  <strong>Technical details</strong> auf der Vorlage Vorschau-Seite sehen. Die Dokumentationsdatei enthält den Link zu dieser Seite :</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <strong>Dokumentation</strong>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>Die Hauptvorlagen Seite wird am meisten betroffen sein. Es enthält in der Regel folgende Elemente: Banner, Slider, Galerie usw.</p>
<div class="alert alert-warning"><span>Wir empfehlen, dass Sie den WYSIWYG-Editor deaktivieren. Um dies zu tun,wählen Sie aus dem Admin-Hauptmenü  <strong>Stores &gt; Configuration</strong>. Öffnen Sie die "<strong>Content Management</strong>" Sektion und im <strong>WYSIWYG Options</strong> Fenster, setzen Sie die "<strong>Enable WYSIWYG Editor</strong>" Option zu "<strong>Disabled Completely</strong>".</span></br>
<figure class="img-polaroid"><img src="img/magento/page-settings-1.jpg" alt="" /></figure></div>
<p class="alert alert-warning"><span>Falls Sie bereits die Änderungen an Ihren Seiten Code vorgenommen habe und unseren Code hinzufügen möchten , ohne die Änderungen zu beeinflussen, ist es empfehlenswert, professionelle Techniker zu kontaktieren oder einen Backup zu erstellen bevor Sie Änderungen vornehemen. </span></p>
<ol class="index-list">
	<li>Aus dem Hauptmenü wählen Sie <strong>Content > Pages</strong>. Hier können Sie alle Shop-Seiten finden. <strong>Home page</strong>, <strong>About Us</strong> und <strong>Customer Service</strong> sollten bereits vorhanden sein, damit man sie nicht hinzufügen muss. Sie müssen nur die HTML-Seiten und XML-Inhalte aktualisieren. Öffnen Sie eine von ihnen, um den Zugriff auf die Inhalte zu erhalten.<figure class="img-polaroid"><img src="img/magento/page-settings-2.jpg" alt="" /></figure></li>
	<li>Öffnen Sie die Seite und wählen Sie das <strong>Content</strong> Tab. Es enthält den HTML-Code der Seite. Sie können den Seite HTML-Code aus der entsprechenden Quelldatei übernehmen . Sie können die Liste der Quelldateien in der "Template-Einstellungen" auf der Vorlagen Vorschauseite finden . Kopieren Sie den Code aus der Quelldatei und fügen Sie sie in den <strong>Inhalts</strong> Bereich.<figure class="img-polaroid"><img src="img/magento/page-settings-3.jpg" alt="" /></figure></li>
	<li>Wenn Sie mit dem HTML-Code fertig sind, wechseln Sie zum  <strong>"Design"</strong> Tab. Es enthält den Seiten XML-Code. XML-Code erlaubt Ihnen Magento statische Blöcke und Widgets zur Seite hinzuzufügen. Der XML-Code sollte auf die gleiche Weise wie die HTML aus der Quelldatei kopiert werden. Kopieren Sie den XML-Code zum "<strong>Layout Update XML</strong>" Bereich.<figure class="img-polaroid"><img src="img/magento/page-settings-4.jpg" alt="" /></figure></li>
	<li>Vergessen Sie nicht, die richtige  "<strong>Layout</strong>" Option zu wählen.</li>
	<li>Wenn Sie eine neue Seite hinzufügen möchten, klicken Sie auf den <strong>"Add New Page"</strong> Knopf oben rechts.</li>
</ol>

<!-- <p>In case you have any difficulties, please check the detailed tutorial on <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">How to configure pages manually</a>.</p> -->		