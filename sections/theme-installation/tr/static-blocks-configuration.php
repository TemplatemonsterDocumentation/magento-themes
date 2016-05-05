<h3>Sabit kutucuk ayarlarý</h3>
<p>Sayfa düzenlemesini bitirdikten sonra sabit kutucuklarý da ayarlamalýsýnýz. Ýþlem hemen hemen ayný: kaynak dosyadan kopyalayacaðýnýz kodlarý Magento yönetici panelindeki gerekli yere yapýþtýracaksýnýz. Sabit kutucuklar için de kullanacaðýnýz tablo benzer olacak.</p>
<p class="alert alert-warning"><span>Block ID may vary in your Magento installation. You can get correct block id from Content-> Blocks section in Admin panel.</span></p>
<ol class="index-list"> 
	<li>Üst menüden <strong>Ýçerik > Kutucuklar</strong> kýsmýna girin. </li>
	<li>Sað üst köþeden <strong>"Yeni Kutu Ekle"</strong> düðmesine basýn. 
		<figure class="img-polaroid"><img src="img/magento/blocks-1.jpg" alt="" /></figure>
	</li>
	<li>Kutunun ismini ve kimliðini girin. Kutu detaylarýný þablon ayar sayfasýndan edinebilirsiniz (Sayfa Düzeleme kýsmýna bakýnýz).</li>
	<li>Open the block source file and copy the HTML code into the content area.</li>
</ol>

<figure class="img-polaroid"><img src="img/magento/blocks-2.jpg" alt="" /></figure>

<p class="alert alert-info"><span>NOT: bazý þablonlar sabit kutucuk içermez, bu yüzden tablo boþ olabilir. </span></p>
<p class="alert alert-info"><span>Sabit kutucuk kodunun bulunduðu kaynak kodlar, þablon paketindeki "<strong>sources\demo\static_blocks\</strong>" klasöründe bulunmaktadýr. </span></p>

<h4>Sabit içerikli kutucuk nasýl gösterilir?</h4>

<ol class="index-list"> 
	<li>Üst menüden <strong>Ýçerik > Bileþenler</strong> bölümüne girin.</li>
	<li>Sað üst köþeden <strong>"Bileþen Ekle"</strong> düðmesine basýn.
		<figure class="img-polaroid"><img src="img/magento/widget-1.jpg" alt="" /></figure>
	</li>
	<li>Türü <strong>CMS Static Block</strong> olarak belirleyin ve bileþenin uygulanacaðý temayý seçin. Ardýndan <strong>Devam</strong> düðmesine týklayýn.
		<figure class="img-polaroid"><img src="img/magento/widget-2.jpg" alt="" /></figure>
	</li>
	<li>Bir sonraki sayfada <strong>Bileþen Baþlýðý</strong> alanýný doldurun. Böylece bileþen, yönetici panelinizde bu isimle yer alýr. <strong>Maðaza Görünümüne Ata</strong> kýsmýndan, bileþenin görüntüleneceði maðaza görünümünü seçin. <strong>Tasarým Güncelleme</strong> kutucuðundan <strong>Tasarým Güncellemesi Ekle</strong> düðmesine týklayýn. <strong>Göster</strong> alanýndan, bileþenin gösterileceði sayfalarý seçin. Seçeceðiniz sayfalara göre farklý alanlarý da doldurmanýz gerekebilir.
		<figure class="img-polaroid"><img src="img/magento/widget-3.jpg" alt="" /></figure>
	</li>
	<li>Sol taraftan <strong>Bileþen Seçenekleri</strong> sekmesine týklayýp, ilgili sabit kutucuðu seçin. Deðiþiklikleri kaydetmeyi unutmayýn. 
		<figure class="img-polaroid"><img src="img/magento/widget-4.jpg" alt="" /></figure>
	</li>
</ol>
<p>Maðaza sayfalarýný ve kutucuklarý düzenledikten sonra, maðazanýz artýk kullanýma hazýr hale gelir.</p>