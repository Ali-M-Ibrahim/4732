<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
    </tr>
    </thead>

    <tbody>
    @foreach($data as $obj)

        <tr>
            <td>{{$obj->id}}</td>
            <td>{{$obj->name}}</td>
            <td><img  width="150" height="150" src="{{asset($obj->path)}}" /></td>
        </tr>
    @endforeach
    </tbody>
</table>
