<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Old value</th>
        <th>New value</th>
        <th>Char code</th>
    </tr>
    </thead>
    <tbody>
        <?php if ($model && is_iterable($model)) : ?>
            <?php foreach ($model as $currency) : ?>
                <tr>
                    <td><?=$currency['name']?></td>
                    <td>
                        <?php if ($currency['old_value'] <= $currency['new_value']) : ?>
                            <span style="color: #25af36;"><?= $currency['old_value'] ?></span>
                        <?php else: ?>
                            <span style="color: red;"><?= $currency['old_value'] ?></span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if ($currency['old_value'] <= $currency['new_value']) : ?>
                            <span style="color: #25af36;"><?= $currency['new_value'] ?></span>
                        <?php else: ?>
                            <span style="color: red;"><?= $currency['new_value'] ?></span>
                        <?php endif; ?>
                    </td>
                    <td><?=$currency['char_code']?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>