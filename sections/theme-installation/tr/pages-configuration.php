<h3>Sayfa ayarları</h3>
<p>Şablonunuzun demomuzdaki görünmesini istiyorsanız, mağaza sayfalarınızı özelleştirmeniz gerekir. Sayfa kaynak kodlarıyla birlikte tüm dosyaları sağlamaktayız. Aşağıdaki bilgileri kullanarak Magento yönetici panelinizden tablo ayarlamasıyla, bu işlemi yapabilirsiniz. Tablo ayarlaması, şablonun görüntülenme sayfasındaki <b>Teknik detaylar</b> alanında bulunmaktadır. Dosyada şu sayfaya bağlantı bulunmaktadır:</p>
<ul class="files_structure">
	<li class="folder"><i class="fa fa-folder-open"></i> <b>Documentation</b>
		<ul>
			<li class="file"><i class="fa fa-file"></i> documentation.html</li>
		</ul>
	</li>
</ul>			
<p>Bu ana şablon sayfası etkin olacaktır. İçeriğinde: bannerlar, kayan yazılar, galeri, vs. bulunmaktadır.</p>
<div class="alert alert-warning"><span>WYSIWYG editörü pasifleştirmenizi öneririz. Bunun için, yönetici panelindeki üst menüden  <strong>System &gt; Configuration</strong> (Sistem/Ayarlar) bölümüne girin. Buradan "<strong>İçerik Yöneticisi</strong>" ni seçin ve <strong>WYSIWYG Ayarları</strong> penceresinden "<strong>WYSIWYG Editörü Etkinleştir</strong>" seçeneğini "<strong>Tamamen Pasifleştir </strong>" olarak değiştirin.</span></br>
<figure class="img-polaroid"><img src="img/magento/pages_setting1.png" alt="" /></figure></div>
<p class="alert alert-warning"><span>Sayfa kodlarınızı zaten değiştirdiyseniz ve herhangi bir değişiklik olmadan kodlarınızı eklemek istiyorsanız, profesyonel teknisyenlerle iletişime geçip yapılacak olan değişikliklerden önce bir yedekleme yapmanızı tavsiye ederiz.</span></p>
<ol class="index-list">
	<li>Üst menüden <b>CMS > Pages</b> (CMS/Sayfalar) kısmına girin. Burada tüm mağaza sayfalarınız bulunmaktadır. <b>Anasayfa</b>, <b>Hakkımızda</b> ve <b>Müşteri Hizmetleri</b> zaten bulunmakta, o yüzden bunları eklemenize gerek yok. Sadece HTML ve XML içeriklerini güncellemelisiniz. İçeriğe erişebilmek için herhangi birini açın.</li>
	<li>Sayfayı çın <b>İçerik</b> sekmesine tıklayın. Burada sayfanın HTML kodları vardır. Sayfanın HTML kodunu uygun bir kaynak dosyadan alabilirsiniz. Şablon görüntüleme sayfanızın, "Şablon Ayarları" kısmından, kaynak dosya listesini görebilirsiniz. Kodu kaynak dosyadan kopyalayıp <b>içerik</b> alanına yapıştırın.</li>
	<li>HTML kodlamayla işiniz bittiğinde, tekrar <b>"Tasarım"</b> görüntülemeyi etkinleştirin. Burada XML kod bulunur. XML kod, sayfanıza sabit bloklar ve bileşenler eklemenizi sağlar. XML kod da tıpkı HTML'de olduğu gibi kaynak koddan kopyalanmalıdır. XML kodunu "<b>XML Görüntüsünü Güncelle</b>" alanına kopyalayın.</li>
	<li>Geçerli olan "<b>Görünüm</b>" seçeneğini seçmeyi unutmayın.</li>
	<li>Yeni bir sayfa eklemek isterseniz, sağ üst köşede bulunan <b>"Yeni Sayfa Ekle"</b> düğmesine basın.</li>
</ol>
<figure class="img-polaroid"><img src="img/magento/pages_setting2.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting3.png" alt="" /></figure>
<figure class="img-polaroid"><img src="img/magento/pages_setting4.png" alt="" /></figure>

<p>Herhangi aşamada zorluk yaşarsanız, <a target="_blank" href="/help/magento-how-to-install-sample-content-pages-manually.html">Sayfaları manuel olarak ayarlamak</a> adresindeki detaylı anlatımı inceleyiniz.</p>		