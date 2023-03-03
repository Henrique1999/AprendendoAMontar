console.log("oxi");


fetch('./valores.json')
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(error => console.error(error));
