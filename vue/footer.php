

</main>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>

<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/main.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<script>

// jquery for materialize
  $('.modal').modal();
$('select').material_select();

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });

$('.collapsible').collapsible();

// jquery to add a class green on the task done :

// when the page is loading

$(".abc").each(function(){

        var a = $(this).find("input[type='checkbox']");

        if(a.length == a.filter(":checked").length && a.length > 0){
          $( this ).children("div:first").addClass( "green" );
        } else {  $( this ).children("div:first").removeClass( "green" );}
    }
);

// when you check the subtasks
$(".abc").each(function(){
    $(this).change(function(){
        var a = $(this).find("input[type='checkbox']");

        if(a.length == a.filter(":checked").length && a.length > 0){
          $( this ).children("div:first").addClass( "green" );
        } else {  $( this ).children("div:first").removeClass( "green" );}
    }
)})



</script>
</body>
</html>
