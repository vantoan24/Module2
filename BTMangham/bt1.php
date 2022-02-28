<?php
$customerList = [
    "1" => [
        "name" => "Marc-Andre ter Stegen",
        "day_of_birth" => "30-4-1992",
        "address" => "Germany",
        "profile" => "https://static.bongda24h.vn/medias/original/2021/9/23/1_ter-stegen.jpg"
    ],
    "2" => [
        "name" => "Jordi Alba",
        "day_of_birth" => "21-3-1989",
        "address" => "Spain",
        "profile" => "https://static.bongda24h.vn/medias/original/2021/9/23/18_jordi-alba.jpg",
    ],
    "3" => [
        "name" => "RONALD ARAUJO",
        "day_of_birth" => "7-3-1999",
        "address" => "Uruguay",
        "profile" => "https://static.bongda24h.vn/medias/original/2021/9/23/4_ronald-araujo.jpg",
    ],
    "4" => [
        "name" => "GERARD PIQUE",
        "day_of_birth" => "2-2-1987",
        "address" => "Spain",
        "profile" => "https://static.bongda24h.vn/medias/original/2021/9/23/3_gerard-pique.jpg",
    ],
    "5" => [
        "name" => "	Sergino Dest",
        "day_of_birth" => "3-11-2000",
        "address" => "America",
        "profile" => "https://static.bongda24h.vn/medias/original/2021/9/23/2_sergino-dest.jpg",
    ],
    "6" => [
        "name" => "	Pedri",
        "day_of_birth" => "25-11-2002",
        "address" => "Spain",
        "profile" => "https://static.bongda24h.vn/medias/original/2021/9/23/16_pedri.jpg",
    ],
    "7" => [
        "name" => "	Frenkie de Jong",
        "day_of_birth" => "12-5-1997",
        "address" => "	Netherlands",
        "profile" => "https://static.bongda24h.vn/medias/original/2021/9/23/21_de-jong.jpg",
    ],
    "8" => [
        "name" => "	Sergio Busquets",
        "day_of_birth" => "16-7-1988",
        "address" => "Spain",
        "profile" => "https://static.bongda24h.vn/medias/original/2021/9/23/5_sergio-busquets.jpg",
    ],
    "9" => [
        "name" => "	Adama Traore",
        "day_of_birth" => "25-1-1996",
        "address" => "	Spain",
        "profile" => "https://static.bongda24h.vn/medias/original/2022/1/29/00.jpg",
    ],
    "10" => [
        "name" => "SERGIO AGUERO",
        "day_of_birth" => "2-6-1988",
        "address" => "	Argentina",
        "profile" => "https://static.bongda24h.vn/medias/original/2021/9/23/19_sergio-aguero.jpg",
    ],
    "11" => [
        "name" => "ANSU FATI",
        "day_of_birth" => "31-10-2002",
        "address" => "	Spain",
        "profile" => "https://static.bongda24h.vn/medias/original/2021/9/23/10_ansu-fati.jpg",
    ],
];
function searchByDate($customers, $fromDate, $toDate)
{
    if (empty($fromDate) || empty($toDate)) {
        return $customers;
    }

    $filteredCustomers = [];
    foreach ($customers as $customer) {
        if (strtotime($customer['day_of_birth']) < strtotime($fromDate))
            continue;
        if (strtotime($customer['day_of_birth']) > strtotime($toDate))
            continue;
        $filteredCustomers[] = $customer;
    }
    return $filteredCustomers;
}
$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if( isset($_GET["from"]) ){
        $fromDate = $_REQUEST["from"];
    }
    if(isset($_REQUEST["to"])){
        $toDate = $_REQUEST["to"];
    }
}
$filteredCustomers = searchByDate($customerList, $fromDate, $toDate);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form method="GET">
    Chọn ngày sinh từ: <input id="from" type="date" name="from" placeholder="yyyy/mm/dd"
               value=""/>
    đến: <input id="to" type="date" name="to" placeholder="yyyy/mm/dd"
                value=""/>
    <input type="submit" id="submit" value="Lọc"/>
</form>
    <table border="0">
        <caption>
            <h2>Danh sách khách hàng</h2>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php foreach ($filteredCustomers as $index => $customer) : ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo $customer['name']; ?></td>
                <td><?php echo $customer['day_of_birth']; ?></td>
                <td><?php echo $customer['address']; ?></td>
                <td>
                    <div class="profile"><img style="width: 140px;" src="<?php echo $customer['profile']; ?>" /></div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>