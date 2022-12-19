function osztas(){
    let a = document.getElementById("elsoszam").value;
    let b = document.getElementById("masodikszam").value;
    a = parseInt(a);
    b = parseInt(b);
    let c = a/b;
    document.getElementById("result").innerHTML = c.toString();
}