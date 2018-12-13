<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap_custom.css">
    <link rel="stylesheet" href="./css/fontawesome.css">
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script scr="./js/zenscroll-min.js" defer></script>
    <script src="./js/switch-nav.js" defer></script>
    <script src="./js/main.js" defer></script>
    <title>Homepage</title>
    <link rel="icon" href="img/svg/sheep.svg"><!--- icon from https://www.flaticon.com -->
</head>
<body>
        <section class="container-fluid page-section" id="skills">
            <section class="container">
                <div class="container memo">
                  <div class="row justify-content-center">
                    <ul class="nav justify-content-center skillselector" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active show" role="tab" data-toggle="tab" id="webdev-tab" href="#webdev" aria-controls="webdev" aria-selected="true">Webdev</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" role="tab" data-toggle="tab" id="graphisme-tab" href="#graphisme" aria-controls="graphisme" aria-selected="false">Design</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" role="tab" data-toggle="tab" id="others-tab" href="#others" aria-controls="others" aria-selected="false">Transverses</a>
                      </li>
                    </ul>
                    </div>
                </div>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="webdev" role="tabpanel" aria-labelledby="webdev-tab"><?php include("webdev.php"); ?></div>
                    <div class="tab-pane fade" id="graphisme" role="tabpanel" aria-labelledby="graphisme-tab">Hallo</div>
                    <div class="tab-pane fade" id="others" role="tabpanel" aria-labelledby="others-tab">Helli</div>
                  </div>              
              </section>
        </section>
</body>
</html>