





<title>Verify Learner By Verification Number</title>










<!DOCTYPE html><!DOCTYPE html>










<!DOCTYPE html><!DOCTYPE html>
<!-- saved from url=(0037)# -->
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="{{asset('certificate/img/OPAL_PROVIDER_LOGO.png')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OPAL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--start old if required-->
        <link rel="stylesheet" href="{{asset('certificate/css/fontNada.css')}}">
        <link rel="stylesheet" href="{{asset('certificate/cssDesign/datepicker22.css')}}">
        <link rel="stylesheet" href="{{asset('certificate/sweetalert2/sweetalert2.min.css')}}">
        <link href="{{asset('certificate/cssDesign/select2.css')}}" rel="stylesheet">
        <link href="{{asset('certificate/cssDesign/metisMenu.min.css')}}" rel="stylesheet">
        <link href="{{asset('certificate/cssDesign/sb-admin-2.css')}}" rel="stylesheet">
        <link href="{{asset('certificate/cssDesign/star-rating.css')}}" media="all" rel="stylesheet" type="text/css"/>
        <script src="{{asset('certificate/jsDesign/jquery.min.js')}}"></script>
        <script src="{{asset('certificate/jsDesign/bootstrap.js')}}"></script>
        <script src="{{asset('certificate/jsDesign/datepicker22.js')}}"></script>
        <script src="{{asset('certificate/jsDesign/bootstrap.js')}}"></script>


        <script src="{{asset('certificate/jsDesign//star-rating.js')}}" type="text/javascript"></script>
        <script  type="text/javascript">

            // When the document is ready
            $(document).ready(function() {
                //alert("Hrere!");
                $('.DatePick').datepicker({format: 'dd/mm/yyyy'});

                 //alert("done!");
            });
        </script>
        <script src="{{asset('certificate/jsDesign/select2.js')}}"></script>
        <link href="{{asset('certificate/cssDesign/select2.css')}}" rel="stylesheet">
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

        <link rel="stylesheet" href="{{asset('certificate/css/font-awesome.css')}}">
        <!--end old if required-->




        <link rel="stylesheet" href="{{asset('certificate/cssDesign/all.css')}}">
        <link rel="stylesheet" href="{{asset('certificate/cssDesign/webslidemenu.css')}}" type="text/css">
        <!--link rel="stylesheet" href="cssDesign/bootstrap.min.css" type="text/css"-->
        <link rel="stylesheet" href="{{asset('certificate/cssDesign/animate.css')}}" type="text/css">
        <!--link rel="stylesheet" href="cssDesign/slick.css" type="text/css"-->
        <link href="{{asset('certificate/cssDesign/styles.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('certificate/cssDesign/site.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('certificate/cssDesign/responsive.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('certificate/cssDesign/animate.css')}}">
        <link href="{{asset('certificate/cssDesign/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('certificate/cssDesign/jquery-ui.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" crossorigin="anonymous" href="{{asset('certificate/cssDesign/main.css')}}">
        <script type="text/javascript" src="{{asset('certificate/css/fontNada.css')}}jsDesign/jquery.min.js"></script>

        <link rel="icon" href="{{asset('certificate/img/OPAL_PROVIDER_LOGO.png')}}">
    </head>
    <body data-gr-c-s-loaded="true">

        <header id='header'>
            <div class='leftDiv'>
                <img src="{{asset('certificate/images/OPAL_LOGO.png')}}" class='imgHeader' onclick="window.location.href='index.jsp';"/>
            </div>
            <div class='rightDiv'>

                <div class="top_container">
                    <div class="container">
                        <div class="row top_row wow fadeInDown xx" data-wow-delay="0.2s">
                            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-5 head_left">

                                <ul class="ul_col_head_left">
                                    <li><a href="VerifyCertificate.jsp">Verify Product</a></li>
                                    <li>
                                        <div class="search-container">
                                            <form action="SearchPage.jsp">
                                              <input type="text" placeholder=" &#xF002; " name="search">
                                            </form>
                                          </div>
                                    </li>
                                    <li>
                                        <a href="contact.jsp"> <span class='fa fa-phone fa-flip-horizontal faElemnt'> </span> </a>
                                    </li>
                                </ul>
                                <!-- responsive menu-->
                                <div class="responsive_drop_head">
                                    <div class="drop_in_btn">
                                        <a href="#"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                                    </div>
                                    <ul style="display: none;">
                                        <li><a href="index.jsp"><span class='fa fa-home'></span></a></li>
                                        <li><a href="VerifyCertificate.jsp">Verify Product</a></li>
                                        <li><a href="SearchPage.jsp">Search</a></li>
                                        <li><a href="contact.jsp">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-7 header_right">
                                <ul>

                                    <li>
                                        <a  href="Login.jsp"><span class="fa fa-lock"></span> Login</a>
                                    </li>

                                    <li>
                                        <a href="#register">Book Now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wsmenucontainer clearfix" >
                    <div class="wsmenuexpandermain slideRight"><a id="navToggle" class="animated-arrow slideLeft menuclose" href="#"><span></span></a></div>
                    <div class="wsmenucontent overlapblackbg menuclose"></div>
                    <div class="container">

                        <div class="header clearfix wow fadeIn" data-wow-delay="0.4s">
                            <!--Menu HTML Code-->
                            <nav class="wsmenu slideLeft clearfix menuclose">
                                <ul class="mobile-sub wsmenu-list">

                                    <li  ><a  href="index.jsp" >Home</li>
                                    <li  ><a  href="about.jsp" >About Us</a></li>
                                    <!--li  ><a  href="SSU.jsp" >Sector Skill Unit</a></li-->
                                    <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span>
                                        <a href="#">Sector Skills Unit   <span class="arrow"></span></a>
                                        <ul class="wsmenu-submenu">
                                            <li ><a  href="SSU.jsp">Overview</a></li>
                                            <li ><a  href="sssStucture.jsp">EMSSU Structure </a></li>
                                            <li ><a  href="OM.jsp">Occupational MAP</a></li>
                                            <li ><a  href="NOSDocument.jsp">National Occupational Standards</a></li>
                                            <li ><a  href="LMIDocument.jsp">Labour Market Information Analysis</a></li>
                                            <li ><a  href="contact.jsp">Contact us</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span>
                                        <a href="#">Training   <span class="arrow"></span></a>
                                        <ul class="wsmenu-submenu">
                                            <li ><a  href="overview.jsp">Overview</a></li>
                                            <li ><a  href="tpe.jsp">Training For Employment</a></li>
                                            <!--li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span>
                                                <a href="#" >Training For Employment  <i class="fa fa-angle-down pull-right"></i><span class="arrow"></span></a>
                                                <ul  class="wsmenu-submenu-sub">
                                                    <li ><a  href="overview.jsp">Overview</a></li>
                                                    <li ><a  href="apprent.jsp">Apprenticeship</a> </li>
                                                    <li ><a  href="ojp.jsp">On Job Training</a> </li>
                                                    <li ><a  href="internship.jsp">Internship Training</a>  </li>
                                                    <li ><a  href="fAQs.jsp">FAQs</a> </li>
                                                </ul>
                                            </li-->
                                            <li ><a  href="Courses.jsp">Training for Development</a>  </li>
                                            <li ><a  href="internship.jsp">Internship</a>  </li>
                                            <li ><a  href="eLearning.jsp">eLearning</a></li>
                                            <li ><a  href="skillCertification.jsp">Skill Certification</a> </li>
                                        </ul>
                                    </li>
                                    <li><span class="wsmenu-click"> <i class="wsmenu-arrow fa fa-angle-down"></i>  </span>
                                        <a href="#">  Approvals  <span class="arrow"></span></a>
                                        <ul class="wsmenu-submenu">
                                            <li ><a  href="approvalsOverView.jsp">Overview</a> </li>
                                            <li ><a  href="approvalsGuidelines.jsp">Standards & Guidelines</a></li>
                                            <li ><a  href="TP.jsp">Training Providers</a> </li>
                                            <li ><a  href="approvalsAssessment.jsp">Assessment Centres</a> </li>
                                            <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span>
                                                <a href="#">Technical Inspection <span class="arrow"></span></a>
                                                <ul  class="wsmenu-submenu-sub">
                                                    <li ><a  href="RAS.jsp">RAS</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li  ><a  href="careerOverView.jsp" >Career Guidance</a></li>

                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>

            </div>

        </header>



            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12  paddHeader wow fadeIn"  data-wow-duration="1s" >
                <div id="preloder">
                    <div class="loader"></div>

                </div>
                <link rel="stylesheet" href="{{asset('certificate/cssDesign/portfolio.css')}}">
<link rel="stylesheet" href="{{asset('certificate/css/LearnerProfile.css')}}">
    <link rel="stylesheet" href="{{asset('certificate/assets/css/fontawsom-all.min.css')}}">

<div class="col-md-12 col-lg-12  col-sm-12 col-xs-12">
    <h1 class="title-MaisaHeader" style="margin-bottom: -15px;z-index: -3">Verify Learner By Verification Number</h1>
    <span style="color:white;margin-bottom: -150px;z-index: -3" >> </span>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Option.jsp">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Verify Learner By Verification Number</li>
        </ol>
    </nav>
</div>
 <div class="col-md-12 col-lg-12  col-sm-12 col-xs-12">

    <br/><br/>
      <form action="{{route('verify.certificate')}}" method="get">
         <table class=" table table-hover">
             <tr>
                 <th width="90%"><input type="text" name="verficationCode" id="verficationCode" class="form-control" value="{{$data[0]->learner_vcode}}" placeholder="Enter the Verification Code"/></th>
                 <td><button class="btn btn-primary" type="submit"><span class="fa fa-search" title="Verify Learner By Verification Number "></span></button></td>
             </tr>
         </table>
     </form>





    <div class="web-portion">
         <div class="cover">
         </div>
        <div class="row top-det margin-HTop">
            <div class="col-md-12">
                <div class="profil-det-img d-flex">

                   <div class="pd">
                       <h2>{{$data[0]->learner_name}}</h2>
                       <p><br/></p>
                   </div>

                </div>
            </div>
        </div>
        <div class="nav-detail margin-HBottom">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item">

                 <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
               </li>
               <!--li class="nav-item">
                 <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Certified </a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="contact" aria-selected="false">Currently Training</a>
               </li-->
             </ul>
             <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active"  id="home" role="tabpanel" aria-labelledby="home-tab">
                   <div class="row no-margin home-det">
                       <div class="col-md-2 big-img">

                            <img src="{{asset('uploads/members/').'/'.$data[0]->image_path}}" class='img-responsive' alt="">

                       </div>
                       <div class="col-md-10 home-dat">
                           <!--div class="detal-jumbo">
                               <h3>Hellow I'm Web Designer / Developer</h5>
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                           </div>
                           <div class="links">
                           <div class="row ">
                               <div class="col-xl-6 col-md-12">
                                   <ul class="btn-link">
                                       <li>
                                           <a href=""><i class="fas fa-paper-plane"></i> Hire Me</a>
                                       </li>
                                       <li>
                                           <a href=""><i class="fas fa-cloud-download-alt"></i> Download Resume</a>
                                       </li>
                                   </ul>
                               </div>
                               <div class="col-xl-6 col-md-12">
                                   <ul class="social-link">
                                       <li><i class="fab fa-facebook-f"></i></li>
                                       <li><i class="fab fa-twitter"></i></li>
                                       <li><i class="fab fa-pinterest-p"></i></li>
                                       <li><i class="fab fa-linkedin-in"></i></li>
                                       <li><i class="fab fa-linkedin-in"></i></li>
                                       <li><i class="fab fa-youtube"></i></li>
                                   </ul>
                               </div>
                           </div>
                       </div-->
                       <div class="jumbo-address">
                          <div class="row no-margin">
                              <div class="sec-title text-center">
                                        <h2 class="text-center">Profile</h2>
                                </div>
                                   <div class="col-lg-12 no-padding">

                                   <table class="addrss-list">
                                       <tbody>
                                       <tr>
                                           <th>Nationality</th>
                                           <td>{{$data[0]->learner_nationality}}</td>
                                       </tr>

                                       <!--tr>
                                            <th >Last Qualification</th>
                                            <td>Below Secondary education</td>
                                       </tr-->

                                       <!--tr>
                                            <th>Company Name</th>
                                            <td>TRISTAR FREIGHT</td>
                                       </tr>
                                       <tr>
                                            <th>Department</th>
                                            <td>LOGSITC</td>
                                       </tr-->



                                   </tbody></table>

                           </div>
                          </div>
                          <div class="row no-margin">

                              <div class="sec-title text-center">
									   <h2 class="text-center">Certificated</h2>
								   </div>
                                   <div class="col-lg-12 no-padding">

                                   <table class="table table-bordered">


                               <tr >
                                    <th>Course/Program</th>
                                    <th>Category</th>
                                    <th>Training Center</th>
                                    <th>Assessment Center</th>
                                    <th>Expiry Date</th>
                                </tr>
                                @foreach($course as $cr)
                                  <tr>
                                    <td> {{$cr->course}}</td>
                                    <td > {{$cr->category}} </td>

                                    <td> {{$cr->tr_center}} </td>

                                    <td> {{$cr->as_center}} </td>

                                    <td>{{$cr->expiry}} </td>

                                  </tr>
                                @endforeach




                           </table>


                           </div>
                          </div>

                          <div class="row no-margin">

                              <div class="sec-title text-center">
									   <h2 class="text-center">Training</h2>
								   </div>
                                   <div class="col-lg-12 no-padding">

                                   <table class="table table-bordered">

                               <tr><th class="text-center danger" colspan="5">No Current Program Training Found for Trainee</th></tr>








                           </table>


                           </div>
                          </div>
                          <div class="row no-margin">
                              <center>
                              <a href="LeaveComent.jsp?leanerPresonalInformation=37393" class="btn btn-primary">For feedback, please click here</a>
                              </center>
                          </div>

                       </div>
                       </div>
                   </div>

               </div>
               <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">

                       <div class="row no-margin home-det">
                       <div class="col-md-2 big-img">

                            <img src="ImageDisplayer?phImage=C:/OPALStar/Learner/51692_Attachment_Photo.jpg" class='img-responsive' alt="">

                       </div>
                       <div class="col-md-10 home-dat">

                       <div class="jumbo-address">
                          <div class="row no-margin">

                              <div class="sec-title text-center">
									   <h2 class="text-center">Certificated</h2>
								   </div>
                                   <div class="col-lg-12 no-padding">

                                   <table class="table table-bordered">


                               <tr >
                                    <th>Course/Program</th>
                                    <th>Category</th>
                                    <th>Training Center</th>
                                    <th>Assessment Center</th>
                                    <th>Expiry Date</th>
                                </tr>

                                    <tr>
                                        <td>Defensive Driving </td>
                                        <td>Heavy Vehicle</td>
                                        <td>Arabian Training & Safety Academy <br/>Arabian Training & Safety Academy</td>
                                        <td>Safety Technical Services Co. LLC <br/>Excel Training Institute</td>
                                        <td>01/09/2023</td>
                                    </tr>

                                    <tr>
                                        <td>Defensive Driving </td>
                                        <td>Tanker</td>
                                        <td>null <br/>Unknown</td>
                                        <td>null <br/>Unknown</td>
                                        <td>11/02/2016</td>
                                    </tr>




                           </table>


                           </div>
                          </div>

                       </div>
                       </div>
                   </div>


               </div>
               <div class="tab-pane  fade" id="education" role="tabpanel" aria-labelledby="contact-tab">

                       <div class="row no-margin home-det">
                       <div class="col-md-2 big-img">

                            <img src="ImageDisplayer?phImage=C:/OPALStar/Learner/51692_Attachment_Photo.jpg" class='img-responsive' alt="">

                       </div>
                       <div class="col-md-10 home-dat">

                       <div class="jumbo-address">
                          <div class="row no-margin">

                              <div class="sec-title text-center">
									   <h2 class="text-center">Training</h2>
								   </div>
                                   <div class="col-lg-12 no-padding">

                                   <table class="table table-bordered">

                                <tr><th class="text-center danger" colspan="5">No Current Program Training Found for Trainee</th></tr>



                           </table>


                           </div>
                          </div>

                       </div>
                       </div>
                   </div>


                   </div>
               </div>
             </div>
        </div>



   <br/><br/><br/><br/>
             <center>
                <h4 class="text-center">You Can Also Verify</h4><br/>
                <a href="VerifyLeanerTraining.jsp" class="btn btn-default">Verify Learner By Civil Number</a>&nbsp;&nbsp;&nbsp;
                <a href="VerifyCertificate.jsp" class="btn btn-default">Verify Training Provider Certificate</a>
                <br/>
            </center>
             <br/><br/><br/><br/>

    </div>
 </div>







<!DOCTYPE html>



 <br/>
	    </div>






<!DOCTYPE html>
<script src="{{asset('certificate/jsDesign/jquery.min_1.js')}}"></script>

    <!-- MetisMenu CSS -->

    <!-- Custom CSS -->

    <!-- Custom Fonts -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('certificate/jsDesign//bootstrap.min_2.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->

    <!-- Custom Theme JavaScript -->



    <script>
        function resetAll(){
            //alert("start");
            if($(window).width() < 768){
            $('.tableMIS').hide();
            $('.tableMISSmall').show();
        }else{
            $('.tableMIS').show();
            $('.tableMISSmall').hide();
        }
        //alert("be gone");
        $('.dataTables-example').DataTable({
            responsive: true
        });
        //alert("maybe");
        $('.dataTables-exampleSTAFF').DataTable({
            responsive: true
        });
        $('.dataTables-exampleCourse').DataTable({
            responsive: true
        });
        $('.dataTables-exampleDoc').DataTable({
            responsive: true
        });
        $('button[type="submit"]').click(function(){
            var errorTxt="";
		errorTxt+='';
        swal({
            type: 'info',
            title: '<strong>Your request is under process, please wait for confirmation notification!</strong>',
            html:errorTxt,
            showConfirmButton: false,
            timer:9000
          });
          });
          //alert("ok");
        if($('.DatePick').length > 0 ) {
          $('.DatePick').datepicker({format: 'dd/mm/yyyy'});
          $('.DatePick').each(function(){
              $(this).attr("autocomplete", "off");
         });
      }
      if($('.DatePickYear').length > 0 ) {
          $('.DatePickYear').datepicker({format: 'yyyy'});
          $('.DatePickYear').each(function(){
              $(this).attr("autocomplete", "off");
         });
      }

         reconectSelect();
         if($('ul#ticker01').length > 0 ) {
          $("ul#ticker01").liScroll();
      }

        }


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
    <script src="jsDesign//select2.js"></script>
    <link href="cssDesign//select2.css" rel="stylesheet">
<script>
    $( document ).ready(function() {
        $( "select" ).select2({
            placeholder: "Select an Option",
            allowClear: true
        });

    });


    function reconectSelect(){
        //alert("reconectSelect start");
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
        //alert("reconectSelect ok");
    }
</script>

<script>

    $(document).ready(function(){

  });
</script>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_blk flexDisplay wow fadeIn"  data-wow-duration="2s">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  wow fadeIn marginBottom" data-wow-duration="0.5s" data-wow-delay="1s">
                        <ul>
                            <li><a href="importantLink.jsp">Important Links </a></li>
                            <li><a href="siteManp.jsp">Site Map</a></li>
                            <li><a href="fAQs.jsp">FAQs</a></li>
                            <li><a href="policies.jsp">Policies</a></li>
                            <li><a href="terms.jsp">Terms & Conditions</a></li>
                        </ul>
                        <p >© 2020 OPAL. All Rights Reserved</p>
                    </div>
                    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12  wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s">

                        <p >Powered by <a href="http://globcomom.com/">Global Computers</a></p>
                    </div>

                </div>


        <script type="text/javascript" src="{{asset('certificate/jsDesign/jquery.min.js')}}"></script>
        <script src="{{asset('certificate/jsDesign/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('certificate/jsDesign/wow.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('certificate/jsDesign/bootstrap.min.js')}}"></script>
        <!--script type="text/javascript" src="jsDesign/slick.js"></script-->
        <link rel="stylesheet" href="{{asset('certificate/cssDesign/bootstrap.min_2.css')}}">
        <script src="{{asset('certificate/jsDesign/jquery.min_2.js')}}"></script>
        <script src="{{asset('certificate/jsDesign/bootstrap.min_1.js')}}"></script>
        <script src="{{asset('certificate/jsDesign/mixitup.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('certificate/jsDesign/webslidemenu.js')}}"></script>
        <script type="text/javascript" src="{{asset('certificate/jsDesign/custom.js')}}"></script>
        <script src="{{asset('certificate/css/jsDesign/jquery.counterup.js')}}"></script>
        <script src="{{asset('certificate/jsDesign/jquery.waypoints.js')}}"></script>

        <script src="{{asset('certificate/jsDesign/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('certificate/jsDesign/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{asset('certificate/jsDesign/dataTables.responsive.js')}}"></script>
        <link href="{{asset('certificate/cssDesign//sb-admin-2.css')}}" rel="stylesheet">
        <script src="{{asset('certificate/jsDesign/sb-admin-2.js')}}"></script>
        <link rel="stylesheet" href="{{asset('cssDesign/datepicker22.css')}}">
        <script src="{{asset('certificate/jsDesign/datepicker22.js')}}"></script>
        <script src="{{asset('certificate/jsDesign/select2.js')}}"></script>
        <link href="{{asset('certificate/cssDesign/select2.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('certificate/sweetalert2/sweetalert2.min.css')}}">
       <script src="{{asset('certificate/sweetalert2/sweetalert2.min.js')}}"></script>

            <script>

var sildThis=true;
var count=0;
$(document).ready(function () {



    $(".datepicker").datepicker({
        dateFormat: "dd/mm/yy"
    });

});

$(".drop_in_btn").click(function () {
        if(sildThis===true){
            $(".responsive_drop_head ul").slideDown('slow');
            if(count===0){
                $(".responsive_drop_head ul").slideDown('slow');
            }
            sildThis=false;
            count++;
        }else{
            $(".responsive_drop_head ul").slideUp('slow');
            sildThis=true;
            count++;
        }
    });
function scrollToHere(id, time, offset1) {
    $(document.documentElement).animate({
        scrollTop: $(id).offset().top + offset1
    }, time);
}

$(document).ready(function () {
    $(".drop_in_btn").click(function () {
        $(".responsive_drop_head ul").slideToggle();
    });

    $(".datepicker").datepicker({
        dateFormat: "dd/mm/yy",
        changeYear: true,
        changeMonth: true
    });
});




jQuery.extend(jQuery.expr[':'], {
    styleEquals: function (a, i, m) {
        var styles = $(a).attr("style").split(" ");
        var found = false;
        for (var i = 0; i < styles.length; i++) {
            if (styles[i] === m[3]) {
                found = true;
                break;
            }
        }
        return found;
    }
});


$( window ).scroll(function() {
  headerStyle();
});
var $header=$("#header");
// 5. Update Header Style + Scroll to Top Unigreen
function headerStyle() {
        var windowpos =  window.scrollY;
        console.log("windowpos "+windowpos);
        if (windowpos >= 150) {
            if(!$header.hasClass( "sticky" )){

                $header.addClass('sticky');
            }

        } else {
             if($header.hasClass( "sticky" )){
                $header.removeClass('sticky');
            }


        }
}

            if($('.portfolio-warp').length > 0 ) {
		var containerEl = document.querySelector('.portfolio-warp');

                var mixer = mixitup(containerEl);
            }
            $('.set-bg').each(function() {
                    var bg = $(this).data('setbg');
                    $(this).css('background-image', 'url(' + bg + ')');
            });

                </script>

        <script>
            new WOW().init();
            /*$('.num').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function (){
              $( this ).counterUp({delay:10,time:1000});
            });*/
            $('.num1').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function (){
              $( this ).counterUp({delay:10,time:1000});
            });
            $('.num2').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function (){
              $( this ).counterUp({delay:10,time:1000});
            });
            $('.num3').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function (){
              $( this ).counterUp({delay:10,time:1000});
            });
            $('.num4').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function (){
              $( this ).counterUp({delay:10,time:1000});
            });

            $(document).ready(function() {

 //alert("hello");
               if($('.DatePick').length > 0 ) {
                    $(".DatePick").autocomplete({
                    disabled: true
                    });
                }

   resetAll();
           });
           function converVarToDate(str){
               var res = str.split("/");

                var d = new Date(res[2], res[1]-1, res[0]);
                return d;
           }
        </script>
    </body>
</html>


<script>



$(document).ready(function(){
        $(".olSideTitleMajor").append($('<span class="fa fa-chevron-circle-right pull-right"></span><hr class="style-five"/>'));

	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(1400).fadeOut("slow");
         $('#home-tab').click();
});
  </script>
