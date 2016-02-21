<?php

namespace Spatie\Backup\Events;

use Spatie\Backup\BackupDestination\BackupDestination;
use Exception;

class BackupHasFailed
{
    /** @var \Exception  */
    public $exception;

    /**  @var \Spatie\Backup\BackupDestination\BackupDestination|null */
    public $backupDestination;

    public function __construct(Exception $exception, BackupDestination $backupDestination = null)
    {
        $this->thrown = $exception;
        $this->backupDestination = $backupDestination;
    }
}
