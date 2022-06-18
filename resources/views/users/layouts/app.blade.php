<!DOCTYPE html>
<html>
@include('users.layouts.head')
<body id="start_nicdark_framework">
    <!--START nicdark_site-->
    <div class="nicdark_site">

        <!--START nicdark_site_fullwidth-->
        <div class="nicdark_site_fullwidth nicdark_site_fullwidth_boxed nicdark_clearfix">
            @include('users.layouts.header')
            @yield('content')

            @include('users.layouts.footer')
        </div>
</div>


<!--js-->
<script src="{{asset('assets/js/nicdark_plugins.js')}}" type="text/javascript"></script>


<!--google analytics-->
<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49425562-16', 'auto');
  ga('send', 'pageview');

</script> -->
<!--google analytics-->
</body>
</html>