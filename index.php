<?php
require __DIR__ . "./partials/init.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP Hotel</title>
  <!-- link a Font AWS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- link CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <form method="GET" class="m-5 row">
    <div class="col-6">
      <label for="park">Preferenza parcheggio</label>
      <select class="form-select" name="park" id="park">
        <option value="true">Si</option>
        <option value="false">No</option>
      </select>
    </div>
    <div class="col-6">
      <label for="min_vote">Inserisci un voto minimo per te</label>
      <select class="form-select" name="min_vote" id="min_vote">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <button class="btn btn-secondary mt-3 col-1">Filtra</button>
  </form>
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">Nome Hotel</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Parcheggio</th>
        <th scope="col">Valutazione</th>
        <th scope="col">Distanza dal centro</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($hotels_result as $hotel): ?>
        <tr>
          <td>
            <?= $hotel["name"] ?>
          </td>
          <td>
            <?= $hotel["description"] ?>
          </td>
          <td>
            <?php if ($hotel["parking"]) {
              echo "<i class='fa-solid fa-check text-success'></i>";
            } else {
              echo "<i class='fa-solid fa-xmark text-danger'></i>";
            } ?>
          </td>
          <td>
            <?= $hotel["vote"] ?>
          </td>
          <td>
            <?= $hotel["distance_to_center"] ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>