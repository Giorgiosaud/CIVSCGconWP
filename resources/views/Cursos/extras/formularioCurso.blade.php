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
Form::hidden('curso_slug',$curso->post_name)
!!}

{!!Form::close()!!}