//Ajax Call for the sign up form
//Once the form is submitted
$("#signupform").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    
    //collect user inputs
    var datatopost = $(this).serializeArray();
    //console.log(datatopost);
    //send them to signup.php using AJAX
    //$.post({}).done(when success).fail();
    $.ajax({
        url: "3.signup.php",
        type: "POST",
        data: datatopost,
        //AJAX Call successful: show error or success message
        success: function(data){
            if(data){
                $("#signupmessage").html(data);
            }
        },
        //AJAX Call fails: show Ajax Call error
        error: function(){
            $("#signupmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
        }
    });
    
    
});  
        
//Ajax Call for the login form 
//Once the form is submitted
$("#loginform").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    
    //collect user inputs
    var datatopost = $(this).serializeArray();
    //console.log(datatopost);
    //send them to login.php using AJAX
    //$.post({}).done(when success).fail();
    $.ajax({
        url: "3.login.php",
        type: "POST",
        data: datatopost,
        //AJAX Call successful: show error or success message
        success: function(data){
            if(data == "success"){
                window.location = "2.homepage.php";
            }else{
                $('#loginmessage').html(data);
            }
        },
        //AJAX Call fails: show Ajax Call error
        error: function(){
            $("#loginmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
        }
    });
    
    
});  

console.log("Before form submission");
//Ajax Call for the forgot password form
//Once the form is submitted
$("#forgotpasswordform").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    console.log("Form submitted");
    
    //collect user inputs
    var datatopost = $(this).serializeArray();
    //console.log(datatopost);
    //send them to forgotpassword.php using AJAX
    //$.post({}).done(when success).fail();
    $.ajax({
        url: "7.forgotpassword.php",
        type: "POST",
        data: datatopost,
        //AJAX Call successful: show error or success message
        success: function(data){
            $('#forgotpasswordmessage').html(data);
        },
        //AJAX Call fails: show Ajax Call error
        error: function(){
            $("#forgotpasswordmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
        }
    });
    
    
});  
console.log("After form submission");
//Ajax Call for the admin form
//Once the form is submitted
console.log("before admin form submission");
$("#adminform").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    
    //collect user inputs
    var datatopost = $(this).serializeArray();
    //console.log(datatopost);
    //send them to login.php using AJAX
    //$.post({}).done(when success).fail();
    $.ajax({
        url: "9.adminback.php",
        type: "POST",
        data: datatopost,
        //AJAX Call successful: show error or success message
        success: function(data){
            if(data == "success"){
                window.location = "9.adminhome.php";
            }else{
                $('#adminmessage').html(data);
            }
        },
        //AJAX Call fails: show Ajax Call error
        error: function(){
            $("#adminmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
        }
    });
    
    
});  

console.log("After admin form submission");