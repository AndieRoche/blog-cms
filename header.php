<?php   
    ini_set('display_errors', 1); //show errors for debugging
    $firstname = "Jane"; //String type variable
    $lastname = "Doe"; //String type variable
    $age = 35; //Integer type variable
    $married = true; //Boolean type variable
    $childrenNames = Array("Alice","Bob"); //Array type variable
    
    $fullname = $firsname . " " . $lastname; //Concatenation Operator
    $dogYears = $age/7; //Arithmetic Operator
    $idAdult = $dogYears > 4; //Comparison Operator
    $isSettled = $isAdult and $married; //Integer Type Variable
    
    function getFullName($firstname, $lastname) { //Function Name
        return $firstname . " " . $lastname; //Returned Valued
    }
    
    $fullName = getFullName($firstname, $lastname); //Using Variable
    $fullName = getFullName("Alice", "Doe"); //Using Values
    
    $function getIsSettled($age, $married) { //Function Name
        $dogYears = $age/7; 
        $idAdult = $dogYears > 4; 
        $isSettled = $isAdult and $married; 
        return $isSettled; //Returned Value
    }
?>
<div id="header">
		<div id="nav">
		 <a href="index.php">Home</a> | <a href="post-submission.php">Post Submission</a><br/>
		
		</div>
</div>