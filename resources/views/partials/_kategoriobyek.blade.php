<script src="{{ asset('plugins/highcharts/code/highcharts.src.js')}}"></script>
<script src="{{ asset('plugins/highcharts/code/highcharts-3d.js')}}"></script>
<script src="{{ asset('plugins/highcharts/code/modules/exporting.js')}}"></script>

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
            name: 'Delivered amount',
            data: [
                ['Kerugian Uang Negara', 2],
                ['Suap', 9],
                ['Penggelapan Dalam Jabatan', 4],
                ['Pemerasan-Pungli', 1],
                ['Perbuatan Curang', 3],
                ['Konflik Kepentingan PBJ', 4],
                ['Gratifikasi', 4],
                ['TP Korupsi Lain (yang terkait)', 1]
            ]
        }]
    });
</script>