 <!DOCTYPE html>
<html>
<head>
    <title>login_page</title>
    <style type="text/css">
        body{
            
        }
        .image{
            /margin-right: 500px;/
        }
        table{
            border: solid white; 
            background-color: white;
            margin-right: auto;
            margin-left: auto;
            width: 650px;
            margin-top: 120px;
            box-shadow: 0px 2px 10px black;

        }
        .Login{
            font-size: 28px;
            font-family: arial;
        }
        .account{
            padding: 0px;
        }
        .A{
            float: right;
        }
        .button{
            text-align: center;
            text-align: center;
            color: white;
            background-color: red;
            width: 55%;
            margin-left: 80px;
            height: 60%;
        }
        .level{
            width: 90%;
            height: 50%;
            font-family: cursive;
        }
    </style>
</head>
<body>
    <?php
        require_once "config.php";

        //if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']))
        if(isset($_POST['submit']))
        {
           // print_r($_POST); die;
            $name = $_POST['name'];
            $email = $_POST['email'];
            $PhoneNo = $_POST['PhoneNo'];
            $password = $_POST['password'];
            $check= mysqli_query($connection,"INSERT INTO form_3 (name,email,PhoneNo,password) VALUES ('".$name."','".$email."','".$PhoneNo."','".$password."')");
             
            if($check === True)
            {
                echo "You are registered Successfully";
            }else{
            echo "Email Address Already exists";
            }
        }
        
    ?>  
    <form method="post" action=""> 
        <table border="0" cellpadding="0" cellspacing="0" height="500" > 
            <tbody>
                <tr>
                    <td rowspan="6"><img src="girl.png" align="center"></td>
                </tr>
                <tr>
                    <td class="Login"><font color="red">R</font>EGISTRATION <font color="red">F</font>ORM<br><font size="2px" face="cursive">Doesn't have an account yet? <a href="#">Sign up</a></font></td>
                </tr>
                <tr>
                    <td> 
                        <font face="arial">Name</font>
                        <br>
                        <input type="text" name="name" placeholder="Enter ur name " class="level">
                    </td>
                </tr>
                <tr>
                    <td> 
                        <font face="arial"> Email </font>
                        <br>
                        <input type="email" name="email" placeholder="email@example.com" class="level">
                    </td>
                </tr>
                <tr>
                    <td> 
                        <font face="arial"> Phone No </font>
                        <br>
                        <!-- <input type="text" name="PhoneNo"  value="+91" size="2"/>  -->
                        <input type="text" name="PhoneNo" size="10" class="level">
                    </td>
                </tr>
                <tr>
                    <td><font face="arial">Password</font>
                        <br>
                        <input type="password" name="password" placeholder="********" class="level">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit" class="button"/>
                        <!-- <button type="submit" class="button">Submit</button> -->
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html> 