 // Agrega un evento onload para cambiar el color de la celda durante 2 segundos
 document.addEventListener('DOMContentLoaded', (event) => {
    const celda = document.getElementById('celda-{{$item}}');
    if (celda) {
        celda.style.backgroundColor = 'yellow'; // Cambia el color de fondo a amarillo
        setTimeout(() => {
            celda.style.backgroundColor = ''; // Restaura el color original después de 2 segundos
        }, 2000);
    }
});
