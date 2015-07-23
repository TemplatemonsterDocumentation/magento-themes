<h2 class="item1">Tanıtım</h2>
<p>
    Magento şablonunu satın aldığınız için teşekkür ederiz. Bu dökümantasyonda, tüm kurulum ve Magento satış sisteminin yönetim süreçleri adım adım anlatılmaktadır. Her şeyi, mümkün olduğunca açık ve kolay anlaşılır şekilde anlatmaya çalıştık.
</p>

<article id="whatismagento">
    <h3>Magento Commerce nedir?</h3>
    <p>Magento, açık-kaynaklı teknolojiye sahip ve çok özellikli bir E-Ticaret platformudur. E-Ticaret mağazanızı esnek bir tasarım, içerik ve işlevsellikle kontrol edebilmenizi sağlar. Magento’nun yönetici arayüzü, özgün mesleki ihtiyaçlarınızı karışalamak amacıyle size etkili bir ticaret sistemi, arama motoru optimizasyonu ve katalog-yönetim araçları sunar. Tamamen ölçeklenebilir tasarımı ve Varien destek ağıyla Magento, şirketlere üst düzey bir e-Ticaret çözümü sunmaktadır. <a href="http://www.magentocommerce.com/download" target="_blank">Daha fazlası.</a></p>
</article>

<article id="whatismagentotheme">
    <h3>Magento teması nedir?</h3>
    <p>Magento teması, kendine özgü bir online mağaza tasarımı sunmaktadır. Dilerseniz Magento mağazanızın görünüşünü, bir kaç kolay adımla, yeni bir tema kurarak tamamen değiştirebilirsiniz. Magento temasında tüm gerekli kaynak kodları bulunmaktadır. Yani bu temada kolaylıkla, dilediğiniz şekilde düzenleme veya geliştirme yapabilirsiniz.</p>
</article>

<article id="file_structure">
    <h4>Dosya yapısı</h4>

    <p>İndirmiş olduğunuz tema dosyasında bir kaç klasör bulunmaktadır. İçlerinde neler olduğuna şöyle bir bakalım:</p>

    <ul class="files_structure">
        <li class="folder"><i class="fa fa-folder-open"></i><strong>documentation</strong>
            - dökümantasyon dosyalarını kapsar.
            <ul>
                <li class="file"><i class="fa fa-file"></i> <strong>documentation.html</strong> - şu anda okumakta olduğunuz ana dökümantasyon dosyası.</li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i><strong>screenshots</strong>
             - temaya ait olan görselleri içerir.
        </li>
        <li class="folder"><i class="fa fa-folder-open"></i><strong>sources</strong>
             - temanın kaynak dosyalarını içerir.
            <ul>
                <li class="folder"><i class="fa fa-folder"></i> <strong>psd</strong> - temanın (.psd) formatındaki Adobe Photoshop kaynak dosyalarını içerir.</li>
                <li class="folder"><i class="fa fa-folder"></i> <strong>demo</strong> - temayla gelen ek sayfaları ve örnek kutuları içerir.</li>
                <li class="folder"><i class="fa fa-folder-open"></i> <strong>sample_data</strong> - Magento temasının örnek veri dosyalarını içerir.
                    <ul>
                        <li class="folder"><i class="fa fa-folder"></i> <strong>media</strong> - Magento'yu kurduğunuz ana dizine yüklemeniz gereken dosya ve dizinleri içerir.</li>
                        <li class="file"><i class="fa fa-file"></i> <strong>dump.sql.gz</strong> -  veritabanı yedek dosyası. Tema için örnek içerik içerir. </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i> <strong>theme###</strong> - Magento'yu kurduğunuz ana dizine yüklemeniz gereken tema dosyaları ve dizinleri içerir.</li>
        <li class="file"><i class="fa fa-file"></i> <strong>fullpackage.zip</strong> - içermektedir Tam Magento kurulum paketi motor dosyaları ile, tema ve örnek içeriği (örnek fotoğraflar).</li>
        <li class="file"><i class="fa fa-file"></i> <strong>unzip.php</strong> - dosyaları ayıklayabilmek için kullanılan dosya fullpackage.zip hosting sunucusuna yüklendiği zaman.</li>
        <li class="file"><i class="fa fa-file"></i> <strong>fonts_info.txt</strong> - şablonun özel fontlarını (yazı karakter türü) yükleyebileceğiniz bağlantı adreslerini içerir.</li>
        <li class="file"><i class="fa fa-file"></i> <strong>info.txt</strong> - kaynak dosyaları nasıl çıkarmanız gerektiğini anlatan bilgiler içerir.</li>
    </ul>
</article>
<article id="validation">
    <h3>Validation</h3>
    <div class="alert alert-warning">
        <span>Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we have to break some rules.</span>
    </div>
</article>
<article id="prepare">
    <h3>Hazırlıklar</h3>

    <p>Magento mağazanızı kurmadan önce, tüm hazırlıkları yaptığınıza emin olunuz. Aşağıdaki hazırlık aşamalarını tamamlayınız:</p>

    <h4>Yazılımı düzenleme</h4>

    <p>Magento şablonunun üzerinde rahatça çalışabilmek için, tüm gerekli uygulamaları indirmenizi tavsiye ederiz. Gerekli yazılım listesini, şablon sayfasından görebilirsiniz.<br /> Her şablon farklı gereksinimler içerebilir fakat çoğunlukla aşağıdakiler geçerlidir:</p>
    <ol class="index-list">
        <li>Öncelikle WinZip 9+ (Windows) ve Stuffit Expander 10+ (Mac) kullanarak, şifreyle korunmakta olan sources_#########.zip arşivini açmalısınız.</li>
        <li>Ayrıca Adobe Photoshop uygulamasına da ihtiyacınız olabilir. Bu uygulama, .PSD kaynak dosyalarını düzenlemek içindir. Eğer şablona ait olan grafik ve görselleri düzenlememek isterseniz, bu programa ihtiyacınız vardır.</li>
        <li>Şablonun kaynak dosyalarını düzenlemek için; Adobe Dreamweaver, Notepad++, Sublime Text gibi bir kod editörüne ihtiyacınız var.</li>
        <li>Dosyaları hosting sunucusuna yüklemek için, Total Commander, FileZilla, CuteFTP gibi bir dosya aktarım programına ihtiyacınız var.</li>
    </ol>
    <h4>Hosting (Site barındırma)</h4>
    <p>Magento Commerce, PHP/MySQL tabanlı bir uygulama olduğu için Magento'nun çalışabileceği bir barındırma sistemi kullanmanız gerekir.</p>
    <p>Eğer kullanmakta olduğunuz bir hosting servisi varsa,<a href="http://magento.com/resources/system-requirements" target="_blank"> Magento gereksinimleri </a> ni karşıladığına ve Magento mağazası için kullanıma hazır olduğuna emin olunuz.</p>
    <p>Veya dilerseniz Magento'yu, kendi bilgisayarınızda kurulu olan bir lokal sunucu üzerinden de kullanabilirsiniz. Bunun için <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> gibi bir uygulamaya ihtiyacınız olacaktır. Bu uygulamalar kolaylıkla kurulabilir ve Magento'yu çalıştırmak için kullanılabilir.</p>
    <p>Lokal bir barındırma sunucusu kurmak için, aşağıdaki sayfaları inceleyebilirsiniz:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">AppServ web geliştiricisi nasıl kurulur?</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">WAMP web geliştiricisi nasıl kurulur?</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">XAMP web geliştiricisi nasıl kurulur?</a></li>
    </ul>
</article>