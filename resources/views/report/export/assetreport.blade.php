<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Asset Report</title>
</head>

<body class="bg-[#F5FAFF]">
    <table class="table-auto text-sm w-full">
        <thead class="text-center">
            <tr class="border-2">
                <th class="border-2">Asset Class</th>
                <th class="border-2">Inventory Number</th>
                <th class="border-2">CIP Number</th>
                <th class="border-2">Asset Number</th>
                <th class="border-2">Asset Description</th>
                <th class="border-2">Departement</th>
                <th class="border-2">Capitalized Date</th>
                <th class="border-2">Useful Life</th>
                <th class="border-2">Amount</th>
            </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($data as $item)
            <tr>
                <td class="border-2">{{$item->assetClass}}</td>
                <td class="border-2">{{$item->inventoryNumber}}</td>
                <td class="border-2">{{$item->cipNumber}}</td>
                <td class="border-2">{{$item->assetCodeAccounting}}</td>
                <td class="border-2">{{$item->assetDescription}}</td>
                <td class="border-2">{{$item->department}}</td>
                <td class="border-2">{{$item->acquisitionCIP}}</td>
                <td class="border-2">{{$item->assetCondition}}</td>
                <td class="border-2">{{$item->quantity}}</td>
                <!-- aku gatau isi yang assetNumber, Capitalized Date, Amount -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>