@extends('_layouts/default/index')


<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2">
        <h3>Мої оцінки</h3>
    </div>
    <!-- bradcam_area_end -->

@section('content')
    @if (!$marks)
       <div id="empty-data">You haven't completed any exams yet.</div>
    @else
        <section id="section-marks-to-user">
            <table class=" table table-hover" id="marks" cellspacing="0" cellpadding="0">
                 <thead>
                     <tr>
                       <th><span>Дата проходження</span></th>
                       <th><span>Назва</span></th>
                       <th><span>Оцінка</span></th>
                     </tr>
                 </thead>

                 <tbody>
                    @foreach($marks as $mark)
                        <tr>
                            <td>{{{$mark->created_at}}}</td>
                            <td>{{{$mark->exam_name}}}</td>
                            <td>{{{$mark->mark}}}</td>
                        </tr>
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