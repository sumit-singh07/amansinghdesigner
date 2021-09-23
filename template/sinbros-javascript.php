<script>
    function subscriber_insert()
    {
        event.preventDefault();
        var email = $('#sub_email').val();
        // alert(email);
        $.ajax({
            type: "GET",
            url: 'subscriber_insert.php',
            data: {email:email},
            success: function(response)
            {
               if(response==1)
               {
                    alert('Subscribe Successfully');
                    $('#sub_email').val('');
               }
            }
        });
    }
</script>
<script src="js/jquery.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.js"></script>    
        <script src="js/jquery-waypoints.js"></script>    
        <script src="js/jquery-validate.js"></script> 
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/numinate.min6959.js?ver=4.9.3"></script>
        <script src="js/lazysizes.min.js"></script>
        <script src="js/main.js"></script>

        <!-- Revolution Slider -->
        <script src="revolution/js/revolution.tools.min.js"></script>
        <script src="revolution/js/rs6.min.js"></script>
        <script src="revolution/js/slider.js"></script>