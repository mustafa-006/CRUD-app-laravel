
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> @extends('Layouts.layout')
    @section('page')
   

    <div class="p-4 container">
        <form class="form-group" method="POST" action="{{url("/animal/create")}}">
            @csrf
            <h2 class="text-center text-primary"> input  the  data to  create</h2>
            <label>input the type :</label>
            <input type="text" name="type" class="form-control">
            <label>input the name :</label>
            <input type="text" name="name" class="form-control">
            <label>input the age :</label>
            <input type="number" name="age" class="form-control">
            <label>input the price :</label>
            <input type="number" name="price" class="form-control">
            <input type="submit" class="btn btn-primary m-4">
        </form>
    </div>


@endsection  
</body>
</html>