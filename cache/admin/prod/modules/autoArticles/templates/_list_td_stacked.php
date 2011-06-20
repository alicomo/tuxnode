<td colspan="6">
  <?php echo __('%%id%% - %%title%% - %%body%% - %%created_at%% - %%updated_at%% - %%slug%%', array('%%id%%' => link_to($article->getId(), 'article_edit', $article), '%%title%%' => $article->getTitle(), '%%body%%' => $article->getBody(), '%%created_at%%' => false !== strtotime($article->getCreatedAt()) ? format_date($article->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($article->getUpdatedAt()) ? format_date($article->getUpdatedAt(), "f") : '&nbsp;', '%%slug%%' => $article->getSlug()), 'messages') ?>
</td>
