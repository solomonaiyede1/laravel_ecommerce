<?php
use App\Models\User;
use App\Models\Order;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
  <h2>Registered Users</h2>
<?php
$user=User::paginate(10);
?>
  
<div class="container">
<table class="table table-hover table-stripped table-bordered table-responsive">
  <thead class="thead-dark">
    <tr>
      <th>User ID</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Email Address</th>
      <th>Role</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($users->id); ?></td>  
      <td><?php echo e($users->name); ?></td>
      <td><?php echo e($users->phone); ?></td>
      <td><?php echo e($users->email); ?></td>
      <td><?php echo e($users->role); ?></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
<div class="pag" style="margin-left: 80%"><?php echo e($user->links('pagination::bootstrap-4')); ?></div>
</div>

</body>
</html>
<?php /**PATH C:\wamp64\www\backup_code\resources\views\users.blade.php ENDPATH**/ ?>