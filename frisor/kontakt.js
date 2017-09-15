$(document).ready(function () {
    $('#characterLeft').text('140 tegn tilbage');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('Du har ikke flere tegn tilbage');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');
        } else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' tegn tilbage');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');
        }
    });
});