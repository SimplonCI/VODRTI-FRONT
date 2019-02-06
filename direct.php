<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include 'headfile.php' ;?>
</head>
<body>
    <?php include 'header.php' ;?>

<center>
        <h1 style='color:white;'>Retrouvez vos émissions préférées en Direct ici</h1>
        <!-- style sur les categories de chaines -->
            <style>

                .chaine{
                    width: 175px;
                    height: 105px;
                    display: inline-block;
                    margin: 20px;
                    padding: 20px;

                    border-radius: 25px;
                    border: none;
                    transition: transform .4s;
                }


                    /* style sur le logo frequence 2 */
                .chaine2{
                    width: 190px;
                    height: auto;
                    display: inline-block;
                    margin: 20px;
                    padding: 20px;

                    border-radius: 25px;
                    border: none;
                    transition: transform .4s;
                }

                .chaine:hover, .chaine2:hover{
                    transform: scale(1.2);
                }
            </style>
        <!-- fin style sur les categories de chaines -->
    
    <div class='row'>
        <a href='chaine.php' type='button' name='direct'><img class='chaine' src="assets/img/rti1hd.png" alt=""></a>
        <a href='' type='button' name='direct'><img class='chaine' src="assets/img/rti2.png" alt=""></a>
        <a href='' type='button' name='direct'><img class='chaine' src="assets/img/rti_bouake.png" alt=""></a>
        <br>
        <a href='' type='button' name='direct'><img class='chaine2' src="assets/img/frequence2.png" alt=""></a>
        <a href='' type='button' name='direct'><img class='chaine' src="assets/img/radioci.png" alt=""></a>
    </div>
    </center>
</body>
</html>