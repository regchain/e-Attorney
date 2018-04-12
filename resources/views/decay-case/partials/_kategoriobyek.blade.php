<script src="{{ asset('bower_components/highcharts/highcharts.src.js')}}"></script>
<script src="{{ asset('bower_components/highcharts/highcharts-3d.js')}}"></script>
<script src="{{ asset('bower_components/highcharts/modules/exporting.js')}}"></script>

<div id="kategoriobyek" style="height: 400px"></div>
<script type="text/javascript">
    Highcharts.chart('kategoriobyek', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Kategori Obyek Pidana'
        },
        subtitle: {
            text: 'Klasifikasi Pasal Disangkakan'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Total Obyek Pidana',
            data: [
                @foreach ($obyek_pidana as $obyek)
                    ['{{ $obyek->kategori_pasal }}',{{ $obyek->total }}],
                @endforeach
            ]
        }]
    });
</script>