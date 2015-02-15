<form action="<?php echo home_url( '/' ); ?>" method="get" class="navbar-search">
<fieldset><input id="search" type="text" name="s" class="form-control" placeholder="Buscador:" style="margin:0;" value="<?php the_search_query(); ?>" />
 <button class="btn" type="submit" style="display:none;">
 <i class="icon-search"> </i>
 </button></fieldset>
</form>