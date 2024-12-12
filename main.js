function fun2(){
    document.getElementById("main").style.height = "0";   
    document.getElementById("close").style.height = "0"; 
    document.getElementById("main").style.width = "0";   
    document.getElementById("men1").style.display = "none"; 
    document.getElementById("men2").style.display = "none"; 
    document.getElementById("men3").style.display = "none"; 
    document.getElementById("regcon").style.display = "none"; 
    document.getElementById("forcon").style.display = "none"; 
}
function fun3(){
    document.getElementById("main").style.height = "0";   
    document.getElementById("close").style.height = "0"; 
    document.getElementById("main").style.width = "0";   
    document.getElementById("men1").style.display = "none"; 
    document.getElementById("men2").style.display = "none"; 
    document.getElementById("men3").style.display = "none"; 
}
function fun(){
    document.getElementById("main").style.height = "200px";   
    document.getElementById("main").style.width = "160px"; 
    document.getElementById("close").style.height = "32px"; 
    document.getElementById("men1").style.display = "flex"; 
    document.getElementById("men2").style.display = "flex"; 
    document.getElementById("men3").style.display = "flex"; 
    document.getElementById("logcon").style.display="none";
}
function home(){
    document.getElementById("main").style.height = "0";   
    document.getElementById("close").style.height = "0"; 
    document.getElementById("main").style.width = "0";   
    document.getElementById("men1").style.display = "none"; 
    document.getElementById("men2").style.display = "none"; 
    document.getElementById("men3").style.display = "none"; 
    document.getElementById("regcon").style.display="none";
    document.getElementById("logcon").style.display="none";
    document.getElementById("forcon").style.display="none";
    document.getElementById("gg").style.filter="none";
    document.getElementById("gg1").style.filter="none";
}

function reg1(){
    document.getElementById("logcon").style.display="none";
    document.getElementById("regcon").style.display="block";
    document.getElementById("forcon").style.display="none";
    document.getElementById("gg").style.filter='blur(5px)';
    document.getElementById("msg").style.display="none";
    document.getElementById("gg1").style.filter='blur(5px)';
    fun3();
}
function for1(){
    document.getElementById("logcon").style.display="none";
    document.getElementById("regcon").style.display="none";
    document.getElementById("forcon").style.display="block";
    document.getElementById("gg").style.filter='blur(5px)';
    document.getElementById("msg").style.display="none";
    document.getElementById("gg1").style.filter='blur(5px)';
    fun3();
}
function ret(){
    document.getElementById("logcon").style.display="none";
    document.getElementById("gg").style.filter="none"
    document.getElementById("gg1").style.filter="none";
}
function ret1(){
    document.getElementById("regcon").style.display="none";
    document.getElementById("gg").style.filter="none"
    document.getElementById("gg1").style.filter="none";
}
function ret2(){
    document.getElementById("forcon").style.display="none";
    document.getElementById("gg").style.filter="none"
    document.getElementById("gg1").style.filter="none";
}
function log1(){
    document.getElementById("logcon").style.display="block";
    document.getElementById("regcon").style.display="none";
    document.getElementById("msg").style.display="none";
    document.getElementById("forcon").style.display="none";
    document.getElementById("gg").style.filter='blur(5px)';
    document.getElementById("gg1").style.filter='blur(5px)';
}
function wrong(){
    document.getElementById("msg").style.display="none";
    document.getElementById("gg").style.filter="none"
    document.getElementById("gg1").style.filter="none";
}