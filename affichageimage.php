<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title> - jsFiddle demo</title>

    <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>

    <style type='text/css'>
    </style>

    <script type='text/javascript'>//<![CDATA[
        $(window).load(function(){
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#imgInp").change(function(){
                readURL(this);
            });
        });//]]>

    </script>
    
</head>

</html>