

function InitSpeedLine(){
	var tHTML=``;
	for(var i=0;i<100;i++){
		var dangle=Math.random()*Math.PI*2;
		var dr=200;
		var dx=Math.cos(dangle)*dr;
		var dy=Math.sin(dangle)*dr;
		var dz=(Math.random()-0.5)*0;
		var dt=Math.random()*5;
		var rc=`hsl(${Math.random()*360}deg,100%,50%)`;
		tHTML+=`<div class="SpeedLineChange" style="animation-delay:${-dt}s;">
			<div class="SpeedLine" style="transform:
			translate3d(${dx}px,${dy}px,${dz}px)
			rotateZ(${dangle/Math.PI*180}deg) rotateY(90deg) ;background:${rc}"></div>
		</div>`;
	}
	document.querySelector(".SpeedLineArea").innerHTML=tHTML;
}
InitSpeedLine();