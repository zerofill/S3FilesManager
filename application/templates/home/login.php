<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login </title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo $this->assetsUrl ?>/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo $this->assetsUrl ?>/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $this->assetsUrl ?>/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo $this->assetsUrl ?>/css/custom.css" rel="stylesheet">
    <link href="<?php echo $this->assetsUrl ?>/css/icheck/flat/green.css" rel="stylesheet">


    <script src="<?php echo $this->assetsUrl ?>/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="<?php echo $this->assetsUrl ?>/assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background:#F7F7F7;">

    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <?php if (!empty($message)): ?>
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span>
                        </button>
                        <strong><?php echo $message['status'] ?>!</strong> <?php echo $message['mgs'] ?>
                    </div>
                <?php endif; ?>
                <section class="login_content">
                    <form method="post"  id="login" data-parsley-validate class="form-horizontal form-label-left">
                        <h1>Login Form</h1>
                        <div>
                            <input required="required" type="text" name="username" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input required="required" name="password" type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <p>�2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>


<script>
    $(document).ready(function () {
        $.listen('parsley:field:validate', function () {
            validateFront();
        });
        $('#login .btn').on('click', function () {
            $('#login').parsley().validate();
            validateFront();
        });
        var validateFront = function () {
            if (true === $('#login').parsley().isValid()) {
                $('.bs-callout-info').removeClass('hidden');
                $('.bs-callout-warning').addClass('hidden');
            } else {
                $('.bs-callout-info').addClass('hidden');
                $('.bs-callout-warning').removeClass('hidden');
            }
        };
    });
</script>
</body>
</html>