$(document).ready(function(){
    $('.editbtn').click(function () {
    $( "#left_content" ).append( '<button id="mybtn">Update</button>');
    $('.editbtn').attr('disabled',true);

    var Clone = $('#editleft').clone();

    $('#editleft tr td:nth-child(2)').each(function () {
        
        var Clone = $(this).clone();
        var html = $(this).html();
        var input = $('<input type="text" />');
        input.val(html);
        var edit = input.val(html);
        $(this).html(input);

 });
 
 $('#mybtn').click(function(){
        $('#mybtn').remove();
        $("#editleft").replaceWith(Clone);
        $('.editbtn').attr('disabled',false);
        
});
});


});
