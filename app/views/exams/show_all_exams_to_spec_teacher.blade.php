@extends('_layouts/default/index')


<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
    <h3>Мої тести</h3>
</div>
<!-- bradcam_area_end -->

@section('content')
    @include('flash::message')
    <div class="container">
        <div class="raw">
    @if (!isset($exams[0]))
       <div id="empty-data">У вас немає тестів.</div>
    @else
    <section id="section-show-exam">
        @foreach($exams as $exam)
        <br>
        <div class="single-exam">
            <h3>{{$exam->exam_name}}</h3>
            {{ link_to_route('editAnswers', 'Попередній перегляд', $exam->exam_id, array('class' => 'btn btn-info button-preview')) }}
            {{ link_to_route('editExam', 'Змінити тест', $exam->exam_id, array('class' => 'btn btn-warning button-edit')) }}
            {{ link_to_route('editQuestions', 'Змінити питання', $exam->exam_id, array('class' => 'btn btn-warning button-edit')) }}
            {{ link_to_route('editAnswers', 'Змінити відповіді', $exam->exam_id, array('class' => 'btn btn-warning button-edit')) }}
            <button class="btn btn-danger button-remove" value="{{$exam->exam_id}}" >Видалити</button>
        </div>
        @endforeach
    </section>
    @endif
    <br>
</div>
</div>
    <script>
        $('.button-remove').click(function(){
            $.ajax({
                 method: "DELETE",
                 url: '{{ url('/exam') }}' + '/' + $(this).attr('value'),
                 success:
                     $(this).parent().css("display", "none")
            })
        });

    </script>
@stop