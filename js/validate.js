$(function() {
    // On submit click function
    $("#sub").click(function(e) {
        e.preventDefault();
        var email = $.trim($("#email").val());
        if (email == '') {
            $("#email").css("border:1px solid red");
            alertModal('Please enter email id !!');
            $("#email").focus();
            return false;
        }
        $("ul li#nodata").remove();
        var emailData = email.split(',');
        $.each(emailData, function(index, val) {
            getEmailData($.trim(val));
        });
    });

// show loading message
    var loadingShow = function() {
        $("#myModalLoading").modal('show');
    }

// Hide loading message
    var loadingHide = function() {
        $("#myModalLoading").modal('hide');
    }

// alert/error message box
    var alertModal = function(msg) {
        $("div#myModal").modal('show');
        $("div#alertMsg").html(msg);
    }

   
// function to fetch email data with sussess and error 
    var getEmailData = function(email) {
        loadingShow();
        var successRes = function(data) {
            loadingHide();
            if (typeof data === 'object') {
                var html;
                   if(data.tp==1) {
                     html = "<li class='list-group-item'><h4 style='color:green'><span class='glyphicon glyphicon-ok-sign'></span> "+data.email+":- <b>Valid</b></h4></li>";
                   } else {
                      html = "<li class='list-group-item'><h4 style='color:red'><span class='glyphicon glyphicon-remove-sign'></span> "+data.email+":- <b>Invalid</b></h4></li>";
                   }
                    $("ul#emailList").prepend(html);

            } else {
                alertModal(data);
            }
        };

        var errorRes = function(e) {
            alertModal("Error to fetch data, ( " + e.statusText + " )");
            loadingHide();
        };

        $.ajax({
            type: 'GET',
            url: 'api.php?type=email-validator&email='+email,
            data: {},
            dataType: 'json',
            success: successRes,
            error: errorRes,
            timeout: 60000
        });
    };

    

});
