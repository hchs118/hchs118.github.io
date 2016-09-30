var logined=false;
function login(){
	var ans="惠比壽麝香葡萄";
	var pwd=$("#pwd").val();
	if(pwd!=ans){
		$("#content").hide();
		Materialize.toast('登入失敗',3000,'rounded');
		logined=false;
	}
	
	if(pwd==ans)
		if(logined==true){
			Materialize.toast('已登入',3000,'rounded');
		}
		else{
			$("#content").show();
			Materialize.toast('登入成功',3000,'rounded');
			logined=true;
		}
}