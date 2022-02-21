<?php if (@$employees) : ?>
  <table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Job</th>
        <th>Salary</th>
        <th>Hire date</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($employees as $employee) : ?>
        <tr>
          <td><?= @$employee->first_name ?></td>
          <td><?= @$employee->last_name ?></td>
          <td><?= @$employee->job ?></td>
          <td><?= @$employee->salary ?></td>
          <td><?= @$employee->hiredate ?></td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else : ?>
  No Data
<?php endif; ?>