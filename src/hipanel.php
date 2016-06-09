<?php

/**
 * Roundcube Password Driver for HiPanel hosting control panel.
 *
 * This driver changes an E-Mail via HiPanel API
 *
 * @author     Dmitry Naumenko <d.naumenko.a@gmail.com>
 * @copyright  Copyright © 2016, HiQDev (http://hiqdev.com/)
 *
 * Config needed:
 * $config['password_hipanel_host'] = 'https://api.ahnames.com';
 *
 * Copyright © 2016, HiQDev (http://hiqdev.com/)
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *  * Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *  * Redistributions in binary form must reproduce the above copyright
 * notice, this list of conditions and the following disclaimer in
 * the documentation and/or other materials provided with the
 * distribution.
 *  * Neither the name of HiQDev nor the names of its
 * contributors may be used to endorse or promote products derived
 * from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

/**
 * Roundcube Password Driver Class
 *
 * See {ROUNDCUBE_ROOT}/plugins/password/README for API description
 *
 * @author Dmitry Naumenko <d.naumenko.a@gmail.com>
 */
class rcube_hipanel_password
{
    /**
     * This method is called from roundcube to change the password
     *
     * @param string $old_password Current password
     * @param string $new_password New password
     * @return int PASSWORD_SUCCESS|PASSWORD_ERROR
     * @author Dmitry Naumenko <d.naumenko.a@gmail.com>
     */
    function save($old_password, $new_password)
    {
        // get config
        $rcmail = rcmail::get_instance();
        $host = $rcmail->config->get('password_hipanel_host');

        $hipanel = new HiPanelAPI($host);
        $result = $hipanel->changePassword($_SESSION['username'], $old_password, $new_password);

        if ($result) {
            return PASSWORD_SUCCESS;
        }

        return PASSWORD_ERROR;
    }
}


/**
 * HiPanel API interaction class
 *
 * @author Dmitry Naumenko <d.naumenko.a@gmail.com>
 */
class HiPanelAPI
{
    /**
     * @var string
     */
    protected $host;

    /**
     * @param string $host API host
     */
    public function __construct($host)
    {
        $this->host = rtrim($host, '/');
    }

    /**
     * Sends POST request to API
     *
     * @param string $command command name
     * @param array|string $data POST data that will be sent
     * @return array
     */
    protected function requestPost($command, $data)
    {
        $url = $this->host . '/' . $command;
        $data = is_array($data) ? http_build_query($data) : $data;

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_USERAGENT => 'roundcube-driver/0.x',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data,
        ]);

        return json_decode(curl_exec($ch), true);
    }

    /**
     * Change Password of a mailbox
     *
     * @param string $mail fully-qualified email address
     * @param string $old_password old password of mailbox
     * @param string $new_password old password of mailbox
     * @return boolean whether password has been changed successfully
     */
    public function changePassword($mail, $old_password, $new_password)
    {
        $result = $this->requestPost('mailChangePassword', [
            'mail' => $mail,
            'old_password' => $old_password,
            'new_password' => $new_password
        ]);

        return !isset($result['_error']);
    }
}
