const pg = require('pg');
var ya = "SELECT jawaban FROM basic WHERE jawaban='ya'";
var tidak = "SELECT jawaban FROM basic WHERE jawaban='tidak'";

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: ['red','yellow','pink','green','blue','orange','purple'],
            borderColor: 'black',
            data: [1, 2, 3, 4, 5, 6, 7],
        }]
    },

    // Configuration options go here
    options: {}
});

const client = new pg.Client({
  user: "iwyxaotzpdcwxp",
  host: "ec2-54-246-85-234.eu-west-1.compute.amazonaws.com",
  database: "d320e4j15u7oe9",
  password: "94094cc3d5a2e480287f8f0a11fbc45e03685dae62b0da058f6dd44069be0bb8",
  port: 5432,
  ssl: true
});

client.connect();

client.query(ya, (err, res) => {
  console.log(err, res);
  client.end();
});

client.query(tidak, (err, res) => {
  console.log(err, res);
  client.end();
});