jQuery(function($) {
    $("#data").mask("99/99/9999");
    $("#cpf").mask("999.999.999-99");
    $("#senha").mask("********");
    $("#postal_code").mask("99999-999");
    $("#telefone").mask("(99) 9999?9-9999");
    $("#telefone").on('blur', function() {
        var last = $(this).val().substr($(this).val().indexOf("-") + 1);

        if (last.length == 3) {
            var move = $(this).val().substr($(this).val().indexOf("-") - 1, 1);
            var lastfour = move + last;

            var first = $(this).val().substr(0, 9);

            $(this).val(first + '-' + lastfour);
        }
    });
});