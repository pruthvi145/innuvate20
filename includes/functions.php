<?php 
ob_start(); 
require_once("includes/db.php");

define('SITE_URL', 'http://localhost/innuvate20');

function get_current_page(){
    return basename($_SERVER["SCRIPT_NAME"]);
    
}

function get_categories(){
    global $conn;
    $sql = "SELECT * FROM categories";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo("ERROR: can't fetch categories! <br>".$sql."<br>".mysqli_error($conn));
        
    }
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    
    return $data;
}
function get_parent_categories(){
    global $conn;
    $sql = "SELECT * FROM categories where parent_id='0'";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo("ERROR: can't fetch categories! <br>".$sql."<br>".mysqli_error($conn));
    }
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        if($children = get_children_categories($row['id'])){
            $row["children"] = $children;
        }
        $data[] = $row;
    }
    return $data;
}

function get_children_categories($id){
    global $conn;
    $sql = "SELECT * FROM categories where parent_id=$id";
    
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo("ERROR: can't fetch categories! <br>".$sql."<br>".mysqli_error($conn));
    }
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

function get_category($id){
    global $conn;
    $sql = "SELECT * FROM categories where id=$id";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo("ERROR: can't fetch category! <br>".$sql."<br>".mysqli_error($conn));
    }
    return mysqli_fetch_assoc($result);
}

function get_events($cat_id=false){
    global $conn;
    if($cat_id){
        $ids = [];
        if($children = get_children_categories($cat_id)){
            foreach($children as $child){
                $ids[] = $child['id'];
            }
        }
        $ids[] = $cat_id;
        $condition = implode(", ", $ids);
        $sql = "SELECT * FROM events where category_id in ($condition)";
    }else{
        $sql = "SELECT * FROM events";
    }
    $result = mysqli_query($conn, $sql);
    $data = [];
    if(!$result){
        echo("ERROR: can't fetch events! <br>".$sql."<br>".mysqli_error($conn));
    }
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}


function get_event($id){
    global $conn;
    $sql = "SELECT * FROM events where id=$id";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo("ERROR: can't fetch event! <br>".$sql."<br>".mysqli_error($conn));
    }
    return mysqli_fetch_assoc($result);
}