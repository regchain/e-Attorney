<style>
#container {
    height: 600px; 
    min-width: 310px; 
    max-width: 900px;
    margin: 0 auto;
}
</style>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

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
            text: 'Total (Rp.)'
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
                {{ $aset->kerugian_negara }},
            @endforeach
        ]

    }, {
        name: 'Pemulihan Aset',
        data: [
            @foreach ($kerugian_pemulihan as $aset)
                {{ $aset->pemulihan_aset }},
            @endforeach
        ]

    }, ]
});

</script>