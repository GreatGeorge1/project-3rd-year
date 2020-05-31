@extends('_layouts/default/index')


<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
        <h3>Створити предмет</h3>
    </div>
    <!-- bradcam_area_end -->


@section('content')
    <div class="container">
        <dic class="raw">
    @include('_layouts.default.partials.errors')
    <br>
    <section class="section-form">
        {{Form::open(array('action' => 'storeSubject', 'method'=>'post'))}}
            {{Form::label('subject_name', 'Назва предмету:')}}
            {{Form::text('subject_name')}}

            {{Form::submit('Додати',array('class'=>'btn btn-success button'))}}

        {{ Form::close() }}
    </section>
    <br>
    </div>
    </div>
@stop