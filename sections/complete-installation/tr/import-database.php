<h3>Örnek verinin içe aktarýmý</h3>
<p>Magento þablonundaki örnek veri dosyalarý (<strong>dump.sql</strong> veya <strong>dump.gz</strong>) þeklindedir. Dosya <strong>/sources/sample_data</strong> klasöründe bulunur. Örnek veriyle kurulum yaptýðýnýzda, siteniz demodaki gibi gözükür.</p>
<p class="alert alert-danger"><span>Sitenizde zaten bir içerik varsa <strong>dump.sql.gz</strong> dosyasýný içe aktarmayýn. Çünkü <strong>dump.sql.gz</strong>yi içe aktardýðýnýzda, maðazanýza girmiþ olduðunuz tüm ürünler silinir. Örnek ver kurmak istemiyorsanýz, Magento'yu kurarken temiz bir veritabaný kullanýn. Örnek veri kurulum adýmýný atlayýn.</span></p>	
<p>Örnek veri dosyasýný yüklemek için aþaðýdaki adýmlarý izleyin:</p>
<ol class="index-list">
	<li>PhpMyAdmin'e giriþ yapýn ve Magento E-Maðaza'yý kuracaðýnýz veritabanýný seçin. (Daha önceki adýmlarda veritabanýný kurmuþtunuz). <figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Ardýndan <strong>"Ýçe Akatar"</strong> sekmesine girin ve <strong>"Araþtýr"</strong> düðmesine basýn. <figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Þablonunuzun <strong>"/sources/sample_data"</strong> klasöründen <strong>dump.sql.gz.</strong> dosyasýný seçin. Son olarak <strong>"GÝT"</strong>e týklayýn. <figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> Ýþlem bir kaç dakika sürebilir.</li>
</ol>