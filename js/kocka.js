function changeText(text){
    document.getElementById("szoveg").innerHTML=text;
}

function changeColor(){
    const r = Math.floor(Math.random()*255);
    const g = Math.floor(Math.random()*255);
    const b = Math.floor(Math.random()*255);
    const kocka = document.getElementById("square");
    kocka.style.backgroundColor=`rgb(${r},${g},${b})`;
}