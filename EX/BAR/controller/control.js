$(document).ready(function () {

    $('.btn-send').click(function (e) {
        e.preventDefault();


        let dados = $("#form").serialize();

        console.log(dados);

        $('#retorno').empty();

        $.ajax({
            type: "POST",
            dataType: "JSON",
            assync: true,
            data: dados,
            url: "../model/return.php",
            success: function () {
            }
        });
    });
});