var modal1 = document.getElementById('window');
var btn1=document.getElementById('list');


btn1.onclick=function(){
modal1.style.display = "block";

}

modal1.onclick=function(){
    if(event.target == modal1){
        modal1.style.display="none";
    }
}

