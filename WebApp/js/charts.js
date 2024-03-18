 // Doughnut chart data
 var doughnutData = {
    labels: ['Approved', 'Pending', 'Rejected'],
    datasets: [{
        data: [30, 20, 50],
        backgroundColor: ['green', 'yellow', 'red']
    }]
};

// Bar chart data
var barData = {
    labels: ['Acc', 'Hr', 'Finan', 'Media'],
    datasets: [{
        label: 'Approved',
        data: [12, 19, 3, 5],
        backgroundColor: 'rgb(6, 2, 112)',

        label: 'Pending',
        data:[1, 15, 12, 13],
        backgroundColor: 'rgb(255, 236, 161)'
    }],

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