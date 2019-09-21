var modal = document.getElementById('windowadd');
var btn=document.getElementById('add');


btn.onclick=function(){
modal.style.display = "block";

}

modal.onclick=function(){
    if(event.target == modal){
        modal.style.display="none";
    }
}