
function updateDetails(id,name,hobby){
    document.getElementById('updateModal').style.display = "flex";
    document.getElementById('updateID').value = id;
    document.getElementById('updateName').value = name;
    document.getElementById('updateHobby').value = hobby;
}

function closeModal(){
    document.getElementById('updateModal').style.display = "none";
}

// EVERYTHING MADE BY JONAS PAQUIBOT