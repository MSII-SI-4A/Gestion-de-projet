<table style="width:100%">
    <tr>
        <th>Désignation</th>
        <th>Prix HT</th>
        <th>Qte</th>
        <th>Total</th>
    </tr>
    <?php foreach($result as $key => $row): ?>
    <tr>
        <td><?= $row->product->name ?></td>
        <td><?= $row->product->value ?> €</td>
        <td><?= $row->nb ?></td>
        <td><?= $row->nb*$row->product->value ?> €</td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <th colspan="3">Total</th>
        <td><?= $totalHT ?> €</td>
    </tr>
    <tr>
        <th colspan="3">Remise</th>
        <td><?= $discount['discount'] ?>%</td>
    </tr>
    <tr>
        <th colspan="3">Total avec remise</th>
        <td><?= $discount['totalHT'] ?> €</td>
    </tr>
</table>
