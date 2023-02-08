<script>
    $("#company").hide();
    
    
    $('#askme1').on("click",function() {
        $("#company").hide();
        $("#individu").show();
    });

    $('#askme2').on("click",function() {
        $("#company").show();
        $("#individu").hide();
    });
</script>