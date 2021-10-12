<head>
    <title>RAS Vehicle Inspection</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

      <meta name="keywords" content="">
      <meta name="description" content="">
      <link rel="icon" href="{{asset('assets/images/OPAL_LOGO.png')}}">

      <!--[if IE 6]>
      <link href="default_ie6.css" rel="stylesheet" type="text/css" />
      <![endif]-->

      <link href="{{asset('assets/css/fontNada.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/fonts.css')}}" rel="stylesheet" type="text/css" media="all">

      <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/MenuMaisa.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/datepicker22.css')}}">
      <link href="{{asset('assets/css/star-rating.css')}}" media="all" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{asset('assets/css/VTab.css')}}">


      <link href="{{asset('assets/css/training.css')}}" rel="stylesheet" type="text/css" media="all">
      <link href="{{asset('assets/css/fonts.css')}}" rel="stylesheet" type="text/css" media="all">


      <script src="{{asset('assets/js/star-rating.js')}}" type="text/javascript"></script>
      <script type="text/javascript">

          // When the document is ready
          $(document).ready(function() {
              //alert("Hrere!");
              $('.DatePick').datepicker({format: 'dd/mm/yyyy'});

               //alert("done!");
          });
      </script>
      <script src="{{asset('assets/js/select2.js')}}"></script>
      <link href="{{asset('assets/css/select2.css')}}" rel="stylesheet">
      <script>
          $( document ).ready(function() {
              $( "select" ).select2({
                  placeholder: "Select an Option",
                  allowClear: true
              });
          });
          function redirectALL(pageURL){
              window.location.href=pageURL;
          }
          function openInNewTab(url) {
              alert(url);
              var win = window.open(url, '_blank');
              win.focus();
            }
      </script>
        <script src="{{asset('assets/js/index.js')}}"></script>

       <link rel="stylesheet" type="text/css" href="{{asset('assets/css/tooltipster.bundle.min.css')}}">

      <script>
      $(document).ready(function(){

         if($(".tooltip2").length > 0) {

              $('.tooltip2').tooltip();
          }

      });
      </script>
      <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
</head>
