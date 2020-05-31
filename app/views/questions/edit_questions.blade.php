@extends('_layouts/default/index')


<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
<h3>Редагування питань</h3>
</div>
<!-- bradcam_area_end -->

@section('content')

    <div class="container">
    <div class="raw">
    <br>
    <div class="exam-info">
        <p>
        Назва тесту:<span class="exam-atr">{{{$exam->exam_name}}}</span><br> Питання :<span class="exam-atr">{{{$exam->questions_count}}}</span><br>
        Час тесту :<span class="exam-atr">{{{$exam->exam_time}}} хвилин</span><br> Створено :<span class="exam-atr"> {{{$exam->created_at}}}</span>
        </p>
    </div>

    <section id="section-question-form">

    <button value="{{$exam->exam_id}}" class="button-add-more-question btn btn-success">Додати</button>
    <br>
    <br>
    {{Form::open(array('action' => 'updateQuestions','method'=>'patch'))}}

        {{ Form::hidden('questions_count', $exam->questions_count) }}
        {{ Form::hidden('exam_id', $exam->exam_id) }}

        @foreach($questions as $question)
            <div class="single-q clearfix">
                <button value="{{$question->question_id}}" class="button-remove btn btn-danger">Видалити</button>
                <input type="text" placeholder="Question name" name="question_name[]" value="{{{$question->question_name}}}">
                <input type="hidden" name="question_id[]" value="{{{$question->question_id}}}">
            </div>
            <br>
        @endforeach

        {{Form::submit('Зберегти питання',array('class'=>'button-save-question btn btn-success'))}}
     {{ Form::close() }}

    </section>
</div>
</div>
    <script>
            $('.button-remove').click(function(e){
                e.preventDefault();
//                var thisDiv=$(this);
                $.ajax({
                     method: 'DELETE',
                     url: '{{ url('question/delete') }}' + '/' + $(this).attr('value'),
                     success: function() {
//                   thisDiv.parent().css("display","none");
                        location.reload();
                    }
                });
            });

            $('.button-add-more-question').click(function(){

                $.ajax({
                     method: "POST",
                     url: '{{ url('question/add') }}' + '/' + $(this).attr('value'),
                     success: function(){
                         location.reload();
                     }
                });
            });
    </script>
@stop
