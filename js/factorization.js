function calc(){
var a=document.getElementById("num").value;
a=Number(a);
var ans=a+"=";
var i=2,count=0;
var x=false;
if(a==1)
	ans+=1;
while(i<=a){
	while(a%i==0){
		count++;
		a/=i;
	}
	if(count==1)
	{
		x=true;
		ans+=i;
	}
	else if(count>1)
	{
		x=true;
		ans+=(i+"^"+count);
	}
	if(a!=1&&x)
		ans+="*";
	x=false;
	if(i==2)
		i++;
	else
		i+=2;
	count=0;
}
document.getElementById("ans").innerHTML=ans;
}