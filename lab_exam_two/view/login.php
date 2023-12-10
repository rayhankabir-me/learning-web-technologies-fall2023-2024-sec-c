<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <div class="section">
        <h3>Login Form</h3>
        <form action="POST" id="login_form" method="post" onsubmit="loginUser()">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="Login Now">
        </form>
        <div id="status_messages">

        </div>
    </div>

    <script>
        function loginUser(){
            event.preventDefault();

            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            if(email === ''){
                document.getElementById('status_messages').innerHTML = 'please fill the email..';
            }else if(password == ''){
                document.getElementById('status_messages').innerHTML = 'please fill password';
            }else{

                let formData = new FormData(document.getElementById('login_form'));

                    formData.append('action', 'user_login');

                    let xhttp = new XMLHttpRequest();
                    xhttp.open('POST', '../controller/userController.php', true);

                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            if(this.responseText == 1){
                                document.getElementById('status_messages').innerHTML = 'login success!';
                                setTimeout(function () {
                                    window.location.href = ('../view/dashboard.php');
                                }, 2000);
                            }else{
                                document.getElementById('status_messages').innerHTML = this.responseText;
                            }

                        }
                    }

                    xhttp.send(formData);
                
            }
        }
    </script>
</body>
</html>