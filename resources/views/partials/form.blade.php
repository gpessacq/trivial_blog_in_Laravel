<div class="form-group">
  {!! Form::label('title', 'Blog title') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('text', 'Blog text') !!}
  {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::submit($submit, ['class' => 'btn btn-primary']) !!}
</div>
