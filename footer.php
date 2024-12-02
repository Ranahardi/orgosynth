<!-- Essential javascripts for application to work-->
<!-- <script src="js/jquery-3.3.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<!-- Google analytics script-->
<script type="text/javascript">
    if (document.location.hostname == 'pratikborsadiya.in') {
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
    // Show the success message
$("#alert-box").addClass("success_query");

// Hide the success message after 3 seconds
setTimeout(function () {
  $("#alert-box").removeClass("success_query");
}, 3000);

// Show the error message
$("#alert-box2").addClass("error_query");

// Hide the error message after 3 seconds
setTimeout(function () {
  $("#alert-box2").removeClass("error_query");
}, 3000);
$(document).click(function() {
  $("#alert-box").removeClass("success_query");
//   $("#alert-box2").removeClass("error_query");
});
</script>
</body>

</html>