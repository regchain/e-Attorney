@extends('layouts.pidsus.operator')

@section('title', 'Dir.Dik')

@section('stylesheet')
    <link rel="stylesheet" href="plugins/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="plugins/scripts/demos.js"></script>
    <script type="text/javascript" src="plugins/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="plugins/jqwidgets/jqxcolorpicker.js"></script>
    <script type="text/javascript" src="plugins/jqwidgets/jqxradiobutton.js"></script>
    <script type="text/javascript" src="plugins/jqwidgets/jqxdropdownbutton.js"></script>
    <script type="text/javascript" src="plugins/jqwidgets/jqxscrollview.js"></script>
    <script type="text/javascript" src="plugins/jqwidgets/jqxbuttons.js"></script>
    <style type="text/css">
        .photo {
            width: 500px;
            height: 350px;
            background-color: #000;
            background-position: center;
            background-repeat: no-repeat;
        }
        .gallery {
            border: 15px solid #ffaabb;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }
    </style>
     <script type="text/javascript">
            function getTextElementByColor(color) {
                if (color == 'transparent' || color.hex == "") {
                    return $("<div style='text-shadow: none; position: relative; padding-bottom: 2px; margin-top: 2px;'>transparent</div>");
                }
                var element = $("<div style='text-shadow: none; position: relative; padding-bottom: 2px; margin-top: 2px;'>#" + color.hex + "</div>");
                var nThreshold = 105;
                var bgDelta = (color.r * 0.299) + (color.g * 0.587) + (color.b * 0.114);
                var foreColor = (255 - bgDelta < nThreshold) ? 'Black' : 'White';
                element.css('color', foreColor);
                element.css('background', "#" + color.hex);
                element.addClass('jqx-rc-all');
                return element;
            }
            $(document).ready(function () {
                $("#colorPicker").on('colorchange', function (event) {
                    $("#dropDownButton").jqxDropDownButton('setContent', getTextElementByColor(event.args.color));
                    $('#photoGallery').css('border-color', "#" + event.args.color.hex);
                });
                $("#colorPicker").jqxColorPicker({ color: "ffaabb", colorMode: 'hue', width: 220, height: 220});
                $("#dropDownButton").jqxDropDownButton({ width: 150, height: 22});
                $("#dropDownButton").jqxDropDownButton('setContent', getTextElementByColor(new $.jqx.color({ hex: "ffaabb" })));
                $('#photoGallery').jqxScrollView({ slideShow: true, width: 500, height: 350, showButtons: false});
            });
        </script>


@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Dashboard')

@section('content')

<div id='content'>
       
        <div id='jqxWidget'>
            <div class="gallery" id="photoGallery">
                
<table height="450" width="300" align="center">
    <caption>table title and/or explanatory text</caption>
        <tr height='90%'>
            <th width="25%" bgcolor="#009A31">&nbsp; x</th>
            <th width="25%" bgcolor="84CF96">&nbsp;</th>
            <th width="25%" bgcolor="C6E7CE">&nbsp;</th>
            <th width="25%" bgcolor="CEFFCE">&nbsp;</th>
        </tr>
        <tr>
            <td>'009A31'</td>
            <td>'84CF96'</td>
            <td>'C6E7CE'</td>
            <td>'CEFFCE'</td>
        </tr>
</table>
                
        </div>
    </div>
    </div>
            <br />
            <label style="margin-left: 5px; font-size: 12px; font-family: Verdana;">Select Frame color</label>
            <br />
            <div style="margin: 3px; float: left;" id="dropDownButton">
                <div style="padding: 3px;">
                    <div id="colorPicker">
                    </div>
                </div>
            </div>



      

@stop

@section('script')

@endsection







