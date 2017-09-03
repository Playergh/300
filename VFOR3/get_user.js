$(document).ready(function(){
    $('#getUser').on('click',function(){
        var user_id = $('#user_id').val();
        var user_name = $("#userName").val();
        $.ajax({
            type:'POST',
            url:'get_data.php',
            dataType: "json",
            data:{user_id:user_id},
            success:function(data){
                if(data.status == 'ok'){
                    $('#userName').text(data.result.name);
                    $('#userEmail').text(data.result.email);
                    $('#userPhone').text(data.result.phone);
                    $('#userCreated').text(data.result.created);
                    $('.user-content').slideUp();
                    alert("Congratulations! Look at what you did!");
                }else{
                    $('.user-content').slideDown();
                    alert("You done goofed");
                }
            }
        });
    });
});
