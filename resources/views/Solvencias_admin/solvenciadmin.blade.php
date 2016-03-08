@extends('Plantillas.principaladmin')

@section('contenido')

				
	<tr>
	 	<td align="center">
	 		<h2 align="center">  Usuarios del Sistema de Gestión de Agremiados CIVSCG</h2>
			<table class="table table-bordered">	
				
				<tr class="tex_col">
					<td align="center">Nombre</td>
					<td align="center">Correo e-mail</td>
					<td align="center">Fecha de Ingreso al Sistema</td>

				</tr>

				@foreach ($users as $user)
				
				<tr align="center">

					<td>{!!$user->name!!} </td>
					<td>{!!$user->email!!} </td>
					<td>{!!$user->updated_at->format('d/m/Y')!!} </td>


				
				@endforeach	
					
				</tr>		
			</table>		
		</td>
	</tr>
</table>

              

@endsection