<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($article->getId(), 'article_edit', $article) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $article->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_body">
  <?php echo $article->getBody() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($article->getCreatedAt()) ? format_date($article->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($article->getUpdatedAt()) ? format_date($article->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $article->getSlug() ?>
</td>
