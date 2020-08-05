<?php 
    require_once 'core/initRoute.php';
    $patient = new patient ();
    if ( $patient->isLogged()){
      redirect::to('views/home/');
    }else{
        if( session::exists(config::get('session/session_name'))){
            redirect::to('views/home/index.php?native=yes');
        }else{
                if( input::exists() ) {
                        $validate = new validation();
                        $validate->check($_POST,array(
                            'username' => array(
                                'required' => true 
                            ),
                            'password' => array(
                                'required' => true 
                            )
                        ));
                    if($validate->passed()){
                        $remember = true ;
                        $login = $patient->login(input::get('username'),input::get('password'),$remember);
                        if ($login){
                            redirect::to('views/home/index.php?native=yes');
                        }else{
                            toasters::error('Sorry , Cant Sign In Try Again ..');
                        }
            
                    }else{
                        foreach($validate->errors() as $error ){
                            echo $error;
                            }
                        }
                }
        }
      ?>
        <html>
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login | Cure Systems </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" href="assets/dist/img/CureSegnture.png">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="assets/dist/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        </head>
        <body class="hold-transition login-page">
        <div class="login-box">
        <div class="login-logo">
            <a href=".#"><b>CURE</b>Sytems</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="#" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="username" placeholder="Username">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row" style="padding-left:20px;">
                <div class="col-xs-8">
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
            </form>
        </div>
        <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/dist/js/main.js"></script>
        </body>
        </html>
      <?php 

    }
