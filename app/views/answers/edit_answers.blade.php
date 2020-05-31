@extends('..._layouts.default.index')


<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
    <h3>Редагування відповідей</h3>
</div>
<!-- bradcam_area_end -->
@section('content')

<div class="container">
    <div class="raw">
    <br>
    <div class="exam-info">
        <p>
        Назва тесту:<span class="exam-atr">{{{$exam->exam_name}}}</span> <br> Питання :<span class="exam-atr">{{{$exam->questions_count}}}</span> <br>
        Час тесту :<span class="exam-atr">{{{$exam->exam_time}}} хвилин</span> <br> Створено :<span class="exam-atr"> {{{$exam->created_at}}}</span>
        </p>
    </div>

    <section class="section-form">

    {{Form::open(array('action' => 'updateAnswers'))}}
        @foreach($questions as $question)
            <div class="single-question clearfix">
            {{ Form::hidden('teacher_id', $question->user_id) }}
            <br>
                  <div class="question-name">
                       <h3>{{{$question->question_name}}}</h3>
                  </div>
                  @foreach($answers as $answer)
                      @if($question->question_id==$answer->question_id)
                            <div class="true-or-false clearfix">
                                <br>
                            @if($answer->correct_answer=="true")
                                 <div class="true-answer">
                                     <input type="text" name="answer_name[]" value="{{{$answer->answer_name}}}">
                                     <input type="checkbox" checked="checked" name="correct_answer[]" value="{{{$answer->answer_id}}}">
                                 </div>
                            @elseif ($answer->correct_answer=="false")
                                 <div class="false-answer">
                                      <input type="text" name="answer_name[]" value="{{{$answer->answer_name}}}">
                                      <input type="checkbox" name="correct_answer[]" value="{{{$answer->answer_id}}}">
                                 </div>
                            @endif
                            <br>
                            <a value="{{$answer->answer_id}}" class="button-remove btn btn-danger">Видалити</a>
                            <input type="hidden"   name="answer_id[]" value="{{{$answer->answer_id}}}">
                       </div>

                      @endif
                  @endforeach
                  <br>
                  <a value="{{$question->question_id}}" class="button-add-new-answer btn btn-success">Додати більше відповідей</a>
            </div>
        @endforeach
        <br>
        {{Form::submit('Зберегти всі питання',array('class'=>'button-save-all btn btn-success'))}}
    {{ Form::close() }}

    </section>

</div>
</div>
<script>
    $('.button-remove').click(function(){
//        var thisDiv=$(this);
        $.ajax({
             method: "DELETE",
             url: '{{ url('/answer/delete') }}' + '/' + $(this).attr('value'),
             success: function() {
                location.reload()
            //thisDiv.parent().css("display","none");
             }
        });
    });
    $('.button-add-new-answer').click(function(){
        $.ajax({
            method: "POST",
            url: '{{ url('/answer/add') }}' + '/' + $(this).attr('value'),
            success: function(){
                location.reload()
            }
        });
    });

</script>
@stop
