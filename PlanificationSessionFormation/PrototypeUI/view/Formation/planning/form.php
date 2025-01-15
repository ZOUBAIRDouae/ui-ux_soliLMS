<form action="process_form.php" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="inputNom">Partie</label>
            <input name="projectName" type="text" class="form-control" id="inputNom" placeholder="Entrez le titre" value="SAS">
        </div>

        <div class="form-group">
            <label for="">Session</label>
            <input name="" type="" class="form-control" id="" placeholder="" value="1">
        </div>

        <div class="form-group">
            <label for="">Session</label>
            <input name="" type="" class="form-control" id="" placeholder="" value="38">
        </div>

        <div class="form-group">
            <label for="inputOhjectif">Objectif de session</label>
            <textarea name="objectif_plan" class="form-control" rows="7" id="inputObjectif" placeholder="Entrez les objectifs..."></textarea>
        </div>

        <div class="form-group">
            <label for="inputSujet">Sujets</label>
            <textarea name="sujets_formation" class="form-control" rows="7" id="inputSujet" placeholder="Entrez les sujets..."></textarea>
        </div>

        <div>
            <label for="mini_projet">Mini Projet</label>
            <textarea name="mini_projet" class="form-control" rows="7" id="mini_projet" placeholder="Entrez le mini projet..."></textarea></textarea>
        </div>

        <div>
            <label for="cc_efm">CC/EFM</label>
            <input name="" type="" class="form-control" id="" placeholder="" value="CC1 SAS" >
        </div>

    </div>

    <div class="card-footer">
        <a href="./index.php" class="btn btn-default">Annuler</a>
        <button type="submit" class="btn btn-primary float-right">Ajouter</button>
    </div>
</form>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    // Initialize Quill editor
    var quill = new Quill('#inputDescription', {
      theme: 'snow'  // 'snow' is the built-in theme, you can customize this
    });
  </script>