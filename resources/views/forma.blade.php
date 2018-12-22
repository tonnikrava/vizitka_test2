@extends('default.maintemplate')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="container">


        {!! Form::open(['url' => route('forma'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}


        <div class="form-group row">

            {!! Form::label('name','Название',['class' => 'control-label col-md-2'])   !!}
            <div class="col-md-10">
                {!! Form::text('name',old('name'),['class' => 'form-control','placeholder'=>'Введите название страницы'])!!}
            </div>

        </div>
        <div class="form-group row">
            {!! Form::label('surname', 'Псевдоним:',['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('surname', old('surname'), ['class' => 'form-control','placeholder'=>'Фамилия']) !!}
            </div>
        </div>


        <div class="form-group row">
            {!! Form::label('country', 'Псевдоним:',['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('country', old('country'), ['class' => 'form-control','placeholder'=>'страна ']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('countryviza', 'Псевдоним:',['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('countryviza', old('countryviza'), ['class' => 'form-control','placeholder'=>'странаviza ']) !!}
            </div>
        </div>






        <div class="form-group row">
            <label class="control-label col-md-2">Изображение:</label>
            <div class="col-md-10">
                <input type="file" class="filestyle form-control" name="photo[]">
            </div>
        </div>

        <div class="form-group row">
            <label for="imagess" class="control-label col-md-2">Изображение:</label>
            <div class="col-md-10">
                <input type="file" class="filestyle form-control" name="photo[]">
            </div>
        </div>

        <div class="form-group row">
            <label for="imagess" class="control-label col-md-2">Изображение:</label>
            <div class="col-md-10">
                <input type="file" class="filestyle form-control" name="photo[]">
            </div>
        </div>

        <div class="form-group row">
            <label for="imagess" class="control-label col-md-2">Изображение:</label>
            <div class="col-md-10">
                <input type="file" class="filestyle form-control" name="photo[]"  >
            </div>
        </div>

        <div class="form-group row">
            <label for="imagess" class="control-label col-md-2">Изображение:</label>
            <div class="col-md-10">
                <input type="file" class="filestyle" name="photo[]" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
            </div>
        </div>



        {!! Form::close() !!}

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>

        </div>








@endsection

@if (count($errors) > 0)
    <div style="width:200px; height: 400px; color: #00acee; position: absolute;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div style="width:200px; height: 400px; color: #00acee; position: absolute;">
        {{ session('status') }}
    </div>
@endif

@section('footer')
    @parent
@endsection