<style>
#container {
    height: 600px; 
    min-width: 310px; 
    max-width: 900px;
    margin: 0 auto;
}
</style>
<script src="{{ asset('bower_components/highcharts/highcharts.src.js')}}"></script>
<script src="{{ asset('bower_components/highcharts/highcharts-3d.js')}}"></script>
<script src="{{ asset('bower_components/highcharts/modules/exporting.js')}}"></script>

<div id="pemulihan" style="height: 450px"></div>
<script>

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
            @foreach ($kerugian_pemulihan as $aset)
                "{{ $nama_bulan[$aset->bulan] }}",
            @endforeach
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total (dalam Miliar.)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
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
        data: [
            @foreach ($kerugian_pemulihan as $aset)
                {{ $aset->kerugian_negara/1000000000 }},
            @endforeach
        ]

    }, {
        name: 'Pemulihan Aset',
        data: [
            @foreach ($kerugian_pemulihan as $aset)
                {{ $aset->pemulihan_aset/1000000000 }},
            @endforeach
        ]

    }, ]
});

</script>