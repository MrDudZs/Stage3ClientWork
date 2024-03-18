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
    labels: ['A', 'B', 'C', 'D', 'E'],
    datasets: [{
        label: 'Dataset 1',
        data: [12, 19, 3, 5, 2],
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