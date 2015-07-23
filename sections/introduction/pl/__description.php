<h2 class="item1">Wstęp</h2>
<p>
    Dziękujemy za zakup szablonu Magento. Dokumentacja ta składa się z kilku części i pokazuje cały proces konfigurowania i administrowania sklepu Magento od podstaw. Zrobiliśmy co w naszej mocy, aby ta instrukcja obsługi była przejrzysta i łatwa w użytkowaniu, jak tylko to możliwe.
</p>

<article id="whatismagento">
    <h3>Czym jest Magento Commerce?</h3>
    <p>Magento to bogata platforma eCommerce zbudowana w technologii open-source. Zapewnia elastyczność i kontrolę nad wyglądem, zawartością i funkcjonalnością sklepu eCommerce. Intuicyjny interfejs administracji Magento dysponuje potężnym marketingiem, optymalizacją dla wyszukiwarek internetowych oraz narzędziami do zarządzania katalogiem, aby dać kupcom moc tworzenia witryn, które są dostosowane do ich indywidualnych potrzeb biznesowych. Zaprojektowany, aby być w pełni skalowalny i wspierany przez sieć wsparcia Varien, Magento oferuje przedsiębiorstwom najlepsze rozwiązanie e-commerce.<a href="http://www.magentocommerce.com/download" target="_blank"> Więcej informacji</a>.</p>
</article>

<article id="whatismagentotheme">
    <h3>Czym jest motyw Magento?</h3>
    <p>Motyw Magento jest kompletnym projektem sklepu internetowego w oparciu o silnik Magento. Innymi słowy, można łatwo zmienić wygląd sklepu Magento, instalując nowy motyw w kilku prostych krokach. Z całą prostotą, motyw Magento jest wyposażony we wszystkie niezbędne pliki źródłowe, które można edytować lub rozciągać w zależności od potrzeb.</p>
</article>

<article id="file_structure">
    <h4>Struktura plików</h4>

   <p>Pakiet motywu, który został pobrany, składa się z kilku folderów. Zobaczmy, co każdy katalog zawiera:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> zawiera pliki dokumentacji.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            główny plik dokumentacji, który czytasz w tej chwili.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> zawiera zrzuty ekranu motywu. Nie do celów produkcyjnych.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                <dd> zawiera pliki źródłowe motywu.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>psd</strong></dt>
                        <dd>
                            zawiera pliki źródłowe Adobe Photoshop motywu(.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            zawiera dodatkowe strony i niestandardowe bloki do motywu.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                        <dd>
                            zawiera przykładowe pliki danych motywu Magento.
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>media</strong></dt>
                                <dd>
                                    zawiera pliki i katalogi, które powinny być przesłane do głównego katalogu Twojej instalacji Magento.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                    plik kopii zapasowej bazy danych. Zawiera przykładowy motyw.
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
                <dd> zawiera pliki i katalogi motywu Magento, które powinny być przesłane do głównego katalogu Twojej instalacji Magento.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> zawiera kompletny pakiet instalacyjnjy Magento z plikami silnika, motywem oraz przykładową treścią (przykładowe obrazy).</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> plik używany do rozpakowania plików z fullpackage.zip, gdy zostanie przesłany do serwera hostingowego.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> zawiera linki, pod którymi można pobrać szablony niestandardowych czcionek.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> zawiera instrukcje, jak wyodrębnić pliki źródłowe.</dd>
            </dl>            
        </li>
    </ul>
</article>
<article id="validation">
    <h3>Validation</h3>
    <div class="alert alert-warning">
        <span>Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we have to break some rules.</span>
    </div>
</article>
<article id="prepare">
    <h3>Przygotowania</h3>

    <p>Przed przystąpieniem do konfigurowania sklepu Magento, proszę upewnij się, że jesteś w pełni przygotowany. Proszę wykonaj następujące czynności przygotowawcze:</p>

    <h4>Edycja oprogramowania</h4>

    <p> Aby czuć się komfortowo pracując z szablonem Magento, zalecamy pobranie wszystkich niezbędnych aplikacji. Możesz zobaczyć listę wymaganego oprogramowania na stronie podglądu szablonu.Wymagania mogą się różnić dla poszczególnych szablonów, dla większości szablonów są one następujące:</p>
    <ol class="index-list">
       <li>Po pierwsze, trzeba użyć programu WinZip 9+ (Windows) oraz Stuffit Expander 10+ (Mac), aby wyodrębnić chronione hasłem archiwum sources_#########.zip.</li>
        <li>Może być również konieczne zastosowanie programu Adobe Photoshop. Jest on używany do edycji plików źródłowych PSD, co jest konieczne, jeśli chcesz edytować szablon projektowania grafiki i obrazów.</li>
        <li>Aby edytować szablon plików z kodem źródłowym, niezbędny jest edytor kodów, np: Adobe Dreamweaver, Notepad ++, Sublime Text, itp.</li>
        <li>Aby przesłać pliki do serwera, może być potrzebny: FTP Manager, Total Commander, FileZilla, CuteFTP, itp.</li>
    </ol>
    <h4>Hosting</h4>
    <p>Jako że Magento Commerce bazuje na PHP/MySQL, musisz przygotować środowisko hostingowe, aby używać Magento.</p>
    <p>Jeśli masz tzw. live hosting, upewnij się, że pasuje do <a href="http://magento.com/resources/system-requirements" target="_blank"> wymagań Magento. </a> I jest gotowy do użycia dla sklepu Magento.</p>
    <p>W innym przypadku, możesz używać Magento lokalnie na komputerze za pomocą serwera lokalnego. Aby utworzyć lokalny serwer hostingowy, użyj aplikacji localhost, takich jak: <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong>, itp. Każdą z tych aplikacji można łatwo zainstalować jak każdy inny program i używać do uruchomienia Magento. </p>
    <p>Sprawdź poniższe tutoriale jak skonfigurować lokalne środowisko programowania:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">Jak zainstalować środowisko AppServ</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">Jak zainstalować środowisko WAMP</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">Jak zainstalować środowisko XAMP</a></li>
    </ul>
</article>