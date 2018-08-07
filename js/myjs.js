function getform1(){

    var button= document.getElementById("nonresidential");
    var form1= document.getElementById("formnonres");
    

     if(button.clicked === true){

        form1.style.display="block";
       
     }
     else{

        form1.style.display="none";
       
       }
    
}

function getform2(){

    var button= document.getElementById("residential");
    var form1= document.getElementById("formnonres");
     var form2= document.getElementById("formres");

     if(button.clicked === true){

        form2.style.display="block";
        form1.style.display="none";
     }
     else{

        form1.style.display="none";
        form2.style.display="none";


     }
    
}


function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var req=document.getElementById("workshop1");
    var text = document.getElementById("text");
    if (checkBox.checked === true){
        text.style.display = "block";
        req.setAttribute("required", "true");
    } else {
       text.style.display = "none";
    }
}

function myFunction_res() {
    var checkBox = document.getElementById("myCheck_res");
    var req=document.getElementById("workshop1_res");
    var text = document.getElementById("text_res");
    if (checkBox.checked === true){
        text.style.display = "block";
        req.setAttribute("required", "true");
    } else {
       text.style.display = "none";
    }
}




function Apersonnumber() {
    
   
    var checkBox = document.getElementById("checkAccompany");
    var text = document.getElementById("text2");

    if (checkBox.checked === true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }
    
    
}




function oneperdata() {

    var radio = document.getElementById("oneperson");
    var text = document.getElementById("data1");
    var text2 = document.getElementById("one");
    var text3 = document.getElementById("two");
    if (radio.checked === true){
         text.style.display = "block";
        text2.style.display = "block";
        text3.style.display = "none";
    } else {
       text.style.display = "none";
    }
    

}



function twopersondata() {
    var checkBox = document.getElementById("twoperson");
    var text = document.getElementById("data1");
    var text2 = document.getElementById("one");
    var text3 = document.getElementById("two");
    if (checkBox.checked === true){
        text.style.display = "block";
        text2.style.display = "block";
        text3.style.display = "block";
    } else {
       text.style.display = "none";
    }
    
}

function myFunctionRes() {
    var radio = document.getElementById("singleoccupancy");
    var text = document.getElementById("showoption");
    if (radio.checked === true){
        text.style.display = "block";
        document.getElementById("checkAccompanyRes").style.display="block";
        document.getElementById("checkAccompanyRes").checked = false;
        
        document.getElementById("twin_ac").style.display="none";
        document.getElementById("tripple_ac").style.display="none";
    } else {
       text.style.display = "none";
    }
}

function ApersonnumberRes() {

	var checkBox = document.getElementById("checkAccompanyRes");
	var text =document.getElementById("viewoption");
	//alert(checkbox);
	if (checkBox.checked === true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
	}



if (document.getElementById("doubleoccupancy").checked === true){
    	text.style.display= "none";
    	document.getElementById("data1_res").style.display="none";
    	document.getElementById("showoption").style.display="none";
    	document.getElementById("viewoption").style.display="none";
    	document.getElementById("checkAccompanyRes").style.display="none";
    	
    	
    }
    if (document.getElementById("trippleoccupancy").checked === true){
    	text.style.display= "none";
    	document.getElementById("data1_res").style.display="none";
    	document.getElementById("showoption").style.display="none";
    	document.getElementById("viewoption").style.display="none";
    	document.getElementById("checkAccompanyRes").style.display="none";
    	
    }
}

 function oneperdata_res() {
  
    var radio = document.getElementById("oneperson_res");
    var text = document.getElementById("data1_res");
    var text2 = document.getElementById("1st");
    var text3 = document.getElementById("2nd");

  
    if (radio.checked === true){
        text.style.display = "block";
        text2.style.display = "block";
        text3.style.display = "none";
    } else {
       text.style.display = "none";
    }
}

function twopersondata_res() {
    var radio = document.getElementById("twoperson_res");
     var text = document.getElementById("data1_res");
    var text2 = document.getElementById("1st");
    var text3 = document.getElementById("2nd");
    if (radio.checked === true){
        text.style.display = "block";
        text2.style.display = "block";
        text3.style.display = "block";
    } else {
       text3.style.display = "none";
    }
}

function getactwin(){
    
    var radio=document.getElementById("doubleoccupancy");
    var text=document.getElementById("twin_ac");

     if (radio.checked == true){

            text.style.display = "block";

        document.getElementById("tripple_ac").style.display="none";
     }else{
            text.style.display = "none";
     }
}

function getactripple(){
    
    var radio=document.getElementById("trippleoccupancy");
    var text=document.getElementById("tripple_ac");

     if (radio.checked == true){

            text.style.display = "block";
             document.getElementById("twin_ac").style.display="none";
     }else{
            text.style.display = "none";
     }
}