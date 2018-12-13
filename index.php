<!DOCTYPE html>
<html lang="fr">
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
  <main>
    
    <!-- Scrolling Main Navbar and responsive effect  -->
    
    
    <div id="navbars">
      <nav class="switch-lg navigation" id="navmenu">
        <ul>
          <li class="nav-item"><a class="nav-link active" href="#intro">•</a></li>
          <li class="nav-item"><a class="nav-link" href="#appetences">•</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">•</a></li>
          <li class="nav-item"><a class="nav-link" href="#timeline">•</a></li>
          <li class="nav-item"><a class="nav-link" href="#personality">•</a></li>
        </ul>
      </nav>
      <nav class="switch-sm">
        <div id="hamburger-nav">
          <input type="checkbox" id="hamburger-button">
          <label for="hamburger-button">&#9776;</label>
        </div>
        <ul id="responsive-menu">
          <a class="nav-link"><i class="fas fa-window-close"></i></a>
          <h1 class="respsheep">SHEEP</h1>
          <h1 class="resptune">TUNE</h1>
          <li class="nav-item"><a class="nav-link active" href="#intro">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#appetences">Appétences</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Compétences</a></li>
          <li class="nav-item"><a class="nav-link" href="#timeline">Timeline</a></li>
          <li class="nav-item"><a class="nav-link" href="#personality">Personnalité</a></li>
          <li class="nav-item">                
            <a class="m-1" href="https://www.linkedin.com/in/gwenaellelohard/"><i class="fab fa-linkedin-in"></i></a>
            <a class="m-1" href="https://github.com/Sheeptune/Bacalao"><i class="fab fa-github"></i></a>
            <a class="m-1" src="img/cv-uxdesigner-productmanager.pdf"><i class="fas fa-file-pdf"></i></a>
            <a class="m-1" href="#splitcontact"><i class="fas fa-envelope"></i></a>
          </li>
        </ul>                
      </nav>
      <nav class="sharebar shareimg hide-for-small">
        <a class="m-1" href="https://www.linkedin.com/in/gwenaellelohard/"><i class="fab fa-linkedin-in"></i></a>
        <a class="m-1" href="https://github.com/Sheeptune"><i class="fab fa-github"></i></a>
        <a class="m-1" href="img/cv-uxdesigner-productmanager.pdf"><i class="fas fa-file-pdf"></i></a>
        <a class="m-1" href="#splitcontact"><i class="fas fa-envelope"></i></a>
      </nav>
    </div>
    
    
    <!-- First Section of the site / Introduction or Home  -->
    
    <section class="container-fluid page-section" id="intro">
      <h1 class="text-center sheep">SHEEP</h1>
      <h1 class="text-center tune">TUNE</h1>
      <h6 class="text-center poste" >UX DESIGNER / PRODUCT MANAGER </h6>
      <h6 class="text-center poste">(Opérationnelle Dev Front)</h6>
      <p class="text-center scolling">Start scrolling</p>
      <div class="text-center"><img src="img/gif/Mouse-thin-rounded-button-outline.svg.png" width="80px" height="80px" alt=""></div>
    </section>
    
    
    <!-- Second Section of the site / Profil and appetences  -->
    
    <section class="container page-section" id="appetences">
      
      <div class="quotation">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h5 class="text-center quotetext"><span class="quote">" </span>Les gens ignorent le design qui ignore les gens<span class="quote"> "</span></h5>
            <p class="text-center quotetext">- Franck Chimero</p>
          </div>
        </div>
      </div>
      
      
      
      <div class="container whoami">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <h1 class="font-weight-bold">Profil</h1>
            <span class="byline">
            </span>
            <p>Passionnée par le design et la <span class="font-weight-bold font-italic">psychologie comportementale</span>, animée par l'expérience utilisateur, j'ai décidé de mettre mes expériences en marketing ainsi que mon goût pour la <span class="font-weight-bold font-italic">gestion de projet</span> au service du développement web/mobile.</p>        
          </div>
          <div class="col-lg-5 illustration">
          </div>
        </div>
      </div>
      
      <div class="container quotidien col-lg-10">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <h2 class="font-weight-bold">Mon quotidien</h2></div>
          </div>
        </div>
        
        <section class="container verbs col-lg-10">
          <div class="row text-center">
            <div class="col-lg-3">
              <h3>Penser humain avant tout</h3>
              <p>Placer l'étude de l'utilisateur au coeur de la démarche</p>
            </div>
            <div class="col-lg-3">
              <h3>Assurer la médiation</h3>
              <p>Répondre à la fois à vos objectifs et aux besoins de vos utilisateurs</p>
            </div>
            <div class="col-lg-3">
              <h3>Garantir l'engagement</h3>
              <p>Favoriser les perceptions positives et maximiser l'interaction </p>
            </div>
            <div class="col-lg-3">
              <h3>Sublimer l'expérience</h3>
              <p>Susciter un confort visuel et fonctionnel</p>
            </div>
          </div>
        </section>
        
        <div class="container memotitle col-lg-10">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <h2 class="font-weight-bold">Mémoires et recherches</h2></div>
            </div>
          </div>
          
          <div class="container memo">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <p class="font-weight-bold">L'influence psychologique et neurologique des composantes d'une communication</p>
                <p class="smallfont">sept. 2016 - Mémoire de 2nd année de Master </p>
                <p><span class="font-italic">Mots clés: </span>Stimulis visuels, émotionnels et mémoriels, esthétisme et structure, attraction, compréhension et de mémorisation de l'intention.</p>
              </div>   
              <div class="col-lg-5">
                <p class="font-weight-bold">La communication engageante au service du développement de l'esprit d'entreprise</p>
                <p class="smallfont">août 2015 - Mémoire de 1ere année de Master </p>
                <p class="appetencesEnd"><span class="font-italic">Mots clés: </span>Prise de décision, adoption d'un comportement, communication persuasive, communication engageante et processus de changement comportemental.</p>
              </div>
            </div>
          </div>
          
          
          
        </section>
        
        
        <!-- Third Section of the site / Skills and realisations  -->
        
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
              <div class="tab-pane fade show active" id="webdev" role="tabpanel" aria-labelledby="webdev-tab"><?php include("webdev.html"); ?></div>
              <div class="tab-pane fade" id="graphisme" role="tabpanel" aria-labelledby="graphisme-tab"><?php include("graph.html"); ?></div>
              <div class="tab-pane fade" id="others" role="tabpanel" aria-labelledby="others-tab"><?php include("transverses.html"); ?></div>
            </div>
            
            <div class="container col-lg-10">
              <div class="row justify-content-center">
                <div class="col-lg-12">
                  <h2 class="competences font-weight-bold">Réalisations</h2>
               </div>
            </div>
    

              <div class="img-grid">
                <figure class="einzel">
                  <img alt="Peinture" src="img/jpg/NHL_PERSPECTIVE01.jpg" style="width: 100%;">
                    <figcaption>Nouvel Hôpital de Lens (En cours)<br>
                    <span>Site vitrine d'un projet de construction</span>
                  </figcaption>
                </figure>  
                <figure class="einzel">
                  <img alt="Peinture" src="img/jpg/ian-dooley-280928-unsplash.jpg" style="width: 100%;">
                    <figcaption>Odyssée de la Culture<br>
                    <span>Site vitrine d'une association</span>
                  </figcaption>
                </figure>  
              </div>
            </div>      

            </div>


            </div>
        </div>
    </div>
</div>

          </section>
        </section>
        
        <!-- Fourth Section of the site / Timeline of Formation and experiences  -->
        
        <section class="container page-section" id="timeline">
          
          <div class="container experience">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <h1 class="font-weight-bold">Expériences</h1>
              </div>
            </div>
          </div>
          
          <div class="container col-lg-10 py-2 mt-4 mb-4">
            <!-- timeline item 1 -->
            <div class="row no-gutters">
              <div class="col-sm"> <!--spacer--> </div>
              <!-- timeline item 1 center dot -->
              <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                <div class="row h-50">
                  <div class="col">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
                <h5 class="m-2">
                  <span class="badge badge-pill bg-light border">&nbsp;</span>
                </h5>
                <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
              </div>
              <!-- timeline item 1 event content -->
              <div class="col-sm py-2">
                <div class="card">
                  <div class="card-body">
                    <div class="float-right text-muted small">Nov 2018 - Février 2019</div>
                    <h4 class="card-title text-muted">Ux Designer<br/> Développeur</h4>
                    <p class="card-text">Réalisation de sites vitrines pour plusieurs commanditaires, dont le CH de Lens et l'association de l'Odyssée de la Culture</p>
                  </div>
                </div>
              </div>
            </div>
            <!--/row-->
            <!-- timeline item 2 -->
            <div class="row no-gutters">
              <div class="col-sm py-2">
                <div class="card border-success shadow">
                  <div class="card-body">
                    <div class="float-right text-success small">Oct 2018 - Avr 2019</div>
                    <h4 class="card-title text-success">Formation intensive Développeur web/mobile</h4>
                    <p class="card-text">Bac +2 : Titre professionnel <img src="" alt="- Popschool"></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
                <h5 class="m-2">
                  <span class="badge badge-pill bg-success">&nbsp;</span>
                </h5>
                <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
              </div>
              <div class="col-sm"> <!--spacer--> </div>
            </div>
            <!--/row-->
            <!-- timeline item 3 -->
            <div class="row no-gutters">
              <div class="col-sm"> <!--spacer--> </div>
              <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
                <h5 class="m-2">
                  <span class="badge badge-pill bg-light border">&nbsp;</span>
                </h5>
                <div class="row h-50">
                  <div class="col border-right">&nbsp;</div>
                  <div class="col">&nbsp;</div>
                </div>
              </div>
              <div class="col-sm py-2">
                <div class="card">
                  <div class="card-body">
                    <div class="float-right text-muted small">Janv - Août 2018</div>
                    <h4 class="card-title">Chargée de marketing <br/>et communication </h4>
                    <p>Groupe Seasonova - Tourisme</p>
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-target="#t33_details" data-toggle="collapse">Show Details ▼</button>
                    <div class="collapse border" id="t33_details">
                      <div class="p-2">
                        <div><p>Gestion de la notoriété du groupe et de ses 11 établissements :</p>
                          <ul>
                            <li>Définition de la ligne éditoriale et rédaction de contenu</li>
                            <li>Gestion du planning éditorial et animation des réseaux</li>
                            <li>Développement d’outils de promotions, de fidélisation et suivi Analytics</li>
                            <li>Référencement naturel (sémantique, metadescriptions, netlinking)</li>
                            <li>Référencement payant (campagne Adwords et Display remarketing)</li>
                            <li>Création des visuels et de supports éditoriaux, suivi de mise en production</li>
                          </ul></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/row-->
              <!-- timeline item 4 -->
              <div class="row no-gutters">
                <div class="col-sm py-2">
                  <div class="card">
                    <div class="card-body">
                      <div class="float-right text-muted small">Déc 2017 - Janvier 2018</div>
                      <h4 class="card-title">Accompagnement <br/> de Porteurs de projet</h4>
                      <p>Soutien à l'Entrepreneuriat</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                  <div class="row h-50">
                    <div class="col border-right">&nbsp;</div>
                    <div class="col">&nbsp;</div>
                  </div>
                  <h5 class="m-2">
                    <span class="badge badge-pill bg-light border">&nbsp;</span>
                  </h5>
                  <div class="row h-50">
                    <div class="col border-right">&nbsp;</div>
                    <div class="col">&nbsp;</div>
                  </div>
                </div>
                <div class="col-sm"> <!--spacer--> </div>
              </div>
              <!--/row-->
              <!-- timeline item 5 -->
              <div class="row no-gutters">
                <div class="col-sm"> <!--spacer--> </div>
                <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                  <div class="row h-50">
                    <div class="col border-right">&nbsp;</div>
                    <div class="col">&nbsp;</div>
                  </div>
                  <h5 class="m-2">
                    <span class="badge badge-pill bg-light border">&nbsp;</span>
                  </h5>
                  <div class="row h-50">
                    <div class="col border-right">&nbsp;</div>
                    <div class="col">&nbsp;</div>
                  </div>
                </div>
                <div class="col-sm py-2">
                  <div class="card">
                    <div class="card-body">
                      <div class="float-right text-muted small">Mai - Sept 2016</div>
                      <h4 class="card-title">UI UX Designer <br/> Chargée de communication</h4>
                      <p>Nuukik - Marketing digital (Sass & Retail)</p>
                      <button class="btn btn-sm btn-outline-secondary" type="button" data-target="#t55_details" data-toggle="collapse">Show Details ▼</button>
                      <div class="collapse border" id="t55_details">
                        <div class="p-2">
                          <div><p>Pilotage d’une de refonte de site, optimisation du canal de conversion :</p>
                            <ul>
                              <li>Définition et conduite d’une stratégie online (lead nurturing)</li>
                              <li>Etablissement du cahier des charges</li>
                              <li>Enquêtes, suivi clients et réflexion sur le parcours utilisateur</li>
                              <li>Réalisation de wireframes et maquette de site</li>
                              <li>Refonte de la charte graphique, éditoriale et création de supports</li>
                              <li>Rédaction du contenu web et optimisation du référencement</li>
                            </ul></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/row-->
                <!-- timeline item 6 -->
                <div class="row no-gutters">
                  <div class="col-sm py-2">
                    <div class="card">
                      <div class="card-body">
                        <div class="float-right text-muted small">Nov 2015 - Mars 2016</div>
                        <h4 class="card-title">Management culturel <br/> Evenementiel</h4>
                        <p>Locomotif - Art</p>
                        <button class="btn btn-sm btn-outline-secondary" type="button" data-target="#t66_details" data-toggle="collapse">Show Details ▼</button>
                        <div class="collapse border" id="t66_details">
                          <div class="p-2">
                            <div><p>Participation au pilotage et à l'organisation d'une exposition :</p>
                              <ul>
                                <li>Conduite et animation de réunion (happening et communication)</li>
                                <li>Gestion du dossier de sponsoring et récolte des oeuvres</li>
                                <li>Participation au montage, à l'animation et au démontage de l'exposition</li>
                              </ul></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                      <div class="row h-50">
                        <div class="col border-right">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                      </div>
                      <h5 class="m-2">
                        <span class="badge badge-pill bg-light border">&nbsp;</span>
                      </h5>
                      <div class="row h-50">
                        <div class="col border-right">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                      </div>
                    </div>
                    <div class="col-sm"> <!--spacer--> </div>
                  </div>
                  <!--/row-->
                  <!-- timeline item 5 -->
                  <div class="row no-gutters">
                    <div class="col-sm"> <!--spacer--> </div>
                    <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                      <div class="row h-50">
                        <div class="col border-right">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                      </div>
                      <h5 class="m-2">
                        <span class="badge badge-pill bg-light border">&nbsp;</span>
                      </h5>
                      <div class="row h-50">
                        <div class="col">&nbsp;</div>
                        <div class="col">&nbsp;</div>
                      </div>
                    </div>
                    <div class="col-sm py-2">
                      <div class="card">
                        <div class="card-body">
                          <div class="float-right text-muted small">Avril - Août 2015</div>
                          <h4 class="card-title">Chargée de communication</h4>
                          <p>CelHubhouse - Soutien à l'Entrepreneuriat</p>
                          <button class="btn btn-sm btn-outline-secondary" type="button" data-target="#t77_details" data-toggle="collapse">Show Details ▼</button>
                          <div class="collapse border" id="t77_details">
                            <div class="p-2">
                              <div><p>Gestion de la promotion d’un dispositif de formation à l’entrepreneuriat :</p>
                                <ul>
                                  <li>Planification et mise en oeuvre de la campagne</li>
                                  <li>Conception de supports de communication (flyers, page magazine...)</li>
                                  <li>Rédaction d’un communiqué, d’un dossier de presse et envoi</li>
                                  <li> Participation à la conférence de presse (accueil des invités et support)</li>
                                </ul></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/row-->
                  </div>
                  
                </div>
                <!--container-->
                
              </section>
              
              <!-- Fith Section of the site / Timeline of Formation and experiences  -->
              
              <section class="container page-section" id="personality">
                

          <div class="container loisirs">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <h1 class="font-weight-bold">Loisirs</h1>
              </div>
            </div>
          </div>


              <div class="container hobbiestitle">

                <div class="hobbies">
                  <div class="row justify-content-center">
                    <div class="col mitgliederliste" id="lindy">
                    <figure class="einzel"><img alt="Lindyhop & Charleston" src="img/jpg/swingcaen.jpg" style="width: 100%;">
                      <figcaption>Danses sociales (Lindyhop & Charleston)<br>
                      <span>2 ans : cours, stage et bals</span></figcaption>
                    </figure>   
                    </div>   

                    <div class="col mitgliederliste" id="painting">
                      <figure class="einzel"><img alt="Peinture" src="img/jpg/dessin.jpg" style="width: 100%;">
                        <figcaption>Peinture et dessin<br>
                        <span>Portraits à l'acrylique - grandes toiles</span></figcaption>
                      </figure>   
                    </div>
                  </div>
                </div>
              </div>

              </section>





                <footer class="footer">
                <section class="container" id="splitcontact">
        <div class="row justify-content-around">
            <div class="col-lg-5 text-center">
                <img src="" alt="">
                <h3>Faisons tomber le masque</h3>
                <p>Vous souhaitez échanger ou me parler de votre projet ? Discutons autour d'un café.</p>
            </div>
            <form class="col-lg-5">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nom">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Prénom">
                        </div>
                    </div>
                </div>
            
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse email">        
                </div>
                          
                <div class="form-group">
                    <select id="inputState" class="form-control">
                        <option selected>Choisissez un objet...</option>
                        <option>Votre profil nous intéresse</option>
                        <option>Salon, meetup et conférence</option>
                        <option>Parlons UX en tête à tête</option>
                    </select>
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </section>
                </footer>
              </main>
            </body>
            </html>
            