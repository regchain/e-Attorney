

<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"> DIREKTORAT PIDSUS&nbsp; <i class="glyphicon glyphicon-menu-right
	">&nbsp;</i></button>

	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="media">
					<div class="panel-body">
						<h4>
							<a href="home"><img src="{{ asset('dist/img/logo-kejaksaan.png') }}" height="80" class="text-titlecase"></a>
							<div class="pull-right">
								<a href="{{ route('rp1.index') }}" class="btn btn-app btn-primary text-lime "><i class="fa fa-eye"></i> Penyidikan</a>                    
								<a href="master_penuntutan" class="btn btn-app btn-primary text-lime"><i class="fa fa-balance-scale"></i> Penuntutan</a>                    
								<a href="master_penuntutan" class="btn btn-app btn-primary text-lime"><i class="fa fa-gavel"></i> Eksekusi</a>                    
								<a href="master_penuntutan" class="btn btn-app btn-primary text-lime"><i class="fa fa-book"></i> Eksaminasi</a>   
							</div>
							<div class="push-left" >
								@yield('maintitle')
								<small> &nbsp; @yield('mainsubtitle')</small>
							</div>
						</h4>
					</div>
				</div>    </div>
			</div>
		</div>