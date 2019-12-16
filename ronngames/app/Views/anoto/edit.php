<body style="background-color:#edebe8">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                   <a class="nav-link" href="#"><h2><?= $title ?> </h2><span class="sr-only">(current)</span></a>
                </li>
        </ul>
  </div>
  <a href='javascript:self.history.back();'>Go Back</a>
</nav>    
<div class="row">
        <div class="col-md-12">        
                <?php foreach($errors as $error):?>
                  <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                  </div>
                <?php endforeach ?>      
                <form name="addform" action="<?= site_url('edit') ?>" method="POST">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $gamename['name'] ?>">
                  </div>

                <div class="form-group">
                  <label for="genre">Genre:</label>
                  <textarea class="form-control" rows="5" id="genre" name="genre"><?= $gamename['genre'] ?></textarea>
                </div>    
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?= $gamename['price'] ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?= $gamename['description'] ?>">
                </div>

                <br>
                <input type="hidden" value="<?= $gamename['ID'] ?>" name="ID">
                <button type="submit" class="btn btn-primary float-right">Update</button>
                
                </form>
        </div>
</div>
</body>