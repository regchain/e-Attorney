<script src="{{ asset('bower_components/highcharts/highcharts.src.js')}}"></script>
<script src="{{ asset('bower_components/highcharts/highcharts-3d.js')}}"></script>
<script src="{{ asset('bower_components/highcharts/modules/exporting.js')}}"></script>

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
                name: 'Total Subyek Hukum',
                data: [
                    @foreach ($subyek_hukum as $subyek)
                        ['{{ $subyek->name }}',{{ $subyek->total }}],
                    @endforeach
                ]
            }]
        });
	</script>