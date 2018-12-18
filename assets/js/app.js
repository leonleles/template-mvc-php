// Configurando módulos para carregar a partir do diretório 'js/modules'
// exceto para 'main', que esta em um diretório anterior
// * com base no diretório definido no baseUrl.
// E a mesma situação acontece com o jquery, que é carregado por CDN
requirejs.config({
	"baseUrl": "js/modules",
	"paths": {
		"jquery": "//code.jquery.com/jquery-2.1.1.min",
		"main": "../main"
	}
});


// Chamando módulo principal para iniciar a aplicação
requirejs(["main"]);