		
<h3>Importar dados de amostra</h3>
<p>O pacote do template do Magento contém um arquivo de dados de amostra. Esse arquivo está localizado em <strong>/sources/sample_data</strong>, dentro do diretório do seu tema. Com ele você pode incluir os dados de amostra para que seu site fique igual à demonstração que você viu em nosso site.</p>
<p class="alert alert-danger"><span>Não faça a importação do arquivo <strong>dump.sql.gz</strong> se você já tiver dados no seu site. Se fizer isso, todos os produtos já cadastrados serão apagado. Se não quiser instalar os dados de amostra, use um banco de dados vazio ao instalar o Magento. Pule o passo de instalação doss dados de amostra. </span></p>	
<p>Para instalar o arquivo dump, siga esses passos:</p>
<ol class="index-list">
	<li>Entre no PhpMyAdmin e escolha o banco que você usará para o Magento (ele foi criado por você nos passos anteriores).
		<figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Navegue até a aba <strong>"Import"</strong> e clique no botão <strong>"Browse"</strong>.
		<figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Encontre a pasta do <strong>"/sources/sample_data"</strong> e escolha o arquivo <strong>dump.sql.gz</strong>. Clique em <strong>"GO"</strong>.
		<figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> O processo de importação pode demorar uns minutos.</li>
</ol>