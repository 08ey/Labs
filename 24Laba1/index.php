<?php
include "Patient.php";
$patient1 = new Patient('a','a','a','aaa','8800','cancer');
$patient2 = new Patient('b','b','b','bbb','1234','cancer');
$patient3 = new Patient('c','c','c','ccc','7654','asthma');
$patient4 = new Patient('d','d','d','ddd','4576','cancer');
$patient5 = new Patient('white','walter','e','eee','1096','cancer');
$patient6 = new Patient('f','f','f','fff','5794','asthma');
$patient7 = new Patient('g','g','g','ggg','2356','ebola');
$patient8 = new Patient('h','h','h','hhh','7533','cancer');
$patient9 = new Patient('i','i','i','iii','8234','ebola');
$patient10 = new Patient('j','j','j','jjj','8660','cancer');
$patient11 = new Patient('k','k','k','kkk','8864','asthma');
$patient12= new Patient('l','l','l','lll','8235','asthma');
$patient13 = new Patient('m','m','m','mmm','8235','cancer');
$mas=[$patient1,$patient2,$patient3,$patient4,$patient5,$patient6,$patient7,$patient8,$patient9,$patient10,$patient11,$patient12,$patient13];
echo "<h2>Interval</h2>";
foreach ($mas as $patient){
    echo "<p>";
    $patient->showByCardNum(8000,9000);
    echo "</p>";
}
echo "<h2>Diagnosis</h2>";
foreach ($mas as $patient){
    echo "<p>";
    $patient->showByDiagnosis("cancer");
    echo "</p>";
}