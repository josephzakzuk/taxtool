@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Predio
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($predio, ['route' => ['predios.update', $predio->id], 'method' => 'patch']) !!}

                        @include('predios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection