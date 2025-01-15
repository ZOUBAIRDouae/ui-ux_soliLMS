<!DOCTYPE html>
<html lang="fr">

<?php include_once "./layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "./layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "./layouts/aside.php" ?>

        <div class="content-wrapper pt-4">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Tableau de bord</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>2</h3>
                                    <p>Planning</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-calendar-check"></i> 
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="../Formatin/planning/index.php" class="small-box-footer">Plus d'informations <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>2</h3>
                                    <p>Formation</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="../Formation/formation.php" class="small-box-footer">Plus d'informations <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>1</h3>
                                    <p>Utilisateurs</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="./utilisateurs/index.php" class="small-box-footer">Plus d'informations <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Card for Chart 1 (Bar chart) -->
                            <div class="card ">
                                <div class="card-header">
                                    <h3 class="card-title">Nombre de Sessions</h3>
                                </div>
                                <div class="card-body">
                                    <canvas id="sessionChart" style="height: 100px;"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Card for Chart 2 (Pie chart) -->
                            <div class="card ">
                                <div class="card-header">
                                    <h3 class="card-title">Répartition des Sujets</h3>
                                </div>
                                <div class="card-body">
                                    <canvas id="subjectChart" style="height: 100px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Actions Récentes</h3>
                                </div>
                                <div class="card-body">
                                    <canvas id="actionChart" style="height: 100px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</body>

<!-- get script -->
<?php include_once "./layouts/script-link.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var sessionChart = document.getElementById('sessionChart').getContext('2d');
    var sessionChartInstance = new Chart(sessionChart, {
        type: 'bar',
        data: {
            labels: ['Session 1', 'Session 2', 'Session 3'],
            datasets: [{
                label: 'Nombre de Sessions',
                data: [5, 8, 7],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                borderColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    beginAtZero: true
                }
            }
        }
    });

    var subjectChart = document.getElementById('subjectChart').getContext('2d');
    var subjectChartInstance = new Chart(subjectChart, {
        type: 'pie',
        data: {
            labels: ['Node.js', 'PHP OOP', 'JavaScript'],
            datasets: [{
                data: [15, 10, 5],
                backgroundColor: ['#1cc88a', '#4e73df', '#36b9cc']
            }]
        }
    });

    var actionChart = document.getElementById('actionChart').getContext('2d');
    var actionChartInstance = new Chart(actionChart, {
        type: 'doughnut',
        data: {
            labels: ['Ajout', 'Modification', 'Suppression'],
            datasets: [{
                data: [12, 9, 3],
                backgroundColor: ['#1cc88a', '#f6c23e', '#e74a3b']
            }]
        }
    });
</script>

</html>
