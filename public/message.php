<?php 
    if (isset($_SESSION['mensagem'])):
?>

<script>
    alert(<?= json_encode($_SESSION['mensagem']); ?>);
</script>

<?php 
    unset($_SESSION['mensagem']);
    endif;
?>