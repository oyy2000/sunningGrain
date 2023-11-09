
	   function my(id){
		   return document.getElementById(id);
	   }
	  
	  function changeMercury(){
		  var x=document.getElementById("#Mercury");
		   if(x.innerHTML=="Hide Mercury"){
			 x.innerHTML="Show Mercury";  
			 my("lopp1").style.display = "none";
			 my("Mercury").style.display = "none";
		   }
		   else if(x.innerHTML=="Show Mercury")
		   {
			   x.innerHTML="Hide Mercury";
				 my("lopp1").style.display = "block";
				 my("Mercury").style.display = "block";
		   } 
	  }
	  
	    function changeVenus(){
	  		  var x=document.getElementById("#Venus");
	  		   if(x.innerHTML=="Hide Venus"){
	  			 x.innerHTML="Show Venus";  
	  			 my("lopp2").style.display = "none";
	  			 my("Venus").style.display = "none";
	  		   }
	  		   else if(x.innerHTML=="Show Venus")
	  		   {
	  			   x.innerHTML="Hide Venus";
	  				 my("lopp2").style.display = "block";
	  				 my("Venus").style.display = "block";
	  		   } 
	  }
	  
	    function changeEarth(){
	  		  var x=document.getElementById("#Earth");
	  		   if(x.innerHTML=="Hide Earth"){
	  			 x.innerHTML="Show Earth";  
	  			 my("lopp3").style.display = "none";
	  			 my("Earth").style.display = "none";
	  		   }
	  		   else if(x.innerHTML=="Show Earth")
	  		   {
	  			   x.innerHTML="Hide Earth";
	  				 my("lopp3").style.display = "block";
	  				 my("Earth").style.display = "block";
	  		   } 
	  }
	  
	  
	    function changeMars(){
	  		  var x=document.getElementById("#Mars");
	  		   if(x.innerHTML=="Hide Mars"){
	  			 x.innerHTML="Show Mars";  
	  			 my("lopp4").style.display = "none";
	  			 my("Mars").style.display = "none";
	  		   }
	  		   else if(x.innerHTML=="Show Mars")
	  		   {
	  			   x.innerHTML="Hide Mars";
	  				 my("lopp4").style.display = "block";
	  				 my("Mars").style.display = "block";
	  		   } 
	  }
	  
	  
	    function changeJupiter(){
	  		  var x=document.getElementById("#Jupiter");
	  		   if(x.innerHTML=="Hide Jupiter"){
	  			 x.innerHTML="Show Jupiter";  
	  			 my("lopp5").style.display = "none";
	  			 my("Jupiter").style.display = "none";
	  		   }
	  		   else if(x.innerHTML=="Show Jupiter")
	  		   {
	  			   x.innerHTML="Hide Jupiter";
	  				 my("lopp5").style.display = "block";
	  				 my("Jupiter").style.display = "block";
	  		   } 
	  }
	  
	  
	    function changeSaturn(){
	  		  var x=document.getElementById("#Saturn");
	  		   if(x.innerHTML=="Hide Saturn"){
	  			 x.innerHTML="Show Saturn";  
	  			 my("lopp6").style.display = "none";
	  			 my("Saturn").style.display = "none";
	  		   }
	  		   else if(x.innerHTML=="Show Saturn")
	  		   {
	  			   x.innerHTML="Hide Saturn";
	  				 my("lopp6").style.display = "block";
	  				 my("Saturn").style.display = "block";
	  		   } 
	  }
	  
	  
	  function changeUranus(){
	  		  var x=document.getElementById("#Uranus");
	  		   if(x.innerHTML=="Hide Uranus"){
	  			 x.innerHTML="Show Uranus";  
	  			 my("lopp7").style.display = "none";
	  			 my("Uranus").style.display = "none";
	  		   }
	  		   else if(x.innerHTML=="Show Uranus")
	  		   {
	  			   x.innerHTML="Hide Uranus";
	  				 my("lopp7").style.display = "block";
	  				 my("Uranus").style.display = "block";
	  		   } 
	  }
	  
	  function changeNeptune(){
	  		  var x=document.getElementById("#Neptune");
	  		   if(x.innerHTML=="Hide Neptune"){
	  			 x.innerHTML="Show Neptune";  
	  			 my("lopp8").style.display = "none";
	  			 my("Neptune").style.display = "none";
	  		   }
	  		   else if(x.innerHTML=="Show Neptune")
	  		   {
	  			   x.innerHTML="Hide Neptune";
	  				 my("lopp8").style.display = "block";
	  				 my("Neptune").style.display = "block";
	  		   } 
	  }
	  function Clear(){
		my("lopp1").style.display = "none";
		my("Mercury").style.display = "none";  
		my("lopp2").style.display = "none";
		my("Venus").style.display = "none";  
		my("lopp3").style.display = "none";
		my("Earth").style.display = "none";  
		my("lopp4").style.display = "none";
		my("Mars").style.display = "none";  
		my("lopp5").style.display = "none";
		my("Jupiter").style.display = "none";  
		my("lopp6").style.display = "none";
		my("Saturn").style.display = "none";  
		my("lopp7").style.display = "none";
		my("Uranus").style.display = "none";  
		my("lopp8").style.display = "none";
		my("Neptune").style.display = "none";
	  }
 