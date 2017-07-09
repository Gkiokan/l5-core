@if( env('GOOGLE_ANALYTICS') )
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '{{ env('GOOGLE_ANALYTICS') }}', 'auto');
    ga('send', 'pageview');

  </script>
@endif

@if( env('GOOGLE_SITE_VERIFICATION') )
<meta name="google-site-verification" content="{{ env('GOOGLE_SITE_VERIFICATION') }}">
@endif
