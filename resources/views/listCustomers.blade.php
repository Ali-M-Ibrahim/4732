<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        table,th,tr,td{
            padding: 10px;
            border:1px solid black;
        }
    </style>
</head>
<body>

<h1>{{ $title }}</h1>

<a href="{{Route('add-customer')}}">Create</a>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Actions</th>
    </tr>
    </thead>

    <tbody>

    @foreach($mylist as $obj)
        <tr>
            <td>{{$obj->id}}</td>
            <td>{{$obj->first_name}}</td>
            <td>{{$obj->last_name}}</td>
            <td>
                <a href="{{route('view-single-customer',['id'=>$obj->id])}}">View</a>
                <a href="{{route('edit-customer',['id'=>$obj->id])}}">Edit</a>
                <a href="{{route('delete-customer2',['id'=>$obj->id])}}">Delete</a>



                <form action="{{route('delete-customer',['id'=>$obj->id])}}"  method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>




            </td>
        </tr>
    @endforeach

    </tbody>

</table>


<div>
    <h1>Name: {{$name}}</h1>
    <h1>Telephone: {{$telephone}}</h1>
</div>

</body>
</html>
