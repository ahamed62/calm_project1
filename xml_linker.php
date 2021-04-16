<?php

/*
PHP Code to Export Employee Master data from Tally ERP 9
Task : Export Exmployee masters from Tally
*/
ini_set('display_errors', 1);
echo "Hi"
$data ='<!--This XML document contains tags to fetch Daybook Vouchers from Tally-->
<!--It is equivalent to using the following option in Tally Software manually-->
<!--Option: Gateway of Tally @Display @Daybook-->
<ENVELOPE>
<HEADER>
<TALLYREQUEST>Export Data</TALLYREQUEST>
</HEADER>
<BODY>
<EXPORTDATA>
<REQUESTDESC>
<REPORTNAME>Voucher Register</REPORTNAME>
<STATICVARIABLES>
<SVEXPORTFORMAT>$$SysName:XML</SVEXPORTFORMAT>
<!--Specify the Period here-->
<SVCURRENTCOMPANY>A.R.M.Agencies 2021-2022</SVCURRENTCOMPANY>
<SVFROMDATE>20210415</SVFROMDATE>
<SVTODATE>20210415</SVTODATE>
</STATICVARIABLES>
<!--Specify the Report Name here-->
</REQUESTDESC>
</EXPORTDATA>
</BODY>
</ENVELOPE>
';

//echo $data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'localhost:9000/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); //$data = "XML data"
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo "no";
    echo curl_error($ch);
} else {
    echo "yes";
    print "<pre lang='xml'>" . htmlspecialchars($response) . "</pre>";
    echo $response;
//    echo $data;
    curl_close($ch);
}
return "";

