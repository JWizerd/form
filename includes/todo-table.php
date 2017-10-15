<?php if (count($todos) > 0) : ?>
  <table class="table table-bordered">        
    <thead>
      <tr>
        <?php $keys = array_keys($todos[0]); ?>
        <?php foreach ($keys as $name) : ?>
          <td><?= $name ?></td>
        <?php endforeach; ?>
      </tr>
    </thead>
      <?php foreach ($todos as $todo => $fields): ?>
        <tr class="todo">
        <?php foreach ($fields as $field): ?>
          <td valign="middle"><p><?= $field; ?></p></td>
        <?php endforeach ?>
        </tr>
      <?php endforeach ?>
  </table>
<?php else : ?>
  <h1>No results found.</h1>
<?php endif; ?>