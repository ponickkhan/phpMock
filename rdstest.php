<div id="refresh">
    <input type="text" />
    <input type="button" id="click" />
 </div>

jQuery code

<script type="text/javascript">
    $('#click').click(function(){
    var div=$('#refresh').html();
    $.ajax({
        url: 'ok.php',
        type: 'POST',
        dataType: 'json',
        data: {param1: 'value1'},
    })
    .done(function(data) {
if(data.success=='ok'){
        $('#refresh').html(div);
}else{
// show errors.
}
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });
    });

</script>



