import db from '../Domany/db.json' assert { type: "json" };

function checkEmailAvalability(email) {
    for(let user of db){
        if(user.email === email){
            return false;
        }
    }
    return true;
}

console.log(db);

export function trySave() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let age = document.getElementById("age").value;

    if(!age || !email || !name){
        alert("Minden mezőt tölts ki!");
        return;
    }

    if(age<=16){
        alert("16 évnél fiatalabb nem regisztrálhat!");
        return;
    }
    if (!checkEmailAvalability(email)){
        alert("Az email cimmel mar regisztraltak!");
    }
    let newUser = {
        name,
        age: parseInt(age),
        email,
        id: db.length+1,
        date: new Date()
    }
    console.log({newUser});
}