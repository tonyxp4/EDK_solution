const ctx = document.getElementById('graficoNotas').getContext('2d');
const grafico = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["1º Tri", "2º Tri", "3º Tri"],
        datasets: [
            {
                label: 'Matemática',
                data: [16, 17, 17.5,10],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
                tension: 0.3
            },
            {
                label: 'Português',
                data: [15, 14.5, 15.5],
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                fill: true,
                tension: 0.3
            },
            {
                label: 'Física',
                data: [12.5, 13.5, 13.5],
                borderColor: 'rgba(255, 206, 86, 1)',
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                fill: true,
                tension: 0.3
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top'
            },
            title: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                max: 20
            }
        }
    }
});