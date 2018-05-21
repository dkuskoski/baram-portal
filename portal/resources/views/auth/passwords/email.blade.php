
<!-- Main Content -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Vfvorn4HP4qDlPy5dfa5UjlVwpL2P0nOwMXHdYyu">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {"csrfToken":"Vfvorn4HP4qDlPy5dfa5UjlVwpL2P0nOwMXHdYyu"}    </script>
</head>
<body>
<br><br>
    <div id="app">

        <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    
                    <form class="form-horizontal" role="form" method="POST" action="http://localhost:8000/password/email">
                        <input type="hidden" name="_token" value="Vfvorn4HP4qDlPy5dfa5UjlVwpL2P0nOwMXHdYyu">

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
