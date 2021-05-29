
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<?php

echo "
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
        <th>Country</th>
        <th>CountryCode</th>
        <th>Slug</th>
        <th>NewConfirmed</th>
        <th>TotalConfirmed</th>
        <th>NewDeaths</th>
        <th>TotalDeaths</th>
        <th>NewRecovered</th>
        <th>TotalRecovered</th>
        <th>Date</th>
  </tr>
  ";

foreach ($countries as $country) {
    echo "<tr>" . "<td>" . $country['Summary']['country'] . "</td>"  ;
    echo          "<td>" . $country['Summary']['countrycode'] . "</td>" ;
    echo          "<td>" . $country['Summary']['slug'] . "</td>";
    echo          "<td>" . $country['Summary']['newconfirmed'] . "</td>";
    echo          "<td>" . $country['Summary']['totalconfirmed'] . "</td>";
    echo          "<td>" . $country['Summary']['newdeaths'] . "</td>";
    echo          "<td>" . $country['Summary']['totaldeaths'] . "</td>";
    echo          "<td>" . $country['Summary']['newrecovered'] . "</td>";
    echo          "<td>" . $country['Summary']['totalrecovered'] . "</td>";
    echo          "<td>" . $country['Summary']['date'] . "</td>" . "</tr>";
}




echo "</table>
";
