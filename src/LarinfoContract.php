<?php 

namespace Matriphe\Larinfo;

interface LarinfoContract
{
    public function setDatabaseConfig($connection = []);

    /**
     * Set token for Ipinfo if exists.
     *
     * @access public
     * @param string $token (default: null)
     * @param bool   $debug (default: false)
     */

    /**
     * Get server software info.
     *
     * @access public
     * @return array
     */
    public function getServerInfoSoftware();

    /**
     * Get server hardware info.
     *
     * @access public
     * @return array
     */
    public function getServerInfoHardware();

    /**
     * Get server uptime.
     *
     * @access public
     * @return array
     */
    public function getUptime();

    /**
     * Get server info.
     *
     * @access public
     * @return array
     */
    public function getServerInfo();

    public function getDatabaseInfo();

    /**
     * Get all info.
     *
     * @access public
     * @return array
     */
    public function getInfo();
}
