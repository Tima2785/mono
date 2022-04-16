

	$(".submitBtn").click(function(){ 
        if(checkFields()===true) {
            $(".presult").val(4);
            $("#order_form").submit();
        }
    });
    
    function setActionLink() {
        $(".order_form").attr("action", "zakaz.php?form=mainform")
    }

    setTimeout(setActionLink, 10000);
    function checkFields()
    {
        if ($("input[name*='name']").val() == "" && $("input[name*='phone']").val() == "") {
			alert("Введите Ваши имя и телефон");
			$("input[name*='name']").focus();
			return false;
		}
		else if ($("input[name*='name']").val() == "") {
			alert("Введите Ваше имя");
			$("input[name*='name']").focus();
			return false;
		}
		else if ($("input[name*='phone']").val() == "") {
			alert("Введите Ваш телефон");
			$("input[name*='phone']").focus();
			return false;
        }
    else
    {
        return true;
    }
    }




$('#phoneNumber').inputmask("+38 (999) 999 99 99");