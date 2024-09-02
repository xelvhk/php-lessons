<?php
// =========== Task 30. Sorting users by girls count in friendslists ==============
function getGirlFriends(array $users)
{
    $allFriendsLists = array_map(fn($user) => $user['friends'], $users);
    $friends = flatten($allFriendsLists);
    $girlFriends = array_filter($friends, fn($user) => $user['gender'] === 'female');

    return array_values($girlFriends);
}
