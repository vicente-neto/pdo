<?php include __DIR__ . '/../header.php'; ?>
<div class="py-2 d-flex justify-content-center">
    <a href="/student-form"  class="btn btn-dark fas fa-plus p-2"></a>
</div>
<ul class="list-group">
    <?php foreach ($students as $student): ?>
        <li class="list-group-item d-flex justify-content-between">
            <span class="p-2 flex-grow-1"><?= $student->getName(); ?></span>
            <a href="/update-student?id=<?=$student->getId()?>" class="link-dark p-2 fas fa-edit "></a>
            <a href="/delete-student?id=<?=$student->getId()?>" class="link-dark p-2 fas fa-trash "></a>
        </li>
    <?php endforeach; ?>
</ul>
<?php include __DIR__ . '/../footer.php'; ?>


