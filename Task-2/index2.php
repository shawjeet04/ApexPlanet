<?php
require_once __DIR__ . '/lib/perpage.php';
require_once __DIR__ . '/lib/DataSource.php';
ini_set("display_errors", 1);
$database = new DataSource();

$name = "";
$code = "";

$queryCondition = "";
$paramType = "";
$paramValue = [];

if (!empty($_POST["search"])) {
    foreach ($_POST["search"] as $k => $v) {
        if (!empty($v)) {
            $queryCases = ["name", "code"];
            if (in_array($k, $queryCases)) {
                $queryCondition .= empty($queryCondition) ? " WHERE " : " AND ";
            }
            switch ($k) {
                case "name":
                    $name = $v;
                    $queryCondition .= "name LIKE ? ";
                    $paramType .= "s"; // 's' for string
                    $paramValue[] = $v . "%"; // Partial match
                    break;
                case "code":
                    $code = $v;
                    $queryCondition .= "code LIKE ? ";
                    $paramType .= "s";
                    $paramValue[] = $v . "%"; // Partial match
                    break;
            }
        }
    }
}

$orderby = " ORDER BY id DESC";
$sql = "SELECT * FROM users" . $queryCondition . $orderby;
$href = 'index.php';

$perPage = 3;
$page = 1;
if (isset($_POST['page'])) {
    $page = $_POST['page'];
}
$start = ($page - 1) * $perPage;
if ($start < 0)
    $start = 0;

$query = $sql . " limit " . $start . "," . $perPage;
$result = $database->select($query, $paramType, $paramValue);


if (! empty($result)) {
    $result["perpage"] = showperpage($sql, $perPage, $href, $paramType, $paramValue);
}
?>
<html>

<head>
    <title>Search and Pagination</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <link rel="stylesheet" type="text/css" href="css/form.css" />
    <style>
        button,
        input[type=submit].btnSearch {
            width: 140px;
            font-size: 14px;
            margin: 10px 0px 0px 10px;
        }

        .btnReset {
            width: 140px;
            padding: 8px 0px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 25px;
            color: #000000;
            border: 2px solid #d2d6dd;
            margin-top: 10px;
        }

        button,
        input[type=submit].perpage-link {
            width: auto;
            font-size: 14px;
            padding: 5px 10px;
            border: 2px solid #d2d6dd;
            border-radius: 4px;
            margin: 0px 5px;
            background-color: #fff;
            cursor: pointer;
        }

        .current-page {
            width: auto;
            font-size: 14px;
            padding: 5px 10px;
            border: 2px solid #d2d6dd;
            border-radius: 4px;
            margin: 0px 5px;
            background-color: #efefef;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="phppot-container">
        <h1>Search and Pagination</h1>

        <div>
            <form name="frmSearch" method="post" action="">
                <div>
                    <p>
                        <input type="text" placeholder="Name"
                            name="search[name]"
                            value="<?php echo $name; ?>" /> <input
                            type="submit" name="go" class="btnSearch"
                            value="Search"> <input type="reset"
                            class="btnReset" value="Reset"
                            onclick="window.location='index.php'">
                    </p>
                </div>
                <div>
                    <a class="font-bold float-right" href="add.php">Add
                        New</a>
                </div>
                <table class="stripped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (! empty($result)) {
                            foreach ($result as $key => $value) {
                                if (is_numeric($key)) {
                        ?>
                                    <tr>
                                        <td><?php echo $result[$key]['name']; ?></td>
                                        <td><?php echo $result[$key]['email']; ?></td>
                                        <td><?php echo $result[$key]['city']; ?></td>
                                        <td><a class="mr-20"
                                                href="edit.php?id=<?php echo $result[$key]["id"]; ?>">Edit</a>
                                            <a
                                                href="delete.php?action=delete&id=<?php echo $result[$key]["id"]; ?>">Delete</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                        }
                        if (isset($result["perpage"])) {
                            ?>
                            <tr>
                                <td colspan="6" align=right> <?php echo $result["perpage"]; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>

</html>
