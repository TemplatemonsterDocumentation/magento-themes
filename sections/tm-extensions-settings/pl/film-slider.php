<h3>Film Slider</h3>
<p>Moduł FilmSlider od TemplateMonster jest implementacją reprezentacyjnego oraz profesjonalnego plugin’u jQuery ‘Slider Pro’. Umożliwia dodawanie slajdera z wieloma warstwami na główną stronę sklepu. Bogata kolekcja możliwości konfiguracji slajdera oraz interfejsu użytkownika będą pomocą w szybkim oraz łatwym skonfigurowaniu slajdera.</p>
<p>W głównym menu nawigacyjnym pojawi się nowa opcja menu <strong>TemplateMonster</strong>. <br>Aby rozpocząć pracę z modułem FilmSlider, kliknij element menu <strong>Template Monster -> Sliders</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/slide-1.png" alt="" /></figure>
<p>Tutaj można zobaczyć listę dostępnych slajderów, gdzie można włączyć/wyłączyć, usunąć lub edytować slajdery.</p>
<figure class="img-polaroid"><img src="img/magento/slide-2.png" alt="" /></figure>
<p>Aby dodać nowy slajder, należy kliknąć przycisk ‘Dodaj Nowy Slajder’, znajdujący się w prawym górnym rogu. <br>
Na ekranie konfiguracji slajdera, w sekcji ‘Ogólne opcje’, można zobaczyć wszystkie dostępne ustawienia slajderów. Sekcja ‘Elementy Slajdera’ umożliwia dodawanie slajdów do slajdera.</p>
<figure class="img-polaroid"><img src="img/magento/slide-3.png" alt="" /></figure>
<p>Sprawdźmy, jakie są dostępne opcje slajdera. Jak można zobaczyć, opcje są podzielone na kilka części, aby interfejs konfiguracyjny był bardziej łatwy dla użytkownika.</p>

<h4>Ogólne Opcje</h4>
<h5>Ustawienia Główne</h5>
<p>Ta sekcja umożliwia ustawienie nazwy slajdera, wybieranie widoku sklepu, włączenie/wyłączenie slajdera, ustawienie jego szerokości i wysokości. Każda z opcji odnosi się do właściwości plugin’u Slider Pro jQuery. Można znaleźć bardziej szczegółowe opisy poszczególnych właściwości tutaj: <a target='_blank' href="https://github.com/bqworks/slider-pro/blob/master/docs/api.md#1-properties">official Slider Pro documentation</a>. Niektóre właściwości plugin’u jQuery mogą być nieobecne w konfiguracji FilmSlider, dodamy je w przyszłych wydaniach.</p>
<figure class="img-polaroid"><img src="img/magento/slide-4.png" alt="" /></figure>
Wymiary slajdera (szerokość oraz wysokość) mogą być ustawione na stałą wartość, jak np. 900 (wskazując 900 pikseli) lub wartość procentową, jak np. ‘100%’.
<div class="alert alert-warning">
	Uwaga: nazwa slajdów, widok i status sklepu są wymagane, nie można zapisać slajd bez ustalenia tych wartości.
</div>

<h5>Ustawienia Grafiki</h5>
<p>W sekcji grafiki można dopasować ustawienia konfiguracji obrazu slajdera. Każda z opcji ma krótki opis. Opiszemy niektóre z nich bardziej szczegółowo.</p>
<figure class="img-polaroid"><img src="img/magento/slide-5.png" alt="" /></figure>
<h6>aspectRatio</h6>
Ustawia proporcje obrazu slajdów. Jeśli ustawione na wartość inną niż -1, wysokość slajdów zostanie zastąpiona w celu zachowania podanej proporcji.
<h6>imageScaleMode</h6>
Umożliwia ustawienie trybu skali głównych obrazów slajdów (obrazy dodane jako tło). ‘okładka’ będzie skalować i przycinać obraz tak, że wypełni cały slajd. ‘zawierać’ zachowa cały obraz widoczny wewnątrz slajdu. ‘dokładnie’ dopasuje rozmiar obrazu do rozmiaru slajdu. ‘żadne’ pozostawi obraz w jego oryginalnym rozmiarze.
<h6>forceSize</h6>
Wskazuje, czy wielkość slajdera będzie zmuszona do pełnej szerokości lub całego okna.
<div class="alert alert-warning">
	Uwaga: Jest możliwość, aby slajder był o pełnej szerokości lub na całe okno, nadając mu szerokość i/lub wysokość ‘100%’. Zdarza się jednak, że suwak może być w środku innych kontenerów, będących o mniejszym rozmiarze niż pełna szerokość/okno. Właściwość 'forceSize' jest przydatna w takich sytuacjach, ponieważ nadal będzie powiększać slajder, aby wypełnić szerokość lub okno, poprzez wypełnianie go elementami nadrzędnymi.
</div>

<h5>Ustawienia slajdów</h5>
Sekcja ustawienia slajdów umożliwia konfigurowanie zachowania slajdów. Tutaj można skonfigurować animację slajdów, widoczny rozmiar slajdu, losowe wybieranie i pętlę slajdów.
<figure class="img-polaroid"><img src="img/magento/slide-6.png" alt="" /></figure>

<h5>Ustawienia blaknięcia animacji</h5>
Ta sekcja zawiera ustawienia blaknięcia animacji. Blaknięcie animacji może być włączone na przełączniku slajdów.
<figure class="img-polaroid"><img src="img/magento/slide-7.png" alt="" /></figure>
Istnieje możliwość ustawienia, według życzenia, aby poprzedni slajd zanikał oraz czas trwania blaknięcia animacji w milisekundach. 

<h5>Ustawienia autoodtwarzania</h5>
Funkcja autoodtwarzania w FilmSlider umożliwia automatyczną pętlę slajdów. Te ustawienia konfiguracyjne zawierają opcje konfigurowania opóźnienia automatycznego odtwarzania, kierunku i wstrzymania kursorem myszki przy najechaniu.
<figure class="img-polaroid"><img src="img/magento/slide-8.png" alt="" /></figure>

<h5>Ustawienia sterowania</h5>
Sterowanie slajdera to są przyciski nawigacyjne, które pozwalają przełączać slajdy. FilmSlider zawiera kilka typów kontrolek nawigacyjnych: strzałki poprzedni/następny, przyciski paginacji. Włączona nawigacja za pomocą klawiatury umożliwia przełączanie pomiędzy slajdami za pomocą klawiatury. Można również włączyć przycisk, który przełącza slajder na tryb pełnoekranowy.
<figure class="img-polaroid"><img src="img/magento/slide-9.png" alt="" /></figure>

<h5>Ustawienia responsu</h5>
Sekcja ustawienia responsu konfiguruje zachowanie slajdera na urządzeniach mobilnych. Tutaj można zdefiniować punkty graniczne szerokości ekranu (małe, średnie, duże). Ponadto, można włączyć zachowanie dotykowego przesuniecia, aby użytkownik przełączał się pomiędzy slajdami za pomocą gestów przesuwania palcem.
<figure class="img-polaroid"><img src="img/magento/slide-10.png" alt="" /></figure>

<h5>Ustawienia napisów</h5>
Funkcja napisów umożliwia dodawanie tekstu do każdego slajdu. Ta sekcja pozwala na włączenie napisów animacji zanikania i ustawienie czasu jej trwania.
<figure class="img-polaroid"><img src="img/magento/slide-11.png" alt="" /></figure>

<h5>Główne ustawienia warstw</h5>
Ustawienia konfiguracyjne warstw zawierają zachowanie warstw slajdów. Każda opcja ma krótki opis w polach wprowadzenia.
<figure class="img-polaroid"><img src="img/magento/slide-12.png" alt="" /></figure>

<h4>Dodawanie Slajdów</h4>
Można dodawać nowe slajdy dopiero po uprzednim zapisaniu slajdera. Należy kliknąć przycisk ‘Zapisz i Kontynuuj Edytowanie’ w prawym górnym rogu. Gdy suwak zostanie zapisany, należy przejść do zakładki ‘Elementy Slajdera’.
<figure class="img-polaroid"><img src="img/magento/slide-13.png" alt="" /></figure>
Żeby dodać nowy slajd, należy nacisnąć na ‘Dodaj Element Slajdera’. Zobaczmy, jakie opcje konfiguracyjne slajdu są dostępne.

<h5>Informacja o slajdzie</h5>
Tutaj można wprowadzić tytuł slajdu i ustawić jego status (włączony/wyłączony).
<figure class="img-polaroid"><img src="img/magento/slide-14.png" alt="" /></figure>

<h5>Grafika slajdów</h5>
Ta sekcja umożliwia dodawanie obrazów do slajdu. Należy kliknąć przycisk Wstaw Obraz, by otworzyć Bibliotekę obrazów, w której można wybrać dostępne obrazy.
<figure class="img-polaroid"><img src="img/magento/slide-15.png" alt="" /></figure>
Można również przesłać obrazy z komputera.
<figure class="img-polaroid"><img src="img/magento/slide-16.png" alt="" /></figure>
Pod polem Obraz można zobaczyć podgląd slajdu. Można dowolnie ustawić rozmiar podglądu w odpowiadający Ci sposób. Przenieśliśmy następną sekcję konfiguracji slajdów do oddzielnej sekcji, ponieważ całkowicie odnosi się do warstw slajdów. 

<h4>Posługiwanie się warstwami</h4>
FilmSlider to wielowarstwowy slajder. To oznacza, że można dodać wiele niezależnych warstw do slajdu. Warstwy mogą być dodawane do slajdu na ekranie konfiguracji slajdów (opisanego powyżej). Ten ekran zawiera kilka sekcji ustawień warstw.

<h5>Wykaz warstw</h5>
Sekcja wykazu warstw umożliwia dodawanie warstw do slajdu. Można dodawać warstwy graficzne i warstwy tekstowe. W celu dodania warstwy, należy użyć odpowiednich przycisków.
<figure class="img-polaroid"><img src="img/magento/slide-17.png" alt="" /></figure>
Klikając na “Dodaj warstwę graficzną”, w tym miejscu pojawi się biblioteka obrazów, gdzie można wybrać spośród już dostępnych obrazów lub przesłać z komputera. Klikając na “Dodaj warstwę tekstową”, można zobaczyć, że nowa warstwa tekstowa została dodana, a także ustawienia warstwy zostały asocjowane z nową konkretną warstwą.
<figure class="img-polaroid"><img src="img/magento/slide-18.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/slide-19.png" alt="" /></figure>

<h5>Ustawienia warstwy tekstowej</h5>
Korzystając z sekcji ‘Ustawienia warstwy tekstowej’, można wprowadzać tekst warstwy, jej rozmiar, kolory, stylizację czcionek, itd.
<figure class="img-polaroid"><img src="img/magento/slide-20.png" alt="" /></figure>
W polu ‘Tekst/html warstwy’, można wprowadzić treść warstwy zarówno w formacie tekstowym lub html.

<h5>Ustawienia pozycji warstwy tekstowej</h5>
W tej sekcji można określić pozycję warstwy tekstowej.
<figure class="img-polaroid"><img src="img/magento/slide-21.png" alt="" /></figure>

<h5>Ustawienia animacji warstwy</h5>
Ta sekcja pozwala na zdefiniowanie animacji warstwy. Można ustawić pozycję na slajdzie, ustawić przejścia, offsety, opóźnienie, czas trwania, itp.
<figure class="img-polaroid"><img src="img/magento/slide-22.png" alt="" /></figure>
Po dodaniu kilku warstw, dolne ustawienia konfiguracyjne (pozycja i animacja) wyświetlą ustawienia dla wybranej warstwy.
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