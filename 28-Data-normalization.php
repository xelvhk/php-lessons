<?php
// =========== Task 27. Data normalization ==============
function normalize(&$lesson) {
    $lesson['name'] = mb_convert_case($lesson['name'], MB_CASE_TITLE, "UTF-8");
    $lesson['description'] = mb_strtolower($lesson['description']);
}
