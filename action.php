<?php
require_once("db.php");
require_once("util.php");

$db = new Database();
$util = new Util();

// Create
if (isset($_POST['add'])) {
    $kind = $util->testInput($_POST['kind']);
    $part = $util->testInput($_POST['part']);
    $protein = $util->testInput($_POST['protein']);
    $kcal = $util->testInput($_POST['kcal']);

    if ($db->insert($kind, $part, $protein, $kcal)) {
        echo $util->showMessage('success', "List inserted successfully");
    } else {
        echo $util->showMessage("error", "Somthing wrong!");
    }
}

// Read
if (isset($_GET["read"])) {
    $kind = $db->read();
    $output = '';
    if ($kind) {
        foreach ($kind as $row) {
            $output .= '<tr>
                                <td>' . $row['id'] . '</td>
                                <td>' . $row['kind'] . '</td>
                                <td>' . $row['part'] . '</td>
                                <td>' . $row['protein'] . " g" . '</td>
                                <td>' . $row['kcal'] . " kcal" . '</td>
                                <td>
                                    <a href="#" id="' . $row['id'] . '" class="btn btn-warning btn-sm rounded-pull py-0 editlink" data-bs-toggle="modal" data-bs-target="#editListModal">Edit</a>
                                    <a href="#" id="' . $row['id'] . '" class="btn btn-danger btn-sm rounded-pull py-0 deletelink">Delete</a>
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


if (isset($_GET['edit'])) {
    $id = $_GET['id'];
    $list = $db->readOne($id);
    echo json_encode($list);
}

if (isset($_POST['update'])) {
    $id = $util->testInput($_POST['id']);
    $kind = $util->testInput($_POST['kind']);
    $part = $util->testInput($_POST['part']);
    $protein = $util->testInput($_POST['protein']);
    $kcal = $util->testInput($_POST['kcal']);

    if ($db->update($id, $kind, $part, $protein, $kcal)) {
        echo $util->showMessage('success', "List updated!!!");
    } else {
        echo $util->showMessage('danger', "Update failed!!!");
    }

}

if (isset($_GET["delete"])) {
    $id = $_GET['id'];
    if ($db->delete($id)) {
        echo $util->showMessage('info', 'List deleted!!!');
    } else {
        echo $util->showMessage('dnager', 'Delete failed!!!');
    }
}
?>