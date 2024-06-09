<!DOCTYPE html>
<html>

<head>
    <title>Export ListAsset</title>
</head>

<body>
    <table>
        <thead class="text-center">
            <tr class="border-2">
                <th class="border-2">Machine Number</th>
                <th class="border-2">SAP Number</th>
                <th class="border-2">Sub Asset</th>
                <th class="border-2">Asset Group</th>
                <th class="border-2">Asset Description</th>
                <th class="border-2">Department</th>
                <th class="border-2">Cost Center</th>
                <th class="border-2">Qty</th>
                <th class="border-2">UoM</th>
                <th class="border-2">Product</th>
                <th class="border-2">Status</th>
                <th class="border-2">Book Value</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td class="border-2">{{$item->assetCodeEnginery}}</td>
                <td class="border-2">{{$item->assetCodeAccounting}}</td>
                <td class="border-2">{{$item->subAsset}}</td>
                <td class="border-2">{{$item->assetGroup}}</td>
                <td class="border-2">{{$item->assetDescription}}</td>
                <td class="border-2">{{$item->department}}</td>
                <td class="border-2">{{$item->costCenter}}</td>
                <td class="border-2">{{$item->quantity}}</td>
                <td class="border-2">{{$item->uom}}</td>
                <td class="border-2">{{$item->product}}</td>
                <td class="border-2">{{$item->assetStatus}}</td>
                <td class="border-2">{{$item->currentBookValue}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>