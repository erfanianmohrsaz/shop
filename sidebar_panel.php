<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه اصلی</title>
    <link rel="stylesheet" href="../../asset/css/sidebar_panel.css">

</head>
<body>

<style>

    /* Sidebar Styles */
.sidebar {
  background-color: #f1f1f1;
  padding: 20px;
  width: 100px;
  height: 100%;
  position: fixed;
  left: 0;
  top: 0;
  overflow-x: hidden;
}

.sidebar-link {
  display: block;
  padding: 10px 0;
  text-decoration: none;
  color: #333;
  transition: color 0.3s ease;
}

.sidebar-link a {
  display: block;
  padding: 10px 0;
  text-decoration: none;
  color: #333;
  transition: color 0.3s ease;
}

.sidebar-link a:hover {
  color: #000;
}

/* Main Content Styles */
.main-content {
  margin-left: 220px;
  padding: 20px;
}
</style>







    <section class="sidebar">

        <section class="sidebar-link">

            <a href="#">panel</a>

        </section>

        <section class="sidebar-link">

            <a href="categories/index.php">category</a>

        </section>

        <section class="sidebar-link">

            <a href="post/index.php">post</a>

        </section>

    </section>

    <section class="main-content">

        </section>

</body>
</html>
