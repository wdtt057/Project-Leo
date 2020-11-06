//lessonsCompleted Chart
// var lessonsCompleted = document.getElementById('lessonsCompleted').getContext('2d');
// var myChart = new Chart(lessonsCompleted, {
//     type: 'bar',
//     data: {
//         labels: ['HTML', 'CSS', 'JavaScript'],
//         datasets: [{
//             label: '# Completed',
//             data: [10, 3, 6],
//             backgroundColor: [
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(255, 159, 64, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 //'rgba(255, 99, 132, 0.2)',
//                 //'rgba(255, 206, 86, 0.2)',
//                 //'rgba(153, 102, 255, 0.2)',
//             ],
//             borderColor: [
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(255, 159, 64, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 //'rgba(255, 99, 132, 1)',
//                 //'rgba(255, 206, 86, 1)',
//                 //'rgba(153, 102, 255, 1)',
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero: true
//                 }
//             }]
//         }
//     }
// });
//Quiz Scores Chart
$.get('get_html_data', function (data, status) {
    var quizScores = document.getElementById('quizScores').getContext('2d');
    var myLineChart = new Chart(quizScores, {
        'type': 'line',
        'data': {
            'labels': ['Quiz 1', 'Quiz 2', 'Quiz 3', 'Quiz 4', 'Quiz 5'],
            'datasets': [
                {
                    'label': 'HTML Score',
                    'data': data,
                    'fill': false,
                    'borderColor': 'rgba(255, 99, 132, 0.7)',
                    'lineTension': 0.1
                },
                {
                    'label': 'CSS Score',
                    'data': [60, 75, 90, 100, 83],
                    'fill': false,
                    'borderColor': 'rgba(255, 206, 86, 0.7)',
                    'lineTension': 0.1
                },
                {
                    'label': 'JavaScript Score',
                    'data': [100, 90, 90, 100, 55],
                    'fill': false,
                    'borderColor': 'rgba(153, 102, 255, 0.7)',
                    'lineTension': 0.1
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    display: true,
                    ticks: {
                        suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                        // OR //
                        beginAtZero: true   // minimum value will be 0.
                    }
                }]
            }
        }
    })
});

const accordion = document.getElementsByClassName('has-submenu');

for(let i = 0; i < accordion.length; i++) {
  accordion[i].onclick = function () {
    this.classList.toggle('is-active');
    
    const submenu = this.nextElementSibling;
    
    if(submenu.style.maxHeight){
      //Close menu
      // console.log('tutup');
      submenu.style.maxHeight = null;
      submenu.style.marginTop = null;
      submenu.style.marginBottom = null;
    }else {
      //Open menu
      // console.log('Open');
      submenu.style.maxHeight = submenu.scrollHeight + "px";
      submenu.style.marginTop = "0.2em";
      submenu.style.marginBottm = "0.22em";
    }
  }
}
