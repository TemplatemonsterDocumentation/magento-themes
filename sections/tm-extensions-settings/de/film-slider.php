<h3>Film Slider</h3>
<p>Templatemonster Film Slider-Modul ist eine Implementierung des eleganten und professionellen jQuery-Plugin 'Slider Pro'. Es erlaubt Ihnen einen Slider mit mehreren Schichten zur Startseite Ihres Geschäfts hinzuzufügen. Eine reiche Sammlung von Slider-Konfigurationsoptionen und Benutzeroberfläche hilft Ihnen, den Slider schnell und einfach zu konfigurieren.</p>
<p>Im Hauptmenü werden Sie eine neue Menüoption finden <strong>TemplateMonster</strong>. <br>Um mit der Arbeit mit dem FilmSlider Modul zu beginnen, klicken Sie auf das <strong>Template Monster -> Sliders</strong> Menüelement.</p>
<figure class="img-polaroid"><img src="img/magento/slide-1.png" alt="" /></figure>
<p>Hier können Sie eine Liste der verfügbaren Slider sehen, in der Sie Slides deaktivieren / aktivieren, löschen oder bearbeiten können.</p>
<figure class="img-polaroid"><img src="img/magento/slide-2.png" alt="" /></figure>
<p>Um einen neuen Slider hinzuzuögen, klicken Sie den <strong>Add New Slider</strong> Knopf oben rechts. <br>
Auf dem Slider Konfigurationsbildschirm in der <strong>General Options</strong> Sektion können Sie alle verfügbaren Slider Einstellungen sehen. <strong>Slider Items</strong> Sektion erlaubt Ihnen Slides zum Slider hinzuzufügen.</p>
<figure class="img-polaroid"><img src="img/magento/slide-3.png" alt="" /></figure>
<p>Mal sehen, welche Slider Optionen verfügbar sind. Wie Sie sehen können, sind die Optionen in mehrere Abschnitte unterteilt, um die Konfigurationsoberfläche benutzerfreundlicher zu machen. </p>

<h4>Allgemeine Optionen</h4>
<h5>Haupteinstellungen</h5>
<p>In diesem Abschnitt können Sie den Slider Titel festlegen, wählen Sie eine Shopansicht , aktivieren / deaktivieren den Slider, stellen Sie seine Breite und Höhe ein. Jede Option bezieht sich auf eine Pro jQuery-Plugin-Eigenschaft des Sliders. Sie können genauere Beschreibung der einzelnen Eigenschaften in <a target='_blank' href="https://github.com/bqworks/slider-pro/blob/master/docs/api.md#1-properties">der offiziellen Slider Pro-Dokumentation finden</a>. Einige jQuery-Plugin Eigenschaften werden möglicherweise nicht in der Film Slider Konfiguration vorhanden sein, wir werden sie in zukünftigen Versionen hinzufügen.</p>
<figure class="img-polaroid"><img src="img/magento/slide-4.png" alt="" /></figure>
Sliderdimensionen (Breite und Höhe) kann auf einen fixierten Wert eingestellt werden , wie 900 (gibt 900 Pixel an), oder auf einen Prozentwert, wie '100%'.
<div class="alert alert-warning">
	Bitte beachten Sie: Slidetitel , Shopansicht und Status sind erforderlich , ohne diesen Werten können Sie den Slider nicht speichern.
</div>

<h5>Bildeinstellungen</h5>
<p>In der Bildsektion können Sie die Bildkonfigurationseinstellungen für Sliderbilder anpassen. Jede Option hat eine kurze Beschreibung. Lassen Sie uns einige von ihnen genauer beschreiben.</p>
<figure class="img-polaroid"><img src="img/magento/slide-5.png" alt="" /></figure>
<h6>aspectRatio</h6>
Stellt das Seitenverhältnis der Slides ein. Wenn Sie einen anderen Wert als -1 einstellen, wird die Höhe der Slides nicht eingesetzt, um das angegebene Seitenverhältnis beizubehalten.
<h6>imageScaleMode</h6>
Legt den Skalierungsmodus der Hauptbilder vom Slider (Bilder ,die als Hintergrund hinzugefügt wurden) fest. 'Cover' skaliert und schneidet das Bild , so dass sie den gesamten Slider füllt. 'contain' wird das gesamte Bild im Inneren des Sliders sichtbar halten. 'exact' wird die Größe des Bildes auf die Größe des Sliders anpassen. 'none' wird das Bild in seiner ursprünglichen Größe lassen.
<h6>forceSize</h6>
Gibt an, ob die Größe des Sliders auf volle Breite oder auf das volle Fenster angezeigt wird.
<div class="alert alert-warning">
	Hinweis: Es ist möglich, den Slider in voller Breite oder im ganzen Fenster anzuzeigen, indem Sie eine Breite und / oder Höhe von "100%" angeben. Trotzdem kann manchmal der Slider in andere Containern sein, die kleiner als die volle Breite / Fenster sind. Die 'forceSize' Eigenschaft ist in diesen Situationen sehr nützlich, da es trotzdem den Slider auf die Breite oder Fensterelemente vergrößert durch Überlauf seines Elternelements.
</div>

<h5>Slide Einstellungen</h5>
Der Slides Einstellungen Abschnitt ermöglicht das Slideverhalten zu konfigurieren. Hier können Sie Slideanimation, sichtbare Slider Größe, Slidemischung und Wiederholung zu konfigurieren.
<figure class="img-polaroid"><img src="img/magento/slide-6.png" alt="" /></figure>

<h5>Einblenden Animationseinstellungen</h5>
Dieser Abschnitt enthält die Einstellungen für Fade-Animation. Fade-Animation kann auf Slideumschaltung aktiviert werden.
<figure class="img-polaroid"><img src="img/magento/slide-7.png" alt="" /></figure>
Wenn Sie wollen, können Sie vorherige Slides ausblenden und Fade-Animation Dauer in Millisekunden einstellen. 

<h5>Automatische Wiedergabe-Einstellungen</h5>
Autoplay -Funktion im Film Slider ermöglicht das Wiederholen innerhalb der Slides automatisch. Diese Konfigurationseinstellungen enthalten Optionen um Auto-Play-Verzögerung, Richtung und Pause mit Maus-Cursor auf Hover zu konfigurieren.
<figure class="img-polaroid"><img src="img/magento/slide-8.png" alt="" /></figure>

<h5>Bedienelemente Einstellungen</h5>
Slider-Steuerelemente sind Navigationstasten , mit denen Sie die Slides wechseln. Im Film Slider gibt es mehrere Arten von Navigationstasten : prev / next Pfeile, Paginierungs Tasten. Aktivierte Navigation mit der Tastatur erlaubt Ihnen die Slides mit der Tastatur zu wechseln. Außerdem können Sie die Taste aktivieren, die erlaubt den Slider auf den Vollbildmodus zu wechseln.
<figure class="img-polaroid"><img src="img/magento/slide-9.png" alt="" /></figure>

<h5>Responsive Einstellungen</h5>
Der Abschnitt Responsive Einstellungen konfiguriert Slider Verhalten auf mobilen Geräten. Hier können Sie Bildschirmbreite Stützpunkte (klein, mittel, groß) definieren. Außerdem können Sie Touch Swipe-Verhalten ermöglichen, Benutzerwechsel zwischen den Slides mit Swipe-Gesten.
<figure class="img-polaroid"><img src="img/magento/slide-10.png" alt="" /></figure>

<h5>Beschriftungseinstellungen</h5>
Bildtext-Funktion erlaubt es, Text zu jedem Slide hinzuzufügen. In diesem Abschnitt können Sie Verblassenanimation der Beschriftung einschalten und seine Dauer festzulegen.
<figure class="img-polaroid"><img src="img/magento/slide-11.png" alt="" /></figure>

<h5>Ebenen Haupteinstellungen</h5>
Layer-Konfigurationseinstellungen enthalten das Slide-Schichten Verhalten. Jede Option hat eine kurze Beschreibung unter den Eingabefeldern.
<figure class="img-polaroid"><img src="img/magento/slide-12.png" alt="" /></figure>

<h4>Slides hinzufügen</h4>
Sie können neue Slides hinzufügen nur nach dem Speichern vom Slider. Klicken Sie auf den <strong>Save and Continue Edit</strong> -Knopf in der oberen rechten Ecke. Wenn der Schieber gespeichert wird, wechseln Sie zur <strong>Slider Items</strong> Registerkarte.
<figure class="img-polaroid"><img src="img/magento/slide-13.png" alt="" /></figure>
Klicken Sie auf <strong>Add Slider Item</strong> um einen neuen Slide hinzuzufügen. Mal sehen, welche Slide Konfigurationsmöglichkeiten zur Verfügung stehen.

<h5>Slide Information</h5>
Hier können Sie den Slidetitel eingeben und den Status festlegen (aktiviert / deaktiviert).
<figure class="img-polaroid"><img src="img/magento/slide-14.png" alt="" /></figure>

<h5>Slide Bilder</h5>
In diesem Abschnitt können Sie Bilder zu den Slides hinzufügen. Klicken Sie auf den Insert image Knopf um die Bild-Bibliothek zu öffnen, wo Sie vorhandene Bilder auswählen können.
<figure class="img-polaroid"><img src="img/magento/slide-15.png" alt="" /></figure>
Sie können auch Bilder von Ihrem Computer hochladen.
<figure class="img-polaroid"><img src="img/magento/slide-16.png" alt="" /></figure>
Unter dem Bildfeld können Sie Ihre Slide-Vorschau sehen. Sie können selbst die Vorschau Größe einstellen. Wir haben den nächsten Abschnitt der Sliderkonfiguration in den separaten Abschnitt übertragen, da sie vollständig mit den Slideschichten verbunden ist. 

<h4>Arbeiten mit Ebenen</h4>
FilmSlider ist ein mehrschichtiger slider. Dies bedeutet, dass Ihr mehrere unabhängige Schichten zu Ihrem Slider hinzufügen können. Die Schichten können zum Slider Konfigurationsbildschirm der Slides, wie oben beschrieben, hinzugefügt werden. Dieser Bildschirm enthält mehrere Abschnitte der Layer Einstellungen.

<h5>Ebenenliste</h5>
Die Ebenenliste Sektion ermöglicht Slideschichten hinzuzufügen. Sie können Bild und Textebenen hinzuzufügen. Verwenden Sie entsprechende Tasten um Schichten hinzuzufügen.
<figure class="img-polaroid"><img src="img/magento/slide-17.png" alt="" /></figure>
Mit einem Klick auf <strong>Add layer image</strong> werden Sie eine Bildbibliothek sehen, aus welcher Sie vorhandene Bilder wählen können oder laden Sie Bilder von Ihrem Computer hoch. Durch klicken von <strong>Add layer text</strong> , wird eine neue Textebene hinzugefügt und die Ebeneneinstellungen werden zu der neuen bestimmten Schicht zugeordnet.
<figure class="img-polaroid"><img src="img/magento/slide-18.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/slide-19.png" alt="" /></figure>

<h5>EbenenText-Einstellungen</h5>
Mit der <strong>Ebenen Text-Einstellungen</strong> Sektion können Sie Ebenentext, Schicht Größe, Farben, Schriftart Styling etc. festlegen.
<figure class="img-polaroid"><img src="img/magento/slide-20.png" alt="" /></figure>
Im <strong>Layer text/html</strong> Feld ,können Sie Ihre Layer-Inhalt sowohl als Text und HTML-Format eingeben. 

<h5>Textebene Positionseinstellungen</h5>
In diesem Bereich können Sie Textebene Position definieren.
<figure class="img-polaroid"><img src="img/magento/slide-21.png" alt="" /></figure>

<h5>Ebenen Animationseinstellungen</h5>
In diesem Bereich können Sie Layer-Animation definieren. Sie können ihre Position auf dem Slide , Übergang, Offsets, Verzögerung, Dauer usw. eingestellen
<figure class="img-polaroid"><img src="img/magento/slide-22.png" alt="" /></figure>
Wenn Sie mehrere Layer hinzufügen,werden Konfigurationseinstellungen (Position und Animation) die Einstellungen für die ausgewählte Ebene anzeigen.
<figure class="img-polaroid"><img src="img/magento/slide-23.png" alt="" /></figure>

<h4>Adding slider to page</h4>
To add slider to your page please use Magento widgets. In the main admin panel menu click <strong>Content -> Pages</strong> item.
<figure class="img-polaroid"><img src="img/magento/slide-24.png" alt="" /></figure>
Select the page you want to add slider to and click <strong>Edit</strong>.
<figure class="img-polaroid"><img src="img/magento/slide-25.png" alt="" /></figure>
At the page editing screen switch to <strong>Content</strong> section and click <strong>Insert Widget</strong> button.
<figure class="img-polaroid"><img src="img/magento/slide-27.png" alt="" /></figure>
In the appeared window select widget type <strong>Template Monster FilmSlider</strong>, select the slider you want to insert and click <strong>Insert Widget</strong> button. 
<figure class="img-polaroid"><img src="img/magento/slide-28.png" alt="" /></figure>
When you are done adding the widget click <strong>Save Page</strong> button and switch to store frontend to see the result.