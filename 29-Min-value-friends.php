<?php
// =========== Task 29. Search for the minimum number of friends ==============
use Funct\Collection;

function getManWithLeastFriends(array $users)
{
    if (empty($users)) {
        return null;
    }
    return Collection\minValue($users, function ($user) {
        return count($user['friends']);
    });
}
