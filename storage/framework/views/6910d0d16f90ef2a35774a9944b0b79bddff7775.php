<?php
use App\Models\User;
use App\Models\Order;
?>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
  <center><h5 class="text-info" style="font-weight: 600; font-family: sans">Registered Users</h5></center>
<?php
$user=User::paginate(10);
?>
  
<div class="container">
<table class="table table-hover table-responsive table-condensed">
    <thead>
        <tr class="bg-info" style="color: white">
          <th>User ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email Address</th>
          <th>Role</th>
          <th>Edit Status</th>
        </tr>
    </thead>
  <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tbody>
    <tr class="bg-light">
      <td><?php echo e($users->id); ?></td>  
      <td maxLength="20"><?php echo e($users->name); ?></td>
      <td maxLength="20"><?php echo e($users->phone); ?></td>
      <td maxLength="20"><?php echo e($users->email); ?></td>
      <td>
          <?php if($users->role=='user'): ?>
          <button class="btn btn-danger btn-sm"><?php echo e($users->role); ?></button>
          <?php elseif($users->role=='admin'): ?>
          <button class="btn btn-success btn-sm"><?php echo e($users->role); ?></button>
          <?php endif; ?>
       </td>
      <td>
          <form method="post" action="<?php echo e(url('/users', $users->id)); ?>">
             <?php echo csrf_field(); ?>
             <?php echo method_field('PUT'); ?>
             <?php if($users->role=='user'): ?>
              <input type="hidden" name="role" value="admin" />
            <button type="submit" class="btn btn-info btn-sm">upgrade to admin</button>
            <?php elseif($users->role=='admin'): ?>
            <input type="hidden" name="role" value="user" />
            <button type="submit" class="btn btn-danger btn-sm">downgrade to user</button>
            <?php endif; ?>
          </form>
     </td>
    </tr>
   </tbody>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
<div class="pag" style="margin-left: 10%"><?php echo e($user->links('pagination::bootstrap-4')); ?></div>
</div>

</body>
</html>
<?php /**PATH /home/ccharle2/public_html/resources/views/users.blade.php ENDPATH**/ ?>