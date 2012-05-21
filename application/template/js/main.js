$(document).ready(function(e) { 
	//show_sub_menu("#laptop");
	//show_sub_menu("#desktop");
	$("#tab1_content").css("display","block");
	$("#tab1").css("background-color","#ff0000");
	show_tab("#tab1");
	show_tab("#tab2");
	show_tab("#tab3");

});

function show_tab(elem) {
	$(elem).click(function(e) {
		$(elem).css("background-color","#ff0000");
		if(elem=="#tab1")
		{
			$("#tab2").css("background-color","#006dcc");
			$("#tab3").css("background-color","#006dcc");
			$("#tab1_content").css("display","block");
			$("#tab2_content").css("display","none");
			$("#tab3_content").css("display","none");
			}	
		if(elem=="#tab2")
		{
			$("#tab1").css("background-color","#006dcc");
			$("#tab3").css("background-color","#006dcc");
			$("#tab1_content").css("display","none");
			$("#tab2_content").css("display","block");
			$("#tab3_content").css("display","none");
			}	
		if(elem=="#tab3")
		{
			$("#tab1").css("background-color","#006dcc");
			$("#tab2").css("background-color","#006dcc");
			$("#tab1_content").css("display","none");
			$("#tab2_content").css("display","none");
			$("#tab3_content").css("display","block");
			}
	});
}

