function login(){
    $.ajax({
        url:"include/loginform.php",
        type:'post',
        success:function(result){
            $('#login').html(result);
        }
    })
}