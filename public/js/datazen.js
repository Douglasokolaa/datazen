$(function () {
    $('.media1').hover(
        function () {
            $('.media1 a').addClass('text-white');
        },
        function () {
            $('.media1 a').removeClass('text-white');
        }
    );

    $('.media2').hover(
        function () {
            $('.media2 a').addClass('text-white');
        },
        function () {
            $('.media2 a').removeClass('text-white');
        }
    );

    $('.media3').hover(
        function () {
            $('.media3 a').addClass('text-white');
        },
        function () {
            $('.media3 a').removeClass('text-white');
        }
    );
    $('.isotope-filters .print-branding').click(function () {
        $('.print-branding').removeClass('d-none')
        $('.print-branding').addClass('show')
    });
    $('.isotope-filters .creative').click(function () {
        $('.creative').removeClass('d-none')
        $('.creative').addClass('show')
    });
    $('.isotope-filters .wordpress-ecommerce').click(function () {
        $('.wordpress-ecommerce').removeClass('d-none')
        $('.wordpress-ecommerce').addClass('show')
    });
});
