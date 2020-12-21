<?php
function root_class()
{
    return str_replace('.','-',Route::currentRouteName());
}
