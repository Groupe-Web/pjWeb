<script type="text/javascript"src="http://code.jquery.com/jquery-latest.js"></script>

<script type="text/javascript">
    function actualise_div() {
        $(document).ready(function() {
            $('#div_a_actualiser').load('messagerie_reponse2.php #div_a_actualiser');
        });
    }
</script>

    <h3>Actualiser un "DIV" avec JQuery </h3>
    <INPUT TYPE="BUTTON" OnClick="actualise_div()" VALUE="Click">
    <div id="div_a_actualiser" style="background:white; color:blue; width:50px; height:50px; font-size:25px;">
        <?php
        // affichage d'une valeur aléatoire pour voir l'effet d'actualisation
            echo rand(10,100);
        ?>
    </div>
