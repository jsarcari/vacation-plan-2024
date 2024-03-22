<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vacation Plan</title>
    <style>
        h4 {
            margin: 0;
        }
        .w-full {
            width: 100%;
        }
        .w-half {
            width: 50%;
        }
        .margin-top {
            margin-top: 1.25rem;
        }
        .footer {
            font-size: 0.875rem;
            padding: 1rem;
            background-color: rgb(241 245 249);
        }
        table {
            width: 100%;
            border-spacing: 0;
            text-align: center;
        }
        table.vacations {
            font-size: 0.875rem;
        }
        table.vacations tr {
            background-color: rgb(96 165 250);
        }
        table.vacations th {
            color: #ffffff;
            padding: 0.5rem;
        }
        table tr.items {
            background-color: rgb(241 245 249);
        }
        table tr.items td {
            padding: 0.5rem;
        }
    </style>
</head>
<body>
    <table class="w-full">
        <tr>
            <td class="w-half">
                <h1>Holiday Plan 2024</h1>
            </td>
            <td class="w-half">
                <h2>{{ $data['title'] }}</h2>
            </td>
        </tr>
    </table>
    <div class="margin-top">
        <table class="vacations">
            <tr>
                <th>Description</th>
                <th>Date</th>
                <th>Location</th>
                <th>Participants</th>
            </tr>
            <tr class="items">
                <td>
                    {{ $data['description'] }}
                </td>
                <td>
                    {{ $data['date'] }}
                </td>
                <td>
                    {{ $data['location'] }}
                </td>
                <td>
                    {{ $data['participants'] }}
                </td>
            </tr>
        </table>
    </div>

</body>
</html>