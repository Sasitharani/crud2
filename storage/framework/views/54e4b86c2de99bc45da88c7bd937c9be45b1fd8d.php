<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>add</title>
</head>
<body>
    <form action="<?php echo e(Route('adds')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name= "name" placeholder="Enter name of emp"/>
        <input type="text" name="no" placeholder="Enter id of emp"/>
        <button type="submit" >Submit</button>
    </form>


    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Roll No</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $viewEmployee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <form action="<?php echo e(route('update', ['id' => $employee->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <td><?php echo e($employee->id); ?></td>
                    <td><input type="text" name="name" value="<?php echo e($employee->name); ?>"/></td>
                    <td><input type="text" name="no" value="<?php echo e($employee->eno); ?>"/></td>
                    <td>
                        <button type="submit" class="btn btn-secondary">Update</button>
                        <a href ="<?php echo e(route ('delete', ['id' => $employee->id])); ?>"><button type="button" class="btn btn-secondary">Delete</button></a>
                    </td>
                </form>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\projects\laravel\CRUD2\resources\views/add.blade.php ENDPATH**/ ?>