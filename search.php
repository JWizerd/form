<?php require('./includes/header.php') ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <p><a href="./"><img class="img-responsive" src="./madwire-logo.jpg" alt=""></a></p>
        <h1>Search Results for: <?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?></h1>
        <hr>
      </div>
      <div class="col-sm-12 text-center">
        <?php require('./includes/search-form.php'); ?>
        <?php $todos = Todo::search(htmlspecialchars($_GET['q'])); ?>
        <?php require('./includes/todo-table.php'); ?>
      </div>
    </div>
  </div>
<?php require('./includes/footer.php'); ?>