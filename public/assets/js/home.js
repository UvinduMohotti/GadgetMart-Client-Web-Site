/* ========================================================================

Home Js

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function ($) {
    if ($('#site_feed_data').length) {
        var chart_data = {
            chart: {
                height: 260, type: "bar", toolbar: {
                    show: false
                }
            }, plotOptions: {
                bar: {
                    horizontal: false, columnWidth: "20%", endingShape: "rounded"
                }
            }, legend: {
                horizontalAlign: "right", offsetY: -10, markers: {
                    radius: 50, height: 8, width: 8
                }
            }, dataLabels: {
                enabled: false
            }, colors: ['#5a6dc7', '#69dc87'], fill: {
                type: "gradient", gradient: {
                    shade: "light", type: "vertical", inverseColors: !0, opacityFrom: 1, opacityTo: 1, stops: [0, 70, 100]
                }
            }, series: [{
                name: "2019", data: [160, 82, 200, 228, 100, 210, 290, 211, 230]
            }, {
                name: "2018", data: [200, 100, 190, 200, 150, 100, 270, 220, 110]
            }
            ], xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"], axisBorder: {
                    show: false
                }, axisTicks: {
                    show: false
                }, labels: {
                    style: {
                        colors: "#828D99"
                    }
                }
            }, yaxis: {
                min: 0, max: 300, tickAmount: 3, labels: {
                    style: {
                        color: "#828D99"
                    }
                }
            }, legend: {
                show: false
            }, tooltip: {
                y: {
                    formatter: function (e) {
                        return "$ " + e + " thousands"
                    }
                }
            }
        };
        new ApexCharts(document.querySelector("#site_feed_data"), chart_data).render();
    }


    if ($("#total-sales-chart").length) {
        var areaData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
            datasets: [{
                data: [30, 35, 20, 30, 26, 35 ,34 , 20, 25, 20, 28],
                backgroundColor: [
                    '#263992'
                ],
                borderColor: [
                    'transparent'
                ],
                borderWidth: 1,
                fill: 'origin',
                label: "purchases"
            },
                {
                    data: [60, 55, 40, 50, 55, 52, 60, 52, 60, 55, 60],
                    backgroundColor: [
                        '#22B548'
                    ],
                    borderColor: [
                        'transparent'
                    ],
                    borderWidth: 1,
                    fill: 'origin',
                    label: "services"
                },
                {
                    data: [70, 70, 80, 70, 75, 96, 80, 70, 95, 85, 95],
                    backgroundColor: [
                        '#CDD6F7'
                    ],
                    borderColor: [
                        'transparent'
                    ],
                    borderWidth: 1,
                    fill: 'origin',
                    label: "services"
                }
            ]
        };
        var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                filler: {
                    propagate: false
                }
            },
            scales: {
                xAxes: [{
                    display: false,
                    ticks: {
                        display: true
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false,
                        color: 'transparent',
                        zeroLineColor: '#eeeeee'
                    }
                }],
                yAxes: [{
                    display: false,
                    ticks: {
                        display: true,
                        autoSkip: false,
                        maxRotation: 0,
                        stepSize: 100,
                        min: 0,
                        max: 100
                    },
                    gridLines: {
                        drawBorder: false
                    }
                }]
            },
            legend: {
                display: false
            },
            tooltips: {
                enabled: true
            },
            elements: {
                line: {
                    tension: .40
                },
                point: {
                    radius: 0
                }
            }
        }
        var totalSalesCanvas = $("#total-sales-chart").get(0).getContext("2d");
        var totalSales = new Chart(totalSalesCanvas, {
            type: 'line',
            data: areaData,
            options: areaOptions
        });
    }

    if ($('#flotPieChart').length) {
        $.plot('#flotPieChart', [
            {label: 'Very Satisfied', data: [[1, 25]], color: '#5A8DEE'},
            {label: 'Satisfied', data: [[1, 38]], color: '#00CFDD'},
            {label: 'Not Satisfied', data: [[1, 20]], color: '#FDAC41'},
            {label: 'Very Unsatisfied', data: [[1, 15]], color: '#39DA8A'}
        ], {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.5,
                    label: {
                        show: true,
                        radius: 3 / 4,
                        formatter: labelFormatter
                    }
                }
            },
            legend: {show: false}
        });

        function labelFormatter(label, series) {
            return '<div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">' + Math.round(series.percent) + '%</div>';
        }

    }

    // Home V2

    var warningDark="#ffeed9",
        warningLight="#FDAC41",
        primaryDark="#263992",
        primaryLight="#d1d8f9",
        successDark="#22B548",
        successLight="#c4f9d2",
        infoDark="#0EADFB",
        infoLight="#d1f0ff";

    if ($('#np_chart').length) {
        var ChartPrimary= {
            chart: {
                type:"bar", height:60, width:110, sparkline: {
                    enabled: !0
                }, toolbar: {
                    show: !1
                }
            }, states: {
                hover: {
                    filter: "none"
                }
            }, colors:[primaryLight, primaryLight, primaryLight, primaryLight, primaryDark, primaryDark, primaryLight], series:[ {
                name: "Sales", data: [6,4, 7, 11, 10, 17, 15]
            }
            ], grid: {
                show:!1, padding: {
                    left: 0, right: 0
                }
            }, plotOptions: {
                bar: {
                    columnWidth: "80%", distributed: !0
                }
            }, tooltip: {
                x: {
                    show: !1
                }
            }, xaxis: {
                type: "numeric"
            }
        };
        new ApexCharts(document.querySelector("#ns_chart"), ChartPrimary).render();
    }

    if ($('#np_chart').length) {
        var ChartD= {
            chart: {
                type:"bar", height:60, width:110, sparkline: {
                    enabled: !0
                }, toolbar: {
                    show: !1
                }
            }, states: {
                hover: {
                    filter: "none"
                }
            }, colors:[warningDark, warningDark, warningDark, warningDark, warningLight, warningDark], series:[ {
                name: "New Products", data: [6,4, 7, 11, 10, 17, 15]
            }
            ], grid: {
                show:!1, padding: {
                    left: 0, right: 0
                }
            }, plotOptions: {
                bar: {
                    columnWidth: "80%", distributed: !0
                }
            }, tooltip: {
                x: {
                    show: !1
                }
            }, xaxis: {
                type: "numeric"
            }
        };
        new ApexCharts(document.querySelector("#np_chart"), ChartD).render();
    }

    if ($('#nu_chart').length) {
        var ChartSuccess= {
            chart: {
                type:"bar", height:60, width:110, sparkline: {
                    enabled: !0
                }, toolbar: {
                    show: !1
                }
            }, states: {
                hover: {
                    filter: "none"
                }
            }, colors:[successLight, successLight, successLight, successLight, successDark, successDark, successLight], series:[ {
                name: "New Users", data: [6,4, 7, 11, 10, 17, 15]
            }
            ], grid: {
                show:!1, padding: {
                    left: 0, right: 0
                }
            }, plotOptions: {
                bar: {
                    columnWidth: "80%", distributed: !0
                }
            }, tooltip: {
                x: {
                    show: !1
                }
            }, xaxis: {
                type: "numeric"
            }
        };
        new ApexCharts(document.querySelector("#nu_chart"), ChartSuccess).render();
    }

    if ($('#rg_chart').length) {
        var ChartDanger= {
            chart: {
                type:"bar", height:60, width:110, sparkline: {
                    enabled: !0
                }, toolbar: {
                    show: !1
                }
            }, states: {
                hover: {
                    filter: "none"
                }
            }, colors:[infoLight, infoLight, infoLight, infoLight, infoDark, infoDark, infoLight], series:[ {
                name: "New Users", data: [6,4, 7, 11, 10, 17, 15]
            }
            ], grid: {
                show:!1, padding: {
                    left: 0, right: 0
                }
            }, plotOptions: {
                bar: {
                    columnWidth: "80%", distributed: !0
                }
            }, tooltip: {
                x: {
                    show: !1
                }
            }, xaxis: {
                type: "numeric"
            }
        };
        new ApexCharts(document.querySelector("#rg_chart"), ChartDanger).render();
    }

    if ($('#rg_chart').length) {
        $(function() {
            $('#vector_map').vectorMap({
                map: 'world_mill_en',
                normalizeFunction: 'polynomial',
                hoverOpacity: 0.7,
                hoverColor: false,
                regionStyle: {
                    initial: {
                        fill: '#d1d8f9'
                    }
                },
                markerStyle: {
                    initial: {
                        r: 9,
                        'fill': '#263992',
                        'fill-opacity': 0.9,
                        'stroke': '#fff',
                        'stroke-width': 7,
                        'stroke-opacity': 0.4
                    },

                    hover: {
                        'stroke': '#fff',
                        'fill-opacity': 1,
                        'stroke-width': 1.5
                    }
                },
                backgroundColor: 'transparent',
                markers: [{
                    latLng: [41.9, 12.45],
                    name: "Vatican City"
                }, {
                    latLng: [43.73, 7.41],
                    name: "Monaco"
                }, {
                    latLng: [-.52, 166.93],
                    name: "Nauru"
                }, {
                    latLng: [-8.51, 179.21],
                    name: "Tuvalu"
                }, {
                    latLng: [43.93, 12.46],
                    name: "San Marino"
                }, {
                    latLng: [47.14, 9.52],
                    name: "Liechtenstein"
                }, {
                    latLng: [7.11, 171.06],
                    name: "Marshall Islands"
                }, {
                    latLng: [17.3, -62.73],
                    name: "Saint Kitts and Nevis"
                }, {
                    latLng: [3.2, 73.22],
                    name: "Maldives"
                }, {
                    latLng: [35.88, 14.5],
                    name: "Malta"
                }, {
                    latLng: [12.05, -61.75],
                    name: "Grenada"
                }, {
                    latLng: [13.16, -61.23],
                    name: "Saint Vincent and the Grenadines"
                }, {
                    latLng: [13.16, -59.55],
                    name: "Barbados"
                }, {
                    latLng: [17.11, -61.85],
                    name: "Antigua and Barbuda"
                }, {
                    latLng: [-4.61, 55.45],
                    name: "Seychelles"
                }, {
                    latLng: [7.35, 134.46],
                    name: "Palau"
                }, {
                    latLng: [42.5, 1.51],
                    name: "Andorra"
                }, {
                    latLng: [14.01, -60.98],
                    name: "Saint Lucia"
                }, {
                    latLng: [6.91, 158.18],
                    name: "Federated States of Micronesia"
                }, {
                    latLng: [1.3, 103.8],
                    name: "Singapore"
                }, {
                    latLng: [1.46, 173.03],
                    name: "Kiribati"
                }, {
                    latLng: [-21.13, -175.2],
                    name: "Tonga"
                }, {
                    latLng: [15.3, -61.38],
                    name: "Dominica"
                }, {
                    latLng: [-20.2, 57.5],
                    name: "Mauritius"
                }, {
                    latLng: [26.02, 50.55],
                    name: "Bahrain"
                }, {
                    latLng: [.33, 6.73],
                    name: "SÃƒÂ£o TomÃƒÂ© and PrÃƒÂ­ncipe"
                }],
                zoomOnScroll: false
            });
            var options = {
                chart: {
                    height: 175,
                    type: 'donut',
                    sparkline: {
                        enabled: true
                    }
                },
                series: [30, 40, 30, 20],
                legend: {
                    show: false,
                },

                labels: ["United States", "United Kingdom", "UAE", "Brazil"],
                colors: ["#5A8DEE", "#00CFDD", "#FDAC41", "#39DA8A", "#fd397a"]
            }
            var chart = new ApexCharts(
                document.querySelector("#visit_chart"),
                options
            );
            chart.render();
        });
    }
    

    // Average Sale Chart

    if ($("#avg-sale").length) {
        var avgChartCanvas = $("#avg-sale").get(0).getContext("2d");
        var avgChart = new Chart(avgChartCanvas, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                datasets: [{
                    label: 'Europe',
                    data: [345, 454, 690, 237, 700, 600],
                    backgroundColor: '#263992'
                },
                    {
                        label: 'USA',
                        data: [950, 900, 500, 620, 1020, 1200],
                        backgroundColor: '#eaf0ff'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 20,
                        bottom: 0
                    }
                },
                scales: {
                    yAxes: [{
                        display: false,
                        gridLines: {
                            drawBorder: false,
                        },
                        ticks: {
                            stepSize: 250,
                            fontColor: "#686868"
                        }
                    }],
                    xAxes: [{
                        stacked: true,
                        ticks: {
                            beginAtZero: true,
                            fontColor: "#686868"
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        barPercentage: 0.4
                    }]
                },
                legend: {
                    display: false
                },
                elements: {
                    point: {
                        radius: 0
                    }
                },
                legendCallback: function(chart) {
                    var text = [];
                    text.push('<ul class="legend'+ chart.id +'">');
                    for (var i = 0; i < chart.data.datasets.length; i++) {
                        text.push('<li><span class="legend-dots" style="background-color:' + chart.data.datasets[i].backgroundColor + '"></span>');
                        if (chart.data.datasets[i].label) {
                            text.push(chart.data.datasets[i].label);
                        }
                        text.push('</li>');
                    }
                    text.push('</ul>');
                    return text.join("");
                }
            }
        });
    }

    if($('#mobile_visits_chart').length > 0) {
        Morris.Area({
            element: 'mobile_visits_chart',
            data: [{
                period: '2010',
                iphone: 50,
            }, {
                period: '2011',
                iphone: 130,
            }, {
                period: '2012',
                iphone: 80,
            }, {
                period: '2013',
                iphone: 70,
            }, {
                period: '2014',
                iphone: 180,
            }, {
                period: '2015',
                iphone: 105,
            },
                {
                    period: '2016',
                    iphone: 250,
                }],
            xkey: 'period',
            ykeys: ['iphone'],
            labels: ['iPhone'],
            pointSize: 5,
            fillOpacity: .03,
            lineWidth:2,
            pointStrokeColors:['#fff'],
            behaveLikeLine: true,
            hideHover: 'auto',
            gridLineColor: '#eaecec',
            lineColors: ['#22B548'],
            resize: true,
            smooth:true,
            gridTextColor:'#5e7d8a',
            gridTextFamily:"Inherit"

        });
    }

    // Home V3
    if ($('#main_chart').length) {
        var options = {
            chart: {
                height: 350,
                width: "100%",
                type: "line",
                dropShadow: {
                    enabled: true,
                    top: 20,
                    left: 2,
                    blur: 8,
                    opacity: 0.15
                }
            },
            series: [{
                name: "Purchases",
                data: [34, 43, 31, 63, 45, 75, 50, 77],
            }],
            dataLabels: {
                enabled: true,
                offsetY: -3,
            },
            colors: ['#263992', '#263992'],
            stroke: {
                curve: 'smooth',
                width: 3,
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: "horizontal",
                    shadeIntensity: 0.5,
                    gradientToColors: ['#263992'],
                    inverseColors: true,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 100],
                    colorStops: []
                },
            },
        };
        var chart = new ApexCharts(document.querySelector("#main_chart"), options);
        chart.render();
    }
    if ($('#main_chart_dark').length) {
        var options = {
            chart: {
                height: 350,
                width: "100%",
                type: "line",
                dropShadow: {
                    enabled: true,
                    top: 20,
                    left: 2,
                    blur: 8,
                    opacity: 0.15
                }
            },
            series: [{
                name: "Purchases",
                data: [34, 43, 31, 63, 45, 75, 50, 77],
            }],
            dataLabels: {
                enabled: true,
                offsetY: -3,
            },
            colors: ['#425EFF', '#425EFF'],
            stroke: {
                curve: 'smooth',
                width: 3,
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: "horizontal",
                    shadeIntensity: 0.5,
                    gradientToColors: ['#425EFF'],
                    inverseColors: true,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 100],
                    colorStops: []
                },
            },
        };
        var chart = new ApexCharts(document.querySelector("#main_chart_dark"), options);
        chart.render();
    }

    var piedata = [
        {label: 'Very Satisfied', data: [[1, 25]], color: '#5A8DEE'},
        {label: 'Satisfied', data: [[1, 38]], color: '#00CFDD'},
        {label: 'Not Satisfied', data: [[1, 20]], color: '#FDAC41'},
        {label: 'Very Unsatisfied', data: [[1, 15]], color: '#39DA8A'}
    ];

    $.plot('#sales_country', piedata, {
        series: {
            pie: {
                show: true,
                radius: 1,
                innerRadius: 0.6,
                label: {
                    show: true,
                    radius: 3.2 / 4,
                    formatter: textFormatter,
                }
            }
        },
        grid: {
            hoverable: false,
            clickable: false
        },
        legend: {
            show: false
        }
    });

    function textFormatter(label, series) {
        return '<div style="font-size:10px; font-weight:700; text-align:center; color:#ffff;">' + Math.round(series.percent) + '%</div>';
    }
});
/*======== End Doucument Ready Function =========*/
