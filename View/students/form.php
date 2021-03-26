<?php include __DIR__ . '/../header.php'; ?>
<form class="row align-items-center d-flex justify-content-center"
      action="/save-student<?= isset($student) ? "?id=".$student->getId(): ''; ?>"
      method="post">
    <div class="col-auto">
        <label>Nome</label>
    </div>
    <div class="col-7">
        <input type="text" class="form-control" name="name"
               value="<?= isset($student) ? $student->getName(): ''; ?>">
    </div>
    <div class="col-auto">
    <button type="submit" class="btn btn-dark fas fa-plus "></button>
    </div>
</form>
<?php include __DIR__ . '/../footer.php'; ?>