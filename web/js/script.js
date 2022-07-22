$(document).ready(() => {
    $('.updateCurrenciesInformation').on('click', function () {
        $.post(
            '/valutes/update-currencies',
            function(result) {
                if (result) {
                    location.reload()
                }

                console.log(result);
        });
    })
});