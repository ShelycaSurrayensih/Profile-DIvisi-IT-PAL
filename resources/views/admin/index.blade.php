@extends('admin.layouts.master')
@section('content')
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h1 class="text-white pb-2 fw-bold">Dashboard</h1>
								<h3 class="text-white op-7 mb-2">Selamat datang di halaman utama {{$user -> name}}</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="thumb" align="center"><img src="assets/images/background/image-22.jpg" alt="" style="height: 645px!important;width: 1630px!important;"></div>
			</div>
@endsection
