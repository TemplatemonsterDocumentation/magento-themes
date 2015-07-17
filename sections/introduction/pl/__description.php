<h2 class="item1">Wstęp</h2>
<p class="intro">
    Dziękujemy za zakup szablonu Magento. Dokumentacja ta składa się z kilku części i pokazuje cały proces konfigurowania i administrowania sklepu Magento od podstaw. Zrobiliśmy co w naszej mocy, aby ta instrukcja obsługi była przejrzysta i łatwa w użytkowaniu, jak tylko to możliwe.
</p>

<h3>Czym jest Magento Commerce?</h3>
<p>Magento to bogata platforma eCommerce zbudowana w technologii open-source. Zapewnia elastyczność i kontrolę nad wyglądem, zawartością i funkcjonalnością sklepu eCommerce. Intuicyjny interfejs administracji Magento dysponuje potężnym marketingiem, optymalizacją dla wyszukiwarek internetowych oraz narzędziami do zarządzania katalogiem, aby dać kupcom moc tworzenia witryn, które są dostosowane do ich indywidualnych potrzeb biznesowych. Zaprojektowany, aby być w pełni skalowalny i wspierany przez sieć wsparcia Varien, Magento oferuje przedsiębiorstwom najlepsze rozwiązanie e-commerce.<a href="http://www.magentocommerce.com/download" target="_blank"> Więcej informacji</a>.</p>

<h3>Czym jest motyw Magento?</h3>
<p>Motyw Magento jest kompletnym projektem sklepu internetowego w oparciu o silnik Magento. Innymi słowy, można łatwo zmienić wygląd sklepu Magento, instalując nowy motyw w kilku prostych krokach. Z całą prostotą, motyw Magento jest wyposażony we wszystkie niezbędne pliki źródłowe, które można edytować lub rozciągać w zależności od potrzeb.</p>

<article id="file_structure">
    <h4>Struktura plików</h4>

   Pakiet motywu, który został pobrany, składa się z kilku folderów. Zobaczmy, co każdy katalog zawiera:

    <ul class="files_structure">
        <li class="folder"><i class="fa fa-folder-open"></i><b>documentation</b>
            <small class="muted"> - zawiera pliki dokumentacji.</small>
            <ul>
                <li class="file"><i class="fa fa-file"></i> documentation.html<small class="muted"> - główny plik dokumentacji, który czytasz w tej chwili.</small></li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i><b>screenshots</b>
            <small class="muted"> - zawiera zrzuty ekranu motywu. Nie do celów produkcyjnych.</small>
        </li>
        <li class="folder"><i class="fa fa-folder-open"></i><b>sources</b>
            <small class="muted"> - zawiera pliki źródłowe motywu.</small>
            <ul>
                <li class="folder"><i class="fa fa-folder"></i> psd<small class="muted"> - zawiera pliki źródłowe Adobe Photoshop motywu(.psd).</small></li>
                <li class="folder"><i class="fa fa-folder"></i> demo<small class="muted"> - zawiera dodatkowe strony i niestandardowe bloki do motywu.</small></li>
                <li class="folder"><i class="fa fa-folder-open"></i> sample_data<small class="muted"> - zawiera przykładowe pliki danych motywu Magento.</small>
                    <ul>
                        <li class="folder"><i class="fa fa-folder"></i> media<small class="muted"> - zawiera pliki i katalogi, które powinny być przesłane do głównego katalogu Twojej instalacji Magento.</small></li>
                        <li class="file"><i class="fa fa-file"></i> dump.sql.gz<small class="muted"> -  plik kopii zapasowej bazy danych. Zawiera przykładowy motyw. </small></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i> <b>theme###</b><small class="muted"> - zawiera pliki i katalogi motywu Magento, które powinny być przesłane do głównego katalogu Twojej instalacji Magento.</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>fullpackage.zip</b><small class="muted"> -  zawiera kompletny pakiet instalacyjnjy Magento z plikami silnika, motywem oraz przykładową treścią (przykładowe obrazy).</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>unzip.php</b><small class="muted"> - plik używany do rozpakowania plików z fullpackage.zip, gdy zostanie przesłany do serwera hostingowego.</small></li>
        <li class="file"><i class="fa fa-file"></i> fonts_info.txt<small class="muted"> - zawiera linki, pod którymi można pobrać szablony niestandardowych czcionek.</small></li>
        <li class="file"><i class="fa fa-file"></i> info.txt<small class="muted"> - zawiera instrukcje, jak wyodrębnić pliki źródłowe.</small></li>
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
    <ol>
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