function successFunction(i){
    if(i){
        document.getElementById("successform").style.display='block';
        document.getElementById("form").style.display='none';
    }else {
        document.getElementById("successform").style.display='none';
        document.getElementById("form").style.display='block';
    }
}