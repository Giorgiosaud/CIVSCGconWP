@extends('Plantillas.principal')
@section('contenido')
<div class="container">
    <ul class="list-group">
        @foreach ($errors->all() as $error)
            <li class="list-group-item list-group-item-danger">{{ $error }}</li>
        @endforeach
    </ul>
    <h2 class="text-center">Contáctanos</h2>

    {!!Form::horizontal()!!}
    {!!
    ControlGroup::generate(
    Form::label('nombre', 'Nombre'),
    Form::text('nombre'),
    Form::help('Escriba su Nombre')
    )
    !!}
    {!!
    ControlGroup::generate(
    Form::label('apellido', 'Apellido(s)'),
    Form::text('apellido'),
    Form::help('Escriba su(s) Apellido(s)')
    )
    !!}
    {!!
    ControlGroup::generate(
    Form::label('cedula', 'Cedula'),
    Form::text('cedula'),
    Form::help('Escriba su Cedula')
    )
    !!}
    {!!
    ControlGroup::generate(
    Form::label('correo', 'Correo Electronico'),
    Form::text('correo'),
    Form::help('Escriba su E-Mail')
    )
    !!}
    {!!
    ControlGroup::generate(
    Form::label('telefono', 'Telefono de Contacto'),
    Form::text('telefono'),
    Form::help('Escriba su Telefono')
    )
    !!}
    {!!
    ControlGroup::generate(
    Form::label('contenido', 'Contenido'),
    Form::textarea('contenido'),
    Form::help('¿Que deseas Decirnos?')
    )
    !!}

    {!!
    Button::primary('Contáctanos')->block()->submit();
    !!}
    {!!Form::close()!!}

</div>
@endsection