// Doughnut chart data
var doughnutData = {
    labels: ['Pending', 'Approved', 'Rejected'],
    datasets: [{
        label: 'Files',
        data: [statusCounts[0], statusCounts[1], statusCounts[2]],
        backgroundColor: ['yellow', 'green', 'red']
    }]
};


// Bar chart data
var barData = {
    labels: ['Pending', 'Approved', 'Rejected'],
    datasets: [{
        label: 'Files',
        data: [statusCounts[0], statusCounts[1], statusCounts[2]],
        backgroundColor: ['yellow', 'green', 'red']
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
