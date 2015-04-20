{!!Form::inline()!!}
{!!
ControlGroup::generate(
Form::label('control', 'Control Group'),
Form::text('control'),
Form::help('Here is a help text')
)
!!}
{!!Form::close()!!}