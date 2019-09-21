function deleletconfig() {
    var del=confirm("Esta acción eliminará de forma permanente el trámite. Deseas continuar?");
    if (del==true){
        alert ("Trámite eliminado")
        
    } else {
        alert("Se conservó el original")
    }
}
