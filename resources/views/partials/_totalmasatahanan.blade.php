  <style type="text/css">
.highcharts-tooltip h3 {
    margin: 0.3em 0;
}
</style>

<script src="{{ asset('bower_components/highcharts/highcharts.js')}}"></script>
<script src="{{ asset('bower_components/highcharts/highcharts-more.js')}}"></script>
<script src="{{ asset('bower_components/highcharts/modules/exporting.js')}}"></script>

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
        text: 'Sumber: DirDik Jampidsus'
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
        pointFormat: '<tr><th colspan="2"><h3>{point.name}</h3></th></tr>' +
            '<tr><th>Kategori Subyek:</th><td>{point.kategori}</td></tr>' +
            '<tr><th>Obyek Pidana:</th><td>{point.obyek}</td></tr>' +
            '<tr><th>Kategori Obyek:</th><td>{point.pasal}</td></tr>',
        footerFormat: '</table>',
        followPointer: true
    },

    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.inisial}'
            }
        }
    },

    series: [{
        data: [
            @foreach ($masa_tahanan as $tahanan)
                { x: {{ $tahanan->masa_hukuman }}, y: {{ $tahanan->masa_hukuman }}, z: {{ $tahanan->masa_hukuman }}, inisial: '{{ $tahanan->nama_terlapor }}', name: '{{ $tahanan->nama_terlapor }}', kategori: '{{ $tahanan->kategori_subyek }}', obyek: '{{ $tahanan->obyek_pidana }}', pasal: '{{ $tahanan->kategori_obyek }}' },
            @endforeach
        ]
    }]

});
</script>