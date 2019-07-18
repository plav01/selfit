<script>
$(document).ready(
        function() {
            setInterval(function() {
                $.ajax({
                    url: '..' ,
                    cache: false,
                    success: function(data)
                    {
                        $('#message').html(data);
                    },                                          
                });
            }, 1000);
        });
</script>

<div id="message"></div>
<?php

$new_msg = mysql_query("select * from comments where status = '0' ");
echo mysql_num_rows($new_msg);
?>