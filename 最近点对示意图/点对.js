var p = new Array();
for(var i  = 1;i<=10;i++){
	p[i] = document.getElementById("point"+i);
	//p[i].classList.add("hide");
	p[i].style.opacity = 0;
}

rec1= document.getElementById("rec1"); 
rec2 = document.getElementById("rec2");
line1 = document.getElementById("line1");

	
function showrec(){
		rec1.style.animation = "rec1move 2s 1";
		rec1.style.animationFillMode = "forwards";
		rec1.style.animationDelay = "1s";
		rec2.style.animation = "rec2move 2s 1";
		rec2.style.animationFillMode = "forwards";
}	

function showpoint(){
	for(var i = 1;i<=10;i++){

			p[i].style.animation = "pointmove 2s 1 "+ i/2+"s"+",pointmove 2s 1 5.5s";
			p[i].style.animationFillMode = "forwards";
	}

}

function showall(){
	var p = new Array();
	for(var i  = 1;i<=10;i++){
		p[i] = document.getElementById("point"+i);
		//p[i].classList.add("hide");
		p[i].style.opacity = 1;
	}
}
function hidepoint(){
	for(var i  = 1;i<=10;i++){
		p[i] = document.getElementById("point"+i);
		if(i == 6||i==3||i ==2||i==1){
			p[i].style.animation  = "pointred 2s 1";
			p[i].style.animationFillMode = "forwards";
			
		}
		else{
			
			p[i].style.animation = "hide 2s 1";
			p[i].style.animationFillMode = "forwards";
			
		}

	}
	rec1.style.animation = "hide 2s 1";
	rec1.style.animationFillMode = "forwards";
	rec2.style.animation = "hide 2s 1";
	rec2.style.animationFillMode = "forwards";
	
}

function showline(){
	line1.style.animation = "show 2s 1";	
	line1.style.animationFillMode = "forwards";
	
}
function linemove(){
	
	line1.style.animation = "linemove 2s 1";
	line1.style.animationFillMode = "forwards";
	
	
}
function linebigger(){
	
	line1.style.animation = "linebigger 2s 1";
	line1.style.animationFillMode = "forwards";
	line1.innerHTML = "2d";
	rec3 = document.getElementById("rec3");
	rec3.style.animation = "show 2s 1";
	rec3.style.animationFillMode = "forwards";
	for(var i  = 1;i<=10;i++){
		p[i] = document.getElementById("point"+i);
		if(i == 5||i==7||i==2){
			p[i].style.animation  = "pointblue 2s 1";
			p[i].style.animationFillMode = "forwards";
			
		}
		else
		if(i==3||i==1||i==6){
			p[i].style.animation = "hide 2s 1";
		}
	
	}
	
}

	
function showrec3(){
	rec3 = document.getElementById("rec3");
	rec3.style.animation = "show 2s 1";
	rec3.style.animationFillMode = "forwards";
}


	function showline2(){
		line2.style.animation = "showline2 2s 1";	
		line2.style.animationFillMode = "forwards";
		for(var i  = 1;i<=10;i++){
		p[i] = document.getElementById("point"+i);
		if(i == 5||i==7||i==2){
			p[i].innerHTML = "";		
		}
		rec3.style.animation = "hide 2s 1";
		line2.style.animationFillMode = "forwards";
		p[2].style.animation = "hide 2s 1";
		
	}
	}
