<h1>
    Create New User!
</h1>

<form method="POST" action="/create">
{{ csrf_field()  }}
    <div>
    <input name="name" placeholder="Name...." >
    </div>
    <div>
    <input name="username" placeholder="Username....">
    </div>
    <div>
    <input name="password" placeholder="Password...." type="password">
    </div>
    <div>
        <button type="submit">Create</button> 
    </div>
</form>


@foreach($errors->all() as $error )
    <li>{{$error}}</li>
@endforeach