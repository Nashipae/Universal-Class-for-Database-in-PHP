<?PHP

function testconnection() {
global $db, $statements;

$searchquery1 = "12345";
$searchquery2 = "ABC";
$searchquery3 = "6789";
$searchquery4 = "DEF";
$searchquery5 = "GHI";
//Select
$getsamepledata = $db->selectRows($statements['getsampledata'], [$searchquery1]);

//Insert
$insertexample = $db->executeRow($statements['insertexample'], [$searchquery1, $searchquery2, $searchquery3]);

//Update
$updatexample = $db->selectRows($statements['updateexample'], [$searchquery1, $searchquery2, $searchquery3,$searchquery4,$searchquery5 ]);

}