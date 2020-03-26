<form action="/" method="get">

    <label for="search"></label>

    <input type="hidden" name="cat" id="search" value="">
    <input type="test" name="s" id="search" value="<?php the_search_query();?>"  placeholder="Search..." required>
    <button type="submit" class="btn btn-dark">Search!</button>

</form>