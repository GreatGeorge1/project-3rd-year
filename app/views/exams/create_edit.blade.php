@extends('_layouts/default/index')



@section('content')
        <div class="bradcam_area breadcam_bg overlay2">
        @if(isset($exam))
        <h3>Редагування</h3>
        @else
        <h3>Створення тесту</h3>
        @endif
        </div>

@include('_layouts.default.partials.errors')
<div class="container">
    <div class="raw">
    @if(isset($exam))
        {{Form::model($exam, array('action' => ['updateExam', $exam->exam_id], 'method'=>'patch'))}}
    @else
        {{Form::open(array('action' => 'storeExam', 'method'=>'post'))}}
    @endif
    <br>
        <div class="form-column">
            {{Form::label('exam_name', 'Назва тесту:') }}
            {{Form::text('exam_name')}}
            <br>
            @if(!isset($exam))
                {{ Form::label('questions_count', 'Скільки питань?') }}
                {{ Form::text('questions_count',  isset($exam) ? $exam->questions_count :'10', array('class' => 'questionsCount')) }}
                <br>
            {{ Form::label('time_per_question', 'Час на одне питання(хв):') }}
            {{ Form::text('time_per_question',  isset($exam) ? $exam->time_per_question : '1', array('class' => 'timePerQuestion')) }}
            <br>
            @endif
            {{ Form::label('subject', 'Оберіть предмет:') }}
            <select name="subject">
                @if(isset($exam)) <option value="{{{$current_subject[0]->subject_id}}}" selected>{{{$current_subject[0]->subject_name}}}</option> @endif
                    @foreach($subjects as $subject)
                       <option value="{{{$subject->subject_id}}}">{{{$subject->subject_name}}}</option>
                    @endforeach
            </select>
        </div>
        @if(isset($exam))
            {{Form::submit('Оновити',array('class'=>'btn btn-success button'))}}
        @else
            {{Form::submit('Додати',array('class'=>'btn btn-success button'))}}
        @endif

    {{ Form::close() }}
    <br>
</div>
</div>
@stop