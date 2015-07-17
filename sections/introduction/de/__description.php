<h2 class="item1">Einführung</h2>
<p class="intro">
    Vielen Dank, dass Sie die Vorlage von Magento gekauft haben. Dieses Dokument besteht aus einigen Teilen und stellt Ihnen nicht nur den ganzen Erstellungsprozess bei Null sondern auch Magento Shopverwaltung vor. Wir haben alles gemacht, um diese Anleitung verständlich und     einfach in der Handhabung zu machen. 
</p>

<h3>Was ist denn Magento Commerce?</h3>
<p>Magento ist eine multifunktionale Plattform für den Internethandel mit dem offenen Quellcode. Sie bietet flexible Möglichkeiten und die ganze Kontrolle über Aussehen, Inhalt, Funktionen der Online-Shops an. Das intuitive Control Panel von Magento gewährleistet wunderbare Möglichkeiten für Marketingmaßnahmen, Suchmaschinen und Katalogverwaltung, damit die Webseite den einzigartigen Business Prozessen jedes Shops entspricht. Magento wurde völlig skalierbar gestaltet und es wird mittels Varien unterstützt, deshalb bietet Magento eine gute Lösung für den Internethandel an. <a href="http://www.magentocommerce.com/download" target="_blank">Ausführlich</a></p>

<h3>Was ist eine Magento Vorlage?</h3>
<p>Magento Vorlage ist fertiges Design für Ihren Online-Shop, der auf der Basis von Magento erstellt werden kann. Sie können leicht das Aussehen Ihres Online-Shops ändern, indem Sie nur neue Vorlage installieren. Alle Vorlagen von Magento enthalten alle notwendigen Quelldateien, die Sie nach Ihren Wünschen bearbeiten und hinzufügen können.</p>

<article id="file_structure">
    <h4>Struktur der Dateien</h4>

    Das Archiv der Vorlage, das Sie heruntergeladen haben, besteht aus einigen Ordnern. Also, schauen wir mal, was sie enthalten:

    <ul class="files_structure">
        <li class="folder"><i class="fa fa-folder-open"></i><b>documentation</b>
            <small class="muted"> - enthält die Dokumentationsdateien.</small>
            <ul>
                <li class="file"><i class="fa fa-file"></i> documentation.html<small class="muted"> - Hauptdokumentationsdatei. Sie lesen sie jetzt :)</small></li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i><b>screenshots</b>
            <small class="muted"> - enthält das Bildschirmfoto der Vorlage. Es ist nicht für die Webseite.</small>
        </li>
        <li class="folder"><i class="fa fa-folder-open"></i><b>sources</b>
            <small class="muted"> - enthält die Quelldateien der Vorlage.</small>
            <ul>
                <li class="folder"><i class="fa fa-folder"></i> psd<small class="muted"> - Quelldateien für Adobe Photoshop (.psd)</small></li>
                <li class="folder"><i class="fa fa-folder"></i> demo<small class="muted"> - enthält zusätzliche Seiten und benutzerdefinierte Blöcke, die zur Vorlage gehören.</small></li>
                <li class="folder"><i class="fa fa-folder-open"></i> sample_data<small class="muted"> - enthält die Demo-Daten für Magento Vorlage.</small>
                    <ul>
                        <li class="folder"><i class="fa fa-folder"></i> media<small class="muted"> - enthält Dateien und Ordner, die in den Stammordner der benutzten Magento Installation hochgeladen werden müssen.</small></li>
                        <li class="file"><i class="fa fa-file"></i> dump.sql.gz<small class="muted"> -  Sicherheitskopie der Datenbank. Sie enthält die Demo-Daten der Vorlage. </small></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i> <b>theme###</b><small class="muted"> - enthält die Dateien und Ordner der Magento Vorlage, die in den Stammordner der benutzten Magento Installation hochgeladen werden müssen.</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>fullpackage.zip</b><small class="muted"> - hier gibt es das komplette Magento Installationspaket mit  Dateien von Engine, Theme und Beispielinhalte.</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>unzip.php</b><small class="muted"> - Datei zum Entpacken von Dateien aus fullpackage.zip, wenn man die auf dem Hosting Server hochladet.</small></li>
        <li class="file"><i class="fa fa-file"></i> fonts_info.txt<small class="muted"> - enthält Links, mittels deren nicht Standardschriften hochgeladen werden können, die in der Vorlage benutzt werden.</small></li>
        <li class="file"><i class="fa fa-file"></i> info.txt<small class="muted"> - enthält die Anleitungen zum Entpacken der Quelldateien.</small></li>
    </ul>
</article>
<article id="validation">
    <h3>Validation</h3>
    <div class="alert alert-warning">
        <span>Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we have to break some rules.</span>
    </div>
</article>
<article id="prepare">
    <h3>Vorbereitung</h3>

    <p>Bebor Sie den Online-Shop von Magento installieren, sollen Sie alles fertig machen. Es wird empfohlen, die folgenden vorbereitenden Schritte auszuführen:</p>

    <h4>Software</h4>

    <p>Um mit der Magento Vorlage vollständig zu arbeiten, laden Sie alle notwendigen Erweiterungen herunter. Die Liste der notwendigen Software befindet sich auf der Vorschauseite der Vorlage. <br />
    Anforderungen an verschiedene Vorlagen können sich unterscheiden, deswegen nennen wir die wichtigsten:</p>
    <ol>
        <li>Zuerst brauchen Sie die richtigen Anwendungen, um passwortgeschütztes Archiv sources_#########.zip zu entpacken. Sie können WinZip 9+ (Windows) und Stuffit Expander 10+ (Mac)nutzen.</li>
        <li>Möglicherweise müssen Sie auch Adobe Photoshop Programm haben. Es wird benutzt, um die Quelldateien .PSD zu bearbeiten und kann nötig sein, wenn Sie das grafischen Design und Bilder der Vorlage ändern möchten.</li>
        <li>Um die Quellcode der Vorlagendateien zu bearbeiten, sollen Sie den Code-Editor wie Adobe Dreamweaver, Notepad++, Sublime Text usw. nutzen.</li>
        <li>Um die Dateien auf den Hosting-Server hochzuladen, brauchen Sie  FTP Manager wie Total Commander, FileZilla, CuteFTP usw.</li>
    </ol>
    <h4>Hosting</h4>
    <p>Magento Commerce ist PHP/MySQL Anwendung, deswegen sollen Sie den Hosting-Server vorbereiten.</p>
    <p>Wenn Sie einen aktiven Server haben, sollen Sie ihn dann prüfen, ob er <a href="http://magento.com/resources/system-requirements" target="_blank"> Magento Anforderungen entspricht </a> und den Online-Shop von Magento nutzen kann.</p>
    <p>Auch kann man Magento auf den Computer mittels des lokalen Servers installieren. Um den lokalen Hosting-Server zu erstellen, sollen Sie die Software wie <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> usw. nutzen. Jede von ihnen wird wie ein Programm installiert und von Magento unterstützt. </p>
    <p>Sie können die folgenden Tutorials nutzen, um den lokalen Server einzustellen:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">Wie installiert man die Web-Entwicklungsumgebung AppServ</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">Wie installiert man die Web-Entwicklungsumgebung WAMP</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">Wie installiert man die Web-Entwicklungsumgebung XAMP</a></li>
    </ul>
</article>