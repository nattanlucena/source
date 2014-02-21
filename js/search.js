$(document).ready(function(){
	
	$("#search-input").keyup(function(){
		
		if( $(this).val() != "")
		{
			
			$("#table-list tbody>tr").hide();
			$("#table-list td:contains-ci('" + $(this).val() + "')").parent("tr").show();
		}
		else
		{
			
			$("#table-list tbody>tr").show();
		}
	});
});
//expressão jquery para case-insensitive 
$.extend($.expr[":"], 
{
    "contains-ci": function(elem, i, match, array) 
	{
		return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
	}
});