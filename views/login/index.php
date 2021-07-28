<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <style>
        .container {
            margin-top: 100px;
        }

        .login-form {
            width: 300px;
            margin: auto;

            background-color: #ffffff;
            padding: 15px;
            border: 2px dotted #cccccc;
            border-radius: 10px;
        }

        h1 {
            color: #009999;
            font-size: 20px;
            margin-bottom: 30px;
        }

        .input-box {
            margin-bottom: 10px;
        }

        .input-box input {
            padding: 7.5px 15px;
            width: 100%;
            border: 1px solid #cccccc;
            outline: none;
        }

        .btn-box {
            text-align: right;
            margin-top: 30px;
        }

        .btn-box button {
            padding: 7.5px 15px;
            border-radius: 2px;
            background-color: #009999;
            color: #ffffff;
            border: none;
            outline: none;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="login-form">
            <form action="/index.php?controller=login&action=login" method="post">
                <h1>Đăng nhập vào website</h1>
                <div class="input-box">
                    <i></i>
                    <input type="text" placeholder="Nhập username" name="userName">
                </div>
                <div class="input-box">
                    <i></i>
                    <input type="password" placeholder="Nhập mật khẩu" name="passWord">
                </div>
                <div>
                    <?php
                    if (isset($alert)) {
                        echo $alert;
                    }

                    ?>
                </div>
                <div class="btn-box">
                    <button type="submit">
                        Đăng nhập
                    </button>
                </div>
            </form>
        </div>




    </div>


</body>

</html>