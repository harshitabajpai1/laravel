<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
     <h1>view 2</h1><br>
</div>

<!-- write php in laravel -->
<?php
$a=10;
$b=20;
$c=$a+$b;

?>

<?php echo e($a); ?> <br>
<?php echo e($b); ?> <br>
SUM: <?php echo e($c); ?> <br>
<?php echo e($a+$b); ?><hr>



<h1>Comments</h1>
comment: 
<hr>

<h1>control structure</h1>
<?php
$age=20;
?>

<?php if($age>=18): ?>
<h3>Voter</h3>
<?php else: ?>
<h3>Non Voter</h3>
<?php endif; ?>

<hr>


<h1>Array</h1>
<?php
$arr=["banana","apple","mango"];
?>

<ul>
    <h3>printed as list</h3>
<?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($i); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>  

<hr>
<h1>Loops</h1>
<h3>for loop</h3>
<?php for($i=1; $i<=10; $i++): ?>
<?php echo e($i); ?> <br>
<?php endfor; ?>

<h3>while loop</h3>
<?php 
$i=1;
?>
<?php while($i<=10): ?>
<?php echo e($i++); ?> <br>

<?php endwhile; ?>
<hr>

<h1>break</h1>
<?php 
$i=1;
?>
<?php while($i<=10): ?>
<?php if($i==6): ?>
<?php break; ?>
<?php endif; ?>
<?php echo e($i++); ?> <br>

<?php endwhile; ?>

<br>

<h1>continue</h1>
<?php 
$i=1;
?>
<?php while($i<=10): ?>
<?php if($i==6): ?>
<?php continue; ?>
<?php endif; ?>
<?php echo e($i++); ?> <br>

<?php endwhile; ?>
<br>
<?php switch($name):{
        case ("admin"): ?>
            <h1>"complete access"</h1>
        <?php case ("teacher"): ?>
            <h1>"limited access"</h1>
        <?php case ("viewer"): ?>
            <h1>view only</h1>
        <?php default: ?>
            <h1>enter valid url</h1>

    }
   <?php endswitch; ?> 
<?php /**PATH C:\Users\HP\OneDrive\Desktop\laravel\project\resources\views/view2.blade.php ENDPATH**/ ?>