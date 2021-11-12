@extends('adminlte::page')

@section('title', 'Frank Class')

@section('content_header')
    <h1>Crear Nueva Categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Ingrese nombre de la categoria']) !!}
                
                    @error('name')
                        <strong class="text-danger text-xs">{{$message}}</strong>
                    @enderror

                </div>

                {!! Form::submit('Crear Categoria', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop