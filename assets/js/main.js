// Aqui vai toda a lógica da minha aplicação, tendo como dependecia dois módulos
// jquery e o myModule, e damos um 'alias' para eles passando como parametros na função logo adiante
define(
	["jquery", "myModule"],
	function ( $, myModule ) {
		$(function () {
			alert(123);
		});
	}
);