$(document).ready(function () {
    var thisScript = $('script[src*=dashBoard]');
    let id = thisScript.attr('data-my_var_1');
    let piece = thisScript.attr('data-my_var_2');
    let type;
    if (piece !== "VueGenerale") {
        id = piece;
        type = "piece";
    } else {
        type = "utilisateur";
    }
    var canvas = document.getElementsByTagName("canvas");
    for (var i = 0, canva; canva = canvas[i++];) {
        $.ajax({
            type: 'post',
            url: '../phpRessources/getGraphData.php',
            data: {id: id, idCanva: canva.id, ownerType: type},
            dataType: 'json',
            success: function (data) {
                var ctx = document.getElementById(data.id).getContext('2d');
                var chart = new Chart(ctx, {
                        type: data.type,
                        data: {
                            labels: data.labels,
                            datasets: [{
                                label: "Consomation " + data.title,
                                data: data.datas,
                                backgroundColor: 'rgba(0, 99, 227, 0.2)',
                                borderColor: 'rgba(0, 99, 227,1)',
                                borderWidth: 1,
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                    },
                                }],
                                xAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                    }
                                }],
                            },
                            events: ['mousemove'],
                            tooltips: {
                                callbacks: {
                                    label: function (tooltipItem, data) {
                                        var label = data.datasets[tooltipItem.datasetIndex].label || '';

                                        if (label) {
                                            label += ': ';
                                        }
                                        label += Math.round(tooltipItem.yLabel * 100) / 100;
                                        label += ' heures '
                                        return label;
                                    }
                                }
                            }
                        }
                    })
                ;
            },
        });
    }
});