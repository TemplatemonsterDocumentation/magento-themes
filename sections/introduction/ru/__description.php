<h2 class="item1">Введение</h2>
<p class="intro">
    Благодарим вас за покупку шаблона Magento. Этот документ состоит из нескольких частей и продемонстрирует вам весь процесс создания с нуля и администрирования магазина Magento. Мы сделали все возможное, чтобы эта инструкция была предельно понятной и простой в использовании.
</p>

<h3>Что такое Magento Commerce?</h3>
<p>Magento - это многофункциональная платформа для электронной коммерции с открытым исходным кодом. Она предоставляет гибкие возможности и полный контроль над внешним видом, содержимым и функциями интернет-магазинов. Интуитивная административная панель Magento обеспечивает замечательные возможности для маркетинговых мероприятий, поисковой оптимизации и управления каталогом для полного соответствия сайта уникальным бизнес-процессам каждого магазина. Созданная полностью масштабируемой и при поддержке сети Varien, Magento предлагает универсальное комплексное решение для электронной коммерции. <a href="http://www.magentocommerce.com/download" target="_blank">Подробнее</a></p>

<h3>Что такое шаблон Magento?</h3>
<p>Magento шаблон - это готовый дизайн для вашего магазина на основе Magento. Другими словами, вы можете легко изменить внешний вид вашего магазина, просто установив новый шаблон. Не смотря на всю свою простоту, в наши шаблоны Magento включены все необходимые исходные файлы, которые вы можете редактировать или дополнять так, как вам это нужно.</p>

<article id="file_structure">
    <h4>Структура файлов</h4>

    Архив шаблона, который вы скачали, состоит из нескольких папок. Давайте разберемся, что в них находится:

    <ul class="files_structure">
        <li class="folder"><i class="fa fa-folder-open"></i><b>documentation</b>
            <small class="muted"> - содержит файлы документации.</small>
            <ul>
                <li class="file"><i class="fa fa-file"></i> documentation.html<small class="muted"> - основной файл документации. Вы его сейчас читаете :)</small></li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i><b>screenshots</b>
            <small class="muted"> - содержит скриншоты шаблона. Не для рабочего сайта.</small>
        </li>
        <li class="folder"><i class="fa fa-folder-open"></i><b>sources</b>
            <small class="muted"> - содержит исходные файлы шаблона.</small>
            <ul>
                <li class="folder"><i class="fa fa-folder"></i> psd<small class="muted"> - исходные файлы для Adobe Photoshop (.psd).</small></li>
                <li class="folder"><i class="fa fa-folder"></i> demo<small class="muted"> - содержит дополнительные страницы и пользовательские блоки, входящие в шаблон.</small></li>
                <li class="folder"><i class="fa fa-folder-open"></i> sample_data<small class="muted"> - содержит демо данные для шаблона Magento.</small>
                    <ul>
                        <li class="folder"><i class="fa fa-folder"></i> media<small class="muted"> - содержит файлы и папки, которые необходимо загрузить в корневую папку используемой установки Magento.</small></li>
                        <li class="file"><i class="fa fa-file"></i> dump.sql.gz<small class="muted"> -  резервная копия базы данных. Содержит демонстрационные данные шаблона. </small></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="folder"><i class="fa fa-folder"></i> <b>theme###</b><small class="muted"> - содержит файлы и папки шаблона Magento, которые необходимо загрузить в корневую папку используемой установки Magento.</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>fullpackage.zip</b><small class="muted"> - представляет собой комплект для полной установки Magento с файлами движка, темы и демо-данными (образцы изображений).</small></li>
        <li class="file"><i class="fa fa-file"></i> <b>unzip.php</b><small class="muted"> - файл, используемый для разархивации fullpackage.zip после загрузки на хостинг сервер.</small></li>
        <li class="file"><i class="fa fa-file"></i> fonts_info.txt<small class="muted"> - содержит ссылки, по которым могут быть загружены нестандартные шрифты, используемые в шаблоне.</small></li>
        <li class="file"><i class="fa fa-file"></i> info.txt<small class="muted"> - содержит инструкции по распаковке исходных файлов.</small></li>
    </ul>
</article>
<article id="validation">
    <h3>Валидация</h3>
    <div class="alert alert-warning">
        <span>Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we have to break some rules.</span>
    </div>
</article>
<article id="prepare">
    <h3>Подготовка</h3>

    <p>Прежде чем перейти к установке магазина Magento, нужно полностью подготовиться. Рекомендуется выполнить следующие подготовительные шаги:</p>

    <h4>Программное обеспечение</h4>

    <p>Для полноценной работы с шаблоном Magento мы рекомендуем скачать все требуемые приложения. Список необходимого программного обеспечения находится на странице предпросмотра шаблона. </br>
        Требования для различных шаблонов могут меняться, поэтому мы перечислим самые основные:</p>
    <ol>
        <li>Прежде всего нужны правильные приложения для распаковывания защищенного паролем архива sources_#########.zip. Можно воспользоваться WinZip 9+ (Windows) и Stuffit Expander 10+ (Mac).</li>
        <li>Также может понадобиться программа Adobe Photoshop. Она используется для редактирования исходных файлов .PSD и необходима, если требуется изменить графический дизайн и изображения шаблона.</li>
        <li>Для редактирования исходного кода файлов шаблона нужно использовать редактор кода, например Adobe Dreamweaver, Notepad++, Sublime Text и т.п.</li>
        <li>Чтобы загрузить файлы на хостинг сервер, потребуется  FTP менеджер, например Total Commander, FileZilla, CuteFTP и т.д.</li>
    </ol>
    <h4>Хостинг</h4>
    <p>Поскольку Magento Commerce является приложением PHP/MySQL, необходимо подготовить  хостинг сервер.</p>
    <p>При наличии активного сервера, нужно проверить его на соответствие <a href="http://magento.com/resources/system-requirements" target="_blank"> требованиям Magento </a> и на готовность использовать интернет-магазины Magento.</p>
    <p>Также можно установить Magento на компьютер при помощи локального сервера. Для создания локального хостинг сервера необходимо использовать программное обеспечение <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> и т.п. Любое из них устанавливается как обычная программа и поддерживает Magento. </p>
    <p>Вы можете воспользоваться следующими туториалами для настройки локального сервера:</p>
    <ul>
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">Как установить среду веб-разработки AppServ</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">Как установить среду веб-разработки WAMP</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">Как установить среду веб-разработки XAMP</a></li>
    </ul>
</article>