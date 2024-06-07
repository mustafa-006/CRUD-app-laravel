
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>   @extends('Layouts.layout')
 
    @section('page')
    <main class="p-4 container">
        
        <table class="table">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Price</th>
                    <th>Actions</th>
                   
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $theAnimal)
                <tr>
                    <td>{{$theAnimal["type"]}}</td>
                    <td>{{$theAnimal["name"]}}</td>
                    <td>{{$theAnimal["age"]}}</td>
                    <td>{{$theAnimal["price"]}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{url("/animal/update/" . $theAnimal["id"])}}">update</a>
                        <a class="btn btn-danger" href="{{url("/animal/delete/" . $theAnimal["id"])}}">delete</a>
                    </td>
                    </tr>
                @empty <h1>There is no data</h1>
                    
                @endforelse
             
            </tbody>
        </table>
    </main>


    @endsection

</body>
</html>

