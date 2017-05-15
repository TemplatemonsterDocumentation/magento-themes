<h2 class="item1">Introduction</h2>
<p>
    Dziekujemy za pobranie motywu Magento. Ta dokumentacja składa się z kilku części i obejmuje
    cały proces instalowania i konfigurowania motywu Magento od podstaw.
</p>

<article id="whatismagento">
    <h3>Czym jest Magento Commerce?</h3>
    <p>Magento to platforma bogata w funkcje eCommerce zbudowana w technologii open-source. Zapewnia elastyczność i możliwość kontroli nad wyglądem, zawartością i funkcjonalnością sklepu eCommerce. Intuicyjny interfejs administracyjny Magento dysponuje potężnym marketingiem, optymalizacją wyszukiwarki oraz narzędziami zarządzania katalogiem, aby dać handlowcom możliwość tworzenia witryn, które są dostosowane do ich indywidualnych potrzeb biznesowych. Zaprojektowany, aby być całkowicie skalowalnym i wspieranym przez sieć wsparcia Varien, Magento oferuje przedsiębiorstwom ostateczne rozwiązanie eCommerce. <a href="http://www.magentocommerce.com/download" target="_blank">Więcej informacji</a></p>
</article>

<article id="whatismagentotheme">
    <h3>Czym jest motyw Magento?</h3>
    <p>Motyw Magento jest kompletnym projektowaniem dla sklepu internetowego opartym na silnik Magento. Inaczej mówiąc, można z łatwością zmienić wygląd sklepu Magento poprzez zainstalowanie nowego motywu i wykonanie kilku prostych czynności. W całej swej prostocie motyw Magento jest zaopatrzony we wszystkie niezbędne pliki źródłowe, które można edytować i rozszerzać według własnych potrzeb .</p>
</article>

<article id="file_structure">
    <h4>Struktura plików Magento</h4>

    <p>Pakiet motywu, który został pobrany, składa się z kilku folderów. Sprawdźmy, co zawiera każdy folder:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>dokumentacja</strong></dt>
                <dd> zawiera pliki z dokumentacją.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            główny plik z dokumentacją, który czytasz w chwili obecnej.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>zrzuty ekranowe (screeny)</strong></dt>
                <dd> zawiera zrzuty ekranowe motywu. Nie dla produkowania.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>źródła</strong></dt>
                <dd> zawiera pliki źródłowe motywu.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>psd</strong></dt>
                        <dd>
                            zawiera pliki źródłowe motywu Adobe Photoshop (.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            zawiera dodatkowe strony i niestandardowe bloki przewidziane w motywie.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                        <dd>
                            zawiera pliki przykładowych danych motywu Magento.
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>pub</strong></dt>
                                <dd>
                                    zawiera pliki i katalogi, które powinny zostać przesłane do głównego katalogu instalacji Magento.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                    plik kopii zapasowej bazy danych. Zawiera przykładową treść motywu.
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
                <dd> zawiera pliki i katalogi motywu Magento, które powinny zostać przesłane do głównego katalogu instalacji Magento.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> zawiera kompletny pakiet instalacyjny Magento z plikami silnika, motywu i treści próbki (przykładowe obrazy).</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> plik używany do wyciągnięcia plików z fullpackage.zip kiedy przesłane do obsługującego serwera.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> zawiera łącza gdzie można pobrać niestandardowe czcionki szablonów.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> zawiera instrukcje dotyczące sposobu jak wyciągnąć pliki źródłowe.</dd>
            </dl>            
        </li>
    </ul>
</article>
<article id="validation">
    <h3>Sprawdzanie poprawności</h3>
    <div class="alert alert-warning">
        <span>Zarówno znacznik HTML i style CSS wykorzystywane w naszych szablonach są semantycznie poprawne i aktualne. Jednakże, wciąż mogą wystąpić niektóre błędy W3C. Dokonywanie kodu o 100% W3C aktualnym, eliminuje konieczność użycia takich nowoczesnych technologii strony internetowej jak funkcje CSS3 i znaczniki HTML5. Naszym celem jest zapewnienie użytkownika bogatym doświadczeniem z szablonami o wysokiej jakości, więc czasami musimy łamać pewne zasady.</span>
    </div>
</article>
<article id="prepare">
    <h3>Przygotowanie</h3>

    <p>Przed przystąpieniem do konfigurowania sklepu Magento, należy upewnić się w pełnym przygotowaniu. Należy wykonać następujące czynności przygotowawcze:</p>

    <h4>Oprogramowanie do edycji</h4>

    <p>Aby czuć się komfortowo podczas pracy z szablonem Magento, zalecamy pobieranie wszystkich wymaganych aplikacji. Można zobaczyć listę wymaganego oprogramowania na stronie podglądu szablonu. </br> Wymagania mogą się różnić dla różnych szablonów, w przypadku większości szablonów są one następujące:</p>
    <ol class="index-list">
        <li>Po pierwsze, należy użyć WinZip 9+ (Windows) i Stuffit Expander 10+ (Mac), aby rozpakować zabezpieczony hasłem archiwum sources_#########.zip. </li>
        <li>Aplikację Adobe Photoshop może być również potrzebna. Jest używana do edycji plików źródłowych PSD, a to jest konieczne, jeśli chcesz edytować grafiki i obrazy projektowania szablonu.</li>
        <li>Aby edytować pliki szablonów kodu źródłowego, potrzebny jest pewny edytor kodu tali jak Adobe Dreamweaver, Notepad++, Sublime Text, itp.</li>
        <li>Aby przesłać pliki do serwera obsługującego może być potrzebny FTP Manager taki jak Total Commander, FileZilla, CuteFTP itp.</li>
    </ol>
    
    <h4>Hosting</h4>
    <p>Ponieważ Magento Commerce to aplikacja bazująca się na PHP/MySQL, należy przygotować hostingowe środowisko do uruchamiania Magento.</p>
    <p>Jeśli masz hosting na żywo, należy upewnić się, że odpowiada wymaganiom Magento <a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements.html" target="_blank">  </a> i jest gotowy do wykorzystania w sklepie Magento.</p>
    <p>W przeciwnym wypadku, można uruchomić Magento lokalnie na komputerze, korzystając z serwera lokalnego. Aby utworzyć lokalny serwer hostingowy należy użyć z takich aplikacji localhost jak <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> itp. Każdy z nich można łatwo zainstalować jak każdy inny program i wykorzystać do uruchomienia Magento. </p>
    <p>Prosimy o sprawdzenie następujących tutorialów dotyczących sposobu skonfigurowania środowiska rozwoju lokalnego:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">Jak zainstalować AppServ środowisko rozwoju webu</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">Jak zainstalować WAMP środowisko rozwoju webu</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">Jak zainstalować XAMP środowisko rozwoju webu</a></li>
    </ul>
</article>