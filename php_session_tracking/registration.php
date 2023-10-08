<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <table border="1" width="100%">
        <tr>
            <td>X Company</td>
            <td align="right"><a href="">Home</a> | <a href="">Login</a> | <a href="registration.php">Registration</a></td>
        </tr>
        <tr>
            <td colspan="3">
                <br>
                <br>
                <br>
                <form action="">
                    <label for="">Name: </label><input type="text" name="name" id="">
                    <hr>
                    <label for="">Email: </label><input type="email" name="email" id="">
                    <hr>
                    <label for="">User Name: </label><input type="text" name="username" id="">
                    <hr>
                    <label for="">Password: </label><input type="password" name="password" id="">
                    <hr>
                    <label for="">Confirm Password: </label><input type="password" name="c_password" id="">
                    <hr>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="male" id=""><label for=""> Male</label>
                        <input type="radio" name="gender" value="female" id=""><label for=""> Female</label>
                        <input type="radio" name="gender" value="other" id=""><label for=""> Other</label>
                    </fieldset>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="date_of_birth" id="">
                    </fieldset>
                    <input type="submit" value="Submit" name="submit">
                    <input type="submit" value="Reset" name="reset">
                </form>
                <br>
                <br>
                <br>
            </td>
        </tr>
        <tr>
            <td colspan="3">Copyright @2023</td>
        </tr>
    </table>
    
</body>
</html>