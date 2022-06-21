@extends('layout.default')

@section('content')

<div class="container">
 <div class="row">
  <ul>
   @foreach ($items as $item)
   <li>{{ $item }}</li>
   @endforeach
  </ul>
 </div>
</div>

@endsection('content')