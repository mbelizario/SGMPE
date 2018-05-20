$(document).ready(function(){

  $('.table-list tbody tr').click(function(a,b){
    $(this).find('td input[type=radio]').prop('checked', true);
    $('table tr').css('background','#ffffff');
    $(this).css('background','lightblue');
  });
    $('.table-list2 tbody tr').click(function(a,b){
        $(this).find('td input[type=radio]').prop('checked', true);
        $('table tr').css('background','#ffffff');
        $(this).css('background','lightblue');
    });
});
