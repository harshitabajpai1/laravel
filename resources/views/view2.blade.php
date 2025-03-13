<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
     <h1>view 2</h1><br>
</div>

<!-- write php in laravel -->
@php
$a=10;
$b=20;
$c=$a+$b;

@endphp

{{$a}} <br>
{{$b}} <br>
SUM: {{$c}} <br>
{{$a+$b}}<hr>



<h1>Comments</h1>
comment: {{--$name--}}
<hr>

<h1>control structure</h1>
@php
$age=20;
@endphp

@if($age>=18)
<h3>Voter</h3>
@else
<h3>Non Voter</h3>
@endif

<hr>


<h1>Array</h1>
@php
$arr=["banana","apple","mango"];
@endphp

<ul>
    <h3>printed as list</h3>
@foreach($arr as $i)
<li>{{$i}}</li>
@endforeach
</ul>  

<hr>
<h1>Loops</h1>
<h3>for loop</h3>
@for($i=1; $i<=10; $i++)
{{$i}} <br>
@endfor

<h3>while loop</h3>
@php 
$i=1;
@endphp
@while($i<=10)
{{$i++}} <br>

@endwhile
<hr>

<h1>break</h1>
@php 
$i=1;
@endphp
@while($i<=10)
@if($i==6)
@break
@endif
{{$i++}} <br>

@endwhile

<br>

<h1>continue</h1>
@php 
$i=1;
@endphp
@while($i<=10)
@if($i==6)
@continue
@endif
{{$i++}} <br>

@endwhile
<br>
@switch($name){
        @case ("admin")
            <h1>"complete access"</h1>
            @break
        @case ("teacher")
            <h1>"limited access"</h1>
            @break
        @case ("viewer")
            <h1>view only</h1>
            @break
        @default
            <h1>enter valid url</h1>
            @break

    }
   @endswitch 
