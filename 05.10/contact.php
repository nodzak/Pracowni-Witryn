
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  
  <title></title>
</head>

<body>
    <?php include 'common/header.php'; ?>

    <div class="content">
    <h1>Kontakt</h1>
    <form id="contactForm">
    <input type="submit" value="Wyślij">



    </form>
    

    <section>
<h1>Kontakt</h1>
<form action="#" method="post" onsubmit="showAlert(); return false;">
<label for="name">Imię:</label>
<input type="text" id="name" name="name" required>
<br>
<label for="email">Email:</label>
<input type="email" id="email" name="email" required>
<br>
<input type="submit" value="Wyślij">
</form>
</section>

</div>

    <?php include 'common/footer.php'; ?>

    <script> 
    
    function showAlert() {
        alert("Nie można wysłać formularza");
    }
    


    </script>
</body>

</html>