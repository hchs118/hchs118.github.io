<script src="../js/factorization.js"></script>

<div class="row">
        <div class="col s1 m12">
          <div class="card blue">
            <div class="card-content white-text">
				<span class="card-title">輸入數字:</span>
            </div>
          </div>
        </div>
      </div>
<input type="text" id="num" placeholder="一個整數"></input>
<button onclick="calc()" class="waves-effect waves-light btn">**因式分解**</button>
<div class="row">
        <div class="col s1 m12">
          <div class="card blue">
            <div class="card-content white-text">
				<p id="n"></p>
				<p id="ans" class="card-title"></p>
            </div>
          </div>
        </div>
      </div>

```javascript
function calc(){
var a=$("#num").val();
$("#n").text(a+"=");
a=Number(a);
var ans="";
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
$("#ans").text(ans);
}
```