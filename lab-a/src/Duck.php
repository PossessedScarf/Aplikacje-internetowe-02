<?php
namespace Dzawadzki\LabComposer;

use Psr\Log\LoggerInterface;

class Duck
{
    /** @var LoggerInterface */
    private $logger;

    public function __construct(LoggerInterface $logger=null)
    {
        $this->logger = $logger;
        if ($this->logger) {
            $this->logger->info("Duck ON.");
        }
    }
    public function quack()
    {
        if ($this->logger) {
            $this->logger->debug("Quack() activated.");
        }
        echo "Quack\n";
    }
}