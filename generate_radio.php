<?php
function generateRadio()
{
    for ($val = 1; $val <= 5; $val++) {
        echo
        "<label>
            <input class=\"radio\" type=\"radio\" name=\"r\" value=\"$val\">
            <span class=\"radio-custom\"></span>
            <span class=\"label\">$val</span>
        </label>";
    }
}