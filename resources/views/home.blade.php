<h1> I am Home page </h1>
<a href="/about/vishal"> about</a><br>
<a href="/vishal"> contact</a>
<div>
    <h1>{{$name}}</h1>
</div>
<div>
    @foreach ($users as $user)
        <h1>{{$user}}</h1>
    @endforeach
</div>
