 // Doughnut chart data
 var doughnutData = {
    labels: ['Red', 'Blue', 'Yellow'],
    datasets: [{
        data: [30, 20, 50],
        backgroundColor: ['red', 'blue', 'yellow']
    }]
};

// Bar chart data
var barData = {
    labels: ['Acc', 'Hr', 'Finan', 'Media'],
    datasets: [{
        label: '',
        data: [12, 19, 3, 5],
        backgroundColor: 'rgba(255, 99, 132, 0.5)'
    }]
};

// Get the context of the canvas elements
var doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
var barCtx = document.getElementById('barChart').getContext('2d');

// Create doughnut chart
var doughnutChart = new Chart(doughnutCtx, {
    type: 'doughnut',
    data: doughnutData
});

// Create bar chart
var barChart = new Chart(barCtx, {
    type: 'bar',
    data: barData
});