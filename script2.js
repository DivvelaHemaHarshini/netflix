document.getElementById("btn2").addEventListener("click",function(event){
    var input = document.getElementById("input").value;
    if(!input){
        alert("please enter a values before submitting")
    event.preventDefault();
    }
    else{
        alert("form submitted");
        
       }
 });
    
    