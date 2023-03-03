/* fetch('valores.csv')
  .then(response => response.text())
  .then(data => {
    console.log(data); // Aqui você pode fazer o que quiser com o conteúdo do arquivo .csv
  });
 */
console.log("o1i");


fetch('./valores.json')
  .then(response => response.json())
  .then(data => {
    console.log(data);
    // Aqui você pode acessar os dados do arquivo JSON, por exemplo:
/*     console.log(data.IDprincipal);
    console.log(data.data1);
    console.log(data.numero1); */
  })
  .catch(error => console.error(error));

/* fetch('valores.csv')
  .then(response => response.text())
  .then(csvString => {
    const csvParseOptions = { columns: true, delimiter: ',', skip_empty_lines: true };
    return csvParse(csvString, csvParseOptions);
  })
  .then(data => {
  
    console.log(data);
  }); */