<?php echo "Welcome";

$Base = new PDO('mysql:host=192.168.64.106;dbname=Exo2_Colson;charset=utf8;','colson','colson');

$ObjetResultatDeRequeteBrut = $Base->query("SELECT * FROM `Patient`, `Consultation` WHERE Patient.numSS = Consultation.numSS ORDER BY `nom`");

while($val = $ObjetResultatDeRequeteBrut->fetch()) {
    echo "<p>Je suis connecté<p>";
    echo "<p>";
    echo $val['numConsultation'];
    echo "<p>";
    echo $val ['nom'];

}
highlight_file(__FILE__);

?>