<h3>�rnek verinin i�e aktar�m�</h3>
<p>Magento �ablonundaki �rnek veri dosyalar� (<strong>dump.sql</strong> veya <strong>dump.gz</strong>) �eklindedir. Dosya <strong>/sources/sample_data</strong> klas�r�nde bulunur. �rnek veriyle kurulum yapt���n�zda, siteniz demodaki gibi g�z�k�r.</p>
<p class="alert alert-danger"><span>Sitenizde zaten bir i�erik varsa <strong>dump.sql.gz</strong> dosyas�n� i�e aktarmay�n. ��nk� <strong>dump.sql.gz</strong>yi i�e aktard���n�zda, ma�azan�za girmi� oldu�unuz t�m �r�nler silinir. �rnek ver kurmak istemiyorsan�z, Magento'yu kurarken temiz bir veritaban� kullan�n. �rnek veri kurulum ad�m�n� atlay�n.</span></p>	
<p>�rnek veri dosyas�n� y�klemek i�in a�a��daki ad�mlar� izleyin:</p>
<ol class="index-list">
	<li>PhpMyAdmin'e giri� yap�n ve Magento E-Ma�aza'y� kuraca��n�z veritaban�n� se�in. (Daha �nceki ad�mlarda veritaban�n� kurmu�tunuz). <figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Ard�ndan <strong>"��e Akatar"</strong> sekmesine girin ve <strong>"Ara�t�r"</strong> d��mesine bas�n. <figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>�ablonunuzun <strong>"/sources/sample_data"</strong> klas�r�nden <strong>dump.sql.gz.</strong> dosyas�n� se�in. Son olarak <strong>"G�T"</strong>e t�klay�n. <figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> ��lem bir ka� dakika s�rebilir.</li>
</ol>