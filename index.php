
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Email Validator</title>
        <meta charset="utf-8">
        <meta name="Keywords" content="Email Validator ">
        <meta name="Description" content="Using this you can check email id is real or fake">
        <link href="css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    </head>
    <body>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-warning-sign" ></span> Alert Message</h4>
                    </div>
                    <h3>
                        <div class="modal-body" id="alertMsg">

                        </div>
                    </h3>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Loading-->
        <div class="modal fade" id="myModalLoading" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" style="text-align:center;">
                        <img src='images/loading.GIF'><h3>  <span id="loadingText">Please wait....</span></h3>
                    </div>

                </div>
            </div>
        </div>

        <div id="contextFirst" > 
            <div class="panel panel-primary">
                <div class="panel-heading"><h3>Enter the Email Id (You can also add multiple email ids using comma)</h3>
                </div>
                <div class="panel-body" style="height:40%; text-align:center;" >
                    <form role="form" class="form-inline" id="fdata" >

                        <div class="form-group" style= "width:79%;">
                            <input type="hidden" name="req" value="blog">
                            <input type="input" style= "width:100%;" class="form-control input-lg" name="email"
                                   id="email" required="required"  placeholder="Enter email ids (Exp: iamrohitx@gmail.com, hi@iamrohit.in) !!">

                        </div>
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg" id="sub">
                                <span class="glyphicon glyphicon-star" ></span> Validate..!!
                            </button>
                        </div>    
                    </form>     
                </div>
            </div> 


            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-list">

                    </span> List of validated emails</div>
                <div class="panel-body bar">
                    <ul class="list-group" id="emailList">
                        <li class="list-group-item" id="nodata"><h4>No Emails.</h4> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <script src="js/validate.js"></script> 

</body>
</html>
