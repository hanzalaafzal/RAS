
  <div id="header1-wrapper1">
    <div id="header1" class="container1">
        <div id="logo1">
          <h1><a href="#"><img src="{{asset('assets/images/OPAL_LOGO.png')}}"></a></h1>
        </div>
        <div id="social1">
          <ul class="contact">
            <li><a href="#" class="fa fa-twitter fa-1-5x"><span>Twitter</span></a></li>
            <li><a href="#" class="fa fa-facebook fa-1-5x"><span></span></a></li>
            <li><a href="#" class="fa fa-dribbble fa-1-5x"><span>Pinterest</span></a></li>
            <li><a href="#" class="fa fa-tumblr fa-1-5x"><span>Google+</span></a></li>
            <li><a href="#" class="fa fa-rss  fa-1-5x"><span>Pinterest</span></a></li>
          </ul>
        </div>
    </div>
    <script>
      function showHideMenu(id){
          $(id).toggle();
      }
    </script>
    <navmaisa class="navMaisabar navMaisabar-inverse">
      <div class="container-fluid">
          <div class="navMaisabar-header">
              <button type="button" class="navMaisabar-toggle" data-toggle="collapse" onclick="showHideMenu('#men');" data-target="#men">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>

              </button>
              <a class="navMaisabar-img" href="index.jsp.html"><img src="{{asset('assets/images/OPAL_LOGO.png')}}" style="width: 80px;margin-top: -3%;margin-bottom: -5%" class="img-responsive"></a>
          </div>

          <div class="collapse navMaisabar-collapse" id="men">

              <ul class="navMaisa navMaisabar-navMaisa">
                  <li>
                    <a href="index.jsp.html" accesskey="1" title="">Home</a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">RAS Centre <span class="fa fa-angle-down"></span>
                    </a>
                        <ul class="dropdown-menu">
                              <li><a href="CenterApproved.jsp.html">Approved RAS Centre</a></li>
                              <li><a href="StartTRRegistration.jsp.html">Register your Centre</a></li>
                              <li><a href="Verify.jsp.html">Verify Certificate</a> </li>
                              <li><a href="{{route('verifyvehicle')}}">Verify RAS Vehicles</a> </li>
                        </ul>
                  </li>
                  <li><a href="contact.jsp.html" accesskey="5" title="">Contact us</a></li>
                  <li><a href="{{route('login')}}"> <span class="fa fa-lock"></span> Login</a></li>
                </ul>
              </div>

      </div>
    </navmaisa>
  </div>
