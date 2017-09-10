$(document).ready(function(){
    $(".search").on("keyup", function(){
        var search_term = $(this).val().toLowerCase();
        $("#user_table tbody tr").each(function(){
            var line_string = $(this).text().toLowerCase();
            if(line_string.indexOf(search_term) === -1){
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    });
});