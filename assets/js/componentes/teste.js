define('teste', function () {

    return function () {

        this.__construct = function () {

        };

        this.laco = () => {
            for (let i = 1; i <= 10; i++) {
                console.log(`Testando ${i}`);
            }
        };

        this.__construct();

    };
});