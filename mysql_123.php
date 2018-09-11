<?php
error_reporting(0);

function dbConnection()
{
    // Create connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reactionmaster";
    // Create m connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function SignIn()
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
        return "fail";
    } else {
        session_start(); // starting the session for user profile page
        if (! empty($_POST['user'])) {
            // $q1 = mysqli_query($conn,"SELECT * FROM course_building_engine.course_assignments;") or die(mysql_error());
            // $r = mysqli_fetch_array($q1, MYSQLI_ASSOC);
            // printf ("%s (%s)\n", $r["aid"], $r["assignment_topic"]);
            // echo nl2br("$r[0] \n");
            // $res = mysqli_affected_rows(http://localhost/ReactionMaster/login.php)
            $query = mysqli_query($conn, "SELECT * FROM login where username = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error());
            $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
            if (! empty($row['username']) and ! empty($row['password'])) {
                $_SESSION['username'] = $row['username'];
                echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
                return "success";
            } else {
                echo "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...";
                return "fail";
            }
        } else {
            echo "username is required";
            return "fail";
        }
    }
}

function retrieve($query)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        mysqli_query($conn, $query);
        /*
         * $res = mysqli_query($conn,"select * from reactions");
         * echo mysqli_num_rows($res);
         * if (mysqli_num_rows($result) > 0) {
         * return $result;
         * } else {
         * return 0;
         */
        mysqli_commit($conn);
        mysqli_close($conn);
        if ($conn->multi_query($query) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }
}

function tes($dec)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        mysqli_query($conn, $dec);
        /*
         * $res = mysqli_query($conn,"select * from reactions");
         * echo mysqli_num_rows($res);
         * if (mysqli_num_rows($result) > 0) {
         * return $result;
         * } else {
         * return 0;
         */
        mysqli_commit($conn);
        mysqli_close($conn);
        if ($conn->multi_query($dec) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $dec . "<br>" . $conn->error;
        }
    }
}

function third($sin)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        mysqli_query($conn, $sin);
        mysqli_commit($conn);
        mysqli_close($conn);
        if ($conn->multi_query($sin) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $sin . "<br>" . $conn->error;
        }
    }
}

function four($dou)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        mysqli_query($conn, $dou);
        mysqli_commit($conn);
        mysqli_close($conn);
        if ($conn->multi_query($dou) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $dou . "<br>" . $conn->error;
        }
    }
}

function five($oxy)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        if ($b = mysqli_query($conn, $oxy)) {
            mysqli_commit($conn);
            mysqli_close($conn);
            echo "New records created successfully \n";
        }
       else {
            echo "Error: " . $oxy . "<br>" . $conn->error;
        }
    }
}

function six($wat)
{
    $conn = dbConnection();
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        mysqli_query($conn, $wat);
        mysqli_commit($conn);
        mysqli_close($conn);
        if ($conn->multi_query($wat) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $wat . "<br>" . $conn->error;
        }
    }
}

function seven($acid)
{
    $conn = dbConnection();
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        mysqli_query($conn, $acid);
        mysqli_commit($conn);
        mysqli_close($conn);
        if ($conn->multi_query($acid) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $acid . "<br>" . $conn->error;
        }
    }
}

function eight($comp)
{
    $conn = dbConnection();
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        mysqli_query($conn, $comp);
        mysqli_commit($conn);
        mysqli_close($conn);
        if ($conn->multi_query($comp) === TRUE) {
            echo "New records created successfully";
        } else {
            echo "Error: " . $comp . "<br>" . $conn->error;
        }
    }
}

function nine($oxy)
{
    $conn = dbConnection();
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        mysqli_query($conn, $oxy);
        mysqli_commit($conn);
        mysqli_close($conn);
        if ($conn->multi_query($oxy) === TRUE) {
            echo "New records created successfully";
        } else {
            // echo "Error: " . $oxy . "<br>" . $conn->error;
        }
    }
}

function insert($data)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        mysqli_query($conn, $data);
        mysqli_commit($conn);
        mysqli_close($conn);
        if ($conn->multi_query($data) === TRUE) {
            echo "Elements are created successfully";
        } else {
            // echo "Error: " . $data . "<br>" . $conn->error;
        }
    }
}

function questions($rID)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $res = mysqli_query($conn, "select reactant1,reactant2,product1 from combination where Rid = '$rID'");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function decques($rID)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $res = mysqli_query($conn, "select product1,product2,product3,reactant1,reactant2,reactant3 from decomposition where Rid = '$rID'");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function dec_count()
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        
        $res = mysqli_query($conn, "select count(*) as count from decomposition");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function sinques($rID)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $res = mysqli_query($conn, "select reactant1,reactant2,product1,product2 from singleReplace where Rid = '$rID'");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function sin_count()
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        
        $res = mysqli_query($conn, "select count(*) as count from singleReplace");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function oxyg($rID)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $res = mysqli_query($conn, "select reactant1,reactant2,product1,product2,product3 from oxygen where Rid = '$rID'");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function oxy_count()
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        
        $res = mysqli_query($conn, "select count(*) as count from oxygen");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function wat($rID)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $res = mysqli_query($conn, "select reactant1,reactant2,product1,product2,product3 from oxygen where Rid = '$rID'");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function wat_count()
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        
        $res = mysqli_query($conn, "select count(*) as count from water");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}

function acidbase($rID)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $res = mysqli_query($conn, "select reactant1,reactant2,product1,product2 from acidBase where Rid = '$rID'");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function acidbase_count()
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        
        $res = mysqli_query($conn, "select count(*) as count from acidBase");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function compl($rID)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $res = mysqli_query($conn, "select reactant1,reactant2,product1,product2 from complexIon where Rid = '$rID'");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function compl_count()
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        
        $res = mysqli_query($conn, "select count(*) as count from complexIon");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function oxiRed($rID)
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $res = mysqli_query($conn, "select reactant1,reactant2,product1,product2,product3 from oxyRed where Rid = '$rID'");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function oxyRed_count()
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        
        $res = mysqli_query($conn, "select count(*) as count from oxyRed");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}
function reactants_count()
{
    $conn = dbConnection();
    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        
        $res = mysqli_query($conn, "select count(*) as count from combination");
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return 0;
        }
    }
}

function SignUp()
{
    $conn = dbConnection();
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        session_start(); // starting the session for user profile page
        if (! empty($_POST['user']) && ! empty($_POST['pass'])) {
            if ($_POST['pass'] = $_POST['cpass']) {
                $sql = "INSERT INTO newcustomer(firstname, lastname,username, password, confirmpassword, dob, emailadd, phoneno, gender) VALUES ('$_POST[fname]', '$_POST[lname]','$_POST[user]', '$_POST[pass]', '$_POST[cpass]', '$_POST[dob]', '$_POST[email]', '$_POST[phone]','$_POST[gender]')";
                // echo "$sql";
                if ($conn->query($sql) === TRUE) {
                    return "success";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    return "fail";
                }
            } else {
                echo "Your passwords does not match";
                return "fail";
            }
        } else {
            echo "invalid username";
            return "fail";
        }
    }
}
?>