<head>
<script type="text/javascript">
    window.history.forward();
    function sinVueltaAtras(){ window.history.forward(); }
</script>
</head>
<body onload="sinVueltaAtras();" onpageshow="if (event.persisted) sinVueltaAtras();" onunload="">

<?php
    
    session_start();
    unset($_SESSION["codigoAdmin"]);
    unset($_SESSION["contrasenaAdmin"]);
    
    echo 'You have cleaned session';
    header('Refresh: 1; URL = index.php');
?>
</body>