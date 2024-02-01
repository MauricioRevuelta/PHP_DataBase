<?php

$username = 'root';
$password = '';
$db = 'mrpatacon';

// Create Connection
$db = new mysqli('localhost', $username, $password, $db) or die ("connection failed:");
echo "connected successfully"."<br>";

/*
// Creating table 1
$t1 = "create table customer(cust_id int(10) primary key auto_increment, first_name char(20), last_name char(20), email char(50) not null unique, province char(40) not null, birth_date date not null, city char(40))";
if($db->query($t1)==True){
    echo "Table Created";
} else {
    echo "Error in the syntax";
}


// Creating table 2
$t2 = "create table invoices(inv_id int(10) primary key auto_increment, inv_date date not null, inv_notes text, inv_discount numeric(5, 2), inv_total numeric (10, 2) not null)";
if($db->query($t2)==True){
    echo "Table two Created";
} else {
    echo "Error in the syntax";
}

// Deleting inv_discount column from invoices table
$delDiscount = "alter table invoices drop inv_discount";
if($db->query($delDiscount)==True){
    echo "Column deleted";
} else {
    echo "Error in the syntax";
}

// Adding 
$addPhone = "alter table customer add phone int(20)";
if($db->query($addPhone)==True){
    echo "Column added successfully";
} else {
    echo "Error in the syntax";
}


// Adding data to the customer table
$addCustomer="insert into customer(first_name, last_name, email, province, birth_date, city, phone) value ('Joseph', 'Smith', 'jsmith@gmail.com', 'Ontario', '1990/01/30', 'Toronto', 4376629855)";
if($db->query($addCustomer)==TRUE){
    echo "Records inserted successfully";
} else {
    echo "Error in the syntax";
}


// Adding more data to the customer table
$addCustomer2="insert into customer(first_name, last_name, email, province, birth_date, city, phone) value ('Nick', 'Allison', 'nallison@gmail.com', 'Ontario', '1990/01/31', 'Toronto', 4376629014)";
if($db->query($addCustomer2)==TRUE){
    echo "Record inserted successfully";
} else {
    echo "Error in the syntax";
}

//Adding first data row to the invoices table:
$addInvoice1 = "insert into invoices(inv_date, inv_notes, inv_total) value ('2024-01-18', 'Order sent to delivery', 124.50)";
if($db->query($addInvoice1)==TRUE){
    echo "Record inserted successfully";
} else {
    echo "Error in the syntax";
}


//Adding second data row to the invoices table:
$addInvoice2 = "insert into invoices(inv_date, inv_notes, inv_total) value ('2024-01-28', 'Order sent to delivery', 15.70)";
if($db->query($addInvoice2)==TRUE){
    echo "Record inserted successfully";
} else {
    echo "Error in the syntax";
}
*/

//Display contents on the table
$selectquery = "SELECT * FROM customer";
$result = $db->query($selectquery);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr> <th>Customer ID</th> <th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Province</th> <th>Date of Birth</th> <th>City</th> <th>Phone</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['cust_id'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['province'] . "</td>";
        echo "<td>" . $row['birth_date'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "</tr>";
    }

    echo "</table>"."<br>";

} else {
    echo "No rows in this table.";
}

$selectquery2 = "SELECT * FROM invoices";
$result = $db->query($selectquery2);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Invoice ID</th> <th>Invoice date</th> <th>Invoice notes</th> <th>Invoice total</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['inv_id'] . "</td>";
        echo "<td>" . $row['inv_date'] . "</td>";
        echo "<td>" . $row['inv_notes'] . "</td>";
        echo "<td>" . "$". $row['inv_total'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No rows in this table.";
}
?>