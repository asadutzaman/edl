<?php include '../header.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Javascript Page
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> DisplaPossibility Page</a></li>
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
                            <u>Age</u> </br>
                            <script>
                                var name = "test";
                                var age = 27;
                                function human(){
                                    var heis = name+age;
                                    document.write();
                                }
                                human();
                                document.write("test");
                            </script>
                        </div>
                        <div class="col-md-2">
                            <u>Practice 2</u> </br>
                            <script>
                                var height = 59;
                                function heighttest(){
                                    message = "Your height is increasing ";
                                    for (let i = 1; i <= 2; i++){
                                        document.write(message+height++);
                                        document.write("</br>");
                                    }
                                }
                                heighttest();
                            </script>
                        </div>
                        <div class="col-md-2">
                            <u>Practice 3</u> </br>
                            <script>
                                var weight = 78;
                                fucntion weightgain(){
                                    for (let i = 1; i <= 2; i++){
                                        document.write("weight");
                                        document.write("</br>");
                                    }
                                }
                                weightgain();
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