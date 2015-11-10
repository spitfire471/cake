<!-- File: /app/views/categories/index.ctp -->
<html>
<body>
<h1>Категории</h1>

<table>

    <tr>

        <th>Id</th>

        <th>Название</th>

    </tr>

 

    <?php foreach ($categories as $category): ?>

    <tr>

        <td><?php echo $category['Category']['id']; ?></td>

        <td>

            <?php echo $html->link($category['Category']['name'],

array('controller' => 'categories', 'action' => 'view', $category['Category']['id'])); ?>

        </td>

    </tr>

    <?php endforeach; ?>

 

</table>
<body>
</html>