<?php

/**
 * Zookeeper class.
 */
class Zookeeper
{

    /* class constants */
    const PERM_READ = 1;
    const PERM_WRITE = 2;
    const PERM_CREATE = 4;
    const PERM_DELETE = 8;
    const PERM_ADMIN = 16;
    const PERM_ALL = 31;

    const EPHEMERAL = 1;
    const SEQUENCE = 2;

    const EXPIRED_SESSION_STATE = -112;
    const AUTH_FAILED_STATE = -113;
    const CONNECTING_STATE = 1;
    const ASSOCIATING_STATE = 2;
    const CONNECTED_STATE = 3;
    const NOTCONNECTED_STATE = 999;

    const CREATED_EVENT = 1;
    const DELETED_EVENT = 2;
    const CHANGED_EVENT = 3;
    const CHILD_EVENT = 4;
    const SESSION_EVENT = -1;
    const NOTWATCHING_EVENT = -2;

    const LOG_LEVEL_ERROR = 1;
    const LOG_LEVEL_WARN = 2;
    const LOG_LEVEL_INFO = 3;
    const LOG_LEVEL_DEBUG = 4;

    const SYSTEMERROR = -1;
    const RUNTIMEINCONSISTENCY = -2;
    const DATAINCONSISTENCY = -3;
    const CONNECTIONLOSS = -4;
    const MARSHALLINGERROR = -5;
    const UNIMPLEMENTED = -6;
    const OPERATIONTIMEOUT = -7;
    const BADARGUMENTS = -8;
    const INVALIDSTATE = -9;

    const OK = 0;
    const APIERROR = -100;
    const NONODE = -101;
    const NOAUTH = -102;
    const BADVERSION = -103;
    const NOCHILDRENFOREPHEMERALS = -108;
    const NODEEXISTS = -110;
    const NOTEMPTY = -111;
    const SESSIONEXPIRED = -112;
    const INVALIDCALLBACK = -113;
    const INVALIDACL = -114;
    const AUTHFAILED = -115;
    const CLOSING = -116;
    const NOTHING = -117;
    const SESSIONMOVED = -118;

    /**
     * 构造函数
     * @param string $host
     * @param callable $watcher_cb
     * @param int $recv_timeout
     */
    public function __construct($host = '', $watcher_cb = null, $recv_timeout = 10000)
    {
    }

    /**
     * @param $host
     * @param $watcher_cb
     * @param int $recv_timeout
     */
    public function connect($host, $watcher_cb = null, $recv_timeout = 10000)
    {
    }

    /**
     * @param $path
     * @param $value
     * @param $acl
     * @param $flags
     */
    public function create($path, $value, $acl, $flags = null)
    {
    }

    /**
     * @param $path
     * @param int $version
     */
    public function delete($path, $version = -1)
    {
    }

    /**
     * @param $path
     * @param $data
     * @param int $version
     * @param $stat
     */
    public function set($path, $data, $version = -1, &$stat = null)
    {
    }

    /**
     * @param $path
     * @param $watcher_cb
     * @param $stat
     * @param int $max_size
     */
    public function get($path, $watcher_cb = null, &$stat = null, $max_size = 0)
    {
    }

    /**
     * @param $path
     * @param $watcher_cb
     */
    public function getChildren($path, $watcher_cb = null)
    {
    }

    /**
     * @param $path
     * @param $watcher_cb
     */
    public function exists($path, $watcher_cb = null)
    {
    }

    /**
     * @param $path
     */
    public function getAcl($path)
    {
    }

    /**
     * @param $path
     * @param $version
     * @param $acls
     */
    public function setAcl($path, $version, $acls)
    {
    }

    /**
     *
     */
    public function getClientId()
    {
    }

    /**
     * @param $watcher_cb
     */
    public function setWatcher($watcher_cb)
    {
    }

    /**
     *
     */
    public function getState()
    {
    }

    /**
     *
     */
    public function getRecvTimeout()
    {
    }

    /**
     * @param $scheme
     * @param $cert
     * @param $completion_cb
     */
    public function addAuth($scheme, $cert, $completion_cb = null)
    {
    }

    /**
     *
     */
    public function isRecoverable()
    {
    }

    /**
     * @param $file
     */
    public function setLogStream($file)
    {
    }

    /**
     * @param $level
     */
    static public function setDebugLevel($level)
    {
    }

    /**
     * @param $trueOrFalse
     */
    static public function setDeterministicConnOrder($trueOrFalse)
    {
    }

}

