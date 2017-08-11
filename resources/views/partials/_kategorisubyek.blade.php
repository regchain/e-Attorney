
<script src="{{ asset('plugins/highcharts/code/highcharts.src.js')}}"></script>
<script src="{{ asset('plugins/highcharts/code/highcharts-3d.js')}}"></script>
<script src="{{ asset('plugins/highcharts/code/modules/exporting.js')}}"></script>


<div id="kategorisubyek" style="height: 400px"></div>


		<script type="text/javascript">

Highcharts.chart('kategorisubyek', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: 'Kategori Subyek Hukum'
    },
    subtitle: {
        text: 'Jabatan Resmi Subyek Hukum'
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
            ['Bupati / Walikota', 8],
            ['Gubernur', 3],
            ['Hakim', 1],
            ['Jaksa', 1],
            ['Pengacara', 2],
            ['PNS', 11],
            ['Swasta', 22],
            ['BUMN (D)', 7],
            ['DPR (D)', 5]
        ]
    }]
});
		</script>
