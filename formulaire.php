<form method="post" action="cible.php">

    <p>
        <input type="text" name="prenom" />
        <input type="submit" value="Valider" />
    </p>
    <textarea name="message" rows="8" cols="45">
Votre message ici.
</textarea>

    <div>
        <select name="choix">
            <option value="choix1">Choix 1</option>
            <option value="choix2">Choix 2</option>
            <option value="choix3">Choix 3</option>
            <option value="choix4">Choix 4</option>
        </select>
    </div>

    <label> Ma case à cocher<input type="checkbox" name="case" value="ma case à cocher" />  </label>
    <input type="checkbox" name="case" value="vollaile" />
    <input type="checkbox" name="case1" value="Porc"/>
    <input type="checkbox" name="case2" value="Morue"/> 
    <input type="checkbox" name="case3" value="Pas morue"/> 

</form>