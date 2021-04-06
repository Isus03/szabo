<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

  // Include autoload.php file
  require 'vendor/autoload.php';
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';
if(isset($_POST['email']) && $_POST['email'] != '') {
  if (isset($_POST['submit'])) {
    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $podaci1 = $_POST['podaci1'];
    $podaci2 = $_POST['podaci2'];
    $kvadratura = $_POST['kvadratura'];
    $vrijeme = $_POST['vrijeme'];
    $lokacija = $_POST['lokacija'];
}

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'server.szabo1@gmail.com';
      // Gmail Password
      $mail->Password = 'Szabo123';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('server.szabo1@gmail.com');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('477khii@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'Zahtjev za ponudu';
      $mail->Body = "<h3>Ime : $ime <br>Email : $email <br>Vrsta posla : $podaci1<br>Opis posla : $podaci2<br>Kvadratura : $kvadratura<br>Vrijeme : $vrijeme<br>Lokacija : $lokacija</h3>";

      $mail->send();
      $output = '<div class="alert alert-success">
                  <h5>Hvala vam, javimo se u najkraćem mogućem roku!</h5>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontaktirajte nas</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
<style>

body {
	background-image:url(slika123.jpg);
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	
	
}
	
#container2 {
	background-color: rgba(255 , 255 , 255 , 0.8 );
	
	






}











</style>

</head>

<body>
  <div class="container" >
    <div class="row justify-content-center">
      <div class="col-lg-6 mt-3">
        <div id="container2" >
          <div class="card-header bg-dark text-light">
            <h3 class="card-title">Kontaktirajte nas</h3>
          </div>
          <div class="card-body px-4">
            <form action="#" method="POST">
              <div class="form-group">
               <?= $output; ?>
              </div>
              <div class="form-group">
                <label for="name"><b>Ime i Prezime</b></label>
                <input type="text" name="ime" id="name" class="form-control" placeholder="Unesite ime i prezime" required>
              </div>
              <div class="form-group">
                <label for="email"><b>E-Mail</b></label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Unesite E-Mail" required>
              </div>
              <div class="form-group">
                <label for="c-form-profession">
                    <span class="label-text"><b>Podaci o poslu</b></span> 
                    <span class="contact-error"></span>
                </label>
                <select name="podaci1" class="c-form-profession form-control" id="c-form-profession">
                  <option value="-1">Izaberi vrstu posla...</option>
                  <option value="Adaptacija kuće">Adaptacija kuće</option>
                  <option value="Adaptacija kupaonice">Adaptacija kupaonice</option>
                  <option value="Adaptacija stana">Adaptacija stana</option>
                  <option value="Hidroizolacija temelja, podruma">Hidroizolacija temelja, podruma</option>
                  <option value="Uređenje potkrovlja">Uređenje potkrovlja</option>
                  <option value="Hidroizolacija ravnog &nbsp;krova">Hidroizolacija ravnog &nbsp;krova</option>
                  <option value="Soboslikarski radovi">Soboslikarski radovi</option>
                </select>
            </div>
              <div class="form-group">
				<label for="subject"><b>Podaci o poslu</b></label>
                <input type="text" name="podaci2" id="subject" class="form-control" placeholder="Ukratko što trebate"
                  required>
              </div>
              <div class="form-group">
                <label for="subject"><b>Upišite okvirnu količinu ili kvadraturu</b></label>
                <input type="text" name="kvadratura" id="subject" class="form-control" placeholder="Kvadratura u m²"
                  required>
              </div>
              <div class="form-group">
                <label for="c-form-profession">
                    <span class="label-text"><b>Kada želite početi sa izvedbom</b></span> 
                    <span class="contact-error"></span>
                </label>
                <select name="vrijeme" class="c-form-profession form-control" id="c-form-profession">
                  <option value="Odmah">Odmah</option>
                    <option value="do 1 mjeseca">do 1 mjeseca</option>
                    <option value="do 1-3 mjeseca">do 1-3 mjeseca</option>
                    <option value="Više od 6 mjeseca">Više od 6 mjeseca</option>
                    <option value="Zanima me samo okvirna cijena">Zanima me samo okvirna cijena</option>
                </select>
            </div>
            <div class="form-group">
              <label for="subject"><b>Upišite lokaciju izvedbe radova</b></label>
              <input type="text" name="lokacija" id="subject" class="form-control" placeholder="Poštanski broj i grad"
                required>
            </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send" class="btn btn-dark btn-block" id="sendBtn">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
