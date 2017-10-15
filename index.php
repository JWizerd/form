<?php require('./includes/header.php'); ?>
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
            <li>incorrect todo information (i.e. build site on shopify when meant to be built on bigcommerce)</li>
          </ul>
          <p>This form is meant to be constructive so please make sure to provide a positive assessment, lots of details and keep it concise. As we gather more and more bad todos our hope is that bottlenecks will begin to emerge and this data will provide evidence that we can then take to Josh for further action.</p>
        </div>
        <hr>
        <?php require('./includes/bad-todo-form.php'); ?>
      </div>
    </div>
  </div>
<?php require('./includes/footer.php'); ?>