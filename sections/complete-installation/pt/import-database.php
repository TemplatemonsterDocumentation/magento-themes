		
<h3>Importar dados de amostra</h3>
<p>O pacote do template do Magento contém um arquivo de dados de amostra. Esse arquivo está localizado em <b>/sources/sample_data</b>, dentro do diretório do seu tema. Com ele você pode incluir os dados de amostra para que seu site fique igual à demonstração que você viu em nosso site.</p>
<p class="alert alert-danger"><span>Não faça a importação do arquivo <strong>dump.sql.gz</strong> se você já tiver dados no seu site. Se fizer isso, todos os produtos já cadastrados serão apagado. Se não quiser instalar os dados de amostra, use um banco de dados vazio ao instalar o Magento. Pule o passo de instalação doss dados de amostra. </span></p>	
<p>Para instalar o arquivo dump, siga esses passos:</p>
<ol class="index-list">
	<li>Entre no PhpMyAdmin e escolha o banco que você usará para o Magento (ele foi criado por você nos passos anteriores).</li>
	<li>Navegue até a aba <b>"Import"</b> e clique no botão <b>"Browse"</b>.</li>
	<li>Encontre a pasta do <i>"/sources/sample_data"</i> e escolha o arquivo <b>dump.sql.gz</b>.</li>
	<li>Clique em <b>"GO"</b>. O processo de importação pode demorar uns minutos.</li>
</ol>
<p>Escolha o banco que você vai usar para o Magento. Escolha <b>"IMPORT"</b>. Clique em  <b>"Browse"</b>.</p>
<figure class="img-polaroid"><img src="img/magento/import-dump1.png" alt="" /></figure>
<p>Navegue até <strong>"/sources/sample_data"</strong> e escolha <strong>dump.sql.gz file</strong>.</p>
<figure class="img-polaroid"><img src="img/magento/import-dump2.png" alt="" /></figure>
<p>Clique em <b>"GO"</b>.</p>
<figure class="img-polaroid"><img src="img/magento/import-dump3.png" alt="" /></figure>
			
		