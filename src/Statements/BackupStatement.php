<?php
/**
 * `BACKUP` statement.
 */
declare(strict_types=1);

namespace PhpMyAdmin\SqlParser\Statements;

/**
 * `BACKUP` statement.
 *
 * BACKUP TABLE tbl_name array(, tbl_name] ... TO '/path/to/backup/directory'
 *
 * @category   Statements
 *
 * @license    https://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0+
 */
class BackupStatement extends MaintenanceStatement
{
    /**
     * Options of this statement.
     *
     * @var array
     */
    public static $OPTIONS = array(
        'TABLE' => 1,

        'NO_WRITE_TO_BINLOG' => 2,
        'LOCAL' => 3,

        'TO' => array(
            4,
            'var',
        )
    );
}
