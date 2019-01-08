<html>

    <head>
    
        <title>Inscription</title>
    
    </head>
    
    <body>
    
        <form action="#" method="post">
        
            <table>
            
            <tr>
            
            <td><label for="login"><strong>Identifiant :</strong></label></td>
            <td><input type="text" name="login" id="login"/></td>
            
            </tr>
            
            <tr>
            
            <td><label for="pass"><strong>Mot de passe :</strong></label></td>
            <td><input type="password" name="pass" id="pass"/></td>
            
            </tr>
            
            <tr>
            
            <td><label for="pass2"><strong>Confirmez le mot de passe :</strong></label></td>
            <td><input type="password" name="pass2" id="pass2"/></td>
            
            </table>
        
        <input type="submit" name="register" value="S'inscrire"/>
        
        </form>
        <?php 
            if(isset($_POST['login'])){
                echo "Votre inscription a été éffectuée avec succès";
            }
        ?>
    
    </body>

</html>