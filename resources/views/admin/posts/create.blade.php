@extends('template')

@section('content')
    <h1>Criar nova postagem</h1>

    {!! Form::open(['route'=>'admin.posts.store','method'=>'post']) !!}

    <div class="form-group">
        {!! Form::label('title','Título:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('comment','Comentário:') !!}
        {!! Form::textarea('comment',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
         {!! Form::submit('Criar Postagem',null,['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}









@endsection