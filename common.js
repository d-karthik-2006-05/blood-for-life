function f1(){
    document.getElementById("main").style.height = "0";   
    document.getElementById("close").style.height = "0"; 
    document.getElementById("main").style.width = "0";   
    document.getElementById("men1").style.display = "none"; 
    document.getElementById("men2").style.display = "none"; 
    document.getElementById("men3").style.display = "none"; 
    document.getElementById("men4").style.display="none";
    document.getElementById("men5").style.display="none";
    document.getElementById("men6").style.display="none";
}
function f2(){
    document.getElementById("main").style.height = "300px";   
    document.getElementById("main").style.width = "200px"; 
    document.getElementById("close").style.height = "32px"; 
    document.getElementById("men1").style.display = "flex"; 
    document.getElementById("men2").style.display = "flex"; 
    document.getElementById("men3").style.display = "flex"; 
    document.getElementById("men4").style.display="flex";
    document.getElementById("men5").style.display="flex";
    document.getElementById("men6").style.display="flex";
}
function ex(){
    document.getElementById("main").style.height = "0";   
    document.getElementById("close").style.height = "0"; 
    document.getElementById("main").style.width = "0";   
    document.getElementById("men1").style.display = "none"; 
    document.getElementById("men2").style.display = "none"; 
    document.getElementById("men3").style.display = "none"; 
    document.getElementById("men4").style.display="none";
    document.getElementById("men5").style.display="none";
    document.getElementById("men6").style.display="none";
}
function filterFunction() {
    // Declare variables
    const input = document.getElementById('searchInput');
    const filter = input.value.toUpperCase();
    const select = document.getElementById('mySelect');
    const options = select.getElementsByTagName('option');
    input.addEventListener("click",() => {select.style.display = "block";});
    
    // Loop through all options and hide those that don't match the search query
    for (let i = 0; i < options.length; i++) {
        const option = options[i];
        const txtValue = option.textContent || option.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            option.style.display = "block";
        } else {
            option.style.display = "none";
        }
        option.addEventListener("click",() => {input.value = option.textContent});
    }
}
