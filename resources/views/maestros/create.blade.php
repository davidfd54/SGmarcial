@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Maestro
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'maestros.store']) !!}

                        @include('maestros.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
