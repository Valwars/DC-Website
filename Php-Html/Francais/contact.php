<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'head.php'; ?>
    <title>Contact - DC.</title>
</head>

<body>

    <?php include 'menu_bar.php'; ?>

    <script>
        document.querySelectorAll('.itLink').forEach(item => {


            if (item.id = "selectedItem") {

                item.id = item.innerHTML;

            }

        })

        var itemSelected = document.getElementById("Contact");
        itemSelected.id = "selectedItem";
    </script>


    <div id="PresentationDiv">


        <h3>Me contacter</h3>

    </div>
    <section id ="contact">

    <div>
        <h2>Comment me contacter ?</h2>
        
        <h3>Site web de mon labo : </h3>
       <a href = "#" target="_blank">Cliquer ici : Cirimat cnrs</a>

        <h3>Numéro de téléphone : </h3>
        <p>+33 (5) 34 32 34 14</p>
        </div>

       
    </section>

  
   
   
</body>

</html>