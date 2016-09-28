function login(){
	var pwd=$("#pwd").val();
	boolean logined=false;
	if(pwd=="惠比壽麝香葡萄" && !logined){
		document.getElementById("content").removeAttribute("hidden");
		Materialize.toast('登入成功',3000,'rounded');
	}
	else if(pwd=="惠比壽麝香葡萄" && logined){
		Materialize.toast('已登入',3000,'rounded');
	}
	else if(pwd!="惠比壽麝香葡萄"){
		document.getElementById("content").setAttribute("hidden");
		Materialize.toast('登入失敗',3000,'rounded');
	}
}