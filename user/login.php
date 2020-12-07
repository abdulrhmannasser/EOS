    <?php

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset( $_SESSION["uun"]))
        header("location:index.php");
    include "header.php";
    ?>
    <div class="account-in">
        <div class="container" style="text-align: right;margin: 0px 60% 24px 40%">


            <div class="col-md-7 account-top">
                <form method="post" action="process/login_proc.php"  class="demo-form" data-parsley-validate="" style="text-align: right ; ">
                    <div style="text-align: right">
                        <h3>الحساب</h3>
                        <span>اسم المستخدم*</span>
                        <input type="text"  name="un"  required="" style="width: 300px; align-content: right">
                    </div>
                    <div style="text-align: right">
                        <span class="pass">كلمه المرور*</span>
                        <input type="password"  required name="pw" required style="width: 300px">
                    </div >
                    <input type="submit" value="تسجيل الدخول">

                    <script>
                        $(function(){
                            $('.parsley-validate').parsley();
                        })
                    </script> <br>

                </form>
            </div>
            <div class="clearfix"> </div>
            <a href="register.php"  class="create col-md-2 col-md-offset-3">انشاء حساب جديد</a>
        </div>

    </div>

    <?php include "footer.php"?>


