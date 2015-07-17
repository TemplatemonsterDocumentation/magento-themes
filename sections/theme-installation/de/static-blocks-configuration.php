<h3>Wie stellt man die statischen Blöcke ein</h3>
<p>Nachdem Sie die Seiten eingestellt haben, ist es nötig die statischen Blöcke einzustellen. Dieser Prozess ist sehr ähnlich. Sie sollen den Code aus den Quelldateien kopieren und in die entsprechenden Felder des Control Panels einfügen. Sie sollen ähnliche Tabelle verwenden, aber nur für die statischen Blöcke.</p>
<ol> 
	<li>In dem oberen Menü wählen Sie <b>CMS > Static Blocks</b></li>
	<li>Drücken Sie den Button "Add New block" in der rechten oberen Ecke, um einen neuen Block hinzuzufügen.</li>
	<li>Geben Sie den Namen des Blocks und die Kennzeichnung ein. Sie können die notwendigen Daten in der Einstellungentabelle der Vorlage (schauen Sie den Punkt der Seiteneinstellungen an) finden.</li>
	<li>Öffnen Sie die Quelldateien der Blöcke und kopieren Sie den HTML Code in den Bereich content.</li>
</ol>
<figure class="img-polaroid"><img src="img/magento/pages_setting5.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting6.png" alt="" /></figure>

<p class="alert alert-info"><span>Achtung: Einige Vorlage enthalten statische Blöcke nicht, deswegen kann die Tabelle leer sein.</span></p>
<p class="alert alert-info"><span>Die Quelldateien für die statischen Blöcke befinden sich im Ordner "<b>sources\demo\static_blocks\</b>" des Archivs der Vorlage. </span></p>

<p>Wie zeigt man unsere Blöcke mit dem statischen Inhalt?</p>

<ol> 
	<li>In dem oberen Menü wählen Sie <b>CMS > Widgets (CMS > Widgets)</b></li>
	<li>Drücken Sie in der oberen rechten Ecke auf den Button <strong>Add New Widget Instance (Eine neue Widget-Instanz hinzufügen)</strong>, um das Widget hinzuzufügen.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Legen Sie den Typ des Widgets <strong>CMS Static Block</strong> und ein Theme, auf die Sie das Widget verwenden möchten und drücken Sie auf den Button <strong>Continue (Weiter)</strong>.
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure></li>
	<li>Auf der nächsten Seite, im Feld <strong>Widget Instance Title (Titel der Widget-Instanz)</strong>, geben Sie den Namen des Widgets ein, der im Control Panel angezeigt wird. Im Feld <strong>Assign to Store Views (Shop Ansichten zuweisen)</strong> wählen Sie Shop Ansichten aus, für die Ihr Widget angezeigt wird. Im Block <strong>Layout Updates (Layout aktualisieren)</strong> drücken Sie auf den Button <strong>Add Layout Update (Aktualisierung vom Layout hinzufügen)</strong>. Im Feld <strong>Display On (Anzeigen auf)</strong> können Sie Seiten auswählen, auf denen das Widget angezeigt wird. Abhängig von ausgewählten Seiten werden zusätzliche Felder, die Sie ausfüllen müssen, agezeigt.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>In der linken Seitenleiste wählen Sie den Tab <strong>Widget Options (Widget Optionen) </strong> und wählen Sie den statischen Block, den Sie brauchen. Vergessen Sie nicht die Änderungen zu speichern.
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
</ol>

<p>Nachdem Sie alle Seiten und statischen Blöcke eingestellt haben, ist Ihr Online-Shop betriebsbereit.</p>