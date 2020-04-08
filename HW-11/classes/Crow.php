<?php


class Crow extends Animal implements BirdKind
{
    use CanCollectGold, CanFly;

    public function sing()
    {
        // TODO: Implement sing() method.
    }
}