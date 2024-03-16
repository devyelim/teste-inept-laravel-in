$(document).ready(function() {
    $("#cnpj").mask("99.999.999/9999-99");
    $('#cnpj').cpfcnpj({
        mask: false,
        validate: 'cpfcnpj',
        event: 'focusout',
        handler: 'input',
        ifValid: function(input) {
            input.removeClass("error");
        },
        ifInvalid: function(input) {
            input.addClass("error");
        }
    });
});