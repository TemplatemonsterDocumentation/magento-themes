<h3>Film Slider</h3>
<p>TemplateMonster FilmSlider, bir zarif ve profesyonel JQuery eklentisi olan ‘Slider Pro’ uygulamasıdır. Mağazanızın ana sayfasına çoklu katmanlara sahip olan bir slider(kaydıraç) eklemenizi sağlar. Zengin düzenleme seçenekleri ve kullanıcı arayüzüyle kaydıraçınızı hızlı ve kolay şekilde düzenleyebilirsiniz.</p>
<p>Ana menüde ‘TemplateMonster’ adında yeni bir menü göreceksiniz. <br>FilmSlider modülü üzerinde çalışmaya başlamak için ‘Template Monster -> Sliders’ menüsüne tıklayın.</p>
<figure class="img-polaroid"><img src="img/magento/slide-1.png" alt="" /></figure>
<p>Burada açıp/kapatabileceğiniz, silip düzenleyebileceğiniz tüm sliderların listesini görebilirsiniz.</p>
<figure class="img-polaroid"><img src="img/magento/slide-2.png" alt="" /></figure>
<p>Yeni bir slider eklemek için, sağ üst köşedeki  ‘Add New Slider’ düğmesine basınız. <br>
Kullanılabilir tüm kaydıraç ayarlarını görebilmek için, slider düzenleme ekranındaki ‘General Options’ (Genel Ayarlar) bölümüne giriniz. ‘Slider Items’ bölümünden, sliderınıza kaydıraçlar ekleyebilirsiniz.</p>
<figure class="img-polaroid"><img src="img/magento/slide-3.png" alt="" /></figure>
<p>Bakalım hangi slider seçenekleri mevcut. Gördüğünüz gibi, seçenekler bir kaç parçaya ayrılmış durumda. Bunun sebebi, size daha kolay kullanım sağlayabilmek.</p>

<h4>Genel Seçenekler</h4>
<h5>Ana Ayarlar</h5>
<p>Bu bölümden slider başlığı koyabilir, mağaza görünümü seçebilir sliderı açıp/kapatabilir ve enini boyunu ayarlayabilirsiniz. Her seçenek, Slider Pro JQuery eklentisine atıfta bulunur. Tüm özelliklerin açıklamasını <a target='_blank' href="https://github.com/bqworks/slider-pro/blob/master/docs/api.md#1-properties">resmi Slider Pro kılavuzu</a> adresinde bulabilirsiniz. Bazı jQuery eklenti özellikleri, FilmSlider düzenlemelerinde yer almayabilir. Onları ilerki sürümlerde ekleyeceğiz.</p>
<figure class="img-polaroid"><img src="img/magento/slide-4.png" alt="" /></figure>
Slider ebatlarına (en ve boy); 900 (piksel) gibi sabit değer veya yüzdelik değer (100% gibi) atanabilir.
<div class="alert alert-warning">
	Dikkat: kaydıraç başlığı, mağaza görünümü ve durum gereklidir. Kaydıraçınızı, bu değerleri girmeden kaydedemezsiniz.
</div>

<h5>Görsel Ayarları</h5>
<p>Görsel bölümünden, kaydıraç görseli için gerekli olan ayarları yapabilirsiniz. Her seçeneğin kısa bir açıklaması bulunmaktadır. Bazılarını biraz daha detaylı inceleyelim.</p>
<figure class="img-polaroid"><img src="img/magento/slide-5.png" alt="" /></figure>
<h6>aspectRatio</h6>
Kaydıraçın en ve boy oranlarını ayarlar. Eğer -1’den farklı bir değer girilirse, belirlenmiş oranı korumak için kaydıraçın uzunluğu geçersiz kılınır.
<h6>imageScaleMode</h6>
Kaydıraçın ana görseli (arkaplan olarak eklenen görseller) için ölçü modunu ayarlar. 'Cover' seçeneği, görseli ölçülendirip keser ve böylece kaydıraçın içine tam olarak sığmasını sağlar. 'Contain' seçeneği, görselin kaydıraçın içinde tam olarak gösterilmesini sağlar. 'Exact' seçeneği, görsel boyutunu kaydıraç boyutuyla eşleştirir. 'None' seçeneği ise, görseli orijinal boyutunda bırakır.
<h6>forceSize</h6>
Kaydıraçın tam genişlikte veya tüm pencerenin içine yayılmış olarak boyutlandırılıp boyutlandırılmayacağını belirler.
<div class="alert alert-warning">
	Not: Kaydıraçı tam genişlik veya tam pencerede göstermek için genişlik ve/veya uzunluk değeri 100% olarak düzenlenebilir. Fakat bazen kaydıraç tam genişlik/pencereden daha küçük bir kutunun içinde yer alabilir. Bu tür durumlarda 'forceSize' özelliği oldukça kullanışlıdır. Çünkü kaydıraçı temel ögelerinden taşırarak, yine de tam genişlik veya pencere boyutunda büyütür.
</div>

<h5>Kaydıraç ayarları</h5>
Kaydıraç ayarları bölümü, kaydıraçların davranışlarını belirler. Buradan kaydıraç animasyonlarını, görünen kaydıraç boyutunu, kaydıraç karıştırma ve tekrarlama (loop,döngü) ayarlarını yapabilirsiniz.
<figure class="img-polaroid"><img src="img/magento/slide-6.png" alt="" /></figure>

<h5>Solan animasyon ayarları</h5>
Bu bölümde solan (fade) animasyon ayarları yer alır. Bu özellik, tek dokunuşla açılabilir.
<figure class="img-polaroid"><img src="img/magento/slide-7.png" alt="" /></figure>
Bir önceki kaydıraçın solarak kaybolmasını isteyip istemediğinizi ve solma süresini milisaniye olarak ayarlayabilirsiniz. 

<h5>Otomatik oynatma ayarları</h5>
Film Slider’da yer alan otomatik oynatma özelliğiyle, kaydıraçlar arası döngü sağlayabilirsiniz. Bu düzenlemede; otomatik oynatma arasındaki süre, fareyle üzerine gelince yön verme ve duraklatma özellikleri  ayarlanır. 
<figure class="img-polaroid"><img src="img/magento/slide-8.png" alt="" /></figure>

<h5>Kontrol ayarları</h5>
Slider kontrol düğmeleri, slidelar arasında geçiş yapabilmenizi sağlayan gezinme düğmeleridir. FilmSlider’da bir kaç değişik düğme bulunur: geri/ileri okları, sayfalama düğmeleri. Klavye yönergelerini aktif ettiğinizde, kaydıraçlar arasında klavye ile dolaşılabilir. Ayrıca, sliderı tam ekran moduna getirmeye yarayan düğmeyi de etkinleştirebilirsiniz.
<figure class="img-polaroid"><img src="img/magento/slide-9.png" alt="" /></figure>

<h5>Esneklik ayarları</h5>
Esneklik ayarları, sliderın mobil aygıtlardaki davranışını belirler. Buradan ekranın kırılma noktalarını (küçük, orta, büyük) ayarlayabilirsiniz. Ayrıca, kullanıcının sliderlar arası geçişinin sağlanması için ekrana dokunma özelliğini de aktifleştirebilirsiniz.
<figure class="img-polaroid"><img src="img/magento/slide-10.png" alt="" /></figure>

<h5>Altyazı Ayarları</h5>
Altyazı özelliğiyle, her slide’a yazı ekleyebilirsiniz. Bu bölümden, altyazı solma animasyonunu açabilir ve süresini ayarlayabilirsiniz.

<figure class="img-polaroid"><img src="img/magento/slide-11.png" alt="" /></figure>

<h5>Katman ana ayarları</h5>
Katman ayarları, slide katmanlarının davranışlarını belirler. Her seçeneğin altında kısa bir açıklama bulunmaktadır.
<figure class="img-polaroid"><img src="img/magento/slide-12.png" alt="" /></figure>

<h4>Slide Eklemek</h4>
Yeni slide’ı sadece kaydıraçı kaydettikten sonra ekleyebilirsiniz. Sağ üst köşedeki ‘Save and Continue Edit’ (Kaydet ve Düzenlemeye Devam Et) düğmesine basın. Kaydıraç kaydedildiğinde, ‘Slider Items’ (Kaydıraç Ögeleri) sekmesini açın.
<figure class="img-polaroid"><img src="img/magento/slide-13.png" alt="" /></figure>
Yeni slide eklemek için ‘Add Slider Item’ (Kaydıraç Ögesi Ekle) yazısına tıklayın. Şimdi, slide düzenleme seçeneklerine bakalım.

<h5>Slide Bilgisi</h5>
Buradan, slide başlığını ve açık/kapalı durumunu düzenleyebilirsiniz.
<figure class="img-polaroid"><img src="img/magento/slide-14.png" alt="" /></figure>

<h5>Slide Görselleri</h5>
Bu bölümden slide görselleri ekleyebilirsiniz. Görsel kütüphanesini açmak için ‘Insert Image’ (Görsel Gir) düğmesine bastığınızda, kullanabileceğiniz tüm görseller karşınıza çıkar.
<figure class="img-polaroid"><img src="img/magento/slide-15.png" alt="" /></figure>
İsterseniz bilgisayarınızdan da görsel yükleyebilirsiniz.
<figure class="img-polaroid"><img src="img/magento/slide-16.png" alt="" /></figure>
Görsel alanının altında slide’ınızın önizlemesini görebilirsiniz. Bu alanı istediğiniz gibi düzenleyebilirsiniz. Slide katmanlarıyla ilgili detaylı düzenlemeler yapabilmeniz için, bir sonraki düzenleme bölümününü ayrı bir yere koyduk.

<h4>Katmanlarla çalışmak</h4>
FilmSlider çok-katmanlı bir kaydıraçtır. Yani, slide’ınıza istediğiniz kadar bağımsız katman ekleyebilirsiniz. Katmanlar, yukarıdaki ekranda slide ayarları bölümünde anlatıldığı şekilde eklenir. Bu ekran çeşitli katman ayarlarını içermektedir.

<h5>Katman listesi</h5>
Katman listesinden, slide’ınıza katmanlar ekleyebilirsiniz. Hem görsel katman hem de yazılı katman eklemeniz mümkün. Bunun için ilgili düğmelere basınız.
<figure class="img-polaroid"><img src="img/magento/slide-17.png" alt="" /></figure>
‘Add layer image’ (Katman görseli ekle) yazısına tıklayarak, katmanınıza ekleyebileceğiniz tüm görsellerin yer aldığı kütüphaneyi açabilir veya bilgisayarınızdan bir görsel ekleyebilirsiniz. ‘Add layer text’ (Katman yazısı ekle) kısmına tıklayıp yazı ekleyebilirsiniz. Böylece yeni katmanınızı istediğiniz şekilde düzenlemiş olursunuz.
<figure class="img-polaroid"><img src="img/magento/slide-18.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/slide-19.png" alt="" /></figure>

<h5>Katman yazı ayarları</h5>
Bu alandan katman yazısı girebilir; katmanın boyutunu, rengini, yazının yazı stilini vs. ayarlayabilirsiniz.
<figure class="img-polaroid"><img src="img/magento/slide-20.png" alt="" /></figure>
‘Layer text/html’ (Katman yazı/html) alanına, katman içeriğini isterseniz yazı formatında isterseniz de html formatında ekleyebilirsiniz. 

<h5>Katman yazı konumu ayarları</h5>
Bu bölümden katman yazısının konumunu ayarlayabilirsiniz.
<figure class="img-polaroid"><img src="img/magento/slide-21.png" alt="" /></figure>

<h5>Katman animasyon ayarları</h5>
Bu bölümden katman animasyonunu seçebilirsiniz. Slide içindeki konumunu, geçişini, kenar uzaklığını, gecikme süresini, devam süresini vs. ayarlayabilirsiniz.
<figure class="img-polaroid"><img src="img/magento/slide-22.png" alt="" /></figure>
Bir kaç katman eklediğinizde, alt kısımdaki ayarlar (konum ve animasyon) seçtiğiniz katman için gösterilir.
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