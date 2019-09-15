@extends('app')

@section('content')
<h1>
    About page: Hello People!
</h1>

@if(count($people))

<h3>People Like:</h3>

<ul>
    @foreach($people as $person)
        <li>{{ $person }}</li>
    @endforeach

</ul>
@endif
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam blanditiis ex magnam pariatur porro quidem reiciendis saepe suscipit voluptas! Accusamus asperiores atque beatae dicta earum, ipsa laudantium libero maiores nesciunt odio odit, perferendis, porro repellat reprehenderit sit! Consequuntur deserunt ducimus fuga minima minus, reprehenderit sequi! Assumenda dolor sit voluptate!   </p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam blanditiis ex magnam pariatur porro quidem reiciendis saepe suscipit voluptas! Accusamus asperiores atque beatae dicta earum, ipsa laudantium libero maiores nesciunt odio odit, perferendis, porro repellat reprehenderit sit! Consequuntur deserunt ducimus fuga minima minus, reprehenderit sequi! Assumenda dolor sit voluptate!</p>

@stop

