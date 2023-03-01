<nav
      class="navbar navbar-expand-lg border-top border-bottom p-0"
      style="border-color: #f9f9f9"
    >
      <div class="container">
        <button
          class="navbar-toggler my-3 ms-auto"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">

    <?php

    $query = "SELECT * FROM categories";
    $select_all_categories_query = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_all_categories_query)) {
       $cat_title =  $row['cat_title'];

       echo "<li class='nav-item'><a class='nav-link' href='#'>{$cat_title}</a></li>";
    }

    ?>

            <!-- <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Apparel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Fashion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Contact</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>