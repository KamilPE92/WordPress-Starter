<form action="<?php echo home_url("/"); ?>" method="get" role="search" class="search-form">
    <input value="<?php echo get_search_query(); ?>" name="s" placeholder="Wpisz szukaną frazę" type="search"
        class="search-input">
    <button type="submit" title="Wyszukaj Enter" class="search-btn">
        <i class="fa-solid fa-search"></i>
    </button>
</form>