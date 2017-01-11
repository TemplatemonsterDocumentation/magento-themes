<h3>Importar dados de exemplo</h3>
<p>O pacote de template do Magento contém o arquivo dos dados de exemplo(<strong>dump.sql</strong> ou <strong>dump.gz</strong>). Este arquivo fica na pasta <strong>/sources/sample_data</strong> do seu template. Ele permite que você inclua dados de exemplo, para que seu site fique igual ao demo de nossa loja.</p>
<p class="alert alert-danger"><span>Não importe o arquivo <strong>dump.sql.gz</strong> se já tiver algum dados no seu site. Se você fizer isso, todos os produtos serão apagados de sua loja. Se não quiser instalar os dados de exemplo, utilize um banco de dados vazio ao instalar o Magento. Pule este passo. </span></p>	
<p>Para instalar o arquivo de dump, siga os passos abaixo:</p>
<ol class="index-list">
	<li>Entre no PhpMyAdmin e escolha o banco que você vai usar para o Magento Commerce (Você criou ele mais nos passos anteriores). <figure class="img-polaroid"><img src="img/magento/import-dump-1.jpg" alt="" /></figure></li>
	<li>Navegue para a aba <strong>"Import"</strong> e clique no botão <strong>"Browse"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-2.jpg" alt="" /></figure></li>
	<li>Encontre a pasta <strong>"/sources/sample_data"</strong> do seu template e escolha o arquivo <strong>dump.sql.gz.</strong>. Clique em <strong>"GO"</strong>. <figure class="img-polaroid"><img src="img/magento/import-dump-3.jpg" alt="" /></figure> O processo de importação pode demorar uns minutos.</li>
</ol>