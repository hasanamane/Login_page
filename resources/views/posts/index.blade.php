<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>All Posts</title>
</head>
<body>

<div style=" max-width: 600px; margin-left: auto; margin-right:auto; background-color: #1a202c">
    <a class="btn btn-danger" href="{{route('posts.delete.All')}}" role="button">DeleteAll</a>

    <a class="btn btn-danger" href="{{route('posts.truncate.All')}}" role="button" style="float:right;">TruncateAll</a>

    <table class="table" style="color:white;">
    <thead>
    <tr style="color:yellowgreen;">
        <th scope="col">ID</th>
        <th scope="col">POST</th>
        <th scope="col">BODY</th>
        <th scope="col">Effect</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>

        <th scope="row" style="color:darkgoldenrod;">{{$post->id}}</th>
        <td style="color:darkgoldenrod;">{{$post->title}}</td>
        <td style="color:darkgoldenrod;">{{$post->body}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('post.edit',$post->id)}}" role="button">edit</a>
            <a class="btn btn-danger" href="{{route('post.delete',$post->id)}}" role="button">Delete</a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
</div>

<div style="max-width:600px; margin-right: auto;margin-left: auto;">
    <a href="create" style=" text-decoration: none; background-color: yellowgreen;padding: 20px; width: 600px;"><-Back</a>
</div>
</body>

</html>




