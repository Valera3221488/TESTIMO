<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
 
 
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
 
    <title>TITLE</title>
 
 
 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 
 
 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script type="text/javascript">
        
        $(document).ready(function() {
            $('#test_button').click(function() {
                $.ajax({
                    url:"connect.php",
                    cache:false,
                    success:function(responce){
                        $('#user_data').html(responce);
                    }
                });
                 });
             
        
        
        
        $('#test2_button').click(function(){
            $.ajax({
                url:"connect2.php",
                cache:false,
                success:function(data){
                    $('#user_data').html(data)
                }
            });
        });
            
            });
               
                        
               
           
        
    </script>
 
</head>
 
<body>
    <input type="button" value="TEST2" id="test2_button">
    <input type="button" value="TEST1" id="test_button">
 
    <div id="user_data">
 
    </div><!-- user_data -->
 
</body>
 
</html>