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