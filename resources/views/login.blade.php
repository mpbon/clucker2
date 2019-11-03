<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login to Clucker</title>
    </head>
    <body>
        <div class="container">
            <br>

            <form action="/login" method="post">
                @csrf
                <div class="row">
                    <h1>Login to Clucker</h1>
                        <div class"col-2">
                            Username: <input type='text' name="username"><br>
                        </div>
                </div>
                <br>
                <div class"col-3">
                    Password: <input type='password' class "form_control" name="password"><br>
                </div>
                <br>
                <div class= "col-4">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>
