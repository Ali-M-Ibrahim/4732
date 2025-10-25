<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <style>
        form{
            width: 300px;
            border: 1px solid black;
            margin: auto;
            padding: 10px;
        }

        input, textarea{
            width: 95%;
            margin: 5px;
        }

        .btn{
            background: green;
            border: 1px solid green;
            color: white;
            padding: 10px;
            margin-top: 10px;
        }

        h1{
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Edit Customer</h1>

<form action="{{route('customer.update',['customer'=>$obj->id])}}" method="post">
    @csrf
    @method('put')
    <div>
        <label for="first_name">First Name</label>
        <input value="{{$obj->first_name}}" type="text" id="first_name" name="first_name" />
    </div>

    <div>
        <label for="last_name">Last Name</label>
        <input  value="{{$obj->last_name}}" type="text" id="last_name" name="last_name" />
    </div>


    <div>
        <label for="address">Address</label>
        <textarea  id="address" name="address" >{{$obj->address}}</textarea>
    </div>

    <input class="btn" type="submit" value="Save" />

    <a href="{{route('customer.index')}}">Go Back</a>

</form>

</body>
</html>
