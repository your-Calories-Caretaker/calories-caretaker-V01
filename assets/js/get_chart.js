function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    console.log(tabcontent);
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();



$(document).ready(function () {
    $.ajax({
        url: "./backend/chart.php",
        method: "GET",
        success: function (data) {
            // data = JSON.parse(data);
            const dates = [];
            const colors = [];
            data = JSON.parse(data);
            for (let i = 0; i < data.length; i++) {
                if (!dates.includes(data[i].added_at)) {
                    dates.push(data[i].added_at);
                    colors.push(data[i].color);
                }
            }
            // console.log(data);
            console.log(colors);
            console.log(dates);
            let calories = [];
            for (let i = 0; i < dates.length; i++) {
                let sum = 0;
                for (let j = 0; j < data.length; j++) {
                    if (data[j].added_at == dates[i]) {
                        sum += Number(data[j].quantity) * Number(data[j].calorie);
                    }
                }
                calories.push(sum);
            }
            console.log(calories);

            let chart_data = {
                labels: dates,
                datasets: [
                    {
                        label: 'Calories',
                        backgroundColor: colors,
                        color: "#fff",
                        data: calories
                    }
                ]
            };

            let options = {
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0
                        }
                    }]
                }
            };
            let graph_1 = $('#graph_1');
            let graph1 = new Chart(graph_1, {
                type: 'bar',
                data: chart_data
            });
        },
        error: function (data) {
            console.log(data);
        }
    })
});


$(document).ready(function () {
    $.ajax({
        url: "./backend/pieChart.php",
        method: "GET",
        success: function (data) {
            // data = JSON.parse(data);
            const category = [];
            const colors = [];
            data = JSON.parse(data);
            for (let i = 0; i < data.length; i++) {
                if (!category.includes(data[i].category)) {
                    category.push(data[i].category);
                    colors.push(data[i].color);
                }
            }
            // console.log(data);
            console.log(colors);
            console.log(category);
            let calories = [];
            for (let i = 0; i < category.length; i++) {
                let sum = 0;
                for (let j = 0; j < data.length; j++) {
                    if (data[j].category == category[i]) {
                        sum += Number(data[j].quantity) * Number(data[j].calories);
                    }
                }
                calories.push(sum);
            }
            console.log(calories);

            let pieChart_data = {
                labels: category,
                datasets: [
                    {
                        label: 'Calories',
                        backgroundColor: colors,
                        color: "#fff",
                        data: calories
                    }
                ]
            };

            let options = {
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0
                        }
                    }]
                }
            };
            let graph_2 = $('#graph_2');
            let graph2 = new Chart(graph_2, {
                type: 'doughnut',
                data: pieChart_data
            });
        },
        error: function (data) {
            console.log(data);
        }
    })
});