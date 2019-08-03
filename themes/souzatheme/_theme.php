<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <meta name="mit" content="2019-07-16T19:27:30-03:00+169287">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?= $head; ?>
    
    <link rel="stylesheet" href="<?= url("/shared/styles/bootstrap.min.css"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>"/>
</head>
<body>



<!--HEADER-->
<header class="container-fluid">
    <nav class="my-cont">
        <nav class="nav-space d-flex justify-content-between">
            <div style="margin-right:150px; ">
            <a class="col-2 logo"></a><span class="logoA">  Clinica </span><img src="<?= theme("/assets/images/icone_logo.png"); ?>" width="22.05" height="20.66" > <span class="logoB">  Dental </span></a>
            </div>          
            <ul class="nav-home  col-2">
                <a title="Home" href="<?= url(); ?>"> <li class="nav-item">Home</li></a>
                <a title="Sobre" href="<?= url("/sobre"); ?>"> <li>Sobre</li></a>
                <a title="Servicos" href="<?= url("/servicos"); ?>"> <li>Serviços</li></a>
            </ul>
            <ul class="nav-home col-2">
                <a href="<?= url("/agendar"); ?>"> <li>Agendar</li></a>
                <a href="<?= url("/blog"); ?>"> <li>Contato</li></a>
            </ul>
            <ul class="nav-home2 col-1" >
                <a href=""><li><img src="<?= theme("/assets/images/insta.png"); ?>" height="30"></li></a>
                <a href=""><li><img src="<?= theme("/assets/images/whats.png"); ?>" height="25"></li></a>
                <a href=""><li><img src="<?= theme("/assets/images/face.png"); ?>" height="25"></li></a>
            </ul>
                
            
        </nav>
    </nav>

</header>
  
<!--CONTENT-->
<main class="main_content">
    <?= $v->section("content"); ?>
</main>


<!--FOOTER-->

<script src="<?= url("/shared/scripts/jquery.min.js"); ?>"></script>
<script src="<?= url("/shared/scripts/bootstrap.bundle.min.js"); ?>"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53658515-18"></script>
<script src="<?= theme("/assets/scripts.js"); ?>"></script>
<?= $v->section("scripts"); ?>

</body>
</html>