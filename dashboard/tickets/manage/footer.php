</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });

    });

    function mask_resolved(ticket_id, user_id) {
        var r = confirm("are you sure ticket resolved?");
        if (r === true) {

            $.ajax({
                type: "POST",
                url: "markresolved.php",
                data: {
                    ticket_id: ticket_id,
                    user_id: user_id,
                },
                success: function(data) { 
                    
                    console.log(data);
                    
                    if (data == "success") {
                        window.location = "index.php";
                    }else{
                      window.location = data;
                    }
                }
            });




        } else {
            return false;
        }
    }
</script>
</body>
</html>
