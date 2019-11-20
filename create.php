<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
        <form action="store.php" method="post">
       
           <div class="form-group">
               <label for="firstname">
                 firstname
               </label>
               <input type="text" class="form-control" name="firstname" id="firstname">
           </div>
           <div class="form-group">
               <label for="lastname">
               lastname
               </label>
               <input type="text" class="form-control" name="lastname" id="lastname">
           </div>
           
           <div class="form-group">
               <label for="email">
                   email
               </label>
               <input type="email" class="form-control" name="email" id="email">
           </div>
           <div class="form-group">
               <label for="phone">
                  phone
               </label>
               <div class="form-group">
                    <label for="operateur">operation</label>
                    <input type="text" name="phone" id="pn" placeholder="ex 55336665" class="form-control">
                </div>

               <input type="" class="form-control" name="phone" id="phone">
           </div>
           <div class="form-group">
               <button class="btn btn-outline-success" type="submit">Enregistrer</button>
               <button class="btn btn-outline-danger" type="reset">annuler</button>
           </div>

        </form>
    </div>
</body>
</html>