$(document).ready(function()
{
    /***********--DELETE--***************/
	$(".delete").live('click',function()
	{
	  var id=$(this).parent().parent().attr('id');
	  var b=$(this).parent().parent();
	  var dataString = 'id='+ id;
	   if(confirm("Sure you want to delete this item? "))
		   {
			 $.ajax({
					type: "POST",
					url: "delete.php",
					data: dataString,
					cache: false,
					success: function(e)
					{
					b.hide();
					}
				   });
		  return false;
		   }
	});
					
/***********--EDIT--***************/			
$(".edit_btn").live('click',function()
{
	var ID=$(this).parent().parent().attr('id');
	$(this).hide();
	$("#"+ID).find("a.update").show();
	$("#"+ID).find("a.cancel").show();
	$("#"+ID).find("a.delete").hide();
	$("#"+ID).find("span").hide()
	$("#"+ID).find("input.editbox_search").show();
	$("#"+ID).find("input.editbox_search").css("border","1px solid red");
});		

/***********--Cancel--***************/
  $('.cancel').live('click',function(){
   var ID=$(this).parent().parent().attr('id');
   
   var one_val=$("#one_"+ID).html();
   var two_val=$("#two_"+ID).html();
   var three_val=$("#three_"+ID).html();
   
   $("#one_input_"+ID).val(one_val);
   $("#two_input_"+ID).val(two_val);
   $("#three_input_"+ID).val(three_val);
   
   $("#"+ID).find("span").show()
   $("#"+ID).find("input.editbox_search").hide();
   
   $("#"+ID).find("a.update").hide();
   $("#"+ID).find("a.cancel").hide();
   $("#"+ID).find("a.delete").show();
   $("#"+ID).find("a.edit_btn").show();	
}); 

/***********--UPDATE--***************/
$(".update").live('click',function(){
		var ID=$(this).parent().parent().attr('id');
		
		var one_val=$("#one_input_"+ID).val();
		var two_val=$("#two_input_"+ID).val();
		var three_val=$("#three_input_"+ID).val();
		
		var dataString = 'id='+ ID+'&fname='+one_val+'&lname='+two_val+'&email='+three_val;
		
		if(one_val.length>0 && two_val.length>0 && three_val.length>0){
		
				$.ajax({
				   type: "POST",
				   url: "update.php",
				   data: dataString,
				   cache: false,
				   success: function(e)
				   {
							$("#one_"+ID).html(one_val);
							$("#two_"+ID).html(two_val);
							$("#three_"+ID).html(three_val);
							$("#"+ID).find("span").show()
							$("#"+ID).find("input.editbox_search").hide();
							
							$("#"+ID).find("a.update").hide();
							$("#"+ID).find("a.cancel").hide();
							
							$("#"+ID).find("a.delete").show();
							$("#"+ID).find("a.edit_btn").show();	

				    }
				   });
		} 	
		
		else{
		  alert("field missing");
		}
  });
  
/***********--ADD--***************/
$("#add").live('click',function(){

	var fname=$("#fname").val();
	var lname=$("#lname").val();
	var email=$("#email").val();
	
	if(fname.length>0&&lname.length>0&&email.length>0){
	var dataString ='fname='+fname+'&lname='+lname+'&email='+email;
	
	$.ajax({
		type: "POST",
		url: "insert.php",
		data: dataString,
		cache: false,
		success: function(e)
		{
		   var id=e;   
		   
		   var tabledata="<tr id="+id+">"+
				
				"<td>"+
				   "<span id='one_"+id.replace(/^\s+|\s+$/g,"")+"'>"+fname+"</span>"+
				   	"<input  type='text' id='one_input_"+id.replace(/^\s+|\s+$/g,"")+"' value="+fname+" class='editbox_search'  />"+
				 "</td>"+
				
				"<td>"+
				   "<span id='two_"+id.replace(/^\s+|\s+$/g,"")+"'>"+lname+"</span>"+
				   	"<input type='text' id='two_input_"+id.replace(/^\s+|\s+$/g,"")+"' value="+lname+" class='editbox_search'  />"+
				"</td>"+
				
				"<td>"+
				  "<span id='three_"+id.replace(/^\s+|\s+$/g,"")+"'>"+email+"</span>"+
				  "<input type='text' id='three_input_"+id.replace(/^\s+|\s+$/g,"")+"' value="+email+" class='editbox_search' />"+
				 "</td>"+
				 
				"<td>"+
					"<a href='#'  class='edit_btn'>Edit</a> "+
					"<a href='#' class='update'  >Update</a>"+
					"<a href='#'  class='cancel' >Cancel</a>"+
					"<a href='#' class='delete' > Delete </a>"+
				"</td>"+
				
				"</tr>";
		   	  
		   
		   $('#mytable tr:last').before(tabledata);
		   $("#mytable tr:last").find("input").val("");
		  
		} //success end
	}); // ajax end
	}
    else{
	  alert("field missing");
	}	
 });

}); // document end
