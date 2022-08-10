<body>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/card.css">
    <!-- <div class="row">
        <div class="col-4 mt-4">
            <div class="card" style="width: 18rem;">
                <img src="<?= BASEURL; ?>/img/bgcrd.jpg" style="height: 8rem;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Total Obat</h5>
                    <p class="card-text">3</p>
                    <a href="#" class="btn btn-outline-dark">Data Obat -></a>
                </div>
            </div>
        </div>

        <div class="col-4 mt-4">
            <div class="card" style="width: 18rem;">
                <img src="<?= BASEURL; ?>/img/bgcrd.jpg" style="height: 8rem;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Total Obat</h5>
                    <p class="card-text">3</p>
                    <a href="#" class="btn btn-outline-dark">Data Obat -></a>
                </div>
            </div>
        </div>

        <div class="col-4 mt-4">
            <div class="card" style="width: 18rem;">
                <img src="<?= BASEURL; ?>/img/bgcrd.jpg" style="height: 8rem;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Total Obat</h5>
                    <p class="card-text">3</p>
                    <a href="#" class="btn btn-outline-dark">Data Obat -></a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Topic Cards -->

    <div id="cards_landscape_wrap-2">
        <div class="row ms-5">
            <div class="col-1"></div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="<?= BASEURL; ?>/obat">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="<?= BASEURL; ?>/img/bgcrd.jpg" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Data Obat</h6>
                                <!-- <p><?= $data['obat']; ?></p> -->

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="<?= BASEURL; ?>/apoteker">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="<?= BASEURL; ?>/img/bgcrd.jpg" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Data Apoteker</h6>
                                <!-- <p><?= $data['apoteker']; ?></p> -->
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="<?= BASEURL; ?>/transaksi/data">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="<?= BASEURL; ?>/img/bgcrd.jpg" alt="" />
                            </div>

                            <div class="text-container">
                                <h6>Data Transaksi</h6>
                                <!-- <p><?= $data['transaksi']; ?></p> -->
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>


        <div class="row">
            <hr class="mt-4">
            <div class="col-6">
                <div style="width: 490px;
                        
                        
                        margin-top: 1%;">

                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="col-6">
                <div style="width: 490px;
                        
                        
                        margin-top: 1%;">

                    <canvas id="chart"></canvas>
                </div>
            </div>
        </div>
    </div>


    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["January", "February", "Maret", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [{
                    label: '# Transaksi',
                    data: [12, 19, 3, 6, 21, 8, 0, 0, 0, 0, 0, 0],
                    backgroundColor: [
                        'rgba(222, 242, 5, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("chart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Obat", "Apoteker", "Transaksi"],
                datasets: [{
                    label: '# Data Apotek',
                    data: [<?= $data['obat']; ?>, <?= $data['apoteker']; ?>, <?= $data['transaksi']; ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>