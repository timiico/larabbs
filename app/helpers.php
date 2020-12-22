<?php
function root_class()
{
    return str_replace('.','-',Route::currentRouteName());
}

function category_nav_active($category_id)
{
    return active_class((if_route('category.show') && if_route_param('category',$category_id)));
}
