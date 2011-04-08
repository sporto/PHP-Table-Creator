<?php

require_once 'classes/table_creator.php';

#create a dummy dataset for testing
$example_dataset = array(
										array("Barcelona", "Spain", "Europe"),
										array("Florence","Italy","Europe"),
										array("Melbourne","Australia","Oceania"),
										array("Buenos Aires","Argentina","South America"),
										array("San Francisco","USA","North America")							
									);

#create an instance of the class
$tc = new TableCreator();

#add some parameters for the table
$tc->table_id = "list1";
$tc->table_class = "list";

#loop through the dataset and add the information to the table
foreach($example_dataset as $example){
	#the class uses the heading titles as the keys, always use different keys
	$tc->add("City",$example[0]);
	$tc->add("Country",$example[1]);
	$tc->add("Continent",$example[2]);
}
		
#output the table
echo $tc->output();

?>