<?php include '../views/partials/header.php'?>

<h1>Add Line in Database</h1>
    <form action="#" method="post">
        <div>
            <h2>Name</h1>
            <textarea required name="input1" cols="50" rows="2" placeholder="name"></textarea>
        </div>
        <div>
            <h2>Amount</h2>
            <textarea required name="input2" cols="50" rows="2" placeholder="amount"></textarea>
        </div>
        <div>
            <input required name="date" type="datetime-local">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>

    <h1>Payment history</h1>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>amount</th>
            <th>Date</th>

        </tr>

        <?php foreach($returnedData as $_returnedData): ?>
            <tr>
                <td><?= $_returnedData->id ?></td>
                <td><?= $_returnedData->name ?></td>
                <td><?= $_returnedData->amount ?>€</td>
                <td><?= date('d/m/Y H:i', $_returnedData->date)?></td>
                <td>
                    <a href="?deleteId=<?= $_returnedData->id ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


<?php include '../views/partials/footer.php' ?>