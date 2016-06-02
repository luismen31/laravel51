@extends('app')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Usuarios</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="table_users">
							<thead>
								<tr>
									<th data-field="name" data-sortable="true">Nombre</th>									
									<th data-field="email" data-sortable="true">Email</th>									
									<th data-field="action">Acción</th>									
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>	
@stop