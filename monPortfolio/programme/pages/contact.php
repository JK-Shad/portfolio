<?php ob_start(); ?>

<h1>Page de Contact</h1>


<section id="contact">
    <h2 class="text-center text-white mt-5">Formulaire de contact</h2>
    <div class="row">
        <div class="col-md-5 mx-auto mt-5">
            <h3>Contactez-nous</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde placeat asperiores expedita suscipit assumenda dicta voluptate laudantium eius, aut ipsam molestiae, neque repudiandae sit doloremque numquam ipsa itaque fugit quaerat!</p>
            <div class="col-12">
                <form method="POST" action>
                    <div class="nom mt-5">
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                    </div>
                    <div class="prenom mt-5">
                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
                    </div>
                    <div class="mail mt-5">
                        <input type="text" class="form-control" name="mail" id="mail" placeholder="Adresse mail">
                    </div>
                    <div class="message mt-5">
                        <textarea class="form-control" rows="5" name="message" placeholder="Message">Entrez votre message</textarea>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm mt-3">Envoyer</a>
                </form>
            </div>
        </div>
    </div>
</section>

</section>
<?php
    $content= ob_get_clean();
    require "commons/template.php";
?>
