@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Day
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($day, ['route' => ['days.update', $day->id], 'method' => 'patch']) !!}

                        @include('days.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection