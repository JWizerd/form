<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MadWire Bad ToDo</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <nav>
    <a href="./">Form</a>
    <a href="./view-all-todos.php">View All Todos</a>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <p class="text-center"><a href="./"><img class="img-responsive" src="./madwire-logo.jpg" alt=""></a></p>
        <h1>Bad ToDo Form</h1>
        <hr>
        <div class="summary">
          <p>This todo form is meant to improve the project manager to developer process by providing useful feedback for:</p>
          <ul>
            <li>improving the accuracy for quote times</li>
            <li>todo prerequisites (such as providing FTP credentials whenever necessary)</li>
            <li>poor communication</li>
            <li>incorrect todo information (i.e. build site on shopify when meant to build on bigcommerce)</li>
            <li>etc.</li>
          </ul>
          <p>This form is meant to be constructive so please make sure to provide a positive assessment, lots of details and keep it concise. As we gather more and more bad todos our hope is that bottlenecks will begin to emerge and this data will provide evidence that we can then take to Josh for further action.</p>
        </div>
        <hr>
        <form action="post.php" class="bad-todo" method="POST">
          <div class="form-group">
            <label for="">Date</label>
            <input required name="date" type="date" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Developer's Name (First and Last)</label>
            <input required name="developer" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Project Manager's Name (First and Last)</label>
            <input required name="pm" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Designers name (if applicable)</label>
            <input name="designer" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Project Manager's Team</label>
            <input required name="pmteam" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Name of Todo (ass seen in madoffice todo title)</label>
            <input required name="todo" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">todo length in hours (as assigned by project manager)</label>
            <input required name="time" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">developer time to complete todo</label>
            <input required name="completion" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">bad todo description</label>
            <textarea required class="form-control" name="description" id="" cols="30" rows="10"></textarea>
          </div>
          <input type="submit" name="add-bad-todo" id="add-bad-todo" class="btn btn-primary form-control">
        </form>
      </div>
    </div>
  </div>
</body>
</html>