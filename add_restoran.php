<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Review Restoran</title>
    <link rel="stylesheet" href="Look4FoodStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="container mt-5 border rounded bg-white py-4 px-5 mb-5">
    <h2 class="text-center">Tambah Review Restoran</h2>
    <form action="insert_restoran.php?resto=<?php echo $_GET['resto']; ?>" method="post">
        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <input type="text" class="form-control" id="user_id" name="user_id" required>
        </div>
        <div class="mb-3">
            <label for="rate" class="form-label">Rate</label>
            <input type="text" class="form-control" id="rate" name="rate" required>
        </div>
        <div class="mb-3">
            <label for="recommend" class="form-label">Recommend</label>
            <input type="text" class="form-control" id="recommend" name="recommend" required>
        </div>
        <div class="mb-3">
            <label for="isi_review" class="form-label">Review</label>
            <textarea class="form-control" id="isi_review" name="isi_review" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
