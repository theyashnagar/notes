function updateNote(element,id) {
    var idUpdate = document.getElementById("idupdate");
    var noteUpdate = document.getElementById("noteupdate");
    var noteUpdateForm = document.getElementById("noteupdateform");
    noteUpdate.setAttribute('value',element.innerHTML);
    idUpdate.setAttribute('value',id);
    noteUpdateForm.submit();
}




function stretchy(element) {
    var value= element.value;
    function update() {
        var h= element.scrollHeight;
        if (h>element.offsetHeight || h<element.offsetHeight-48)
            element.style.height= (h+24)+'px';
    }
    element.onkeyup= update;
    setInterval(update, 1000);
    update();
}

stretchy(document.getElementById('takenote'));
