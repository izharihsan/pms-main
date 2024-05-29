<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table datatable-fixed-left">
        <thead>
            <tr>
                <th>Room</th>
                <th>Rate Plan</th>
                @foreach ($datesInCurrentMonth as $date)
                    <th style="align-items: center;">{{ $date->format('d D') }}</th>
                @endforeach
            </tr>
        </thead>
        @foreach ($rooms as $item)
            @php 
                $rate_plan = App\Models\RatePlan::where('connected_rooms', 'LIKE', '%'. $item->room_name .'%')->get();
            @endphp
            <tbody>
                <tr>
                    <td rowspan="{{ $rate_plan->count() + 1 }}">{{ $item->room_name }}</td>
                    <td></td>
                    @foreach ($datesInCurrentMonth as $date)
                        <td></td>
                    @endforeach
                </tr>

                @foreach ($rate_plan as $item_rate)
                    <tr>
                        <td>{{ $item_rate->name }}</td>
                        @foreach ($datesInCurrentMonth as $date)
                            <td></td>
                        @endforeach
                    </tr>
                @endforeach
             
            </tbody>
        @endforeach
    
    </table>
</body>
</html>