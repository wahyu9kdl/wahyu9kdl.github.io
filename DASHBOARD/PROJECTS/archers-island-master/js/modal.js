$(() => {

    $('#modal_button').on('click', () => {
            $('.modal_wrap').css('display', 'flex');
    })

    $('#modal_close').on('click', () => {
        $('.modal_wrap').fadeOut();
    });

});