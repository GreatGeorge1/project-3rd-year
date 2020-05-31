@extends('..._layouts.default.index')

@section('title')
Home @parent
@stop

@section('content')

@include('flash::message')
    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="img/banner/edu_ilastration.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>Здавайте <br>
                                екзамени <br>
                                онлайн</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<br>
<br>
<br>

<div class="all_courses">
    <div class="container">
        <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Всі тести</h3>
                    </div>
                </div>
            </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    @foreach($subjects as $subject)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_courses">
                            <div class="thumb">
                                <a href="#">
                                    <img src="img/courses/1.png" alt="">
                                </a>
                            </div>
                            <div class="courses_info">
                                <span>{{{$subject->subject_name}}}</span>
                                @foreach($exams as $exam)
                                @if($exam->subject_id==$subject->subject_id)
                                <h2>{{{$exam->exam_name}}}</h2>
                                <h3><a href="/exam/{{$exam->exam_id}}">Натисніть щоб почати</h3>
                                <div class="questions-count">Питань: <span class="">{{{$exam->questions_count}}}</span></div>
                                @foreach($marks as $mark)
                                @if($exam->exam_id==$mark->exam_id)
                                <h3>Ви пройшли цей тест</h3>
                                <div class="star_prise d-flex justify-content-between">
                                    <div class="star">
                                        <i class="flaticon-mark-as-favorite-star"></i>
                                        <span>{{$mark->mark}}</span>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                        
                                @endif

                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<br>
<br>

@stop