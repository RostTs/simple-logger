<?php

namespace Simple\Logger\Handlers;

interface HandlerInterface
{
    public function handle(array $logs): void;
}