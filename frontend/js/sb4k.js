base_url='/sbk/';

function compare_product(productid='')
{	
var count=0;
	$(".chkcount").each(function() {
			
				
           if($(this).prop('checked') == true){
				
                count=count+1;
				
            }

 });
	var pro_id=productid;
	
	if ( pro_id !=='')
	{ 
    $.ajax({
    type: "POST",
	data:{ productid : pro_id },
	
    url: base_url+'Landingpage/fetchdata_compare_product',
  
    cache: false,
    success: function(html)
    {
	document.getElementById("compare").style.display = "block";
	
    $("#productName"+count).html(html);

    }
    });
	}return false; 
 	  

	
}
