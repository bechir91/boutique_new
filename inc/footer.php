     </div>
     </main>
     <!-- Footer -->
     <footer class="bg-dark page-footer font-small blue pt-4">

         <!-- Footer Links -->
         <div class="container-fluid text-center text-md-left">

             <!-- Grid row -->
             <div class="row">

                 <!-- Grid column -->
                 <div class="col-md-6 mt-md-0 mt-3">

                     <!-- Content -->
                     <h5 class="text-white text-uppercase">Bienvenue sur ma boutique en ligne</h5>
                     <p class="text-white">Cette Boutique est un site purement pédagogique et non un site e-commerce fonctionnel.</p>

                 </div>
                 <!-- Grid column -->

                 <hr class="clearfix w-100 d-md-none pb-3">

                 <!-- Grid column -->
                 <div class="col-md-3 mb-md-0 mb-3">

                     <!-- Links -->
                     <h5 class="text-white text-uppercase">Nos catégories de produits</h5>

                     <ul class="list-unstyled">
                         <li>
                             <a href="index.php?categorie=chemise" class="text-white">Nos belles chemises</a>
                         </li>
                         <li>
                             <a href="index.php?categorie=tshirt" class="text-white">T-shirt tendance</a>
                         </li>
                         <li>
                             <a href="index.php?categorie=pull" class="text-white">Pull pour l'hiver</a>
                         </li>
                     </ul>

                 </div>
                 <!-- Grid column -->

                 <!-- Grid column -->
                 <div class="col-md-3 mb-md-0 mb-3">

                     <!-- Links -->
                     <h5 class="text-white text-uppercase">Nos liens</h5>

                     <ul class="list-unstyled">
                         <li>
                             <a href="index.php" class="text-white">Boutique</a>
                         </li>
                         <li>
                             <a href="panier.php" class="text-white">Panier</a>
                         </li>

                         <li>
                             <a href="contact.php" class="text-white">Nous contacter</a>
                         </li>

                         <?php if (internauteEstConnecte()) { ?>
                             <li>
                                 <a href="profil.php" class="text-white">Mon profil</a>
                             </li>
                         <?php } else { ?>
                             <li>
                                 <a href="connexion.php" class="text-white">Connexion</a>
                             </li>
                             <li>
                                 <a href="inscription.php" class="text-white">Inscription</a>
                             </li>
                         <?php } ?>
                     </ul>

                 </div>
                 <!-- Grid column -->

             </div>
             <!-- Grid row -->

         </div>
         <!-- Footer Links -->

         <!-- Copyright -->
         <div class="text-white footer-copyright text-center py-3">© 2022 Copyright:
             <a href="https://mdbootstrap.com/" class="text-white"> Béchir DALY</a>
         </div>
         <!-- Copyright -->

     </footer>
     <!-- Footer -->

     </div>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <script src="js/app.js"></script>
     </body>

     </html>