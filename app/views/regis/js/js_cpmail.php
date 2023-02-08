<script>
$(function() {
	$('#validaccount').hide();
	$('#validpass').hide();
	$('#confpass').hide();
    $("#alert-mif").hide();
    
    $("#togglePassword").on("click",function(){
        var tipe=$("#pass").attr("type");
        if (tipe=='password'){
            $("#pass").attr('type', "text");
            $(this).attr("class",'far fa-eye-slash');
        }else{
            $("#pass").attr('type', "password");
            $(this).attr("class",'far fa-eye');
        }
    })

    $("#toggleCPassword").on("click",function(){
        var tipe=$("#confirmpass").attr("type");
        console.log(tipe);
        if (tipe=='password'){
            $("#confirmpass").attr('type', "text");
            $(this).attr("class",'far fa-eye-slash');
        }else{
            $("#confirmpass").attr('type', "password");
            $(this).attr("class",'far fa-eye');
        }
    })
    
	$("#username").on("blur",function(){
        $.ajax({
            url: "<?=base_url()?>email/checkaccount",
            type: "post",
            data: "username="+$(this).val() ,
            success: function (data) {
                data=JSON.parse(data);
                if (data.code==0){
        			$('#validaccount').show();
        			$('#validaccount').attr("width",20);
        			$('#validaccount').attr("height",20);
                    $("#validaccount").attr("src","<?=base_url()?>/assets/images/valid.png");
                    $("#alert-message").text("");
                    $("#alert-mif").hide();
                }else{
        			$('#validaccount').show();
        			$('#validaccount').attr("width",20);
        			$('#validaccount').attr("height",20);
                    $("#validaccount").attr("src","<?=base_url()?>/assets/images/cross.png");
                    $("#alert-message").text(data.message);
                    $("#alert-mif").show();
                }
            }
        });	    
	    
	})

	$('#pass').keyup(function() {
		var pswd = $(this).val();
		var c1=0;
		var c2=0;
		var c3=0;
		var c4=0;
		var c5=0;

		//validate the length
		if ( pswd.length<9 ) {
			$('#length').removeClass('valid').addClass('invalid');
			c1=0;
		} else {
			$('#length').removeClass('invalid').addClass('valid');
			c1=1;
		}
			
		//validate letter
		if ( pswd.match(/[a-z]/) ) {
			$('#letter').removeClass('invalid').addClass('valid');
			c2=1;
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
			c2=0;
		}
			
		//validate capital letter
		if ( pswd.match(/[A-Z]/) ) {
			$('#capital').removeClass('invalid').addClass('valid');
			c3=1;
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
			c3=0;
		}
			
		//validate number
		if ( pswd.match(/\d/) ) {
			$('#number').removeClass('invalid').addClass('valid');
			c4=1;
		} else {
			$('#number').removeClass('valid').addClass('invalid');
			c4=0;
		}

		if (pswd.match(/(?:[^!@#$%^&*\-_=+]*[!@#$%^&*\-_=+]){2}/))
		{
			$('#special').removeClass('invalid').addClass('valid');
			c5=1;
		}else{
			$('#special').removeClass('valid').addClass('invalid');
			c5=0;		
		}

		if(c1 && c2 && c3 && c4 && c5){
			$('#validpass').show();
			$('#validpass').attr("width",20);
			$('#validpass').attr("height",20);
            $("#validpass").attr("src","<?=base_url()?>/assets/images/valid.png");
		}else{
			$('#validpass').show();
			$('#validpass').attr("width",20);
			$('#validpass').attr("height",20);
            $("#validpass").attr("src","<?=base_url()?>/assets/images/cross.png");
		}

	}).focus(function() {
		$('#pswd_info').show();
	}).blur(function() {
		$('#pswd_info').hide();
	});

	$('#confirmpass').keyup(function() {
		var cpswd = $(this).val();
		var pswd = $("#pass").val();
		
		if ((cpswd==pswd) && cpswd.length>0){
			$('#confpass').show();
			$('#confpass').attr("width",20);
			$('#confpass').attr("height",20);
            $("#confpass").attr("src","<?=base_url()?>/assets/images/valid.png");
		}else{
			$('#confpass').show();
			$('#confpass').attr("width",20);
			$('#confpass').attr("height",20);
            $("#confpass").attr("src","<?=base_url()?>/assets/images/cross.png");
		}
	}).focus(function() {
		var cpswd = $(this).val();
		var pswd = $("#pass").val();
		if ((cpswd==pswd) && cpswd.length>0){
			$('#confpass').show();
			$('#confpass').attr("width",20);
			$('#confpass').attr("height",20);
            $("#confpass").attr("src","<?=base_url()?>/assets/images/valid.png");
		}else{
			$('#confpass').show();
			$('#confpass').attr("width",20);
			$('#confpass').attr("height",20);
            $("#confpass").attr("src","<?=base_url()?>/assets/images/cross.png");
		}
	}).blur(function() {
		var cpswd = $(this).val();
		var pswd = $("#pass").val();
		if ((cpswd==pswd) && cpswd.length>0){
			$('#confpass').show();
			$('#confpass').attr("width",20);
			$('#confpass').attr("height",20);
            $("#confpass").attr("src","<?=base_url()?>/assets/images/valid.png");
		}else{
			$('#confpass').show();
			$('#confpass').attr("width",20);
			$('#confpass').attr("height",20);
            $("#confpass").attr("src","<?=base_url()?>/assets/images/cross.png");
		}
	});
});
</script>
