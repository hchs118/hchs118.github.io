function login(){
	var ans="惠比壽麝香葡萄";
	var pwd=$("#pwd").val();
	var logined=false;
	if(pwd!=ans){
		document.getElementById("content").setAttribute("hidden");
		Materialize.toast('登入失敗',3000,'rounded');
		logined=!logined;
	}
	
	if(pwd==ans)
		if(logined){
			Materialize.toast('已登入',3000,'rounded');
		}
		else{
			document.getElementById("content").removeAttribute("hidden");
			Materialize.toast('登入成功',3000,'rounded');
			logined=!logined;
		}
	
}