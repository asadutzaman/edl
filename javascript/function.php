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
                            <u>Age</u> </br>
                            <script>
                                var age = 18;
                                function agetest(){
                                    message = "Your age is increasing ";
                                    for (let i = 1; i <= age; i++){
                                        document.write(message+i);
                                        document.write("</br>");
                                    }
                                }
                                agetest();
                            </script>
                        </div>
                        <div class="col-md-2">
                            <u>Practice 2</u> </br>
                            <script>
                                
                            </script>
                        </div>
                        <div class="col-md-2">
                            <u>Practice 3</u> </br>
                            <script>
                                
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