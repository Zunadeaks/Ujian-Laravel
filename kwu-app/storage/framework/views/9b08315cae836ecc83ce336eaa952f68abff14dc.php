<h1>
    Ini Halaman File view dari Profile
    <br>
    Halo, <?php echo $name; ?> <!-- Versi PHP Native -->
    <br>
    Hai, <?php echo e($name); ?> <!-- Versi Blade Laravel -->

</h1>
<hr>
<h2>Profile Information</h2>
<p>
    Name : <?php echo e($name); ?> <br>
    Phone : <?php echo e($phone); ?> <br>
    Position : <?php echo e($position); ?>

    Tanggal Lahir : <?php echo e($tanggallahir); ?>

    Jenis Kelamin : <?php echo e($Jk); ?>

    Sekolah : <?php echo e($sekolah); ?>

</p>

<?php /**PATH D:\belajarlaravel\kwu-app\resources\views/profile.blade.php ENDPATH**/ ?>