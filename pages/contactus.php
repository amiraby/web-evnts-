<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Podkova&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/main_style.css" />
    <title>signup</title>
</head>
<body class="overflow">
    <div class="row">

        <div class="col-6" id="first">
            <h5>CONTACT</h5>
            <br>
           <div class="contactezz">
            <div class="container">
                <form method="POST" action="get_response.php">
                  <label for="fname">Nom</label>
                  <input type="text" id="fname" name="name" placeholder="Ton nom..">
              
                  <label for="email">email</label>
                  <input type="text" id="email" name="email" placeholder="Ton prenom..">
              
                  <label for="message">Votre message</label>
                  <textarea id="message" name="message" placeholder="Ecrire quelque chose.." style="height:100px"></textarea>
              
                  <input type="submit" value="envoyer">
                </form>
              </div>
              
            <div id="last"> </div>
                <p class="last">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span>Nunc vulputate </span>et <span> velit interdum</span>, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
        </div>
    </div>

        <div class="col-6">
             <div class="bgsection">

                <div class="imglast" >
                    <img src="../images/contactus.png" alt="">
                </div>
             
                <br>
             <h4 class="titrelast">Meilleure plateforme d’organisation d’evenement</h4>       
             </div>
        </div>
      </div>
    </div>
</body>
</html>