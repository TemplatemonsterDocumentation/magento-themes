<h2 class="item1">Введение</h2>
<p>
    Благодарим вас за покупку шаблона Magento. Этот документ состоит из нескольких частей и продемонстрирует вам весь процесс создания с нуля и администрирования магазина Magento. Мы сделали все возможное, чтобы эта инструкция была предельно понятной и простой в использовании.
</p>

<article id="whatismagento">
    <h3>Что такое Magento Commerce?</h3>
    <p>Magento - это многофункциональная платформа для электронной коммерции с открытым исходным кодом. Она предоставляет гибкие возможности и полный контроль над внешним видом, содержимым и функциями интернет-магазинов. Интуитивная административная панель Magento обеспечивает замечательные возможности для маркетинговых мероприятий, поисковой оптимизации и управления каталогом для полного соответствия сайта уникальным бизнес-процессам каждого магазина. Созданная полностью масштабируемой и при поддержке сети Varien, Magento предлагает универсальное комплексное решение для электронной коммерции. <a href="http://www.magentocommerce.com/download" target="_blank">Подробнее</a></p>
</article>

<article id="whatismagentotheme">
    <h3>Что такое шаблон Magento?</h3>
    <p>Magento шаблон - это готовый дизайн для вашего магазина на основе Magento. Другими словами, вы можете легко изменить внешний вид вашего магазина, просто установив новый шаблон. Не смотря на всю свою простоту, в наши шаблоны Magento включены все необходимые исходные файлы, которые вы можете редактировать или дополнять так, как вам это нужно.</p>
</article>

<article id="file_structure">
    <h4>Структура файлов</h4>

    <p>Архив шаблона, который вы скачали, состоит из нескольких папок. Давайте разберемся, что в них находится:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> содержит файлы документации.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            основной файл документации. Вы его сейчас читаете :)
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> содержит скриншоты шаблона. Не для рабочего сайта.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                <dd> содержит исходные файлы шаблона.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>psd</strong></dt>
                        <dd>
                            исходные файлы для Adobe Photoshop (.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            содержит дополнительные страницы и пользовательские блоки, входящие в шаблон.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                        <dd>
                            содержит демо данные для шаблона Magento.
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>pub</strong></dt>
                                <dd>
                                    содержит файлы и папки, которые необходимо загрузить в корневую папку используемой установки Magento.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                    резервная копия базы данных. Содержит демонстрационные данные шаблона.
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
                <dd> содержит файлы и папки шаблона Magento, которые необходимо загрузить в корневую папку используемой установки Magento.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> представляет собой комплект для полной установки Magento с файлами движка, темы и демо-данными (образцы изображений).</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> файл, используемый для разархивации fullpackage.zip после загрузки на хостинг сервер.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> содержит ссылки, по которым могут быть загружены нестандартные шрифты, используемые в шаблоне.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> содержит инструкции по распаковке исходных файлов.</dd>
            </dl>            
        </li>
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
    <ol class="index-list">
        <li>Прежде всего нужны правильные приложения для распаковывания защищенного паролем архива sources_#########.zip. Можно воспользоваться WinZip 9+ (Windows) и Stuffit Expander 10+ (Mac).</li>
        <li>Также может понадобиться программа Adobe Photoshop. Она используется для редактирования исходных файлов .PSD и необходима, если требуется изменить графический дизайн и изображения шаблона.</li>
        <li>Для редактирования исходного кода файлов шаблона нужно использовать редактор кода, например Adobe Dreamweaver, Notepad++, Sublime Text и т.п.</li>
        <li>Чтобы загрузить файлы на хостинг сервер, потребуется  FTP менеджер, например Total Commander, FileZilla, CuteFTP и т.д.</li>
    </ol>
    
    <h4>Хостинг</h4>
    <p>Поскольку Magento Commerce является приложением PHP/MySQL, необходимо подготовить  хостинг сервер.</p>
    <p>При наличии активного сервера, нужно проверить его на соответствие <a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements.html" target="_blank"> требованиям Magento </a> и на готовность использовать интернет-магазины Magento.</p>
    <p>Также можно установить Magento на компьютер при помощи локального сервера. Для создания локального хостинг сервера необходимо использовать программное обеспечение <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> и т.п. Любое из них устанавливается как обычная программа и поддерживает Magento. </p>
    <p>Вы можете воспользоваться следующими туториалами для настройки локального сервера:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">Как установить среду веб-разработки AppServ</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">Как установить среду веб-разработки WAMP</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">Как установить среду веб-разработки XAMP</a></li>
    </ul>
</article>