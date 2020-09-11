function soloNumeros(event){
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8) || (keynum == 46 ))
         return true;
   return /\d/.test(String.fromCharCode(keynum));
}
function validarFormCliente(form){
    codC=document.getElementById("codC").value;
    lat=document.getElementById("latitud").value;
    lon=document.getElementById("longitud").value;
    demanda=document.getElementById("demanda").value;
    accion=document.getElementById("confirmarAccion").value;
    if(codC=="")
    {
        alert("Ingrese codigo del cliente");
        document.getElementById("codC").focus();
        return false;
    }
    if(lat=="")
    {
        alert("Ingrese latitud del cliente");
        document.getElementById("latitud").focus();
        return false;
    }
    if(lon=="")
    {
        alert("Ingrese longitud del cliente");
        document.getElementById("longitud").focus();
        return false;
    }
    if(demanda=="")
    {
        alert("Ingrese demanda del cliente");
        document.getElementById("demanda").focus();
        return false;
    }
    if(accion=="Eliminar"){
        document.getElementById("Eliminar").submit();
    }
    else if(accion=="NoEliminar"){
        return false;
    }
}
function validarFormVehiculo(frm){
    codV=document.getElementById("codV").value;
    capacidad=document.getElementById("capacidad").value;
    accion=document.getElementById("confirmarAccion").value;
    if(codV=="")
    {
        alert("Ingrese código del vehículo");
        document.getElementById("codV").focus();
        return false;
    }
    if(capacidad=="")
    {
        alert("Ingrese capacidad del vehiculo");
        document.getElementById("capacidad").focus();
        return false;
    }
    if(accion==""){
        document.getElementById("Modificar").submit();
    }
    if(accion=="Eliminar"){
        document.getElementById("Eliminar").submit();
    }else if(accion=="NoEliminar"){
        return false;
    }
}
function validar(select){
    codV=select.value;
    if(codV=="")
    {
        alert("Seleccione código de un vehículo");
        return false;
    }
}
function validarLista(select,cap,cant){
    opcionV=select.value; 
    var capacidad=parseInt(cap.value);
    var cantSelec=parseInt(cant.value);
    if(opcionV=="")
    {
	  alert("Seleccione código de un vehiculo");
          return false;
    }
    if(cantSelec==0){
        alert("Debe seleccionar clientes para generar lista");
        return false;
    }else if(cantSelec>capacidad){
        alert("Los clientes seleccionados superan la capaciadad del vehículo");
        return false;
    }
    else{ 
        if (confirm("¿Esta seguro de asignar estos clientes al vehiculo seleccionado?")) {
                document.getElementById("Generar Lista").submit();
            }
        return false;
    }
    
    /*else return true;
    for (i = 0;lcheck=checks[i]; i++) {
        if (lcheck.checked) {
            if (confirm("¿Esta seguro de asignar estos clientes al vehiculo seleccionado?")) {
                document.getElementById("frmC").submit();
            }
            return false;
        }
    }*/
}
function selectVehiculo(select){
    var cadena=select.value;
    separador = " ",
    arregloDeSubCadenas=cadena.split(separador);        
    document.getElementById("codigoV").value=arregloDeSubCadenas[0];
    document.getElementById("capacidad").value=arregloDeSubCadenas[1];
}
function contar(checks){
    var cont=0;
    for (i = 0;lcheck=checks[i]; i++) {
        if (lcheck.checked) {
            cont++;
        }
    }
    document.getElementById("contador").value=cont;
}
function selVehiculo(sel){
    document.getElementById("codigoV").value=sel.value;
}
function confirmar()
{
    if(confirm("¿Esta seguro de eliminar este cliente?")) {
        document.getElementById("confirmarAccion").value='Eliminar';
    }else{
        document.getElementById("confirmarAccion").value='NoEliminar';
        alert("Ha cancelado la eliminación del cliente");
    } 
}
function confirmarEliminar(){
    if(confirm("¿Esta seguro de eliminar este vehiculo?")){
        document.getElementById("confirmarAccion").value='Eliminar';
    }else{
        document.getElementById("confirmarAccion").value='NoEliminar';
        alert("Ha cancelado la eliminación del vehiculo");
    }
}