<h1>Services List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Category</th>
      <th>Monthly</th>
      <th>Quarterly</th>
      <th>Semi annually</th>
      <th>Annually</th>
      <th>Whm url</th>
      <th>Is home</th>
      <th>Is service</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($services as $service): ?>
    <tr>
      <td><a href="<?php echo url_for('services/edit?id='.$service->getId()) ?>"><?php echo $service->getId() ?></a></td>
      <td><?php echo $service->getName() ?></td>
      <td><?php echo $service->getCategory() ?></td>
      <td><?php echo $service->getMonthly() ?></td>
      <td><?php echo $service->getQuarterly() ?></td>
      <td><?php echo $service->getSemiAnnually() ?></td>
      <td><?php echo $service->getAnnually() ?></td>
      <td><?php echo $service->getWhmUrl() ?></td>
      <td><?php echo $service->getIsHome() ?></td>
      <td><?php echo $service->getIsService() ?></td>
      <td><?php echo $service->getCreatedAt() ?></td>
      <td><?php echo $service->getUpdatedAt() ?></td>
      <td><?php echo $service->getSlug() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('services/new') ?>">New</a>
