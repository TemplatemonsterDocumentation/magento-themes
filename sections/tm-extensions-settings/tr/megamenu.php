<h3>MegaMenu</h3>
<p class="indent">Bu modül; standart menüyü geliþmiþ menü ile deðiþtirir. Bu sayede altkategorileri 2ye kadar gömme þeklinde görüntüleyebilir, açýlýr menüye sabit kutucuklar ekleyebilir bunlara etiket verebilir ve ürünleri gösterebilirsiniz.</p>
<strong>MegaMenu</strong> þablonun içinde zaten yer almaktadýr fakat yine de açýp kapatmak için <strong>Maðazalar > Ayarlar > TemplateMonster > Mega Menu</strong> bölümüne girebilirsiniz.
<figure class="img-polaroid"><img src="img/magento/megamenu-1.jpg" alt="" /></figure>

<ol class="index-list">
	<li>Tüm açýlýr menüleri, kategori düzenleme sayfasýndaki <strong>Products > Categories -> Megamenu</strong> bölümünden düzenleyebilirsiniz.
		<a class="pretty_image" href="img/magento/Megamenu.png"><figure class="img-polaroid"><img src="img/magento/Megamenu.png" alt="" /></figure></a>
			
	</li>
	<li>
		Açýlýr menüye sabit kutucuk eklemek için öncelikle <strong>CMS > Static Blocks</strong> kýsmýndan kutuyu oluþturmalýsýnýz. 
		<figure class="img-polaroid"><img src="img/magento/megamenu-static.jpg" alt="" /></figure>
	</li>
	<li>
		Bu modül herhangi bir ürün kategorisine etiket eklemenizi saðlar. Bunun için kategori menü sayfasýndaki <strong>Products > Categories -> Megamenu</strong> bölümüne girmelisiniz. Burada 'custom class' (özel sýnýf) seçeneði bulunur. Bununla, etiketiniz için özel stil sýnýflarý oluþturabilirsiniz.
		<figure class="img-polaroid"><img src="img/magento/megamenu-badge.jpg" alt="" /></figure>
	</li>		
	<li>
		Mega menüdeki sütun sayýsýný seçebilirsiniz. Bunun için sütun görünümünü açmalý ve kaç adet sütun istediðinizi belirtmelisiniz.
		<figure class="img-polaroid"><img src="img/magento/megamenu-column.jpg" alt="" /></figure>
	</li>		
	<li>
		Ürünleri göstermek için <strong>Turn on products show</strong> kýsmýný etkinleþtirin ve listeden bir kaç ürün seçin.
		<figure class="img-polaroid"><img src="img/magento/megamenu-product.jpg" alt="" /></figure>
	</li>		
	<li>
		Alt kategori <strong>MegaMenu</strong> bölümünde, alt kategori görseli eklenebilir. 
		<figure class="img-polaroid"><img src="img/magento/megamenu-image.jpg" alt="" /></figure>
		<p>Yine de görselin gözükmesi için, <strong>MegaMenu</strong> bölümündeki kategori alanýndan <strong>Turn on images for subcategories</strong> seçeneðini etkinleþtirmeniz gerekebilir.</p>
		<figure class="img-polaroid"><img src="img/magento/megamenu-image-1.jpg" alt="" /></figure>
	</li>
	<li>
		Megamenu tasarýmlarý <strong>Custom template for megamenu item</strong> seçeneðiyle düzenlenebilir. Bu þablonlarýn kaynak dosyalarý: <strong>app\design\frontend\TemplateMonster\themeXXX\TemplateMonster_Megamenu\templates\html\topmenu\</strong> bölümünde yer almaktadýr.
		<figure class="img-polaroid"><img src="img/magento/megamenu-template.jpg" alt="" /></figure>
	</li>
</ol>