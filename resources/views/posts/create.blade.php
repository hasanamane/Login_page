
<div style="max-width: 600px; margin-left: auto; margin-right:auto; background-color: #1a202c">
    <h1 style="color: green; text-align: center;">Greate New Post</h1>
    <form action="{{route('post.insert')}}" method="post" style="background-color: #4a5568; text-align: center; padding: 20px;">
        @csrf
        <input type="text" name="title"  placeholder="Enter Title" style="padding: 20px;color: yellowgreen;border:none;border-bottom:2px solid  yellowgreen; background-color: #4a5568;"> <br> <br>
        <input type="text" name="body" placeholder="Enter Body" style="color: yellowgreen; padding: 20px; border:none;border-bottom:2px solid  yellowgreen; background-color: #4a5568;">  <br><br>
        <button type="submit" style="padding: 20px; color: yellowgreen;background-color: black" >SEND DATA</button>
</form>

</div>
