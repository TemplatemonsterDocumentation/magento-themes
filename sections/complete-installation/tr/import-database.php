		
<h3>Örnek veri aktarımı</h3>
<p>Magento şablon paketi package dump.sql veya dump.gz şeklinde bir örnek veri dosyası içerir. Bu dosya, şablonunuzdaki <strong>/sources/sample_data</strong> klasörünün altında bulunur. Buradaki örnek veriyi yüklediğinizde, siteniz tıpkı bizim örnek şablonumuzdaki gibi gözükür.</p>
<p class="alert alert-danger"><span>Eğer sitenizde zaten kayıtlı veriler varsa, <strong>dump.sql.gz</strong> yi içe aktarmayın. Çünkü <strong>dump.sql.gz</strong> yi içe aktarırsanız (import) mağazanızdaki tüm ürünler silinir. Eğer örnek veri yüklemek istemiyorsanız, Magento'yu kurarken boş bir veritabanı kullanın. Bunun için, örnek veri yükleme adımını geçin. </span></p>	
<p>Eğer dump dosyasını kurmak istiyorsanız, aşağıdaki adımları takip edin:</p>
<ol class="index-list">
	<li>PhpMyAdmin e giriş yapın ve Öagento Commerce için kullanacağınız veritabanını seçin (Daha önceki adımlarda tarafınızdan kurulmuştur).<figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Şimdi <strong>"İçe aktar"</strong> a basın ve <strong>"Ara"</strong> ya tıklayın.<figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Şablonunuzdaki <strong>"/sources/sample_data"</strong> klasörünü bulun ve <strong>dump.sql.gz</strong> dosyasını seçin. Ardından <strong>"GİT"</strong> e tıklayın. <figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> İçe aktarma işlemi bir kaç dakika sürebilir.</li> 
</ol>