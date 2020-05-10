$(document).ready(() => {
    $('#clearForm').click(() => {

        $('.form-control').val('');
    });

    $('#goToTop').click(() => {
        window.scrollTo(0, 0);
    });
});