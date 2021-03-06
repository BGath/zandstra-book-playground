<?php
/**
 * Created by PhpStorm.
 * User: newexe
 * Date: 01.07.18
 * Time: 16:10
 */

namespace strategy\lessons_cost_strategy;

use strategy\lessons_cost_strategy\lesson_types\Lecture;
use strategy\lessons_cost_strategy\lesson_types\Lesson;
use strategy\lessons_cost_strategy\lesson_types\Seminar;
use strategy\lessons_cost_strategy\strategies\TimedCostStrategy;
use strategy\lessons_cost_strategy\strategies\FixedCostStrategy;

/** @var Lesson[] $lessons */
$lessons = [];

$lessons[] = new Lecture(2, new FixedCostStrategy());
$lessons[] = new Seminar(3, new TimedCostStrategy());

foreach ($lessons as $lesson) {
    echo 'Lesson type: ' . $lesson->getType() . '<br />';
    echo 'Lesson duration: ' . $lesson->getDuration() . '<br />';
    echo 'Lesson cost: ' . $lesson->cost() . '<br />';
    echo 'Pay type: ' . $lesson->chargeType() . '<br /><br />';
}