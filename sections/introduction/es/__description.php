<h2 class="item1">Introducci&oacute;n</h2>
<p>
    Gracias por la compra de la plantilla de Magento. Esta documentaci&oacute;n consta de varias partes y muestra todo el proceso de c&oacute;mo configurar y administrar una tienda de Magento desde cero. Hemos hecho todo lo posible para que este manual sea lo m&aacute;s claro y f&aacute;cil de seguir. 
</p>

<article id="whatismagento">
    <h3>&iquest;Qu&eacute; es Magento Commerce?</h3>
    <p>Magento es una plataforma de comercio electr&oacute;nico con potentes caracter&iacute;sticas y esta construido con tecnolog&iacute;a de c&oacute;digo abierto. Proporciona flexibilidad y control sobre la apariencia, el contenido y la funcionalidad de la tienda de comercio electr&oacute;nico. La interfaz de administraci&oacute;n de Magento es intuitiva y cuenta con poderosas herramientas de marketing, la optimizaci&oacute;n de los motores de b&uacute;squeda y las herramientas de gesti&oacute;n del cat&aacute;logo para dar los vendedores la posibilidad de crear sitios que se adaptan a sus necesidades empresariales. Esta dise&ntilde;ado para ser totalmente escalable y est&aacute; respaldado por la red de apoyo de Varien, Magento ofrece a las empresas la soluci&oacute;n de comercio electr&oacute;nico final. <a href="http://www.magentocommerce.com/download" target="_blank">M&aacute;s informaci&oacute;n</a></p>
</article>

<article id="whatismagentotheme">
    <h3>&iquest;Qu&eacute; es un tema de Magento?</h3>
    <p>Un tema de Magento es un dise&ntilde;o completo para su tienda en l&iacute;nea basado en el motor de Magento. En otras palabras, usted puede cambiar f&aacute;cilmente la apariencia de su tienda de Magento mediante la instalaci&oacute;n de un nuevo tema en unos pocos y sencillos pasos. Con toda su sencillez un tema Magento est&aacute; dotado de todos los archivos de origen necesarios que se pueden editar o ampliar de la forma que usted necesite.</p>
</article>

<article id="file_structure">
    <h4>Estructura de archivos</h4>

    <p>El paquete que ha descargado, se compone de varias carpetas. Vamos a ver lo que cada una de ellas contiene:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> contiene los archivos de documentaci&oacute;n.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            el archivo principal de la documentaci&oacute;n, usted lo est&aacute; leyendo en este momento.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> contiene capturas de pantalla del tema. No es para producci&oacute;n.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>sources</strong></dt>
                <dd> contiene los archivos fuente del tema.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>psd</strong></dt>
                        <dd>
                           contiene los archivos de c&oacute;digo fuente de Adobe Photoshop del tema (.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            contiene p&aacute;ginas adicionales y bloques personalizados proporcionados con el tema.
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder-open"></i> <strong>sample_data</strong></dt>
                        <dd>
                           contiene los archivos de datos de ejemplo del tema de Magento.
                        </dd>
                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-folder"></i> <strong>media</strong></dt>
                                <dd>
                                    contiene los archivos y directorios que deben ser cargados en el directorio ra&iacute;z de su instalaci&oacute;n de Magento.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                   el archivo de copia de seguridad de la base de datos. Contiene el contenido de los datos de ejemplo del tema.
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
                <dd> contiene los archivos de tema de Magento y directorios que se deben cargar en el directorio ra&iacute;z de su instalaci&oacute;n de Magento.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> contiene el paquete completo de instalación de Magento con los ficheros del motor, del tema y el contenido de muestra.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>unzip.php</strong></dt>
                <dd> el fichero que es utilizado para la extracción de ficheros de fullpackage.zip si ha sido subido al servidor de hosting.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fonts_info.txt</strong></dt>
                <dd> contiene los enlaces en los que los tipos de letra personalizados de la plantilla pueden descargarse.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>info.txt</strong></dt>
                <dd> contiene instrucciones sobre c&oacute;mo extraer los archivos de c&oacute;digo fuente.</dd>
            </dl>            
        </li>
    </ul>
</article>
<article id="validation">
    <h3>Validation</h3>
    <div class="alert alert-warning">
        <span>Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we have to break some rules.</span>
    </div>
</article>
<article id="prepare">
    <h3>Preparativos</h3>

    <p>Antes de continuar con la instalaci&oacute;n su tienda de Magento, por favor aseg&uacute;rese de que est&aacute; totalmente preparado. Por favor, realice los siguientes pasos:</p>

    <h4>Software de edici&oacute;n</h4>

    <p>Para sentirse c&oacute;modo trabajando con la plantilla de Magento, le recomendamos la descarga de todas las aplicaciones necesarias. Usted puede ver la lista de software necesario en la p&aacute;gina vista previa de plantilla. <br />
    Los requisitos pueden variar para diferentes plantillas, para la mayor&iacute;a de las plantillas son los siguientes:</p>
    <ol class="index-list">
    <li>En primer lugar, es necesario utilizar WinZip 9+ (Windows) y Stuffit Expander 10+ (Mac) para extraer el archivo sources_#########.zip  protegido por contrase&ntilde;a</li>
        <li>Usted tambi&eacute;n puede necesitar la aplicaci&oacute;n Adobe Photoshop. Se utiliza para editar los archivos de c&oacute;digo fuente .PSD, es necesario si desea editar los gr&aacute;ficos e im&aacute;genes del dise&ntilde;o de la plantilla.</li>
        <li>Para editar los archivos de c&oacute;digo fuente de la plantilla, necesitar&aacute; alg&uacute;n editor de texto como Adobe Dreamweaver, Notepad++, Sublime Text, etc.</li>
        <li>Para cargar archivos en el servidor de alojamiento es posible que necesite un administrador de FTP como Total Commander, FileZilla, CuteFTP, etc.</li>
    </ol>
    
    <h4>Hosting (Alojamiento)</h4>
    <p>Como Magento Commerce es una aplicaci&oacute;n basada en PHP/MySQL, es necesario preparar un entorno de alojamiento para ejecutar Magento.</p>
    <p>Si usted tiene un hosting, por favor aseg&uacute;rese de que tiene las caracter&iacute;sticas necesarias, <a href="http://magento.com/resources/system-requirements" target="_blank"> Requisitos de Magento </a> y est&aacute; listo para ser utilizado para la creaci&oacute;n de una tienda de Magento.</p>
    <p>Tambi&eacute;n puede ejecutar Magento localmente en su ordenador mediante el servidor local. Para crear un servidor de alojamiento local por favor, utilice las aplicaciones de localhost como <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> etc. Cualquiera de ellos se puede instalar f&aacute;cilmente como cualquier otro programa y se utilizan para ejecutar Magento. </p>
    <p>Por favor, consulte los siguientes tutoriales sobre c&oacute;mo configurar el entorno de desarrollo local:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">C&oacute;mo instalar el entorno de desarrollo web AppServ</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">C&oacute;mo instalar el entorno de desarrollo web WAMP</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">C&oacute;mo instalar el entorno de desarrollo web XAMP</a></li>
    </ul>
</article>