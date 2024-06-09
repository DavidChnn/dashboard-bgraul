<!DOCTYPE html>
<html>

<head>
    <title>Export Outstanding CIP</title>
</head>

<body>
    <table>
        <thead class="text-center">
            <tr class="border-2">
                <th class="border-2">Class</th>
                <th class="border-2">Inventory Number</th>
                <th class="border-2">Description</th>
                <th class="border-2">Cap Date </th>
                <th class="border-2">Capex Number </th>
                <th class="border-2">Dept</th>
                <th class="border-2">Amount</th>
                <th class="border-2">Qty</th>
                <th class="border-2">UoM</th>
                <th class="border-2">Status</th>
                <th class="border-2">CIP Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td class="border-2">{{$item->assetClass}}</td>
                <td class="border-2">{{$item->inventoryNumber ? $item->inventoryNumber : 'Insert Inventory Number'}}</td>
                <td class="border-2">{{$item->assetDescription}}</td>
                <td class="border-2">{{$item->acquisitionCIP}}</td>
                <td class="border-2">{{$item->budgetNumber}}</td>
                <td class="border-2">{{$item->department}}</td>
                <td class="border-2">{{$item->acquisitionValue}}</td>
                <td class="border-2">{{$item->quantity}}</td>
                <td class="border-2">{{$item->uom}}</td>
                <td class="border-2">{{$item->statusConfirmation ? 'confirm' : 'no confirm'}}</td>
                <td class="border-2">{{$item->cipNumber ? $item->cipNumber : 'Insert CIP Number'}}</td>
                <td class="border-2">
                    <input type="checkbox" name="ids[]" value="{{$item->id}}">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>