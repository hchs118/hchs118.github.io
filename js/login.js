function login(){
	var pwd=$("#pwd").val();
	if(pwd=="惠比壽麝香葡萄"){
		document.getElementById("content").removeAttribute("hidden");
		Materialize.toast('登入成功',3000,'rounded');
	}
	else{
		document.getElementById("content").setAttribute("hidden");
		Materialize.toast('登入失敗',3000,'rounded');
	}
}