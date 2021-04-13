<html>
    <head>
        <style>
            body{
                background-color: orange;
                font-size:15px;

            }
            h1{
                font-family: arial;
                background-color: yellow;

            }
            table{
                font-size:20px;
                
            }</style>
            </head>
            <body><center><h1><u>ADD YOUR DETAILS</u></h1>
                <form action="g3.php" method="POST" name="form2"><table border="1" height="50%" width="50%">
                   <tr><th>
                    Item code:</th><th><input type="text" name="itemcode"></th></tr>
                    <tr><th>
                    Item name:</th><th><input type="text" name="itemname"></th></tr>
                    <tr><th>
                    Item type:</th><th><select name="itype"><option name="itype">fruits</option><option name="itype">vegetables</option><option name="itype">other</option></select></th></tr>
                    <tr><th>
                    Available quantity:</th><th><input type="text" name="available"></th></tr><tr><th>
                    Date of expiry:</th><th><input type="date" name="expiry"></th></tr><tr><th>
                    <input type="submit" name="s1" value="save"></th><th>
                    <input type="submit" name="s2" value="show details"></th></tr>
                </center>
        </form>
        </body>
        </html>