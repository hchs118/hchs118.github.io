function login(){
	var pwd=document.getElementById("pwd").value;
	if(pwd=="惠比壽麝香葡萄")
		document.getElementById("content").removeAttribute("hidden");
	else
		document.getElementById("content").setAttribute("hidden");
}