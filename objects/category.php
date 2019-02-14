<?php
class Category{
 
    // database connection and table name
    private $conn;
    private $table_name = "categories";
 
    // object properties
    public $id;
    public $name;
 
    public function __construct($db){
        $this->conn = $db;
    }
 
    // used by select drop-down list
   public function read(){
        //select all data
        $query = "SELECT
                    id, name
                FROM
                    " . $this->table_name . "
                ORDER BY
                    name";  
 
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
 
        return $stmt;
    }

    // used to read category name by its ID
    public function readName(){
     
    $query = "SELECT name FROM " . $this->table_name . " WHERE id = ? limit 0,1";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
    $this->name = $row['name'];
  }

function categoryTree(&$output=null, $parent=0, $indent=null){
//echo $parent;
    // select the categories that have on the parent column the value from $parent
    //echo "SELECT id, name FROM categories WHERE parent_id=".$parent;
    $r =  $this->conn->prepare("SELECT id, name FROM categories WHERE parent_id=:parentid");
    $r->execute(array(
        'parentid'  => $parent
    ));
    if($r->rowCount()>0){
        echo "test";
    // show the categories one by one
    while($c = $r->fetch(PDO::FETCH_ASSOC)){
        $output .= '<option value=' . $c['id'] . '>' . $indent . $c['name'] . "</option>";
       
        //if($c['id'] != $parent){
            //echo "test";
            // in case the current category's id is different that $parent
            // we call our function again with new parameters
            $this->categoryTree($output, $c['id'], $indent . "&nbsp;&nbsp;");
        //}
    }
   } 
    // return the list of categories
    return $output;
    }

    function hasChilds($id) {
        $sql = "SELECT * FROM categories where parent_id = ? ";
        $results = $this->db->conn_id->prepare($sql);
        $results->bindParam(1, $id);
        $results->execute();
        $count = $results->rowCount();
        $array = array();
        if ($count > 0) {
            while ($result = $results->fetch(PDO::FETCH_ASSOC)) {
                $array[] = array("id" => $result['id'], "name" => $result['name'], "parent_id" => $result['parent_id'], "subcats" => array_filter($this->hasChilds($result['id'])));
            }
        } else {
            $array[] = null;
        }
        return $array;
    }
}

?>