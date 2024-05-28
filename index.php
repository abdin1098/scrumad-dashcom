<!DOCTYPE html>
<html lang="en">

<head>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashcom</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Your custom styles -->
    <link rel="stylesheet" href="./styles/main.css">
</head>

<body>

    <!-- Header -->

    <!-- <header> -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php include './components/sidebar.php' ?>
            <!-- Main Content -->

            <div class="col-md-9 main" id="main">
                <div class="content">
                    <?php include './components/topbar.php' ?>
                    <section>
                        <?php include './content/dashboard.php' ?>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="./scripts/main.js"></script>
    <script src="./scripts/bootstrap.bundle.min.js"></script>
    
</body>

</html>