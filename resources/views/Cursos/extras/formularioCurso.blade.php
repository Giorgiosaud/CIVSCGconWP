{!!Form::horizontal()!!}
{!!
ControlGroup::generate(
Form::label('nombre', 'Nombre'),
Form::text('nombre'),
Form::help('Escriba su Nombre')
)
!!}
{!!Form::close()!!}