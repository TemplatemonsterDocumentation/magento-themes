		
<h3>Örnek veri aktarımı</h3>
<p>Magento şablon paketi package dump.sql veya dump.gz şeklinde bir örnek veri dosyası içerir. Bu dosya, şablonunuzdaki <b>/sources/sample_data</b> klasörünün altında bulunur. Buradaki örnek veriyi yüklediğinizde, siteniz tıpkı bizim örnek şablonumuzdaki gibi gözükür.</p>
<p class="alert alert-danger"><span>Eğer sitenizde zaten kayıtlı veriler varsa, <b>dump.sql.gz</b> yi içe aktarmayın. Çünkü <b>dump.sql.gz</b> yi içe aktarırsanız (import) mağazanızdaki tüm ürünler silinir. Eğer örnek veri yüklemek istemiyorsanız, Magento'yu kurarken boş bir veritabanı kullanın. Bunun için, örnek veri yükleme adımını geçin. </span></p>	
<p>Eğer dump dosyasını kurmak istiyorsanız, aşağıdaki adımları takip edin:</p>
<ol>
	<li>PhpMyAdmin e giriş yapın ve Öagento Commerce için kullanacağınız veritabanını seçin (Daha önceki adımlarda tarafınızdan kurulmuştur).</li>
	<li>Şimdi <b>"İçe aktar"</b> a basın ve <b>"Ara"</b> ya tıklayın.</li>
	<li>Şablonunuzdaki <i>"/sources/sample_data"</i> klasörünü bulun ve <b>dump.sql.gz</b> dosyasını seçin.</li>
	<li>Ardından <b>"GİT"</b> e tıklayın. İçe aktarma işlemi bir kaç dakika sürebilir.</li>
</ol>
<p>Magento Commerce için kullanacağınız veritabanını seçin. <b>"İÇE AKTAR"</b> ı seçin. Ardından <b>"Ara"</b> ya tıklayın.</p>
<figure class="img-polaroid"><img src="img/magento/import-dump1.png" alt="" /></figure>
<p>Şablonunuzdaki <b>"/sources/sample_data"</b> klasörünü bulun ve <b>dump.sql.gz</b> dosyasını seçin.</p>
<figure class="img-polaroid"><img src="img/magento/import-dump2.png" alt="" /></figure>
<p><b>"GİT"</b> e tıklayın.</p>
<figure class="img-polaroid"><img src="img/magento/import-dump3.png" alt="" /></figure>