<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Les joueurs de noblat</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.min.css">

</head>

<body>
    <!-- ici commence le contenu pour l'utilisateur-->


    <?php require_once('views/template/header.php'); ?>

    
    <main>
    <div class="container-fluid" id="slider">
            <button class="prev sliderbutton">&lt;</button>
            <button class="next sliderbutton">&gt;</button>
            <div class="slide">
                <img src="<?php echo BASE_URL; ?>assets/img/logoj2n.jpg" alt="baniere" />
            </div>
            <div class="slide">
                <img src="<?php echo BASE_URL; ?>assets/img/photo1.jpg" alt="photojeux1" />
            </div>
            <div class="slide">
                <img src="<?php echo BASE_URL; ?>assets/img/photo2.jpg" alt="photojeux2" />
            </div>
            <div class="slide">
                <img src="<?php echo BASE_URL; ?>assets/img/photo3.jpg" alt="photojeux3" />
            </div>
        </div>


        <div class=findgame>
            <div class= "form-group">
                <input class="form-control" type="text" id="recherche" value="" placeholder="recherchez ici vos jeux">
            </div>
            <div class="result">
                <div id="resultat-recherche"></div>
            </div>

        
        </div>


        <div class="container-fluid" id="slider">
            <button class="prev sliderbutton">&lt;</button>
            <button class="next sliderbutton">&gt;</button>
            <div class="slide">
                <img src="<?php echo BASE_URL; ?>assets/img/logoj2n.jpg" alt="baniere" />
            </div>
            <div class="slide">
                <img src="<?php echo BASE_URL; ?>assets/img/photo1.jpg" alt="photojeux1" />
            </div>
            <div class="slide">
                <img src="<?php echo BASE_URL; ?>assets/img/photo2.jpg" alt="photojeux2" />
            </div>
            <div class="slide">
                <img src="<?php echo BASE_URL; ?>assets/img/photo3.jpg" alt="photojeux3" />
            </div>
        </div>
        
    

    </main>

    <?php require_once('views/template/footer.php'); ?>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/86d37fbec9.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/diapo.js"></script>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    
        $(document).ready(function(){
            $('#recherche').keyup(function(){
                $('#resultat-recherche').html('');

            var jeux =$(this).val();

            if(jeux !=""){
                $.ajax({
                    type:'POST',
                    url:"<?php echo BASE_URL; ?>jeux/trierjeux",
                    data:'user='+encodeURIComponent(jeux),
                    success: function(data){
                        if (data !=""){
                            $('#resultat-recherche').append(data);
                        }else{
                            document.getElementById('resultat-recherche').innerHTML = "<div style='front-size:20px; text-aling:center; margin-top: 10px'> Aucune correspondances </div>"
                        }
                    }
                })
                console.log(jeux);
            }
        
        });
    });
    
    </script>

</body>

</html>    