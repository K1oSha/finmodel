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

var data1 = [];
var data2 = [];
$('p[id^="exp_"]').each(function() {
    data1.push($(this).text())
});
$('p[id^="prib_"]').each(function() {
    data2.push($(this).text())
});
const ctx = document.getElementById('planChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Месяц 1', 'Месяц 2', 'Месяц 3', 'Месяц 4', 'Месяц 5', 'Месяц 6', 'Месяц 7', 'Месяц 8', 'Месяц 9', 'Месяц 10', 'Месяц 11', 'Месяц 12'],
        datasets: [{
                label: 'Прибыль по плану',
                data: data1,
                borderWidth: 2,
                borderColor: "#0000FF",
            },
            {
                label: 'Прибыль по факту',
                data: data2,
                borderWidth: 2,
                borderColor: "#00FF00",
            }
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});