<?php
header("Content-Type:application/json");
require "data.php";
include 'mysql.php';

if (! empty($_GET['name']) && ! empty($_GET['examid'])) {
    $name = $_GET['name'];
    $exam = $_GET['examid'];
    
    $res = fetch_review($name, $exam);
    
    while ($r = mysqli_fetch_assoc($res)) {
        response(200, "Product Found", $r);
    }
    
    if (empty($res)) {
        response(200, "Unable to retrieve exam details for the user", NULL);
    }
} else {
    response(400, "Invalid Request", NULL);
}

function response($status, $status_message, $data)
{
    header("HTTP/1.1 " . $status);
    
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    if ($data == NULL)
        $response['data'] = $data;
    else {
        $response['username'] = $data['stuId'];
        $response['testId'] = $data['testId'];
        $rIds = $data['rId'];
        $product1_given = $data['product1_given'];
        $product2_given = $data['product2_given'];
        $product3_given = $data['product3_given'];
        $counter = explode(",", $rIds);
        $product1 = explode(",", $product1_given);
        $product2 = explode(",", $product2_given);
        $product3 = explode(",", $product3_given);
        $cnt = 1;
        $getData = null;
        
        foreach ($counter as $k => $v) {
            
             /* if (strncmp($data['testId'], "combination", strlen("combination") === 0) {
              $getData = questions($v);
             } */
            if (strncmp($data['testId'], "combination", strlen("combination")) === 0) {
                $getData = questions($v);
                
                while ($row = mysqli_fetch_assoc($getData)) {
                    // $r = "$row['reactant1'] "+" $row['reactant2'] "=" $row['product1']";
                    $response['question ' . $cnt] = $row['reactant1'] . " + " . $row['reactant2'] . " = " . $row['product1'];
                    $response['AnswerGiven ' . $cnt] = $product1[$k];
                    ++ $cnt;
                }
                
            }elseif (strncmp($data['testId'], "acidbase", strlen("acidbase")) === 0) {
                $getData = acidbase($v);    
                
                while ($row = mysqli_fetch_assoc($getData)) {
                    // $r = "$row['reactant1'] "+" $row['reactant2'] "=" $row['product1']";
                    $response['question ' . $cnt] = $row['reactant1'] . " + " . $row['reactant2'] . " = " . $row['product1']. "+" .$row['product2'];
                    $response['AnswerGiven ' . $cnt] = $product1[$k];
                    ++ $cnt;
                }
            }elseif (strncmp($data['testId'], "complexIon", strlen("complexIon")) === 0) {
                $getData = compl($v);
                
                while ($row = mysqli_fetch_assoc($getData)) {
                    // $r = "$row['reactant1'] "+" $row['reactant2'] "=" $row['product1']";
                    $response['question ' . $cnt] = $row['reactant1'] . " + " . $row['reactant2'] . " = " . $row['product1']. "+" .$row['product2'];
                    $response['AnswerGiven ' . $cnt] = $product1[$k];
                    ++ $cnt;
                }
            }elseif (strncmp($data['testId'], "decom", strlen("decom")) === 0) {
                $getData = decques($v);
                
                while ($row = mysqli_fetch_assoc($getData)) {
                    // $r = "$row['reactant1'] "+" $row['reactant2'] "=" $row['product1']";
                    $response['question ' . $cnt] = $row['reactant1'] . "+" . $row['reactant2'] . " = " . $row['product1'];
                    $response['AnswerGiven ' . $cnt] = $product1[$k];
                    ++ $cnt;
                }
            }elseif (strncmp($data['testId'], "oxiRed", strlen("oxiRed")) === 0) {
                $getData = oxiRed($v);
                
                while ($row = mysqli_fetch_assoc($getData)) {
                    // $r = "$row['reactant1'] "+" $row['reactant2'] "=" $row['product1']";
                    $response['question ' . $cnt] = $row['reactant1'] . " + " . $row['reactant2'] . " = " . $row['product1']. "+" .$row['product2']. "+" .$row['product2'];
                    $response['AnswerGiven ' . $cnt] = $product1[$k];
                    ++ $cnt;
                }
            }elseif (strncmp($data['testId'], "oxygen", strlen("oxygen")) === 0) {
                $getData = oxyg($v);
                
                while ($row = mysqli_fetch_assoc($getData)) {
                    // $r = "$row['reactant1'] "+" $row['reactant2'] "=" $row['product1']";
                    $response['question ' . $cnt] = $row['reactant1'] . " + " . $row['reactant2'] . " = " . $row['product1']. "+" .$row['product2']. "+" .$row['product2'];
                    $response['AnswerGiven ' . $cnt] = $product1[$k];
                    ++ $cnt;
                }
            }elseif (strncmp($data['testId'], "singleRep", strlen("singleRep")) === 0) {
                $getData = sinques($v);
                
                while ($row = mysqli_fetch_assoc($getData)) {
                    // $r = "$row['reactant1'] "+" $row['reactant2'] "=" $row['product1']";
                    $response['question ' . $cnt] = $row['reactant1'] . " + " . $row['reactant2'] . " = " . $row['product1']. "+" .$row['product2']. "+" .$row['product2'];
                    $response['AnswerGiven ' . $cnt] = $product1[$k];
                    ++ $cnt;
                }
            }elseif (strncmp($data['testId'], "water", strlen("water")) === 0) {
                $getData = wat($v);
                
                while ($row = mysqli_fetch_assoc($getData)) {
                    // $r = "$row['reactant1'] "+" $row['reactant2'] "=" $row['product1']";
                    $response['question ' . $cnt] = $row['reactant1'] . " + " . $row['reactant2'] . " = " . $row['product1']. "+" .$row['product2']. "+" .$row['product2'];
                    $response['AnswerGiven ' . $cnt] = $product1[$k];
                    ++ $cnt;
                }
            }elseif (strncmp($data['testId'], "doubleRep", strlen("doubleRep")) === 0) {
                $getData = wat($v);
                
                while ($row = mysqli_fetch_assoc($getData)) {
                    // $r = "$row['reactant1'] "+" $row['reactant2'] "=" $row['product1']";
                    $response['question ' . $cnt] = $row['reactant1'] . " + " . $row['reactant2'] . " = " . $row['product1']. "+" .$row['product2']. "+" .$row['product2'];
                    $response['AnswerGiven ' . $cnt] = $product1[$k];
                    ++ $cnt;
                }
            }
           
        }
    }
    
    $json_response = json_encode($response);
    echo $json_response;
}