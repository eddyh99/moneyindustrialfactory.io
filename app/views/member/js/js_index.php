<script>
$(function(){
    $('#operator').DataTable({
        "scrollX": true,
        "responsive": true,
        "ajax": {
            "url": "<?=base_url()?>admin/get_all",
            "type": "POST",
            "dataSrc":function (data){
				return data;
			},
        },
        "columns": [
            { "data": "anonmail" },
            { "data": "email" },
        ]        
    });    
})
</script>