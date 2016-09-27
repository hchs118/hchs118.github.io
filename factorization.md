<script src="js/factorization.js"></script>

* **輸入數字**:
* <input type="text" id="num"></input>
<button onclick="calc()">**因式分解**</button>
* *<p id="ans">0</p>*

```javascript
function calc(){
var a=document.getElementById("num").value;
var ans=a+"=";
a=Number(a);
var i=2,count=0;
var x=false;
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
```