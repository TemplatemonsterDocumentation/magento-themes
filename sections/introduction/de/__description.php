<h2 class="item1">Einführung</h2>
<p>
    Vielen Dank , dass Sie das Magento Thema heruntergeladen haben. Diese Dokumentation besteht aus mehreren Teilen und umfasst den gesamten Prozess der Installation und Konfiguration vom Magento Thema.
</p>

<article id="whatismagento">
    <h3>Was ist Magento Commerce?</h3>
    <p>Magento ist eine funktionsreiche eCommerce-Plattform mit Open-Source-Technologie. Es bietet Flexibilität und Kontrolle über das Aussehen, Inhalt und Funktionalität des E-Commerce-Geschäft an.Magentos intuitive Administrationsoberfläche zeichnet sich durch leistungsstarkes Marketing, Suchmaschinen-Optimierung und Katalog-Management-Tools aus, um Händlern die Möglichkeit zu geben, Websites zu erstellen, die auf ihre individuellen Geschäftsanforderungen angepasst sind.Entwickelt um vollständig skalierbar zu sein und durch Variens Support-Netzwerk unterstützt zu werden, bietet Magento Unternehmen die ultimative eCommerce-Lösung. <a href="http://www.magentocommerce.com/download" target="_blank">Mehr Informationen</a></p>
</article>

<article id="whatismagentotheme">
    <h3>Was ist ein Magento Thema?</h3>
    <p>Magento Thema ist ein komplettes Design für Ihren Online-Shop auf Basis von Magento-Engine. Mit anderen Worten, können Sie einfach das Magento-Shop Aussehen ändern, indem Sie ein neues Thema in ein paar einfachen Schritten installieren.Mit all seiner Einfachheit ist ein Magento Thema mit allen notwendigen Quelldateien zur Verfügung gestellt, die Sie bearbeiten oder erweitern können, so wie Sie benötigen.</p>
</article>

<article id="file_structure">
    <h4>Magento-Dateistruktur</h4>

    <p>Das Thema Paket, das Sie heruntergeladen haben, besteht aus mehreren Ordnern. Mal sehen, was jeder Ordner enthält:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> enthält Dokumentationsdateien .</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            die Hauptdokumentation Datei, die Sie im Moment lesen.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> enthält die Themen Screenshots. Nicht für die Produktion.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                <dd> enthält die Themenquelldateien .</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>psd</strong></dt>
                        <dd>
                            enthält die Themen Adobe Photoshop-Quelldateien  (.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            enthält zusätzliche Seiten und benutzerdefinierte Blöcke, die mit dem Thema zur Verfügung gestellt werden.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                        <dd>
                            enthält Magento Thema Beispieldaten .
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>pub</strong></dt>
                                <dd>
                                    enthält Dateien und Verzeichnisse, die in das Root-Verzeichnis Ihrer Magento-Installation hochgeladen werden sollten.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                    die Datenbank-Backup-Datei. Enthält Beispielinhalt des Themas .
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>theme###</strong></dt>
                <dd> enthält Magento Thema Dateien und Verzeichnisse, die in das Root-Verzeichnis Ihrer Magento-Installation hochgeladen werden soll.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> enthält das komplette Magento-Installationspaket mit Engine-Dateien, Thema und Beispielinhalt (Beispielbilder ).</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> die Datei verwendet, um Dateien aus dem fullpackage.zip zu extrahieren, wenn es zum Hosting-Server hochgeladen wird.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> enthält die Links, wo die benutzerdefinierte Schriftarten der Vorlage heruntergeladen werden können.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> enthält Anweisungen, wie man Quelldateien extrahiert.</dd>
            </dl>            
        </li>
    </ul>
</article>
<article id="validation">
    <h3>Validation</h3>
    <div class="alert alert-warning">
        <span>HTML-Markup und CSS-Stile, die in unsere Vorlage verwendet werden, sind semantisch korrekt und gültig. Jedoch einige W3C Fehler können passieren. Einen 100% W3C gültigen Code zu erstellen, eliminiert die Nutzung der modernen Website-Technologien wie CSS3-Funktionen und HTML5-Markup. Unser Ziel ist es eine reiche Benutzererfahrung mit qualitativ hochwertigen Vorlagen zu liefern und manchmal müssen wir einige unserer Regeln brechen.</span>
    </div>
</article>
<article id="prepare">
    <h3>Vorbereitung</h3>

    <p>Bevor Sie fortfahren, Ihren Magento-Shop einzurichten, stellen Sie sicher, dass Sie voll und ganz vorbereitet sind. Bitte füllen Sie die folgenden Vorbereitungsschritte aus :</p>

    <h4>Bearbeitungs-Software</h4>

    <p>Um sich die Arbeit mit Magento Template leicht zu machen, empfehlen wir all die benötigten Anwendungen herunterzuladen. Sie können die Liste der erforderlichen Software auf der Vorlage Vorschau-Seite sehen.</br> Diese Anforderungen können sich für verschiedene Vorlagen unterscheiden , für die meisten Vorlagen sind es die folgenden:</p>
    <ol class="index-list">
        <li>Zuerst müssen Sie WinZip 9+ (Windows) und Stuffit Expander 10+ (Mac) verwenden, um den Passwort geschützten sources_#########.zip zu extrahieren. </li>
        <li>Sie können auch die Adobe Photoshop Anwendung benötigen. Es wird verwendet, um .PSD Quelldateien zu bearbeiten, und es ist notwendig, wenn Sie Template-Design Grafiken und Bilder bearbeiten möchten.</li>
        <li>Um Template-Quellcode-Dateien zu bearbeiten, benötigen Sie einen Code-Editor wie Adobe Dreamweaver, Notepad++, Sublime Text, etc.</li>
        <li>Zum Hochladen von Dateien auf den Hosting-Server können Sie einen FTP-Manager gebrauchen wie Total Commander, FileZilla, CuteFTP, etc.</li>
    </ol>
    
    <h4>Hosting</h4>
    <p>Da Magento Commerce eine PHP / MySQL-basierte Anwendung ist, müssen Sie eine Hosting-Umgebung vorbereiten, um Magento zu führen.</p>
    <p>Wenn Sie Live-Hosting haben, stellen Sie sicher, dass es den<a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements.html" target="_blank"> Magento Anforderungen </a> pastt und dass es bereit ist einen Magento Shop zu verwenden.</p>
    <p>Ansonsten können Sie Magento lokal auf Ihrem Computer führen, mit einem lokalen Server .Um einen lokalen Hosting-Server zu erstellen, verwenden Sie bitte die localhost -Anwendungen , wie beispielsweise  <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> etc. Jeder davon kann leicht als jedes andere Programm installiert und eingesetzt werden ,um mit Magento zu arbeiten. </p>
    <p>Bitte schauen Sie sich die folgenden Anleitungen an, wie man die lokale Entwicklungsumgebung konfiguriert:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">Wie man AppServ Web-Entwicklungsumgebung installiert</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">Wie man WAMP Web-Entwicklungsumgebung installiert</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">Wie man XAMP Web-Entwicklungsumgebung installiert</a></li>
    </ul>
</article>