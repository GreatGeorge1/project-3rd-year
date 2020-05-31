<!DOCTYPE html>
<html lang="ua">
<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="<?= csrf_token() ?>">
  <meta name="description" content="Система контролю знань студентів">
  <title>Проект - @section('title') @show
  </title>

   <link href="{{cdn('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
   <link href="{{cdn('css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
   <link href="{{cdn('css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
   <link href="{{cdn('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
   <link href="{{cdn('css/themify-icons.css')}}" rel="stylesheet" type="text/css">
   <link href="{{cdn('css/nice-select.css')}}" rel="stylesheet" type="text/css">
   <link href="{{cdn('css/flaticon.css')}}" rel="stylesheet" type="text/css">
   <link href="{{cdn('css/gijgo.css')}}" rel="stylesheet" type="text/css">
   <link href="{{cdn('css/animate.css')}}" rel="stylesheet" type="text/css">
   <link href="{{cdn('css/slicknav.css')}}" rel="stylesheet" type="text/css">
   <link href="{{cdn('css/style.css')}}" rel="stylesheet" type="text/css">
   <link href="{{cdn('css/slick_quiz/slickQuiz.css')}}" rel="stylesheet" type="text/css">


    <script src="{{cdn('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{cdn('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{cdn('js/popper.min.js')}}"></script>
    <script src="{{cdn('js/bootstrap.min.js')}}"></script>
    <script src="{{cdn('js/owl.carousel.min.js')}}"></script>
    <script src="{{cdn('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{cdn('js/ajax-form.js')}}"></script>
    <script src="{{cdn('js/waypoints.min.js')}}"></script>
    <script src="{{cdn('js/jquery.counterup.min.js')}}"></script>
    <script src="{{cdn('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{cdn('js/scrollIt.js')}}"></script>
    <script src="{{cdn('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{cdn('js/wow.min.js')}}"></script>
    <script src="{{cdn('js/nice-select.min.js')}}"></script>
    <script src="{{cdn('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{cdn('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{cdn('js/plugins.js')}}"></script>
    <script src="{{cdn('js/gijgo.min.js')}}"></script>


   @section('specific-page-addons')@show
</head>
 
    <body>
    @include('_layouts.default.partials.top_nav')
      <div id="main-container">
     

        @yield('content')

      </div> <!-- end container -->
      @include('_layouts.default.partials.footer')
    </body>
</html>
