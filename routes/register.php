<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <style>
            fieldset{
             
                background-color:lightblue;
                border: 1px solid #000;
                float:center;
    
            }
        </style>
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>WELCOME TO ONLINE VOTING WEBSITE</h1>  
            </div>
            <hr>
            <fieldset>
            <h2>Registration</h2>
           
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                        Already an user? <a href="../">Click here to Login</a>
                </form>
                </fieldset>
            </center>
    </body>
</html>