<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($service->getId(), 'service_edit', $service) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $service->getName() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_category">
  <?php echo $service->getCategory() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_feature_name">
  <?php echo $service->getFeatureName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_feature_value">
  <?php echo $service->getFeatureValue() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_monthly">
  <?php echo $service->getMonthly() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_quarterly">
  <?php echo $service->getQuarterly() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_semi_annually">
  <?php echo $service->getSemiAnnually() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_whm_url">
  <?php echo $service->getWhmUrl() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($service->getCreatedAt()) ? format_date($service->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($service->getUpdatedAt()) ? format_date($service->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $service->getSlug() ?>
</td>
