// JavaScript Document
function lo(th,url)
{
	$.ajax(url,{cache:false,success: function(x){$(th).html(x)}})
}
function good(news){
	$.post("./api/good.php",{news},()=>{
		location.reload();
		// switch($("#n"+news).text()){
		// 	case "讚":
		// 		$("#n"+news).text("收回讚")
		// 		$("#g"+news).text($("#g"+news).text()*1+1)
		// 	break;
		// 	case "收回讚":
		// 		$("#n"+news).text("讚")
		// 		$("#g"+news).text($("#g"+news).text()*1-1)
		// 	break;
		// } 
	}
	)
}








// open
function op(x,y,url)
{
	$(x).fadeIn()
	if(y)
	$(y).fadeIn()
	if(y&&url)
	$(y).load(url)
}
// close
function cl(x)
{
	$(x).fadeOut();
}