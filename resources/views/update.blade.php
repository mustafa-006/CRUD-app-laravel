<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('Layouts.layout')
    @section('page')
        <div class="p-4 container">
            <form class="form-group" method="POST" action="{{ url('/animal/update/' . $animal->id) }}">
                @csrf
                @method("PUT")
                <h2 class="text-center text-primary">Input the data to update</h2>
                <label>Input the type:</label>
                <input type="text" name="type" value="{{ $animal->type }}" class="form-control">
                <label>Input the name:</label>
                <input type="text" name="name" value="{{ $animal->name }}" class="form-control">
                <label>Input the age:</label>
                <input type="number" name="age" value="{{ $animal->age }}" class="form-control">
                <label>Input the price:</label>
                <input type="number" name="price" value="{{ $animal->price }}" class="form-control">
                <input type="submit" class="btn btn-primary m-4">
            </form>
        </div>
    @endsection
</body>
</html>
