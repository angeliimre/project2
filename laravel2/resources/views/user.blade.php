<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #also{
            width: 35px;
        }
        #felso{
            width: 35px;
        }
        #name{
            width: 50px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        @csrf
        <label for="also">Alsó</label>
        <input type="number" id="also" value='{{$posted->also}}' name="also"/>
        <label for="felso">Felső</label>
        <input type="number" id="felso" value='{{$posted->felso}}' name="felso"/><br/>
        <label for="name">Tartalmaz:</label>
        <input type="text" id="name"  value='{{$posted->name}}' name="name"/><br/>
        <button>Keres</button>
    </form>
    <br/>
    <table>
    @foreach($users as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>