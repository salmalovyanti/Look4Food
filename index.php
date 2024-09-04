<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Look 4 Food</title>
    <link rel="stylesheet" href="Look4FoodStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="container mt-5 border rounded bg-white py-4 px-5 mb-5">
    <header class="header-title mb-4">
        <h1><a href="./index.php" style="text-decoration: none;"><span class="fw-normal text-dark">Admin</span> <span class="text-primary">Look 4 Food</span></a></h1>
        <nav class="navigation">
            <a href="logout.php" class="nav-btn">Logout</a>            
        </nav>
        <hr>
    </header>
    <section>
        <h2 class="text-center">Data Resto Nusantara</h2>
        <div class="clearfix">
            <a href="add_restoran.php?resto=restonusantara" class="btn btn-primary float-end" style="width: 100px;">Add</a>
        </div>
        <?php
        if (isset($_GET["message"])) {
            echo "<div class=\"alert alert-success my-3\">".$_GET["message"]."</div>";
        }
        ?>
        <div class="table-responsive">
            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Rate</th>
                        <th>Recommend</th>
                        <th>Review</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $conn = new mysqli("localhost", "root", "", "restaurant_reviews");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM restonusantara";
                $result = $conn->query($sql);
                $i = 1;
                if ($result->num_rows > 0) {
                    while ($data = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope=\"row\">$i</th>";
                        echo "<td>$data[user_id]</td>";
                        echo "<td>$data[rate]</td>";
                        echo "<td>$data[recommend]</td>";
                        echo "<td>$data[isi_review]</td>";
                        echo "<td>
                            <form action=\"delete_restoran.php?resto=restonusantara\" method=\"post\" class=\"d-inline-block\">
                                <input type=\"hidden\" name=\"id\" value=\"$data[id]\">
                                <input type=\"submit\" name=\"submit\" value=\"Delete\" style=\"width:80px\" class=\"btn btn-danger\">
                            </form>
                        </td>";
                        echo "</tr>";
                        $i++;
                    }
                } else {
                    echo "<tr><td colspan=\"6\" class=\"text-center\">No data found</td></tr>";
                }
                $conn->close();
                ?>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mt-5">
        <h2 class="text-center">Data Sakura Sushi</h2>
        <div class="clearfix">
            <a href="add_restoran.php?resto=sakurasushi" class="btn btn-primary float-end" style="width: 100px;">Add</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Rate</th>
                        <th>Recommend</th>
                        <th>Review</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $conn = new mysqli("localhost", "root", "", "restaurant_reviews");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM sakurasushi";
                $result = $conn->query($sql);
                $i = 1;
                if ($result->num_rows > 0) {
                    while ($data = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope=\"row\">$i</th>";
                        echo "<td>$data[user_id]</td>";
                        echo "<td>$data[rate]</td>";
                        echo "<td>$data[recommend]</td>";
                        echo "<td>$data[isi_review]</td>";
                        echo "<td>
                            <form action=\"delete_restoran.php?resto=sakurasushi\" method=\"post\" class=\"d-inline-block\">
                                <input type=\"hidden\" name=\"id\" value=\"$data[id]\">
                                <input type=\"submit\" name=\"submit\" value=\"Delete\" style=\"width:80px\" class=\"btn btn-danger\">
                            </form>
                        </td>";
                        echo "</tr>";
                        $i++;
                    }
                } else {
                    echo "<tr><td colspan=\"6\" class=\"text-center\">No data found</td></tr>";
                }
                $conn->close();
                ?>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mt-5">
        <h2 class="text-center">Data Green Garden</h2>
        <div class="clearfix">
            <a href="add_restoran.php?resto=greengarden" class="btn btn-primary float-end" style="width: 100px;">Add</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Rate</th>
                        <th>Recommend</th>
                        <th>Review</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $conn = new mysqli("localhost", "root", "", "restaurant_reviews");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM greengarden";
                $result = $conn->query($sql);
                $i = 1;
                if ($result->num_rows > 0) {
                    while ($data = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope=\"row\">$i</th>";
                        echo "<td>$data[user_id]</td>";
                        echo "<td>$data[rate]</td>";
                        echo "<td>$data[recommend]</td>";
                        echo "<td>$data[isi_review]</td>";
                        echo "<td>
                            <form action=\"delete_restoran.php?resto=greengarden\" method=\"post\" class=\"d-inline-block\">
                                <input type=\"hidden\" name=\"id\" value=\"$data[id]\">
                                <input type=\"submit\" name=\"submit\" value=\"Delete\" style=\"width:80px\" class=\"btn btn-danger\">
                            </form>
                        </td>";
                        echo "</tr>";
                        $i++;
                    }
                } else {
                    echo "<tr><td colspan=\"6\" class=\"text-center\">No data found</td></tr>";
                }
                $conn->close();
                ?>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mt-5">
    <h2 class="text-center">Data Pengguna</h2>
    <div class="clearfix">
        <a href="add_user.php" class="btn btn-primary float-end" style="width: 100px;">Add</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nama User</th>
                    <th>Location</th>
                    <th>Regist Date</th>
                    <th>Last Log Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $conn = new mysqli("localhost", "root", "", "restaurant_reviews");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            $i = 1;
            if ($result->num_rows > 0) {
                while ($data = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$data['user_id']."</td>";
                    echo "<td>".$data['username']."</td>";
                    echo "<td>".$data['email']."</td>";
                    echo "<td>".$data['nama_user']."</td>";
                    echo "<td>".$data['location']."</td>";
                    echo "<td>".$data['regist_date']."</td>";
                    echo "<td>".$data['last_log_date']."</td>";
                    echo "<td class=\"text-center\">
                        <form action=\"update_user_form.php\" method=\"get\" class=\"d-inline-block mb-2\">
                            <input type=\"hidden\" name=\"user_id\" value=\"".$data['user_id']."\">
                            <input type=\"submit\" name=\"submit\" value=\"Update\" style=\"width:80px\" class=\"btn btn-info text-white\">
                        </form>
                        <form action=\"delete_user.php\" method=\"post\" class=\"d-inline-block\">
                            <input type=\"hidden\" name=\"user_id\" value=\"".$data['user_id']."\">
                            <input type=\"submit\" name=\"submit\" value=\"Delete\" style=\"width:80px\" class=\"btn btn-danger\">
                        </form>
                    </td>";
                    echo "</tr>";
                    $i++;
                }
            } else {
                echo "<tr><td colspan=\"8\" class=\"text-center\">No data found</td></tr>";
            }
            $conn->close();
            ?>
            </tbody>
        </table>
    </div>
</section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
