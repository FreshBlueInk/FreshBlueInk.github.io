<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /></td>
    <td><input type="submit" id="searchsubmit" value=" " /></td>
  </tr>
</table>
</form>

