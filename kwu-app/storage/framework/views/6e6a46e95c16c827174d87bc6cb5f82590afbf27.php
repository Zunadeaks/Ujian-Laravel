<h1>
    Ini Halaman File view dari Contact
    <br>
    Halo, <?php echo $name; ?> <!-- Versi PHP Native -->
    <br>
    Hai, <?php echo e($name); ?> <!-- Versi Blade Laravel -->

</h1>
<hr>
<h2>Contact Information</h2>
<p>
    Name : <?php echo e($name); ?> <br>
    Phone : <?php echo e($phone); ?> <br>
    Position : <?php echo e($position); ?>

    Tanggal Lahir : <?php echo e($tanggallahir); ?>

    Jenis Kelamin : <?php echo e($Jk); ?>

    Sekolah : <?php echo e($Murid); ?>

</p>

<?php /**PATH D:\belajarlaravel\kwu-app\resources\views/contact.blade.php ENDPATH**/ ?>