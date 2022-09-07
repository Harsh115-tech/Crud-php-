$("#add_user_form").validate({
    rules:{
        fname: {
            required: true,
            minlength: 2
        },
        lname: {
            required: true,
            minlength:2
        },
        stream: {
            required: true,
            minlength:1
        }

    },messages:{
        fname:{
            required : "Please Enter Your First Name",
            minlength : "Your Email Must Be At least 5 Characters Long"
        },
        lname:{
            required : "Please Enter Your Last Name",
            minlength : "Your password Must Be At least 5 Characters Long"
        },
        stream:{
            required : "Please Enter Your Password",
            minlength : "Your Password Must Be At least 5 Characters Long"
        },
    }   
});
