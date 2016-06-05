<h2 class="item1">Introducción</h2>
<p>
    Gracias por descargar el tema de Magento. Esta documentación se compone de varias partes y cubre
    todo el proceso de instalación y configuración de tema de Magento empezando desde cero.
</p>

<article id="whatismagento">
    <h3>¿Qué es Magento Commerce?</h3>
    <p>Magento es una plataforma eCommerce rica en funciones construido con tecnología de código abierto. Proporciona flexibilidad y control sobre el aspecto, el contenido y la funcionalidad de la tienda de eCommerce. Intuitiva interfaz de administración de Magento cuenta de marketing muy poderoso, optimización de motores de búsqueda y de gestión de catálogo de herramientas para dar a los comerciantes la posibilidad de crear sitios que se adaptan a sus necesidades empresariales. Diseñado para ser completamente escalable y respaldado por la red de apoyo Varien, Magento ofrece a las empresas la solución definitiva de eCommerce. <a href="http://www.magentocommerce.com/download" target="_blank">Más información</a></p>
</article>

<article id="whatismagentotheme">
    <h3>¿Qué es un tema de Magento?</h3>
    <p>Magento es un diseño completo para su tienda en línea basado en el motor de Magento. En otras palabras, usted puede cambiar fácilmente la apariencia de su tienda de Magento mediante la instalación de un nuevo tema en unos pocos y sencillos pasos. Con toda su sencillez un tema Magento está dotado de todos los archivos de origenes necesarios que se pueden editar o ampliar de la forma que usted necesite.</p>
</article>

<article id="file_structure">
    <h4>Estructura de archivos</h4>

    <p>El paquete que ha descargado, se compone de varias carpetas. Vamos a ver lo que cada una de ellas contiene:</p>

    <ul class="files_structure">
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder-open"></i> <strong>documentation</strong></dt>
                <dd> contiene los archivos de documentación.</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-file"></i> <strong>documentation.html</strong></dt>
                        <dd>
                            el archivo principal de la documentación, usted lo está leyendo en este momento.
                        </dd>
                    </dl>
                </li>
            </ul>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-folder"></i> <strong>screenshots</strong></dt>
                <dd> contiene capturas de pantalla del tema. No es para producción.</dd>
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
                            contiene los archivos de código fuente de Adobe Photoshop del tema (.psd).
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><i class="fa fa-folder"></i> <strong>demo</strong></dt>
                        <dd>
                            contiene páginas adicionales y bloques personalizados proporcionados con el tema.
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
                                <dt><i class="fa fa-folder"></i> <strong>pub</strong></dt>
                                <dd>
                                    contiene los archivos y directorios que se deben cargar en el directorio raíz de la instalación de Magento.
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt><i class="fa fa-file"></i> <strong>dump.sql.gz</strong></dt>
                                <dd>
                                    el archivo de copia de seguridad de la Base de Datos. Contiene el contenido de los datos de ejemplo del tema. .
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
                <dd> contiene los archivos de tema de Magento y directorios que se deben cargar en el directorio raíz de su instalación de Magento.</dd>
            </dl>            
        </li>
        <li>
            <dl class="inline-term">
                <dt><i class="fa fa-file"></i> <strong>fullpackage.zip</strong></dt>
                <dd> contiene el paquete completo de instalación de Magento con archivos de motor, el tema y el contenido de la muestra (imágenes de la muestra).</dd>
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
                <dd> contiene instrucciones sobre cómo extraer los archivos de código fuente.</dd>
            </dl>            
        </li>
    </ul>
</article>
<article id="validation">
    <h3>Validación</h3>
    <div class="alert alert-warning">
        <span>Ambas marcas y estilos CSS y HTML usadas en nuestras plantillas son semánticamente correctas y válidas. Sin embargo, algunos errores del W3C aún pueden tener lugar. Hacer que el código W3C sea el 100% válido eliminará el uso de tecnologías modernas de sitios web tales como CSS3 y HTML5. Nuestro objetivo es ofrecer la experiencia de usuario enriquecida con las plantillas de alta calidad y, a veces hay que romper algunas reglas.</span>
    </div>
</article>
<article id="prepare">
    <h3>Preparación</h3>

    <p>Antes de continuar con la instalación su tienda de Magento, por favor asegúrese de que está totalmente preparado. Por favor, realice los siguientes pasos::</p>

    <h4>Edición del software</h4>

    <p>Para sentirse cómodo trabajando con la plantilla de Magento, le recomendamos la descarga de todas las aplicaciones necesarias. Usted puede ver la lista de software necesario en la página vista previa de plantilla. </br> Los requisitos pueden variar para diferentes plantillas, para la mayoría de las plantillas son los siguientes::</p>
    <ol class="index-list">
        <li>En primer lugar, es necesario utilizar WinZip 9+ (Windows) y Stuffit Expander 10+ (Mac) para extraer el archivo sources_#########.zip protegido por contraseña. </li>
        <li>Usted también puede necesitar la aplicación Adobe Photoshop. Se utiliza para editar los archivos de código fuente .PSD, es necesario si desea editar los gráficos e imágenes del diseño de la plantilla.</li>
        <li>Para editar los archivos de código fuente de la plantilla, necesitará algún editor de texto como Adobe Dreamweaver, Notepad++, Sublime Text, etc.</li>
        <li>Para cargar archivos en el servidor de alojamiento es posible que necesite un administrador de FTP como Total Commander, FileZilla, CuteFTP, etc..</li>
    </ol>
    
    <h4>Hosting (Alojamiento)</h4>
    <p>Como Magento Commerce es una aplicación basada en PHP/MySQL, es necesario preparar un entorno de alojamiento para ejecutar Magento.</p>
    <p>Si usted tiene un hosting, por favor asegúrese de que tiene las características necesarias <a href="http://devdocs.magento.com/guides/v2.0/install-gde/system-requirements.html" target="_blank"> Requerimientos de Magento </a> y está listo para ser utilizado para la creación de una tienda de Magento.</p>
    <p>También puede ejecutar Magento localmente en su ordenador mediante el servidor local. Para crear un servidor de alojamiento local por favor, utilice las aplicaciones de localhost como <strong>WAMP</strong>, <strong>AppServ</strong>, <strong>MAMP</strong> etc.  Cualquiera de ellos se puede instalar fácilmente como cualquier otro programa y se utilizan para ejecutar Magento. </p>
    <p>Por favor, consulte los siguientes tutoriales sobre cómo configurar el entorno de desarrollo local:</p>
    <ul class="marked-list">
        <li><a href="/help/how-to-install-appserv-web-development-environment.html" target="_blank">Cómo instalar entorno de desarrollo web AppServ</a></li>
        <li><a href="/help/how-to-install-wamp-web-development-environment.html" target="_blank">Cómo instalar entorno de desarrollo web WAMP</a></li>
        <li><a href="/help/how-to-install-xamp-web-development-environment.html" target="_blank">Cómo instalar entorno de desarrollo web XAMP</a></li>
    </ul>
</article>