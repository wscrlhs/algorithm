<?php
$graph = [];
$graph["start"] = [];
$graph["start"]["a"] = 6;
$graph["start"]["b"] = 2;
$graph["a"] = [];
$graph["a"]["fin"] = 1;
$graph["b"] = [];
$graph["b"]["a"] = 3;
$graph["b"]["fin"] = 5;
$graph["fin"] = [];
# the costs table
$infinity = PHP_INT_MAX;
$costs = [];
$costs["a"] = 6;
$costs["b"] = 2;
$costs["fin"] = $infinity;
# the parents table
$parents = [];
$parents["a"] = "start";
$parents["b"] = "start";
$parents["fin"] = null;
$processed = [];

function findLowestCodeNode($costs){

