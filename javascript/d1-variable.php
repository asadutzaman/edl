<?php include '../header.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Javascript Page
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Javascript Page</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Browser Usage</h3>
                    <div class="box-tools pull-right"></div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-2">
                            <u>10 ar ghorer namota</u> </br>
                            <script>
                                var name = "pagla";
                                var a = 10;
                                // var b = 2;
                                // var add = a + b;
                                // var min = a-b;
                                // var multi = a*b;
                                // var div = a/b;
                                // document.write(add);
                                // document.write("</br>");
                                // document.write(min + a);
                                // document.write("</br>");
                                for (let a = 1; a <= 10; a++) {
                                    document.write(a*10);
                                    document.write("</br>");
                                }
                            </script>
                        </div>
                        <div class="col-md-2">
                            <u>9 ar ghorer namota</u> </br>
                            <script>
                                for (let b = 1; b <= 10; b++){
                                    document.write(b*9);
                                    document.write("</br>");
                                }
                            </script>
                        </div>
                        <div class="col-md-2">
                            <u>8 ar ghorer namota</u> </br>
                            <script>
                                for (let b = 1; b <= 10; b++){
                                    document.write(b*8);
                                    document.write("</br>");
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <div class="box-footer no-padding"></div>
            </div>
        </div>
    </section>

</div>
<?php include '../footer.php'; ?>