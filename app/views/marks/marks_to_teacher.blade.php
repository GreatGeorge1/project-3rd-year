@extends('_layouts/default/index')


<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
        <h3>Журнал</h3>
    </div>
    <!-- bradcam_area_end -->
    
@section('content')
 

    @if (!isset($marks[0]->email))
        <div id="empty-data">Nobody has done your exams yet.</div>
    @else
        <section id="section-marks-to-user">
            <table class=" table table-hover" id="marks" cellspacing="0" cellpadding="0">
                 <thead>
                     <tr>
                       <th><span>Ім'я студента</span></th>
                       <th><span>Email</span></th>
                       <th><span>Група</span></th>
                       <th><span>Предмет</span></th>
                       <th><span>Назва тесту</span></th>
                       <th><span>Оцінка</span></th>
                       <th><span>Дата проходження</span></th>
                     </tr>
                 </thead>

                 <tbody>
                    @foreach($marks as $dt)
                        @if($dt->email)
                            <tr>
                                <td>{{{$dt->fname}}} {{{$dt->lname}}}</td>
                                <td>{{{$dt->email}}}</td>
                                <td>{{{$dt->faculty_number}}}</td>
                                <td>{{{$dt->subject_name}}}</td>
                                <td>{{{$dt->exam_name}}}</td>
                                <td>{{{$dt->mark}}}</td>
                                <td>{{{$dt->created_at}}}</td>
                            </tr>
                        @endif
                    @endforeach
                 </tbody>
            </table>

        </section>
    @endif
    <script>
        $(function(){
          $('#marks').tablesorter();
        });
    </script>
@stop