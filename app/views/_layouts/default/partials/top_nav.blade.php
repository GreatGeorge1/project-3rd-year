<header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="/">
                                    <img src="{{cdn('img/logo.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="" href="/">Головна</a></li>
                                        @if(checkForTeacherRights())
                                            <li>{{link_to_route('createExam','Створтити тест')}}</li>
                                            <li>{{link_to_route('createSubject','Створити предмет')}}</li>
                                        @endif
                                        <li><a href="#">{{{$currentUser->fname}}} &or;<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                              @if(checkForAdminRights())
                                                  <li><a href="{{ URL::to('admin') }}">Адмін панель</a></li>
                                              @elseif(checkForTeacherRights())
                                                  <li>{{link_to_route('showAllExamsToSpecTeacher','Мої тести',$currentUser->user_id)}}</li>
                                                  <li>{{link_to_route('showMarksTeacher','Журнал',$currentUser->user_id)}}</li>
                                              @elseif(normalUser())
                                                  <li>{{link_to_route('showMarksUser','Мої оцінки',$currentUser->user_id)}}</li>
                                              @endif
                                              <li>{{link_to_route('logout','Вихід')}}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>