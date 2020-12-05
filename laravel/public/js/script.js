//var count = 0
//localStorage.setItem(1, count);  
function countorder() {
    count = localStorage.getItem(1);  
    count = parseInt(count) + 1
    localStorage.setItem(1, count);  
}
count = localStorage.getItem(1);  
document.getElementById("ordernbr").innerHTML = count