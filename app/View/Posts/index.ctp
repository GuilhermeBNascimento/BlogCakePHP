<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts blog</title>
</head>
<body>
<h1>Posts do Blog</h1>
<?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add'));?>
<table>
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Data de Criação</th>
    </tr>


    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($post['Post']['title'],
                    array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
            </td>
            <td>
                <?php echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?'));
                ?>
                 <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
            </td>
            <td><?php echo $post['Post']['created']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>
</body>
</html>