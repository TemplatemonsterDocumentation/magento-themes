<h3>Statische Blöcke Konfiguration</h3>
<p>Wenn Sie mit den Seiten fertig sind, müssen Sie die statischen Blöcke konfigurieren. Das Verfahren ist ähnlich: Sie müssen den Code aus den Quelldateien kopieren und sie in die entsprechenden Felder in der Magento Admin-Panel einfügen. Sie sollten eine ähnliche Tabelle wie für die statischen Blöcke verwenden.</p>
<p class="alert alert-warning"><span>Block ID may vary in your Magento installation. You can get correct block id from Content-> Blocks section in Admin panel.</span></p>
<ol class="index-list"> 
	<li>Im Hautmenü gehen Sie zu <strong>Content > Blocks</strong>. </li>
	<li>Oben rechts klicken Sie die <strong>"Add New block"</strong> Taste um einen statischen Block hinzuzufügen. 
		<figure class="img-polaroid"><img src="img/magento/blocks-1.jpg" alt="" /></figure>
	</li>
	<li>Geben Sie den Blocknamen und ID ein. Sie können die Block Details aus der Tabelle der Vorlage Konfigurationsseite (siehe Infoseiten Konfiguration Teil) erhalten.</li>
	<li>Öffnen Sie die Block-Quelldatei und kopieren Sie den HTML-Code in den Inhaltsbereich.</li>
</ol>

<figure class="img-polaroid"><img src="img/magento/blocks-2.jpg" alt="" /></figure>

<p class="alert alert-info"><span>Hinweis: einige Vorlagen enthalten keine statischen Blöcke, so kann die Tabelle leer sein. </span></p>
<p class="alert alert-info"><span>Die Quelldateien mit dem Code der statischen Blöcke sind im "<strong>sources\demo\static_blocks\</strong>" Ordner des Template-Pakets zu finden. </span></p>

<h4>Wie man Blöcke mit unseren statischen Inhalten angezeigen kann?</h4>

<ol class="index-list"> 
	<li>Im Hautmenü gehen Sie zu <strong>Content > Widgets</strong></li>
	<li>Oben rechts klicken Sie die  <strong>"Add Widget"</strong> Taste um ein Widget hinzuzufügen.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Geben Sie den Widget-Typ  <strong>CMS Static Block</strong> an und Thema, wo Sie das Widget anwenden möchten, dann klicken Sie auf die <strong>Continue</strong> Taste.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>Auf der nächsten Siete im  <strong>Widget Title</strong> Feld gebne Sie den Widgetnamen ein, welcher in der Admin Panel angezeigt wird. Im <strong>Assign to Store Views</strong> Feld müssen Sie die benötige Shop- Ansicht auswählen, die das Widget angezeigen soll. In dem <strong>Layout Updates</strong> Block klicken Sie den <strong>Add Layout Update</strong> Knopf. Im <strong>Display On</strong> Feld wählen Sie die Seiten, die das Widget anzeigen sollen. Abhängig von der ausgewählten Seiten werden Sie die Gelegenheit haben, zusätzlichen Felder auszufüllen. 
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
	<li>In der linken Seitenleiste klicken Sie das <strong>Widget Options</strong> Tab und wählen Sie den statischen Block,auf den Sie sich beziehen. Vergessen Sie nicht, die Änderungen zu speichern. 
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure>
	</li>
</ol>
<p>Wenn Sie fertig sind die Shop Seiten und Blöcke zu konfigurieren, ist Ihr Geschäft fertig.</p>