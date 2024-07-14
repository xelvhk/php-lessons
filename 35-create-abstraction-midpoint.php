<?php

function makeSegment($point1, $point2)
{
    return ['beginPoint' => $point1, 'endPoint' => $point2]; 
}

function getBeginPoint($segment)
{
    return $segment['beginPoint']; 
}

function getEndPoint($segment)
{
    return $segment['endPoint'];
}

function getMidpointOfSegment($segment)
{
    $beginPoint = getBeginPoint($segment);
    $endPoint = getEndPoint($segment);

    $midpointX = ($beginPoint['x'] + $endPoint['x']) / 2;
    $midpointY = ($beginPoint['y'] + $endPoint['y']) / 2;

    return makeDecartPoint($midpointX, $midpointY);
}
