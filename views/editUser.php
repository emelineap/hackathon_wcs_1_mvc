<?php include 'views/includes/header.php'; ?>

<div class="container">
    <h1 class="text-center">Edit profil</h1>

    <!-- On spécifie vers quelle url la donnée du formulaire doit etre envoyé, attention, afin d'éditer une citation, notre requete SQL a besoin de donnaitre son ID -->
    <form action="#" method="post">
    <!-- End -->

        <div class="form-group">
            <label for="username">Username</label>

            <!-- On auto-complete les champs -->
            <input name="username" type="text" class="form-control" id="username" value="">
            <!-- End -->

        </div>
        <div class="form-group">
            <label for="email">Email</label>

            <!-- On auto-complete les champs -->
            <input name="email" type="mail" class="form-control" id="email" value="">
            <!-- End -->
            
        </div>
        <div class="form-group">
            <label for="content">Phone</label>

           <!-- On auto-complete les champs -->
            <input name="phone" type="text" class="form-control" id="phone" value="">
            <!-- End -->
            
            
        </div>
        <div class="form-group">
            <label for="birthday">Birthday</label>

            <!-- On auto-complete les champs -->
            <input name="birthday" type="birthday" class="form-control" id="birthday" value="">
            <!-- End -->
            
        </div>

        <div class="form-group">
            <label for="zipcode">Zipcode</label>

            <!-- On auto-complete les champs -->
            <input name="zipcode" type="zipcode" class="form-control" id="zipcode" value="">
            <!-- End -->
            
        </div>
        <div class="form-group">
            <label for="file">Avatar</label>

            <!-- On auto-complete les champs -->
            <input name="avatar" type="url" class="form-control" id="avatar" value="">
            <!-- End -->
            
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>

<?php include 'views/includes/footer.php'; ?>
