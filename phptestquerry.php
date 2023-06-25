<?php
// ...

$query = "SELECT * FROM public.warga_dampingan"; // replace with the name of an actual table
$result = pg_query($conn, $query);

if (!$result) {
    echo "Query failed.";
    exit;
}

while ($row = pg_fetch_assoc($result)) {
    // Process each row of data
    // You can access individual fields using $row['column_name']
}

// ...

pg_close($conn);
?>
