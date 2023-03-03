const express = require('express');
const app = express();
const csv = require('csv-parser');
const fs = require('fs');
const cors = require('cors');
app.use(cors());
app.get('/valores', (req, res) => {
  const results = [];

  fs.createReadStream('valores.csv')
    .pipe(csv())
    .on('data', (data) => results.push(data))
    .on('end', () => {
      res.json(results);
    });
});

app.listen(3000, () => {
  console.log('Servidor iniciado na porta 3000');
});