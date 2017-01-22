<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
    <select class="form-control" id="dropdown" onchange="myfunc()" name="companyname">
                        <option>selec a purpose</option>

                        <?php
                        foreach ($load as $ld) {
                            echo "<option value='".$ld->type."'>".$ld->type."</option>";
                        }

                        ?>
</select>

<br><br>
<div id="txtHint"></div>
</html>


<script>
    function myfunc() {

var x =document.getElementById("dropdown").value;


        if (window.XMLHttpRequest)
        { // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }

        xmlhttp.open("GET", "Welcome/viewdata/"+x);

        xmlhttp.send();

    }

</script>