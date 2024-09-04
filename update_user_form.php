<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Update Pengguna</title>
    <link rel="stylesheet" href="Look4FoodStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="container mt-5 border rounded bg-white py-4 px-6 mb-6">
    <h2 class="text-center">Update Pengguna</h2>
    <?php
    $conn = new mysqli("localhost", "root", "", "restaurant_reviews");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user_id = $_GET['user_id'];

    $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();

    if (!$data) {
        echo "<div class=\"alert alert-danger\">Data not found</div>";
    } else {
    ?>
    <form action="update_user.php" method="post">
        <input type="hidden" name="user_id" value="<?php echo $data['user_id']; ?>">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $data['username']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $data['password']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="nama_user" class="form-label">Name</label>
            <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?php echo $data['nama_user']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="nama_user" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="<?php echo $data['location']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <?php
    }
    $conn->close();
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
