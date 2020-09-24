

function color(){
    var bolitas = new Array()
    bolitas[0] = 'Blanco';
    bolitas[1] = 'Verde';
    bolitas[2] = 'Amarillo';
    bolitas[3] = 'Azul';
    bolitas[4] = 'Rojo';
    
    aleat = Math.floor (Math.random() * (bolitas.length));
       
    document.getElementById('bolita').value= (bolitas[aleat]);

}
