@extends('_layouts/default/index')


<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
    <h3>Проходження тесту</h3>
</div>
<!-- bradcam_area_end -->

@section('specific-page-addons')
          <script src="{{asset('js/slickQuiz.js')}}"></script>
@stop
@section('content')

 
    <section id="start-exam-container">
        <button id="start-button">Почати тест</button>

        <div class="quizName"><!-- where the quiz name goes --></div>

        <body id="slickQuiz">

        <div class="quizArea">
            <div class="quizHeader">
                <!-- where the quiz main copy goes -->

                <a class="button startQuiz" href="#">Приготуйся!</a>
            </div>

            <!-- where the quiz gets built -->
        </div>

        <div class="quizResults">
            <h3 class="quizScore">Ти набрав: <span><!-- where the quiz score goes --></span></h3>

            <h3 class="quizLevel"><strong>Оцінка:</strong> <span><!-- where the quiz ranking level goes --></span></h3>

            <div class="quizResultsCopy">
                <!-- where the quiz result copy goes -->
            </div>
        </div>
        </body>

    </section>

    
    <script>
    $(document).ready(function () {
        $('#start-button').click(load);
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });

    });

    function load() {
        $('#start-button').hide();

        var getQuizUrl = $(location).attr('href'); //getting the url with a specific quiz
        $.ajax({
            method: "POST",
            url: getQuizUrl

        }).done(function (data) {
                $('#slickQuiz').slickQuiz({
                    json: data,
                    perQuestionResponseMessaging: false,
                    skipStartButton: false,
                    preventUnanswered: true
                });
            }
        );


    }
    </script>
@stop
