<?php
function generateCheckbox()
{
    for ($val = -2.0; $val <= 2.0; $val += 0.5) {
        echo
        "<label>
        <input class=\"checkbox\" type=\"checkbox\" name=\"x\" value=\"$val\">
        <span class=\"checkbox-custom\"></span>
        <span class=\"label\">$val</span>
        </label>";
    }
}
