
<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="https://www.w3.org/1999/xhtml">
  @include('client.includes.head')
  <body>
    <div id="wrapper1" class="container1">
      @include('client.includes.navbar')
      @yield('content')
    </div>
  @include('client.includes.footer')

  </body>
</html>
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>

    <!-- MetisMenu CSS -->
    <link href="{{asset('assets/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('assets/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->


    <script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
    <link href="{{asset('assets/dist/css/sb-admin-2.css')}}" rel="stylesheet">
    <script src="{{asset('assets/dist/js/sb-admin-2.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/datepicker22.css')}}">
<script src="{{asset('assets/js/datepicker22.js')}}"></script>

    <script>
    $(document).ready(function() {
         if($(window).width() < 768){
            $('.tableMIS').hide();
            $('.tableMISSmall').show();
        }else{
            $('.tableMIS').show();
            $('.tableMISSmall').hide();
        }
        $('.dataTables-example').DataTable({
            responsive: true
        });
        $('.dataTables-example-hundered').DataTable({
            responsive: true,
             "lengthMenu": [[100], [100]],
             "paging":   false
        });
        $('.dataTables-exampleSTAFF').DataTable({
            responsive: true
        });
        $('.dataTables-exampleCourse').DataTable({
            responsive: true
        });
        $('.dataTables-exampleDoc').DataTable({
            responsive: true
        });

         $("ul#ticker01").liScroll();
          $('.DatePick').datepicker({format: 'dd/mm/yyyy'});

    });

    jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({
		travelocity: 0.03
		}, settings);
		return this.each(function(){
				var $strip = jQuery(this);
				$strip.addClass("newsticker")
				var stripHeight = 1;
				$strip.find("li").each(function(i){
					stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
				});
				var $mask = $strip.wrap("<div class='mask'></div>");
				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");
				var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width
				$strip.height(stripHeight);
				var totalTravel = stripHeight;
				var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye
				function scrollnews(spazio, tempo){
				$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
				}
				scrollnews(totalTravel, defTiming);
				$strip.hover(function(){
				jQuery(this).stop();
				},
				function(){
				var offset = jQuery(this).offset();
				var residualSpace = offset.top + stripHeight;
				var residualTime = residualSpace/settings.travelocity;
				scrollnews(residualSpace, residualTime);
				});
		});
};


$( window ).resize(function() {
if($(window).width() < 768){
    $('.tableMIS').hide();
    $('.tableMISSmall').show();
}else{
    $('.tableMIS').show();
    $('.tableMISSmall').hide();
}
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
        reconectSelect();
    });


    function reconectSelect(){
        $('select').each(function() {
            if( typeof $(this).attr("title") !== 'undefined' && $(this).attr("title")!=='' && $(this).attr("title")!==null){
                $(this).select2({
                    placeholder: "Select "+$(this).attr("title"),
                    allowClear: true
                });
            }else{
               $(this).select2({
                    placeholder: "Select an Option ",
                    allowClear: true
                });
            }
        });
    }
</script>

    <link href="{{asset('assets/css/contact.css')}}" rel="stylesheet" type="text/css" media="all">
