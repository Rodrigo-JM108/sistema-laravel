@extends('layouts.app')

@section('content')
<div class="container">  
    <form action="{{url('/empleado/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('empleado.form',['modo'=>'Actualizar'])
    </form>
</div>
@endsection