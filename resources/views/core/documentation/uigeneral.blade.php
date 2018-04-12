@extends('templates.master.user')

@section('title', '')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
  <style>
      .color-palette {
        height: 35px;
        line-height: 35px;
        text-align: center;
      }

      .color-palette-set {
        margin-bottom: 15px;
      }

      .color-palette span {
        display: none;
        font-size: 12px;
      }

      .color-palette:hover span {
        display: block;
      }

      .color-palette-box h4 {
        position: absolute;
        top: 100%;
        left: 25px;
        margin-top: -40px;
        color: rgba(255, 255, 255, 0.8);
        font-size: 12px;
        display: block;
        z-index: 7;
      }
    </style>
@endsection

@section('content')
  
    <!-- COLOR PALETTE -->
    <div class="box box-default color-palette-box">
      <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-tag"></i> Color Palette</h3>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Primary</h4>

            <div class="color-palette-set">
              <div class="bg-light-blue disabled color-palette"><span>Disabled</span></div>
              <div class="bg-light-blue color-palette"><span>#3c8dbc</span></div>
              <div class="bg-light-blue-active color-palette"><span>Active</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Info</h4>

            <div class="color-palette-set">
              <div class="bg-aqua disabled color-palette"><span>Disabled</span></div>
              <div class="bg-aqua color-palette"><span>#00c0ef</span></div>
              <div class="bg-aqua-active color-palette"><span>Active</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Success</h4>

            <div class="color-palette-set">
              <div class="bg-green disabled color-palette"><span>Disabled</span></div>
              <div class="bg-green color-palette"><span>#00a65a</span></div>
              <div class="bg-green-active color-palette"><span>Active</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Warning</h4>

            <div class="color-palette-set">
              <div class="bg-yellow disabled color-palette"><span>Disabled</span></div>
              <div class="bg-yellow color-palette"><span>#f39c12</span></div>
              <div class="bg-yellow-active color-palette"><span>Active</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Danger</h4>

            <div class="color-palette-set">
              <div class="bg-red disabled color-palette"><span>Disabled</span></div>
              <div class="bg-red color-palette"><span>#f56954</span></div>
              <div class="bg-red-active color-palette"><span>Active</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Gray</h4>

            <div class="color-palette-set">
              <div class="bg-gray disabled color-palette"><span>Disabled</span></div>
              <div class="bg-gray color-palette"><span>#d2d6de</span></div>
              <div class="bg-gray-active color-palette"><span>Active</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Navy</h4>

            <div class="color-palette-set">
              <div class="bg-navy disabled color-palette"><span>Disabled</span></div>
              <div class="bg-navy color-palette"><span>#001F3F</span></div>
              <div class="bg-navy-active color-palette"><span>Active</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Teal</h4>

            <div class="color-palette-set">
              <div class="bg-teal disabled color-palette"><span>Disabled</span></div>
              <div class="bg-teal color-palette"><span>#39CCCC</span></div>
              <div class="bg-teal-active color-palette"><span>Active</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Purple</h4>

            <div class="color-palette-set">
              <div class="bg-purple disabled color-palette"><span>Disabled</span></div>
              <div class="bg-purple color-palette"><span>#605ca8</span></div>
              <div class="bg-purple-active color-palette"><span>Active</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Orange</h4>

            <div class="color-palette-set">
              <div class="bg-orange disabled color-palette"><span>Disabled</span></div>
              <div class="bg-orange color-palette"><span>#ff851b</span></div>
              <div class="bg-orange-active color-palette"><span>Active</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Maroon</h4>

            <div class="color-palette-set">
              <div class="bg-maroon disabled color-palette"><span>Disabled</span></div>
              <div class="bg-maroon color-palette"><span>#D81B60</span></div>
              <div class="bg-maroon-active color-palette"><span>Active</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Black</h4>

            <div class="color-palette-set">
              <div class="bg-black disabled color-palette"><span>Disabled</span></div>
              <div class="bg-black color-palette"><span>#111111</span></div>
              <div class="bg-black-active color-palette"><span>Active</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <!-- START ALERTS AND CALLOUTS -->
    <h2 class="page-header">Alerts and Callouts</h2>

    <div class="row">
      <div class="col-md-6">
        <div class="box box-default">
          <div class="box-header with-border">
            <i class="fa fa-warning"></i>

            <h3 class="box-title">Alerts</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-ban"></i> Alert!</h4>
              Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
              soul, like these sweet mornings of spring which I enjoy with my whole heart.
            </div>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-info"></i> Alert!</h4>
              Info alert preview. This alert is dismissable.
            </div>
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-warning"></i> Alert!</h4>
              Warning alert preview. This alert is dismissable.
            </div>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Alert!</h4>
              Success alert preview. This alert is dismissable.
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->

      <div class="col-md-6">
        <div class="box box-default">
          <div class="box-header with-border">
            <i class="fa fa-bullhorn"></i>

            <h3 class="box-title">Callouts</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="callout callout-danger">
              <h4>I am a danger callout!</h4>

              <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="callout callout-info">
              <h4>I am an info callout!</h4>

              <p>Follow the steps to continue to payment.</p>
            </div>
            <div class="callout callout-warning">
              <h4>I am a warning callout!</h4>

              <p>This is a yellow callout.</p>
            </div>
            <div class="callout callout-success">
              <h4>I am a success callout!</h4>

              <p>This is a green callout.</p>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END ALERTS AND CALLOUTS -->

    <!-- START TYPOGRAPHY -->
    <h2 class="page-header">Typography</h2>

    <div class="row">
      <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Headlines</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <h1>h1. Bootstrap heading</h1>

            <h2>h2. Bootstrap heading</h2>

            <h3>h3. Bootstrap heading</h3>
            <h4>h4. Bootstrap heading</h4>
            <h5>h5. Bootstrap heading</h5>
            <h6>h6. Bootstrap heading</h6>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Text Emphasis</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <p class="lead">Lead to emphasize importance</p>

            <p class="text-green">Text green to emphasize success</p>

            <p class="text-aqua">Text aqua to emphasize info</p>

            <p class="text-light-blue">Text light blue to emphasize info (2)</p>

            <p class="text-red">Text red to emphasize danger</p>

            <p class="text-yellow">Text yellow to emphasize warning</p>

            <p class="text-muted">Text muted to emphasize general</p>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Block Quotes</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Block Quotes Pulled Right</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body clearfix">
            <blockquote class="pull-right">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-4">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Unordered List</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ul>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
      <div class="col-md-4">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Ordered Lists</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ol>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ol>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ol>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ol>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
      <div class="col-md-4">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Unstyled List</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ul class="list-unstyled">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Description</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <dl>
              <dt>Description lists</dt>
              <dd>A description list is perfect for defining terms.</dd>
              <dt>Euismod</dt>
              <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd>Donec id elit non mi porta gravida at eget metus.</dd>
              <dt>Malesuada porta</dt>
              <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            </dl>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Description Horizontal</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <dl class="dl-horizontal">
              <dt>Description lists</dt>
              <dd>A description list is perfect for defining terms.</dd>
              <dt>Euismod</dt>
              <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd>Donec id elit non mi porta gravida at eget metus.</dd>
              <dt>Malesuada porta</dt>
              <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
              <dt>Felis euismod semper eget lacinia</dt>
              <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                sit amet risus.
              </dd>
            </dl>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- END TYPOGRAPHY -->


@endsection

@section('scripts')
  {{-- expr --}}
@endsection

