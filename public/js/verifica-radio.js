// document.getElementById("category").onclick = verificaRadios;


// function verificaRadios(form){
//     marcado=false;
//     for ( var i = 0; i < form.category.length; i++ ) {
//         if (form.category[i].checked)
//             marcado = true;
//     }

//     if(!marcado){
//         alert("Por favor, debe elegir una opción!");
//         return false;
//     }
//     else{
//         return true;
//     }
// }


function verificaRadios(){
    if(document.getElementById('category').checked){
        alert("Por favor, debe elegir una opción!");
        return false;
    }

}