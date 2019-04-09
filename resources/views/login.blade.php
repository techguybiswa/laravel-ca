<h1>
   Login User
</h1>

<form method="POST" action="/login">
{{ csrf_field()  }}
{{ method_field('PATCH') }}
    <div>
    <input name="username" placeholder="Username....">
    </div>
    <div>
    <input name="password" placeholder="Password...." type="password">
    </div>
    <div>
        <button type="submit">Login</button> 
    </div>
</form>


@foreach($errors->all() as $error )
    <li>{{$error}}</li>
@endforeach