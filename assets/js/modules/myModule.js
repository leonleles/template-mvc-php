// E este é nosso módulo 'myModule'
// nós podemos ou não definir um nome para ele
// Por exemplo:
// define('myModule', function () {
define(function () {
	return {
		sum: function (a, b) {
			return (+a) + (+b);
		}
	}
});