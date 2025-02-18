<!-- Importar las depedencias  -->
<?= $this->extend("plantillas/panel_base") ?>

<?= $this->section('css') ?>
  <
<?= $this->endSection() ?>

<!-- Colocar el contenido en la clase padre -->
<?= $this->section('content') ?>
  <table>
    <tr border="3">
      <th>#</th>
      <th>Nombre</th>
      <th></th>
    </tr>
  </table>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
 
<?= $this->endSection() ?>