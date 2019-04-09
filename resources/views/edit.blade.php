<h1>
    Edit Project
</h1>

<form method="POST" action="/user/{{$project->id}}">
{{ csrf_field()  }}
{{ method_field('PATCH') }}
    <div>
    <input name="title" placeholder="Title...." value="{{$project->title}}">
    </div>
    <div>
    <textarea name="description" placeholder="Description..." >\
    {{$project->description}}
    </textarea>
    </div>
    <div>
        <button type="submit">Update</button> 
    </div>
</form>


<form method="POST" action="/projects/{{$project->id}}">
{{ csrf_field()  }}
{{ method_field('DELETE') }}

        <button type="submit" style="color: red">Delete</button> 

</form>
@foreach($errors->all() as $error )
    <li>{{$error}}</li>
@endforeach