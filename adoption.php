<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Pets</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        /* Add custom styles here if needed */
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Available Pets</h2>
    <div class="row">
        <?php
        // Include database connection file
        include('includes/dbcnp.php');

        // Fetch available pets from database
        $sql = "SELECT * FROM pets WHERE status = 'available'";
        $result = mysqli_query($conn, $sql);

        // Check if any pets are available
        if (mysqli_num_rows($result) > 0) {
            // Loop through each row
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                            <p class="card-text"><?php echo $row['description']; ?></p>
                            <p class="card-text">Price: $<?php echo $row['price']; ?></p>
                            <a href="adoption.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Adopt</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<div class='col-md-12'><p>No pets available.</p></div>";
        }

        // Close database connection
        mysqli_close($conn);
        ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
