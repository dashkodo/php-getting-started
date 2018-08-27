<?php
  $data = array( 'text' => file_get_contents("php://input"); );
  $data_string= json_encode($data);

  $ch = curl_init('https://hooks.slack.com/services/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');
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
  );
        //Execute CURL
  $result = curl_exec($ch);

  print($data_string);
