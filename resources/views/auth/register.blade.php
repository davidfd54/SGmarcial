@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">

  <h1 class="box-title">{{ __('Registro') }}</h1>
                <div class="box box-primary">

{!! Form::open(['route' => 'register']) !!}

                        @csrf
  <!--Nombres -->
<div class="form-group col-sm-6">
  <div class="">
     {!! Form::label('nombre1', 'Nombres:') !!}
  </div>
  <div >
     <div class="col-md-5">
      <input id="nombre1" type="text" class="form-control{{ $errors->has('nombre1') ? ' is-invalid' : '' }}" name="nombre1" value="{{ old('nombre1') }}" required autofocus>

       @if ($errors->has('nombre1'))
       <span class="invalid-feedback" role="alert">
       <strong>{{ $errors->first('nombre1') }}</strong>
       </span>
       @endif
     </div>

    <div class="col-md-5">
     <input id="nombre2" type="text" class="form-control{{ $errors->has('nombre2') ? ' is-invalid' : '' }}" name="nombre2" value="{{ old('nombre2') }}" required autofocus>

     @if ($errors->has('nombre2'))
     <span class="invalid-feedback" role="alert">
     <strong>{{ $errors->first('nombre2') }}</strong>
     </span>
     @endif
     </div>
  </div>
</div>

  <!--Apellido -->

<div class="form-group col-md-6">
  <div class="">
    {!! Form::label('apellidos', 'Apellidos:') !!}
  </div>
  <div >
     <div class="col-md-5">
      <input id="apellidoM" type="text" class="form-control{{ $errors->has('apellidoM') ? ' is-invalid' : '' }}" name="apellidoM" value="{{ old('apellidoM') }}" required autofocus>

       @if ($errors->has('apellidoM'))
       <span class="invalid-feedback" role="alert">
       <strong>{{ $errors->first('nombre1') }}</strong>
       </span>
       @endif
     </div>

    <div class="col-md-5">
     <input id="apellidoP" type="text" class="form-control{{ $errors->has('apellidoP') ? ' is-invalid' : '' }}" name="apellidoP" value="{{ old('apellidoP') }}" required autofocus>

     @if ($errors->has('apellidoP'))
     <span class="invalid-feedback" role="alert">
     <strong>{{ $errors->first('apellidoP') }}</strong>
     </span>
     @endif
     </div>
  </div>
</div>



  <!--RUT -->
<div class="form-group col-sm-6">
  <div class="">
    {!! Form::label('rut', 'Rut:') !!}
  </div>
     <div class="col-md-10">
       <input id="rut" type="text" class="form-control{{ $errors->has('rut') ? ' is-invalid' : '' }}" name="rut" value="{{ old('rut') }}" required autofocus>
       @if ($errors->has('rut'))
       <span class="invalid-feedback" role="alert">
       <strong>{{ $errors->first('rut') }}</strong>
       </span>
       @endif
     </div>
</div>


  <!--Fecha nacimiento -->

<div class="form-group col-sm-6">
  <div class="">
    {!! Form::label('fechaNacimiento', 'Fechanacimiento:') !!}
  </div>
  <div >

     <div class="col-sm-10">

       <div class="input-group date">
         <div class="input-group-addon">
           <i class="fa fa-calendar"></i>
         </div>
         <input type="date" name="fechaNacimiento" class="form-control " id="fechaNacimiento" required autofocus >
       </div>
     </div>
  </div>
</div>


@section('scripts')
    <script type="text/javascript">
        $('#fechaNacimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
          autoclose: true
        })


    </script>
@endsection




    <!--peso -->
<div class="form-group col-sm-6">

    <div class="">   {!! Form::label('peso', 'Peso: ') !!}  </div>

       <div class="col-md-5">
        <input id="peso" type="text" class="form-control{{ $errors->has('peso') ? ' is-invalid' : '' }}" name="peso" value="{{ old('peso') }}" required autofocus>

         @if ($errors->has('peso'))
         <span class="invalid-feedback" role="alert">
         <strong>{{ $errors->first('peso') }}</strong>
         </span>
         @endif
       </div>



  </div>


<!-- Email-->
  <div class="form-group col-sm-6">
<div class="">
 {!! Form::label('email', 'E-Mail: ') !!}
</div>
<div class="col-md-10">


    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>
</div>

<!-- telefono-->
  <div class="form-group col-sm-6">
<div class="">
 {!! Form::label('telefono', 'Telefono: ') !!}
</div>
<div class="col-md-10">


    <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required>

    @if ($errors->has('telefono'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('telefono') }}</strong>
        </span>
    @endif
</div>
</div>
<!-- clave-->
<div class="form-group col-sm-6">
  <div class="">
     {!! Form::label('password', 'Contraseña: ') !!}

  </div>
  <div class="col-md-6">

      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

      @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
  </div>
</div>

<!-- genero-->

<div class="form-group col-sm-6">
  <div class="">
    {!! Form::label('genero', 'Genero:') !!}

  </div>
  <div class="col-md-5">
   <input id="genero" type="text" class="form-control{{ $errors->has('genero') ? ' is-invalid' : '' }}" name="genero" value="{{ old('genero') }}" required autofocus>

   @if ($errors->has('genero'))
   <span class="invalid-feedback" role="alert">
   <strong>{{ $errors->first('genero') }}</strong>
   </span>
   @endif
   </div>
</div>



<!-- confirmar clave-->

<div class="form-group col-sm-6">
  <div class="">
  {!! Form::label('password-confirm', 'Confirmar contraseña:') !!}

</div>
    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
</div>

  <div class="form-group col-sm-12">
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! url('/') !!}" class="btn btn-default">Cancelar</a>
    </div>



                    </form>
                      {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
