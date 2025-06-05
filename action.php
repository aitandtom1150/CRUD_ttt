<?php 
    require_once("db.php");
    require_once("util.php");

    $db = new Database();
    $util = new Util();

    if (isset($_POST['add'])) {
        $kind = $util->testInput($_POST['kind']);
        $part = $util->testInput($_POST['part']);
        $protein = $util->testInput($_POST['protein']);
        $kcal = $util->testInput($_POST['kcal']);

        if ($db->insert($kind, $part, $protein, $kcal)) {
            echo $util->showMessage('success', "List inserted successfully");
        } else {
            echo $util->showMessage("error","Somthing wrong!");
        }
    }

        if (isset($_GET["read"])) {
            $kind = $db->read();
            $output = '';
            if ($kind){
                foreach($kind as $row){
                    $output .= '<tr>
                                <td>' . $row['id'] .'</td>
                                <td>' . $row['kind'] .'</td>
                                <td>' . $row['part'] .'</td>
                                <td>' . $row['protein'] .'</td>
                                <td>' . $row['kcal'] .'</td>
                                <td>
                                    <a href="#" id="'. $row['id'].'" class="btn btn-warning btn-sm rounded-pull py-0 editlink" data-bs-toggle="modal" data-bs-target="#editListModal">Edit</a>
                                    <a href="#" id="'. $row['id'].'" class="btn btn-danger btn-sm rounded-pull py-0 deletelink">Delete</a>
                                </td>
                    </tr>';
                }
                echo $output;
            } else {
                echo '<tr>
                    <td colspan="6">No List found in the Database </td>
                    </tr>';
            }
        }
        
    
?>