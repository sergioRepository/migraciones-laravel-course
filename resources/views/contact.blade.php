@extends('master')
@section('contect')
<h1>contact1</h1>
{{$name}}
@if ($name != "Daniel" )
<br>
tu nombre no es Daniel
@else
<h2>tu nombre es Daniel</h2>
@endif
<ul>
@foreach ([1,2,3,4,5,6 ] as $item)
<li>{{$item}}</li>
@endforeach
</ul>

@endsection


