<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
    <script src="https:
        <script src=" https: </head>
        < body >
            <
            div class = "min-h-screen w-screen bg-custom-bg" >

            <
            div class = "md:container mx-auto px-2 md:px-10 pt-10 pb-10" >
            <
            div
        class =
        "px-6 md:px-10 py-3 md:py-4 rounded-md md:rounded-full w-full mb-8 bg-primary flex justify-between items-center" >
        <
        div >
            <
            p class = "text-xl md:text-3xl text-white font-bold" > Soal 1 < /p> <
            /div> <
            div >
            <
            a href = "/soal-2"
        class =
        "text-base md:text-lg font-semibold text-custom-black bg-custom-white py-1 md:py-2 px-3 md:px-5 rounded-md md:rounded-full cursor-pointer shadow-md hover:bg-opacity-75" >
        Soal 2 < /a> <
            /div> <
            /div> <
            div class = "grid grid-cols-1 md:grid-cols-3 gap-4" >
            <
            div class = "col-span-1 md:col-span-2 p-2 md:p-8 bg-custom-white rounded-xl shadow-md" >
            <
            p class = "text-custom-black font-semibold text-lg md:text-2xl mb-4 text-center" > Result A < /p> <
            div >
            <
            canvas id = "chartA" > < /canvas> <
            /div> <
            /div> <
            div class = "col-span-1 md:col-span-1 p-2 md:p-8 bg-primary rounded-xl shadow-md" >
            <
            p class = "text-custom-black font-semibold text-lg md:text-2xl mb-4 text-center" > Result C < /p> <
            div >
            <
            canvas id = "chartC" > < /canvas> <
            /div> <
            /div> <
            div class = "col-span-1 md:col-span-3 p-2 md:p-8 bg-custom-white rounded-xl shadow-md" >
            <
            p class = "text-custom-black font-semibold text-lg md:text-2xl mb-4 text-center" > Result B < /p> <
            canvas id = "chartB" > < /canvas> <
            /div>

            <
            /div> <
            /div> <
            /div> <
            /body> <
            script >
            document.addEventListener('DOMContentLoaded', () => {
                const dataA = {
                    labels: @json(
                        $taskSummaryA->map(function ($task) {
                            return $task->Vendor . ' (' . $task->Area . ')';
                        })),
                    datasets: [{
                        label: 'Jumlah Task',
                        data: @json($taskSummaryA->pluck('Jumlah_Task')),
                        backgroundColor: '#9fc3a6',
                        borderColor: 'transparent',
                        borderWidth: 1,
                        barThickness: 20
                    }]
                };

                const chartA = new Chart(document.getElementById('chartA'), {
                    type: 'bar',
                    data: dataA,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    boxWidth: 20,
                                    padding: 15,
                                }
                            },
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            },
                            x: {
                                ticks: {
                                    autoSkip: false
                                }
                            }
                        }
                    }
                });

                const dataB = {
                    labels: @json($taskSummaryB->pluck('Area')),
                    datasets: [{
                        label: 'AI',
                        data: @json($taskSummaryB->pluck('AI')),
                        backgroundColor: '#ffb3b3',
                        borderColor: 'transparent',
                        borderWidth: 1,
                        barThickness: 20
                    }, {
                        label: 'BA',
                        data: @json($taskSummaryB->pluck('BA')),
                        backgroundColor: '#b3d9ff',
                        borderColor: 'transparent',
                        borderWidth: 1,
                        barThickness: 20
                    }, {
                        label: 'BO',
                        data: @json($taskSummaryB->pluck('BO')),
                        backgroundColor: '#ffcc99',
                        borderColor: 'transparent',
                        borderWidth: 1,
                        barThickness: 20
                    }, {
                        label: 'NE',
                        data: @json($taskSummaryB->pluck('NE')),
                        backgroundColor: '#c2f0c2',
                        borderColor: 'transparent',
                        borderWidth: 1,
                        barThickness: 20
                    }, {
                        label: 'O2',
                        data: @json($taskSummaryB->pluck('O2')),
                        backgroundColor: '#e6ccff',
                        borderColor: 'transparent',
                        borderWidth: 1,
                        barThickness: 20
                    }]
                };

                const chartB = new Chart(document.getElementById('chartB'), {
                    type: 'bar',
                    data: dataB,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    boxWidth: 20,
                                    padding: 15,
                                }
                            },
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            },
                            x: {
                                ticks: {
                                    autoSkip: false
                                }
                            }
                        }
                    }
                });

                const dataC = {
                    labels: @json($taskSummaryC->pluck('Area')),
                    datasets: [{
                        label: 'All Task',
                        data: @json($taskSummaryC->pluck('All Task')),
                        backgroundColor: [
                            '#ffb3b3',
                            '#ffcc99',
                            '#ffff99',
                            '#c2f0c2',
                            '#b3d9ff'
                        ],
                        borderColor: 'transparent',
                        borderWidth: 2,
                    }]
                };

                const chartC = new Chart(document.getElementById('chartC'), {
                    type: 'doughnut',
                    data: dataC,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    boxWidth: 20,
                                    padding: 15,
                                }
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return `${tooltipItem.label}: ${tooltipItem.raw}`;
                                    }
                                }
                            }
                        }
                    }
                })
            });
    </script>


</html>
