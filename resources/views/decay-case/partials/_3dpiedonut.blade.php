
<script src="{{ asset('bower_components/highcharts/highcharts.src.js')}}"></script>
<script src="{{ asset('bower_components/highcharts/highcharts-3d.js')}}"></script>
<script src="{{ asset('bower_components/highcharts/modules/exporting.js')}}"></script>


<div id="3dpiedonut" style="height: 400px"></div>


		<script type="text/javascript">

Highcharts.chart('3dpiedonut', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: 'Kategori Jabatan Subyek Hukum'
    },
    subtitle: {
        text: '3D donut in Highcharts'
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Delivered amount',
        data: [
            ['Bananas', 8],
            ['Kiwi', 3],
            ['Mixed nuts', 1],
            ['Oranges', 6],
            ['Apples', 8],
            ['Pears', 4],
            ['Clementines', 4],
            ['Reddish (bag)', 1],
            ['Grapes (bunch)', 1]
        ]
    }]
});
		</script>
