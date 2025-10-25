<!DOCTYPE html>
<html>
<head>
    <style>
        table,th,tr,td{
            padding: 10px;
            border:1px solid black;
        }
    </style>
</head>
<body>

<h1>List Customers</h1>

<a href="{{route('customer.create')}}">Create</a>
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
                <a href="{{route('customer.show',['customer'=>$obj->id])}}">View</a>
                <a href="{{route('customer.edit',['customer'=>$obj->id])}}">Edit</a>
                <a href="{{route('deleteCustomer',['customer'=>$obj->id])}}">Delete</a>
                <form action="{{route('customer.destroy',['customer'=>$obj->id])}}"  method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>




            </td>
        </tr>
    @endforeach

    </tbody>

</table>
</body>
</html>
