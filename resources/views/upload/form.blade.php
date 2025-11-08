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

        .error{
            color:red;
        }
    </style>
</head>
<body>

<h1>Add Image</h1>

<form action="{{route('method3')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="document">Document</label>
        <input type="file" id="document" name="document"  />
        @error('document')
        <div class="error">{{$message}}</div>
        @enderror
    </div>
    <input class="btn" type="submit" value="Save" />
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


</body>
</html>
