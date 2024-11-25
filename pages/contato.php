<div class="contato-container">
    <div class="center">
        <form method = "post" action="">
            <input type="text" name="nome" id="" placeholder="Nome: ">
            <input type="text" name="email" id="" placeholder="E-mail: ">
            <input type="text" name="telefone" id="" placeholder="Telefone: ">
            <textarea name="mensagem" id="" placeholder="Digite sua mensagem"></textarea>
            <input type="submit" name="btnEnviar" value="Enviar">
        </form>
    </div>
</div>

<?php
    if(isset($_POST['btnEnviar'])){
         new Email();
    }
?>

<!--manipular no css-->
<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.643858206145!2d-46.47680412502158!3d-23.54530846100196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66dec98fb855%3A0xf2b061ffbcd2ecf8!2sNeo%20Qu%C3%ADmica%20Arena!5e0!3m2!1spt-BR!2sbr!4v1732544096376!5m2!1spt-BR!2sbr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>