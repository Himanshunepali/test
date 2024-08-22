<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    

 <table border=5 class='table'>
 <a href='{{ route("users.create") }}'class="btn btn-outline-primary">Create New</button></a>

<thead>
    <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
</thead>

<tbody>
    @forelse($users as $user)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$user->name }}</td>
        <td>{{$user->email }}</td>
        <td><a href=" {{ asset('uploads').'/'.$user->image}}" target='_blank'> <img src="{{ asset('uploads').'/'.$user->image}}" width=='50' height='50' alt=""></a></td>
        <td><a href="{{ route('users.edit', $user->id)}}" class="btn btn-secondary" class="btn btn-outline-primary">Edit</a></td>
        <td><a href="{{ route('users.delete', $user->id)}}" class="btn btn-danger" class="btn btn-outline-primary">Delete</a></td>
    </tr>
    @empty
    <td>No Data</td>
    @endforelse
</tbody>
 </table>
    
</body>
</html>