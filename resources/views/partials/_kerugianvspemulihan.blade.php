<style>#container {
    height: 600px; 
    min-width: 310px; 
    max-width: 900px;
    margin: 0 auto;
}</style>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="pemulihan" style="height: 450px"></div>
<script>

// Highcharts.chart('pemulihan', {
//     chart: {
//         type: 'column',
//         options3d: {
//             enabled: true,
//             alpha: 15,
//             beta: 15,
//             viewDistance: 25,
//             depth: 40
//         }
//     },

//     title: {
//         text: 'Kerugian Negara vs. Pemulihan Aset'
//     },

//     xAxis: {
//         categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei']
//     },

//     yAxis: {
//         allowDecimals: false,
//         min: 0,
//         title: {
//             text: 'Nila [Miliar]'
//         }
//     },

//     tooltip: {
//         headerFormat: '<b>{point.key}</b><br>',
//         pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
//     },

//     plotOptions: {
//         column: {
//             stacking: 'normal',
//             depth: 20
//         }
//     },

//     series: [{
//         name: 'Nilai Kontrak',
//         data: [23, 14, 17, 22, 25],
//         stack: 'male'
//     }, {
//         name: ' ',
//         data: [0, 0, 0, 0, 0],
//         stack: 'male'
//     }, {
//         name: 'Kerugian Negara',
//         data: [5, 2, 3, 5, 1],
//         stack: 'female'
//     }, {
//         name: 'Pemulihan Aset',
//         data: [9, 8, 8, 11, 13],
//         stack: 'female'
//     }]
// });

Highcharts.chart('pemulihan', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Kerugian Negara vs. Pemulihan Aset'
    },
    subtitle: {
        text: 'Sumber: DirDik Jampidsus'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total (Rp.)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Kerugian Negara',
        data: [89.9, 79.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 0, 0, 0]

    }, {
        name: 'Pemulihan Aset',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 0, 0, 0]

    }, ]
});

</script>