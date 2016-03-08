@extends('Plantillas.principaladmin')

@section('contenido')

<table class="table">
				
	<tr>
	 	<td align="center">
	 	<h2>  Historial Solvencia Agremiado</h2>
			<table class="table table-bordered">	
				<tr>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>CIV</td>
					<td>Estatus</td>
					<td>Solvente desde</td>
					<td>Fecha inscripcion</td>

				</tr>
				<tr>
					<td> {!!$datosPersonales->nombre!!}</td>
					<td>{!!$datosPersonales->apellido!!}</td>
					<td>{!!$datosAgremiado->civ!!}</td>	
					<td>{!!$datosAgremiado->status!!}</td>
					<td>{!!$datosAgremiado->fecha_ultimo_pago->format('d/m/Y')!!}</td>
					<td>{!!$datosAgremiado->fecha_inscripcion->format('d/m/Y')!!}</td>	

				</tr>		
			</table>		
		</td>
	</tr>
</table>


<table class="table">
				
	<tr>
	 	<td align="center">
	 	<h2>  Periodos facturados</h2>
			<table class="table table-bordered">	
				<tr>
					<td>Nro cuotas</td>
					<td>Fecha de Pago</td>
					<td>Precio Cuota</td>
				</tr>
				  
				   @foreach ($pagos as $pago)
				<tr>
					<td>{!!$pago->nro_cuotas !!} </td>
					<td>{!!$pago->created_at->format('d/m/Y') !!}</td>
					<td> {!!$pago->monto_pago !!}</td>	
					
				</tr>
				@endforeach		
			</table>		
		</td>
	</tr>
</table>




<table class="table">
				
	<tr>
	 	<td align="center">
	 	<h2 align="left">  Periodos aun no facturados</h2>
			<table class="table table-bordered">	
				<tr>
					{{-- <td>Periodo</td> --}}
					<td align="center">Cuota Vigente Periodo</td>
					<td align="center">Monto total a facturar desde Periodo Vigente hasta la fecha</td>
					
				</tr>
				<tr>
					{{-- <td>{!!auth()->user()->numeroDeCuotasPagadas!!} </td> --}}
					<td align="center">{!!auth()->user()->UltimoMesPagado!!} </td>
					<td align="center">{!!auth()->user()->DeudaUsuario!!} Bsf </td>
					
					
				</tr>		
			</table>		
		</td>
	</tr>
</table>


@endsection