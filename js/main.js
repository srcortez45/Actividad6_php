

function login(){
    let btn = document.getElementById('btnlogin');
    let cont = 0;
    btn.onclick = function(){
    let ajaxRequest = new XMLHttpRequest();
    let user = document.getElementById('id_user').value;
    let pass = document.getElementById('id_pass').value;
    let queryString = "?user="+user+"&pass="+pass;
    ajaxRequest.open("GET","../services/functions.php"+queryString,true);
    
    ajaxRequest.onreadystatechange = function(){
        if(ajaxRequest.readyState == 4 && this.status == 200){
            let response = this.responseText;
            alert(response);
        }
    }
    ajaxRequest.onload = function (){
        if(ajaxRequest == 200){
            let res = JSON.parse(this.responseText);
            alert(res)
        }
    }
    ajaxRequest.send();

    
    }
}