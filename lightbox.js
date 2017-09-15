$(document).ready(function () {
    var $lightbox = $('#lightbox');
    console.log('test1');
    $(document).on('click', '.thumbnail', function (event) {
        console.log('test2');
        var $img = $(this).find('img'),
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };

        console.log(src);
        console.log('test3');

        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
        $lightbox.find('.modal-dialog').css({
            'width': '40vw'
        });
        $lightbox.find('.close').removeClass('hidden');
    });
});