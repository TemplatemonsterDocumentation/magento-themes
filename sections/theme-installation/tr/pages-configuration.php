<h3>Sayfa ayarlarý</h3>
<p>Þablonunuzun demomuzdaki gibi görünmesi için maðaza sayfalarýný özel olarak ayarlamanýz gerekir. Tüm dosyalarý kaynak koduyla birlikte saðlamaktayýz. Bunlarý aþaðýdaki adýmlarla, Magento yönetici panelinize eklemeniz gerekmektedir. Ayar tablosu, þablon önizleme sayfasýndaki <strong>Teknik detaylar details</strong> sayfasýnda yer almaktadýr. Rehber dosyasý þu sayfaya baðlantýlýdýr:</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <strong>Dokümantasyon</strong>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>En çok ana þablo sayfasý etkilenecektir. Genel olarak þu ögeleri içerir: bannerlar, slider(kaydýraç), galleri vs.</p>
<div class="alert alert-warning"><span>WYSIWYG editörünü kapatmanýzý öneririz. Bunun için, yönetici sayfasýnýn üstündeki menüden <strong>Maðazalar &gt; Ayarlar</strong> kýsmýna girin. Ardýndan "<strong>Ýçerik Yöneticisi</strong>" bölümüne geçin ve <strong>WYSIWYG Seçenekleri</strong> penceresinden "<strong>WYSIWYG Editörü Aç</strong>" seçeneðini "<strong>Tamamen Kapatýldý</strong>" olarak deðiþtirin.</span></br>
<figure class="img-polaroid"><img src="img/magento/page-settings-1.jpg" alt="" /></figure></div>
<p class="alert alert-warning"><span>Sayfa kodlarýnýzda deðiþiklik yapmýþsanýz ve bu deðiþiklikleri etkilemeden bizim kodlarýmýzý eklemek istiyorsanýz, profesyonel teknisyenlerle iletiþime geçmenizi veya herhangi bir deðiþiklik yapmadan önce mutlaka yedek almanýzý öneririz.</span></p>
<ol class="index-list">
	<li>Üst menüden <strong>Ýçerik > Sayfalar</strong> kýsmýna girin. Tüm maðaza sayfalarý burada yer alýr. <strong>Anasayfa</strong>, <strong>Hakkýmýzda</strong> ve <strong>Müþteri Hizmetleri</strong> zaten eklenmiþ durumdadýr. Bunlarý tekrar eklemenize gerek yok. Sadece HTML ve XML sayfalarýný güncellemeniz yeterli olacaktýr. Ýçeriðine eriþmek istediðiniz sayfayý açýn.<figure class="img-polaroid"><img src="img/magento/page-settings-2.jpg" alt="" /></figure></li>
	<li>Sayfayý açýp <strong>Ýçerik</strong> sekmesine girin. Burada sayfanýn HTML kodlarý yer alýr. HTML kodunu uygun bir kaynak dosyasýndan alabilirsiniz. Þablon öngösterim sayanýzdaki "Þablon Ayarlarý" kýsmýndan kaynak dosya listesini görüntüleyebilirsiniz. Kaynak dosyadan kodu kopyalayýn ve <strong>içerik</strong> alanýna yapýþtýrýn.<figure class="img-polaroid"><img src="img/magento/page-settings-3.jpg" alt="" /></figure></li>
	<li>HTML kod ile iþiniz bittiðinde <strong>"Tasarým"</strong> sekmesine basýn. Burada XML kodlar yer alýr. XML kod sayesinde sayfanýza Magento sabit kutucuklarý ve bileþenleri ekleyebilirsiniz. XML kodu da týpký HTML gibi kopyalanmalýdýr. XML kodu "<strong>Layout Update XML</strong>" (XML Tasarýmýný Güncelle) alanýna kopyalayýn.<figure class="img-polaroid"><img src="img/magento/page-settings-4.jpg" alt="" /></figure></li>
	<li>Uygun olan "<strong>Tasarým</strong>" ý seçmeyi unutmayýn.</li>
	<li>Yeni bir sayfa eklemek için sað üst köþeden <strong>"Yeni Sayfa Ekle"</strong> düðmesine basýn.</li>
</ol>

<!-- <p>In case you have any difficulties, please check the detailed tutorial on <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">How to configure pages manually</a>.</p> -->		