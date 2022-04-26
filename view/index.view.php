<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Prekes</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <section>
        <h1>Mokinių pažymių vidurkis</h1>
        <div class="table-main">
            <table class="table">
                <thead>
                    <tr id="header">
                        <th>Klasė</th>
                        <th>Kodas</th>
                        <th>Vardas</th>
                        <th>Pavardė</th>
                        <th>Kontrolinių darbų vidurkis</th>
                        <th>Duomenų formavimo data</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($students as $id=>$student):?>
                <?php $value = array_values($student);?>
                <tr>
                    <td><?=$value[0];?></td>
                    <td><?=rand(1,500);?></td>
                    <td><?=strtoupper($value[1]);?></td>
                    <td><?=strtoupper($value[2]);?></td>
                    <td><?=($value[3] + $value[4] + $value[5])/3;?></td>
                    <td><?=date("Y/m/d");?></td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </section>
    </body>
</html>