  <style type="text/css">
.highcharts-tooltip h3 {
    margin: 0.3em 0;
}
</style>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="masatahanan" style="height: 400px; min-width: 310px; max-width: 600px; margin: 0 auto"></div>

<script type="text/javascript">
Highcharts.chart('masatahanan', {

    chart: {
        type: 'bubble',
        plotBorderWidth: 1,
        zoomType: 'xy'
    },

    legend: {
        enabled: false
    },

    title: {
        text: 'Masa Tahanan Tersangka'
    },

    subtitle: {
        text: 'Source: <a href="http://www.euromonitor.com/">Euromonitor</a> and <a href="https://data.oecd.org/">OECD</a>'
    },

    xAxis: {
        gridLineWidth: 1,
        title: {
            text: 'Jenis Masa Penahanan'
        },
        labels: {
            format: '{value} hari'
        },
        plotLines: [{
            color: 'black',
            dashStyle: 'dot',
            width: 2,
            value: 20,
            label: {
                rotation: 0,
                y: 245,
                style: {
                     fontStyle: 'italic'
                },
                text: 'Tahanan Penuntut Umum'
            },
            zIndex: 3
        }]
    },

    yAxis: {
        startOnTick: false,
        endOnTick: false,
        title: {
            text: 'Total Masa Tahanan'
        },
        labels: {
            format: '{value} hari'
        },
        maxPadding: 0.2,
        plotLines: [{
            color: 'black',
            dashStyle: 'dot',
            width: 2,
            value: 60,
            label: {
                align: 'right',
                style: {
                    fontStyle: 'italic'
                },
                text: 'Maksimal Masa Tahanan',
                x: -10
            },
            zIndex: 3
        }]
    },

    tooltip: {
        useHTML: true,
        headerFormat: '<table>',
        pointFormat: '<tr><th colspan="2"><h3>{point.country}</h3></th></tr>' +
            '<tr><th>Fat intake:</th><td>{point.x}g</td></tr>' +
            '<tr><th>Sugar intake:</th><td>{point.y}g</td></tr>' +
            '<tr><th>Obesity (adults):</th><td>{point.z}%</td></tr>',
        footerFormat: '</table>',
        followPointer: true
    },

    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },

    series: [{
        data: [
            { x: 50, y: 48, z: 13.8, name: 'BE', country: 'Tersangka 1' },
            { x: 45.5, y: 54.9, z: 14.7, name: 'DE', country: 'Tersangka 2' },
            { x: 12.8, y: 12.5, z: 15.8, name: 'FI', country: 'Tersangka 3' },
            { x: 39.4, y: 34.5, z: 12, name: 'NL', country: 'Tersangka 4' },
            { x: 45.3, y: 45.1, z: 11.8, name: 'SE', country: 'Tersangka 5' },
            { x: 41.4, y: 41.1, z: 16.6, name: 'ES', country: 'Tersangka 6' },
            { x: 39.2, y: 36.5, z: 14.5, name: 'FR', country: 'Tersangka 7' },
            { x: 18.5, y: 18.1, z: 10, name: 'NO', country: 'Tersangka 8' },
            { x: 22, y: 22.2, z: 24.7, name: 'UK', country: 'Tersangka 9' },
            { x: 30.2, y: 30.6, z: 10.4, name: 'IT', country: 'Tersangka 10' },
            { x: 10.6, y: 10, z: 16, name: 'RU', country: 'Tersangka 11' },
            { x: 34.5, y: 33.4, z: 35.3, name: 'US', country: 'Tersangka 12' },
            { x: 26.4, y: 26.8, z: 28.5, name: 'HU', country: 'Tersangka 13' },
            { x: 27.4, y: 27.8, z: 15.4, name: 'PT', country: 'Tersangka 14' },
            { x: 23, y: 23.9, z: 31.3, name: 'NZ', country: 'Tersangka 15' }
        ]
    }]

});
</script>