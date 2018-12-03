   <!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>SkaPri RKPDes</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url() ?>css/theme-white.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <!-- <div class="login-logo"></div> -->
                <div class="login-body">
                    <div class="login-title"><strong>Masukan username & password</strong> <br>untuk masuk kedalam sistem</div>
                    
                    <form action="<?php echo base_url('index.php/login/cek_login');?>" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="user" class="form-control" placeholder="username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="pass"  class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">MASUK</button>
                        </div>
                    </div>
                    
                    </form>
                   
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2018 SkaPri RKPDes Ciburuy
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </body>
</html>





