<?
include "head.php";
include "config.php";
?>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ส่วนหัว
                </div>
                <div class="panel-body">
                    Basic panel example
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>
                                        <?echo $system_name; ?>
                                    </h2>
                                    <h3>
                                        <?echo $school_name; ?>
                                    </h3>
                                    <p>
                                        <a class="btn btn-primary btn-lg" href="login.php">
                                            เข้าระบบ
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) หมายเหตุ-->
 <?
include("footer.php");
 ?>
    </body>
</html>
