<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDB</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/dashboard_style.css">

    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/chart.js/js/chart.min.js"></script>
</head>

<body>

    <div class="wrap-body-main">
        <div class="container-fluid">
            <div class="row py-3">
                <div class="col-md-8">
                    <div class="row gy-2 gy-md-0">
                        <div class="col-md-3">
                            <div class="box">
                                <div class="d-flex justify-content-between">
                                    <img src="img/icon-people-add.svg" class="img-fluid">
                                    <div class="dropdown">
                                        <button class="btn btn-trans-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    Permohonan Baru
                                </div>
                                <h4 class="mt-2">
                                    2
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                                <div class="d-flex justify-content-between">
                                    <img src="img/icon-people-check.svg" class="img-fluid">
                                    <div class="dropdown">
                                        <button class="btn btn-trans-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    Ditawarkan
                                </div>
                                <h4 class="mt-2">
                                    2
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                                <div class="d-flex justify-content-between">
                                    <img src="img/icon-cert-check.svg" class="img-fluid">
                                    <div class="dropdown">
                                        <button class="btn btn-trans-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    Kursus Diluluskan
                                </div>
                                <h4 class="mt-2">
                                    2
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                                <div class="d-flex justify-content-between">
                                    <img src="img/icon-certs.svg" class="img-fluid">
                                    <div class="dropdown">
                                        <button class="btn btn-trans-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    Jum. Kursus 2023
                                </div>
                                <h4 class="mt-2">
                                    2
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="box mt-3">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h6>Jumlah Kursus Mengikut Bulanan</h6>
                                <canvas id="kursusChart" class="mt-4"></canvas>
                            </div>
                            <div class="d-none col-md-auto d-flex align-self-stretch">
                                <div class="vr divider"></div>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <div class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            2023
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                    <div class="mt-4">
                                        <div style="width: 60%;" class="text-center mx-auto">
                                            <canvas id="peningkatanChart"></canvas>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        25% Peningkatan Kursus
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="d-flex gap-2">
                                            <div class="icon stacked danger">
                                                <i class="bi bi-graph-down fs-4"></i>
                                            </div>
                                            <div>
                                                2022
                                                <div class="fw-bold">
                                                    25
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex gap-2">
                                            <div class="icon stacked cyan">
                                                <i class="bi bi-graph-up fs-4"></i>
                                            </div>
                                            <div>
                                                2021
                                                <div class="fw-bold">
                                                    40
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box mt-3">
                        <h6>Ditawarkan</h6>
                        <div class="table-responsive mt-3">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th colspan="4" class="border-0"></th>
                                        <th colspan="3" class="text-center">JUMLAH PESERTA</th>
                                    </tr>
                                    <tr>
                                        <th>BIL</th>
                                        <th>MAKLUMAT KURSUS</th>
                                        <th>TARIKH MULA</th>
                                        <th>BIDANG</th>
                                        <th>TAWARAN</th>
                                        <th>HADIR</th>
                                        <th>TIDAK HADIR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>KEJ/IDB</td>
                                        <td>20/10/2023</td>
                                        <td>KEJURUTERAAN</td>
                                        <td>30</td>
                                        <td>29</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>KEJ/IDB</td>
                                        <td>20/10/2023</td>
                                        <td>KEJURUTERAAN</td>
                                        <td>30</td>
                                        <td>29</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>KEJ/IDB</td>
                                        <td>20/10/2023</td>
                                        <td>KEJURUTERAAN</td>
                                        <td>30</td>
                                        <td>29</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KEJ/IDB</td>
                                        <td>20/10/2023</td>
                                        <td>KEJURUTERAAN</td>
                                        <td>30</td>
                                        <td>29</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="box">
                        <h6>Kursus Cadangan Anda</h6>
                        <div class="text-muted small">
                            Tawaran Untuk Anda
                        </div>
                        <hr class="divider" style="margin-inline: -1rem;">
                        <ul class="list-style-dot">
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <div class="text-success">20/11/2023</div>
                                KEJ/IDB/ASS1
                                <div class="text-muted mt-2">
                                    PENINGKATAN PEMANDUAN/PENUNGGANGAN SELAMAT DI JALAN RAYA
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <div class="text-primary">20/11/2023</div>
                                KEJ/IDB/ASS1
                                <div class="text-muted mt-2">
                                    PENINGKATAN PEMANDUAN/PENUNGGANGAN SELAMAT DI JALAN RAYA
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <div class="text-primary">20/11/2023</div>
                                KEJ/IDB/ASS1
                                <div class="text-muted mt-2">
                                    PENINGKATAN PEMANDUAN/PENUNGGANGAN SELAMAT DI JALAN RAYA
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="box mt-3">
                        <div class="d-flex">
                            <div>
                                <h6>Kehadiran peserta basi semua kursus</h6>
                                <div class="text-muted small">
                                    650 Keseluruhan Peserta Untuk Tahun 2023 Setakat November 2023
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-trans-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row align-items-center mt-4">
                            <div class="col-md-6">
                                <div class="text-center">
                                    <h2>650</h2>
                                    Jumlah Peserta
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <canvas id="kehadiranChart"></canvas>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-auto">
                                <div class="icon stacked primary" style="--bs-bg-opacity: .5;">
                                    <i class="bi bi-person-check fs-4"></i>
                                </div>
                            </div>
                            <div class="col">
                                Layak
                                <div class="text-muted small">
                                    LMS: 100
                                </div>
                            </div>
                            <div class="col-auto">
                                350
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-auto">
                                <div class="icon stacked success">
                                    <i class="bi bi-person-exclamation fs-4"></i>
                                </div>
                            </div>
                            <div class="col">
                                Belum Ditanda
                                <div class="text-muted small">
                                    LMS: 10
                                </div>
                            </div>
                            <div class="col-auto">
                                100
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-auto">
                                <div class="icon stacked danger">
                                    <i class="bi bi-person-x fs-4"></i>
                                </div>
                            </div>
                            <div class="col">
                                Tidak Layak
                                <div class="text-muted small">
                                    LMS: 0
                                </div>
                            </div>
                            <div class="col-auto">
                                150
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // chart kursus
        const fixedData = [50, 70, 60, 90, 85, 40, 75]; // Fixed values for each month

        // Bar chart configuration
        const chartOne = document.getElementById('kursusChart').getContext('2d');
        const kursusChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'], // X-axis labels
                datasets: [{
                    data: fixedData, 
                    backgroundColor: '#696CFF', 
                    borderRadius: 50,
                    barThickness: 10,
                    borderSkipped: false,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#f2f2f2',
                            drawBorder: false
                        },
                        ticks: {
                            font: {
                                family: 'system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans","Liberation Sans",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"' 
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false, // Disable vertical grid lines
                            drawBorder: false
                        },
                        ticks: {
                            font: {
                                family: 'system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans","Liberation Sans",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"' 
                            }
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false 
                    }
                }
            }
        });

        const chartThree = document.getElementById('peningkatanChart').getContext('2d');

        const peningkatanChart = new Chart(chartThree, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [65], 
                    backgroundColor: ['transparent', 'transparent'], // Hide both parts (transparent)
                    borderWidth: 0, 
                }, ],
            },
            options: {
                cutout: '75%', // Adjust the thickness of the radial chart
                rotation: Math.PI / 2, // Start angle (rotate to make it start from bottom)
                plugins: {
                    legend: {
                        display: false, 
                    },
                    tooltip: {
                        enabled: false, 
                    },
                },
            },
            plugins: [{
                id: 'dashedArcs',
                beforeDraw: (chart) => {
                    const {
                        ctx,
                        chartArea: {
                            top,
                            bottom,
                            left,
                            right,
                            width,
                            height
                        },
                    } = chart;

                    const centerX = (left + right) / 2;
                    const centerY = (top + bottom) / 2;
                    const radius = Math.min(width, height) / 2 - 10;

                    const startAngle = Math.PI / 1.35; // Starting angle (bottom)
                    const gapAngle = 0.50 * Math.PI; // A small gap
                    const endAngle = startAngle + (2 * Math.PI) * (65 / 100) - gapAngle;

                    ctx.save();
                    ctx.beginPath();
                    ctx.setLineDash([5, 5]); // Dashed line pattern [dash length, gap length]
                    ctx.lineWidth = 20;
                    ctx.strokeStyle = '#696CFF'; // Color for dashed line

                    // Draw the dashed arc with a small gap
                    ctx.arc(centerX, centerY, radius, startAngle, endAngle);
                    ctx.stroke();
                    ctx.restore();
                },
            }, {
                id: 'labelInsideHole',
                afterDraw: (chart) => {
                    const {
                        ctx,
                        chartArea: {
                            top,
                            bottom,
                            left,
                            right,
                            width,
                            height
                        },
                    } = chart;

                    const centerX = (left + right) / 2;
                    const centerY = (top + bottom) / 2;
                    const radius = Math.min(width, height) / 4; // adjust the radius to fit the label inside the hole

                    ctx.save();
                    ctx.font = '24px Arial';
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    ctx.fillStyle = '#696CFF'; 

                    // Draw the label inside the hole
                    ctx.fillText('65%', centerX, centerY);
                    ctx.restore();
                },
            }, ],
        });


        // chart kehadiran
        const chartTwo = document.getElementById('kehadiranChart').getContext('2d');
        const kehadiranChart = new Chart(chartTwo, {
            type: 'doughnut',
            data: {
                labels: ['Purple', 'Blue', 'Green'],
                datasets: [{
                    label: 'My First Dataset',
                    data: [350, 140, 100],
                    backgroundColor: [
                        '#696CFF', // Red
                        '#03C3EC', // Blue
                        '#71DD37' // Yellow
                    ],
                    borderColor: [
                        '#FFFFFF', // White border to create gap
                        '#FFFFFF', // White border to create gap
                        '#FFFFFF' // White border to create gap
                    ],
                    borderWidth: 5 
                }]
            },
            options: {
                responsive: true,
                cutout: '70%',
                plugins: {
                    legend: {
                        display: false 
                    },
                    tooltip: {
                        enabled: true,
                    }
                }
            },
            plugins: [{
                id: 'labelInsideHole',
                afterDraw: (chart) => {
                    const {
                        ctx,
                        chartArea: {
                            top,
                            bottom,
                            left,
                            right,
                            width,
                            height
                        },
                    } = chart;

                    const centerX = (left + right) / 2;
                    const centerY = (top + bottom) / 2;
                    const radius = Math.min(width, height) / 4; 

                    ctx.save();
                    ctx.font = '24px Arial';
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    ctx.fillStyle = '#233446'; 

                    // Draw the label inside the hole
                    ctx.fillText('80%', centerX, centerY);
                    ctx.restore();
                },
            }, ],
        });
    </script>

</body>

</html>