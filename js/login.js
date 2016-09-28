function login(){
	var pwd=$("#pwd").val();
	if(pwd=="惠比壽麝香葡萄")
		document.getElementById("content").removeAttribute("hidden");
	else
		document.getElementById("content").setAttribute("hidden");
}