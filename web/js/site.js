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


var regionDropdown = $("#regionDropdown");
var areaDropdown = $("#areaDropdown");
$.get("/area/get-areas?region_id=" + $(regionDropdown).find(":selected").val(), function(response) {
    $(response).each(function() {
        $("<option />", {
            val: this.id,
            text: this.name
        }).appendTo(areaDropdown);
    });
});
$(regionDropdown).change(function() {
    $(areaDropdown).empty();
    $.get("/area/get-areas?region_id=" + $(regionDropdown).find(":selected").val(), function(response) {
        $(response).each(function() {
            $("<option />", {
                val: this.id,
                text: this.name
            }).appendTo(areaDropdown);
        });
    });
});