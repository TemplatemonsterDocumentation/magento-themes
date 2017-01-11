<h3>Configuração do Template</h3>
<p>Vamos rever as opções de configuração do template baseado no exemplo. Nós vamos configurá-lo da mesma forma que está no site de exemplo do template, sem afetar os dados dos produtos.</p>

<h4>Ativar o novo tema</h4>
<ol class="index-list">
	<li>Abra o painel administrativo do Magento e navegue para <strong>Stores > Configuration (Lojas > Configuração)</strong>.
		<figure class="img-polaroid"><img src="img/magento/Theme-set-1.jpg" alt="" /></figure>
	</li>
	<li>No menu <strong>General (Geral)</strong> escolha a aba <strong>Design</strong>. Clique na aba <strong>Design Theme (Tema do Design)</strong> e na lista <strong>Design Theme</strong> escolha o tema desejado, então clique no botão <strong>Save Config (Salvar configurações)</strong>.
		<figure class="img-polaroid"><img src="img/magento/Theme-set-2.jpg" alt="" /></figure>
	</li>	
</ol>

<h4>Reindexar dados</h4>
<ol class="index-list">
	<li>Abra o painel administrativo do Magento e navegue para <strong>System > Index Management (Sistema > Gerenciador de índices)</strong>.
		<figure class="img-polaroid"><img src="img/magento/Theme-set-3.jpg" alt="" /></figure>
	</li>
	<li>Na primeira coluna abra a lista e escolha "<strong>Select All (Selecionar tudo)</strong>". 
		<figure class="img-polaroid"><img src="img/magento/Theme-set-4.jpg" alt="" /></figure>
	</li>
	<li>No seletor "<strong>Actions (Ações)</strong>" no topo escolha "<strong>Update on save (Atualizar ao salvar)</strong>". Isso vai automaticamente reindexar os dados especificados após salvar quaiquer definições no painel administrativo.
		<figure class="img-polaroid"><img src="img/magento/Theme-set-5.jpg" alt="" /></figure>
	</li>
	<li>Clique no botão "<strong>Submit</strong>".</li>
	<li>Seja paciente, isso pode demorar bastante.</li>
</ol>

<h4>Desativar cache</h4>
<p>Para que as alterações apareçam no site diretamente após alterações, você precisa desativar o cache. Isso previne futuras limpezas de cache após cada alteração feita. Você pode ativá-lo novamente depois de terminar de alterar a loja.</p>
<ol class="index-list">
	<li>Abra o painel administrativo do Magento e navegue para <strong>System > Cache Management (Sistema > Gerenciamento de cache)</strong> 
		<figure class="img-polaroid"><img src="img/magento/Theme-set-6.jpg" alt="" /></figure>
	</li>
	<li>Na primeira coluna abra a lista e escolha "<strong>Select All (Selecionar tudo)</strong>"
		<figure class="img-polaroid"><img src="img/magento/Theme-set-7.jpg" alt="" /></figure>
	</li>
	<li>No campo "<strong>Refresh (Atualizar)</strong>" escolha "<strong>Disable</strong>".
		<figure class="img-polaroid"><img src="img/magento/Theme-set-8.jpg" alt="" /></figure>
	</li>
	<li>Clique no botão "<strong>Submit (Enviar)</strong>".</li>
</ol>