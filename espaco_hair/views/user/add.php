<?php include("headerpreto.php"); 
include("../../config/config.php"); 
include(DIRREQ."/lib/html/headerCalendar.php"); 
$date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo'));
include("../../class/session.php");
include("../../config/conexao.php");
$nome_session = $_SESSION['nome_session'];
$email_session = $_SESSION['email_session'];
?>

<div class="container-fluid position-relative" style="height:100vh;">
  <div class="container-md position-relative"
  style="width:55% ; border-color: rgb(255, 255, 255); border-width:2px ;border-style: solid;border-radius: 20px;">
<form class="text-light" name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'/controllers/ControllerAdd.php'; ?>">
<h1 class=" text-center text-light  position-relative">Realizar agendamento</h1>

Data: <input class="form-control" type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
    Hora: <input class="form-control"type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
    Cliente: <input class="form-control" type="text" name="description" id="description" value="<?php echo $email_session; ?>"><br>
    Selecione o serviço:     <select class="form-control"name="title" id="title">
        <option value="">Selecione</option>
        <option value="Botox">Botox</option>
        <option value="Progressiva">Progressiva</option>
        <option value="Corte">Corte</option>
        <option value="Hidratação">Hidratação</option>
        <option value="Escova">Escova</option>
        <option value="Reconstrução">Reconstrução</option>
        <option value="Cauterização">Cauterização</option>
        <option value="Manicure">Manicure</option>
        <option value="Pedicure">Pedicure</option>
        <option value="Manicure + Pedicure">Manicure + Pedicure</option>
        <option value="Design de Sobrancelha">Design de Sobrancelha</option>
    </select><br>
    Confirme o serviço:
    <select name="horasAtendimento" id="horasAtendimento" class="form-control">
        <option value="">Selecione</option>
        <option value="120">Botox</option>
        <option value="120">Progressiva</option>
        <option value="60">Corte</option>
        <option value="30">Hidratação</option>
        <option value="60">Escova</option>
        <option value="30">Reconstrução</option>
        <option value="60">Cauterização</option>
        <option value="45">Manicure</option>
        <option value="60">Pedicure</option>
        <option value="90">Manicure + Pedicure</option>
        <option value="30">Design de Sobrancelha</option>
    </select><br>
    <input class="btn btn-primary" type="submit" value="Agendar">
</div>
</form>

<?php include(DIRREQ."/lib/html/footerCalendar.php"); ?>

<?php include("footer.php"); ?>

