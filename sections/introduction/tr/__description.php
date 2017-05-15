<h2 class="item1">Giriþ</h2>
<p>
    Magento'yu indirdiðiniz için teþekkür ederiz. Bu dokümantasyon Magento'nun sýfýrdan kurulup kullanýlmasý aþamalarýný anlatmaktadýr.</p>

<article id="whatismagento">
    <h3>Magento E-Maðaza nedir?</h3>
    <p>Magento açýk kaynak teknolojisiyle kurulmuþ zengin özellikleri olan bir E-Maðaza platformudur. Maðaza içerikleri ve iþlevsellikleri için esneklik saðlar. Magento'nun yönetici arayüzü güçlü pazarlama, arama optimizasyonu ve katalog yönetimi araçlarýyla, kurumlara tüm ihtiyaçlarýný karþýlayabilen bir site saðlar. Tamamen ölçeklenebilen bir þekilde tasarlanmýþtýr ve Varien destek aðýyla saðlamlaþtýrýlmýþtýr. Magento þirketlere üst düzey E-Maðaza çözümü sunmaktadýr. <a href="http://www.magentocommerce.com/download" target="_blank">Daha fazlasýný oku..</a></p>
</article>

<article id="whatismagentotheme">
    <h3>Magento temasý nedir?</h3>
    <p>Magento altyapýsýna dayanan, maðazanýz için tam bir tasarýmdýr. Magento maðazanýzýn görüntüsünü bir kaç kolay adýmla yeni bir tema kurarak deðiþtirebilirsiniz. Magento temasýnýn kaynak dosyalarýný dilediðiniz gibi düzenleyip, geniþletebilirsiniz.</p>
</article>

<article id="file_structure">
    <h4>Magento dosya yapýsý</h4>

    <p>Ýndirdiðiniz tema paketi pek çok klasörden oluþur. Bakalým içlerinde neler var:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> size rehberlik edecek dokümantasyonlar içerir.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            þu anda okumakta olduðunuz ana rehber dosyasý.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> temaya ait görseller içerir.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                <dd> temanýn kaynak kodlarýný içerir.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>psd</strong></dt>
                        <dd>
                            temanýn Adobe Photoshop kaynak dosyalarýný içerir (.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            temanýn içinde yer alan örnek sayfa ve kutucuklarý içerir.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                        <dd>
                           Magento temasý için örnek veri dosyasýný içerir.
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>pub</strong></dt>
                                <dd>
                                    Magento kurulumu sýrasýnda ana dizine yüklenmesi gereken dosya ve klasörleri içerir.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                    veritabaný yedekleme dosyasý. Temanýn örnek verilerini içerir.
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>theme###</strong></dt>
                <dd> Magento kurulumu sýrasýnda ana dizine yüklenmesi gereken tema dosyalarýný ve dizinlerini içerir.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> dosyalar, tema ve örnke veriyle (örnek görseller) tam Magento kurulum paketini içerir.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> sunucuya yüklendiðinde, fullpackage.zip dosyasýnýn içeriðini açmak için kullanýlýr.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> þablon için yazý türlerinin indirilebileceði adresleri içerir.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> kaynak dosyalarýn nasýl açýlacaðýný anlatan rehberi içerir.</dd>
            </dl>            
        </li>
    </ul>
</article>
<article id="validation">
    <h3>Onaylama</h3>
    <div class="alert alert-warning">
        <span>Þablonlarýmýzda kullanýlan HTML biçimlemesi ve CSS stilleri anlamsal olarak doðru ve geçerlidir. Yine de bazý W3C hatalarý ile karþýlaþabilirsiniz. Kodu 100% W3C onaylý olarak hazýrlamak, modern site teknolojilerinin kullanýmýný kötü þekilde etkileyebilmektedir. Bizim amacýmýz, yüksek kalitede þablonlar kullanarak tatmin edici bir kullanýcý deneyimi saðlamaktýr. Bu yüzden bazý kurallarý gözardý etmekten çekinmemekteyiz.</span>
    </div>
</article>
<article id="prepare">
    <h3>Hazýrlýk</h3>

    <p>Magento maðazanýzý kurmadan önce tüm hazýrlýklarý yaptýðýnýza emin olunuz. Lütfen aþaðýdaki hazýrlýk aþamalarýný tamamlayýnýz:</p>

    <h4>Yazýlýmý düzenlemek</h4>

    <p>Magento þablonu üzerinde rahatça çalýþabilmek için, gerekli olan tüm uygulamalarý indirmenizi öneririz. Bu uygulamalarýn listesini þablonun öngösterim sayfasýnda bulabilirsiniz. </br> Farklý þablonlar için farklý uygulamalar gerekebilir fakat çoðu için liste þu þekildedir:</p>
    <ol class="index-list">
        <li>Öncelikle þifreyle korunmakta olan sources_#########.zip arþivini açmak için WinZip 9+ (Windows) ve Stuffit Expander 10+ (Mac) uygulamalarýna ihtiyacýnýz var. </li>
        <li>.PSD dosyalarýný, þablon tasarým görsellerini ve genel görselleri düzenlemek için Adobe Photoshop uygulamasýna ihtiyacýnýz var.</li>
        <li>Þablonun kaynak kod dosyalarýný düzenlemek için Adobe Dreamweaver, Notepad++, Sublime Text, vs. gibi bir kaynak düzenleyicisi gerekir.</li>
        <li>Dosyalarý sunucuya yüklemek için ise Total Commander, FileZilla, CuteFTP, vs. gibi bir dosya yöneticisi gerekir.</li>
    </ol>
    
    <h4>Hosting</h4>
    <p>Magento E-Maðaza PHP/MySQL tabanlý bir uygulama olduðu için servis saðlayýcýnýz bunu karþýlayabilmeli.</p>
    <p>Zaten bir hostinginiz varsa <a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements.html" target="_blank"> Magento gereksinimleri </a>ni karþýladýðýna ve Magento maðazasý için kullanýlabilir olduðuna emin olun.</p>
    <p>Aksi halde, Magento'yu bilgisayarýnýzdaki yerel sunucunuza da kurabilirsiniz. Yerel bir sunucu oluþturmak için <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> gibi bir uygulama kullanabilirsiniz. Bunlar da herhangi bir program gibi kolayca kurulabilir ve Magento'yu çalýþtýrabilir.</p>
    <p>Yerel bir sunucu kurmak için aþaðýdaki rehberleri inceleyebilirsiniz:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">AppServ nasýl kurulur</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">WAMP nasýl kurulur</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">XAMP nasýl kurulur</a></li>
    </ul>
</article>