//fetch('http://api.aviationstack.com/v1/flights?access_key=0ad5e857cc8540b5c6786847185af4de')
//  .then(res => res.json()).then(console.log);


  fetch('http://api.aviationstack.com/v1/flights?access_key=0ad5e857cc8540b5c6786847185af4de')
  .then(response => response.json())
  .then(console.log)
  .then(data => {
    const cuerpoTabla = document.getElementById('cuerpoTabla');
    data.forEach(item => {
      const fila = `<tr><td>${item.flight_date}</td><td>${item.nombre}</td><td>${item.valor}</td></tr>`;
      cuerpoTabla.innerHTML += fila;
    });
  })
  .catch(error => {
    console.error('Error al obtener datos de la API', error);
  });