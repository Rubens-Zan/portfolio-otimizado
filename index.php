<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Extra+Condensed:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta name="description" content="Esse é meu portfólio para demonstrar meus projetos e habilidades.">
    <meta name="author" content="Rubens Zandomenighi">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
  </head>
<body>
   <div class="parent">
    <div class="sidebar">
        <div class="sidebar-pos">
            <div class="img-sidebar">
                <img src="images/rubens.jpeg" />
            </div><!--img-->
            
            <div class="menu">
                <a href="about">Sobre</a>
                <a href="experiencia">Experiência</a>
                <a href="educacao">Educação</a>
                <a href="contato">Contato</a>
            </div><!--menu-->
        </div><!--sidebar-pos-->
    </div><!--sidebar-->
  <div class="content">



 <?php
      if(isset($_GET['url'])){
          if(file_exists($_GET['url']).'.html'){
              include($_GET['url'].'.html');
          }else{
              include('404.html');
          }
      }else{
          include('about.html');
      }
  ?>

 
  </div><!--content-->

</div><!--parent-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/functions.js"></script>
  <script src="js/submit-form.js"></script>
  <script src="js/jquery.ajaxform.js"></script>
  </body>
</html>