$(document).ready(function() {
    $('.preloader-it').remove()

    let elements = $('[data-bs-toggle=tooltip]')

    for (let i = 0; i < elements.length; i += 1) {
        let tooltip = new bootstrap.Tooltip(elements[i], {
            placement: elements[i].getAttribute('data-bs-placement'),
            boundary: document.body,
            template: '<div class="tooltip" role="tooltip"><div class="tooltip-inner border shadow"></div></div>'
        })
    }
});

window.onbeforeunload = function() {
    preloaderStart()
};

function preloaderStart() {
    $('body').prepend('<div class="preloader-it"> <div class="spinner-border text-dark" role="status"></div> </div>')
}