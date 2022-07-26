<h1>{{$modo}} empleado</h1>

@if (count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error )
        <li> {{$error}}</li>
        @endforeach
    </ul>
</div>   
@endif

<div class="form-group mt-2">
    <label for="Nombre">Escribe el nombre:</label>
    <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">
</div>
<div class="form-group mt-2">
    <label for="ApellidoPaterno">Escribe el apellido paterno:</label>
    <input  class="form-control" type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}">
</div>
<div class="form-group mt-2">
    <label for="ApellidoMaterno">Escribe el apellido materno:</label>
    <input class="form-control" type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
</div>
<div class="form-group mt-2">
    <label for="Correo">Escribe el correo electronico:</label>
    <input class="form-control" type="email" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
</div>
<div class="form-group mt-2">
    <label for="Foto">Elija la foto:</label>
    @if(isset($empleado->Foto))
        <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" alt="Foto" width="100px">
    @endif
    <input class="form-control" type="file" name="Foto" id="Foto" value=""">
</div>
<input class="btn btn-success mt-3" type="submit" value="{{$modo}} datos" >
<a class="btn btn-primary mt-3" href="{{url('empleado/')}}">Regresar</a>
