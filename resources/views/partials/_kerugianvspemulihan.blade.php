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

Highcharts.chart('pemulihan', {
    chart: {
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            viewDistance: 25,
            depth: 40
        }
    },

    title: {
        text: 'Kerugian Negara vs. Pemulihan Aset'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei']
    },

    yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: 'Nila [Miliar]'
        }
    },

    tooltip: {
        headerFormat: '<b>{point.key}</b><br>',
        pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
    },

    plotOptions: {
        column: {
            stacking: 'normal',
            depth: 20
        }
    },

    series: [{
        name: 'Nilai Kontrak',
        data: [23, 14, 17, 22, 25],
        stack: 'male'
    }, {
        name: ' ',
        data: [0, 0, 0, 0, 0],
        stack: 'male'
    }, {
        name: 'Kerugian Negara',
        data: [5, 2, 3, 5, 1],
        stack: 'female'
    }, {
        name: 'Pemulihan Aset',
        data: [9, 8, 8, 11, 13],
        stack: 'female'
    }]
});


</script>