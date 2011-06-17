<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('services/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('services/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'services/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['name']->renderLabel() ?></th>
        <td>
          <?php echo $form['name']->renderError() ?>
          <?php echo $form['name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['category']->renderLabel() ?></th>
        <td>
          <?php echo $form['category']->renderError() ?>
          <?php echo $form['category'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['monthly']->renderLabel() ?></th>
        <td>
          <?php echo $form['monthly']->renderError() ?>
          <?php echo $form['monthly'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['quarterly']->renderLabel() ?></th>
        <td>
          <?php echo $form['quarterly']->renderError() ?>
          <?php echo $form['quarterly'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['semi_annually']->renderLabel() ?></th>
        <td>
          <?php echo $form['semi_annually']->renderError() ?>
          <?php echo $form['semi_annually'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['annually']->renderLabel() ?></th>
        <td>
          <?php echo $form['annually']->renderError() ?>
          <?php echo $form['annually'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['whm_url']->renderLabel() ?></th>
        <td>
          <?php echo $form['whm_url']->renderError() ?>
          <?php echo $form['whm_url'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['is_home']->renderLabel() ?></th>
        <td>
          <?php echo $form['is_home']->renderError() ?>
          <?php echo $form['is_home'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['is_service']->renderLabel() ?></th>
        <td>
          <?php echo $form['is_service']->renderError() ?>
          <?php echo $form['is_service'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
